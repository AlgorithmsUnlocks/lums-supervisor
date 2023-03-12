<?php

// Add

if(isset($_POST['add_category'])){

    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];


    if(!empty($category_name) && !empty($category_status)){

        $query = "INSERT INTO `buses_category`(`name`, `status`) VALUES ('$category_name','$category_status')";

        $query_run = mysqli_query($connection, $query);

        if($query_run){

            $_SESSION['message'] = "Category is Added Successfully";
            header('Location: bus_categories.php?source=manage_categories');

        }
        else{
            $_SESSION['message_error'] = "Category is not added";
            header('Location: bus_categories.php?source=manage_categories');
        }

    }else{
        $_SESSION['message_error'] = "Empty Data is not Accepted";
        header('Location: bus_categories.php?source=manage_categories');
    }

}




?>



<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">
                    <div class="form-group">

                        <select name="category_name" class="form-control">
                            <option value="active"> Select category </option>
                            <option value="teachers"> Teachers </option>
                            <option value="students"> Students </option>
                        </select>
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
                    <button type="submit" class="btn btn-primary " name='add_category'>
                        <span> <i class="fa-solid fa-bookmark"> Add Category </i></span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

