<?php

// Add

if(isset($_POST['add_author'])){

    $author_name = $_POST['author_name'];



    if(!empty($author_name)){

        $query = "INSERT INTO `books_authors`(`name`) VALUES ('$author_name')";

        $query_run = mysqli_query($connection, $query);


        if($query_run){

            $_SESSION['message'] = "Author is Added Successfully";
            header('Location: book_author.php?source=manage_author');

        }
        else{
            $_SESSION['message_error'] = "Author is not added";
            header('Location: book_author.php?source=manage_author');
        }

    }else{
        $_SESSION['message_error'] = "Empty Data is not Accepted";
        header('Location: book_author.php?source=manage_author');
    }

}


?>


<div class="container addBox">
    <div class="row">
        <div class="col-md-8 m-auto">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_category_group">
                    <div class="form-group">
                        <input type="text" class='form-control'name='author_name' placeholder='Enter Author Name'>
                    </div>

                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary " name='add_author'>
                        <span> <i class="fa-solid fa-plus"> Add Author </i></span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>