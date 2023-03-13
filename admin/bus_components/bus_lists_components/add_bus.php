<?php

// Add


if(isset($_POST['add_bus'])){

    $bus_licence = $_POST['bus_licence'];
    $code_name = $_POST['code_name'];
    $capacity = $_POST['capacity'];
    $driver_name = $_POST['driver_name'];
    $driver_contact_num = $_POST['driver_contact_num'];
    $category_status = $_POST['category_status'];



    if(!empty($bus_licence) && !empty($code_name) && !empty($capacity) && !empty($driver_name)&& !empty($driver_contact_num)&& !empty($category_status)){

        $query = "INSERT INTO `buses_listed`(`bus_licence`, `code_name`, `capacity`, `driver_name`, `driver_contact_num`, `category_status`) VALUES ('$bus_licence','$code_name','$capacity','$driver_name','$driver_contact_num','$category_status')";

        $query_run = mysqli_query($connection, $query);


        if($query_run){

            $_SESSION['message'] = "Bus List Added Successfully";
            header('Location: bus_lists.php?source=manage_bus');

        }
        else{
            $_SESSION['message_error'] = "Bus List is not added";
            header('Location: bus_lists.php?source=manage_bus');
        }

    }else{
        $_SESSION['message_error'] = "Empty Data is not Accepted";
        header('Location: bus_lists.php?source=manage_bus');
    }

}

?>

<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">
                    <div class="form-group">
                        <input type="text" name="bus_licence" class="form-control" placeholder="Bus Licence">
                    </div>
                    <div class="form-group">
                        <input type="text" name="code_name" class="form-control" placeholder="Code Name">
                    </div>

                    <div class="form-group">
                        <input type="number" name="capacity" class="form-control" placeholder="Capacity">
                    </div>

                    <div class="form-group">
                        <input type="text" name="driver_name" class="form-control" placeholder="Driver Name">
                    </div>
                    <div class="form-group">
                        <input type="number" name="driver_contact_num" class="form-control" placeholder="Driver Contact Number">
                    </div>

                    <div class="form-group">
                        <select name="category_status" class="form-control">
                            <option value="active"> Select category Status </option>
                            <option value="active"> Active </option>
                            <option value="deactive"> Deactive </option>
                        </select>
                    </div>


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary " name='add_bus'>
                        <span> <i class="fa-solid fa-bookmark"> Add Bus </i></span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
