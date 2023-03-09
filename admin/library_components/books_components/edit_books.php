<?php

// Edit

if(isset($_POST['update_book'])){

    $id = $_POST['edit_id'];
    $book_self = $_POST['book_self'];
    $book_copies = $_POST['book_copies'];

    $query = "UPDATE `books_list` SET `book_copies`='$book_copies',`book_self`='$book_self' WHERE `id` ='$id'";

    $query_run = mysqli_query($connection, $query);


    if($query_run){

        $_SESSION['message'] = "Books is Updated Successfully";
        header('Location: books_lists.php?source=manage_books');

    }
    else{
        $_SESSION['message'] = "Books is not Updated Successfully";
        header('Location: books_lists.php?source=manage_books');

    }

}



?>
<?php

/* Books Category */

$query = "SELECT * FROM `books_category";
$query_run = mysqli_query($connection,$query);

/* Books Authors */

$query2 = "SELECT * FROM `books_authors";
$query_run2 = mysqli_query($connection,$query2);

?>

<div class="container addBox">


    <?php
    // Edit Button Actions
    if(isset($_POST['edit_btn'])){
        $id = $_POST['edit_id'];
        $query3 = "SELECT * FROM `books_list` WHERE id = '$id'";
        $query_run3 = mysqli_query($connection,$query3);


        foreach($query_run3 as $row3)
        {
            ?>


            <form action="" method="post" enctype="multipart/form-data">
                <div class="form first">
                    <div class="details_books">
                <span class="title text-center"> Books Details
                <?php
                if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                    echo '<br> <h4 class="text-danger">'.$_SESSION['message'].'</h4>';
                    unset($_SESSION['message']);
                }
                ?>

                </span>

                        <div class="feilds">


                            <div class="form-group">
                                <label for="">Number of Copies</label>
                                <input type="number" name="book_copies" class="form-control" value="<?php echo $row3['book_copies']; ?>">
                                <small>Number of copies</small>
                            </div>
                            <div class="form-group">
                                <label for="">Book Self Details</label>
                                <input type="text" name="book_self" class="form-control" value="<?php echo $row3['book_self']; ?>">
                                <small>book self details </small>
                            </div>


                        </div>
                        <div class="save_feild text-center">
                            <input type="hidden" name="edit_id" value="<?php echo $row3['id']; ?>">
                            <button type="submit" class="btn btn-warning" name="update_book"> Update Books</button>
                        </div>

                    </div>
                </div>
            </form>

            <?php

        }
    }

    ?>
</div>



