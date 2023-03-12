<?php

// Edit

if(isset($_POST['update_author'])){

    $id = $_POST['edit_id'];
    $author_name = $_POST['author_name'];

    $query = "UPDATE `books_authors` SET `name`='$author_name' WHERE id = '$id'";

    $query_run = mysqli_query($connection, $query);


    if($query_run){

        $_SESSION['message'] = "Author is Updated Successfully";
        header('Location: book_author.php?source=manage_author');

    }
    else{
        $_SESSION['message'] = "Author is not Updated Successfully";
        header('Location: book_author.php?source=manage_author');

    }

}


?>
<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">


            <?php
            // Edit Button Actions
            if(isset($_POST['edit_btn'])){
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM `books_authors` WHERE id = '$id'";
                $query_run = mysqli_query($connection,$query);


                foreach($query_run as $row)
                {
                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="add_category_group">
                            <div class="form-group">
                                <input type="text" class='form-control'name='author_name'value="<?php echo $row['name']; ?>">
                            </div>

                        </div>
                        <div class="save_feild text-center">
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-primary " name='update_author'>
                                <span>  Update Author</span>
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

