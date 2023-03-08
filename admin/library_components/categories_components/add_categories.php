<?php

// Add

if(isset($_POST['add_category'])){

    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];


    if(!empty($category_name) && !empty($category_status)){

        $query = "INSERT INTO `books_category`(`name`, `status`) VALUES ('$category_name','$category_status')";

        $query_run = mysqli_query($connection, $query);


        if($query_run){

            $_SESSION['message'] = "Category is Added Successfully";
            header('Location: book_categories.php?source=manage_categories');

        }
        else{
            $_SESSION['message_error'] = "Category is not added";
            header('Location: book_categories.php?source=manage_categories');
        }

    }else{
        $_SESSION['message_error'] = "Empty Data is not Accepted";
        header('Location: book_categories.php?source=manage_categories');
    }

}





?>



    <div class="container addBox">
        <div class="row">
            <div class="col-md-8 m-auto">

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="add_category_group">
                        <div class="form-group">
                            <input type="text" class='form-control'name='category_name' placeholder='Enter Category Name'>
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
                            <span> Add Category</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
