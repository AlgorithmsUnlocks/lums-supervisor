<?php

// Add

if(isset($_POST['add_route'])){

    $route_number = $_POST['route_number'];
    $category_status = $_POST['category_status'];

    if(!empty($route_number)){

        $query = "INSERT INTO `bus_route`(`route_number`,`category_status`) VALUES ('$route_number','$category_status')";

        $query_run = mysqli_query($connection, $query);


        if($query_run){

            $_SESSION['message'] = "Bus Route Added Successfully";
            header('Location: bus_route.php?source=manage_route');

        }
        else{
            $_SESSION['message_error'] = "Bus Issued is not added";
            header('Location: bus_route.php?source=manage_route');
        }

    }else{
        $_SESSION['message_error'] = "Empty Data is not Accepted";
        header('Location: bus_route.php?source=manage_route');
    }

}


?>
<?php



?>

<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">

                    <div class="form-group">
                        <input type="text" name="route_number" class="form-control" placeholder="Route Name">
                    </div>
                    <div class="form-group">
                        <select name="category_status" class="form-control">
                            <option value=""> Select category Status </option>
                            <option value="active"> Active </option>
                            <option value="deactive"> Deactive </option>
                        </select>
                    </div>


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary " name='add_route'>
                        <span> <i class="fa-solid fa-bookmark"> Add Route </i></span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
