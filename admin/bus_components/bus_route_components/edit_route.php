<?php

// Edit

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $route_number = $_POST['route_number'];
    $category_status = $_POST['category_status'];

    $query = "UPDATE `bus_route` SET `route_number`='$route_number',`category_status`='$category_status' WHERE `id` ='$id'";

    $query_run = mysqli_query($connection, $query);


    if($query_run){

        $_SESSION['message'] = "Updated Successfully";
        header('Location: bus_route.php?source=manage_route');

    }
    else{
        $_SESSION['message'] = "Not Updated";
        header('Location: bus_route.php?source=manage_route');

    }

}



?>

<div class="container addBox">


    <?php
    // Edit Button Actions
    if(isset($_POST['edit_btn'])){
        $id = $_POST['edit_id'];
        $query3 = "SELECT * FROM `bus_route` WHERE id = '$id'";
        $query_run3 = mysqli_query($connection,$query3);


        foreach($query_run3 as $row3)
        {
            ?>


            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">
                    <?php
                    if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                        echo '<br> <h4 class="text-danger">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" name="route_number" class="form-control" value="<?php echo $row3['route_number'] ?>">
                    </div>
                    <div class="form-group">
                        <select name="category_status" class="form-control">
                            <?php
                            if($row3['category_status'] == 'active'){ ?>
                                <option value="active"> Active </option>
                                <option value="deactive"> Deactive </option>
                           <?php }else{ ?>
                                <option value="deactive"> Deactive </option>
                                <option value="active"> Active </option>
                                <?php }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $row3['id'] ?>">
                    </div>


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary " name='update'>
                        <span> <i class="fa-solid fa-bookmark"> Add Route </i></span>
                    </button>
                </div>
            </form>

            <?php

        }
    }

    ?>
</div>



