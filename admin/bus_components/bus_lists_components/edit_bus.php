<?php

// Edit
if(isset($_POST['update_bus'])){

    $id = $_POST['id'];
    $bus_licence = $_POST['bus_licence'];
    $code_name = $_POST['code_name'];
    $capacity = $_POST['capacity'];
    $driver_name = $_POST['driver_name'];
    $driver_contact_num = $_POST['driver_contact_num'];
    $category_status = $_POST['category_status'];

    $query = "UPDATE `buses_listed` SET `bus_licence`='$bus_licence',`code_name`='$code_name',`capacity`='$capacity',`driver_name`='$driver_name',`driver_contact_num`='$driver_contact_num',`category_status`='$category_status' WHERE id = '$id'";

    $query_run = mysqli_query($connection,$query);


    if($query_run){

        $_SESSION['message'] = "Bus Listed is Updated Successfully";
        header('Location: bus_lists.php?source=manage_bus');
    }
    else{
        $_SESSION['message_error'] = " Bus Listed is not Updated Successfully";
        header('Location: bus_lists.php?source=manage_bus');
    }

}

?>

<div class="container addCategory">
    <div class="row">
        <div class="col-md-8 m-auto">


            <?php
            // Edit Button Actions
            if(isset($_POST['edit_btn'])){
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM `buses_listed` WHERE id = '$id'";
                $query_run = mysqli_query($connection,$query);

                foreach($query_run as $row)
                {
                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="add_category_group">
                            <div class="form-group">
                                <input type="text" name="bus_licence" class="form-control" value="<?php echo $row['bus_licence']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" name="code_name" class="form-control" value="<?php echo $row['code_name']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="number" name="capacity" class="form-control" value="<?php echo $row['capacity']; ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="driver_name" class="form-control" value="<?php echo $row['driver_name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" name="driver_contact_num" class="form-control" value="<?php echo $row['driver_contact_num']; ?>">
                            </div>

                            <div class="form-group">
                                <select name="category_status" class="form-control">
                                    <option value="active"> Select category Status </option>
                                    <option value="active"> Active </option>
                                    <option value="deactive"> Deactive </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" name="id" class="form-control" value="<?php echo $row['id']; ?>">
                            </div>

                        </div>
                        <div class="save_feild text-center">
                            <button type="submit" class="btn btn-primary" name='update_bus'>
                                <span> <i class="fa-solid fa-bookmark"> update  Bus </i></span>
                            </button>
                        </div>
                    </form>



                    <?php

                }
            }

            ?>
        </div>
    </div>
</div>

