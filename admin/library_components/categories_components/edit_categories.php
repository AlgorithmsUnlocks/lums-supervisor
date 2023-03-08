<?php

// Edit

if(isset($_POST['update_category'])){

    $id = $_POST['edit_id'];
    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];


    $query = "UPDATE `books_category` SET `name`='$category_name',`status`='$category_status' WHERE id = '$id'";

    $query_run = mysqli_query($connection, $query);


    if($query_run){

        $_SESSION['message'] = "Category is Updated Successfully";
        header('Location: book_categories.php?source=manage_categories');
    }
    else{
        $_SESSION['message_error'] = " Category is not Updated";
        header('Location: book_categories.php?source=manage_categories');
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
                $query = "SELECT * FROM `books_category` WHERE id = '$id'";
                $query_run = mysqli_query($connection,$query);


                foreach($query_run as $row)
                {
                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="add_category_group">
                            <div class="form-group">
                                <input type="text" class='form-control' name='category_name'  value="<?php echo $row['name']; ?>">
                            </div>
                            <div class="form-group">
                                <select name="category_status" class="form-control">
                                    <option value="not set"> Select category Status </option>
                                    <option value="active"> Active </option>
                                    <option value="deactive"> Deactive </option>
                                </select>
                            </div>


                        </div>
                        <div class="save_feild text-center">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-warning " name='update_category'>
                                <span>  Update Category </span>
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
