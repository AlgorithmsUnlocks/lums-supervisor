<?php

// Add


if(isset($_POST['register_book'])){

    $book_name = $_POST['book_name'];
    $book_author = $_POST['book_author'];
    $book_category = $_POST['book_category'];
    $isbn_number = $_POST['isbn_number'];
    $book_copies = $_POST['book_copies'];
    $book_self = $_POST['book_self'];

    $book_photo = $_FILES['book_photo']['name'];
    $book_photo_loc = $_FILES['book_photo']['tmp_name'];


    if(!empty($book_name) && !empty($book_author) && !empty($book_category) && !empty($isbn_number) && !empty($book_copies)){

        $query3 = "INSERT INTO `books_list`(`book_name`, `book_author`, `book_category`, `isbn_number`, `book_copies`, `book_photo`,`book_self`) VALUES ('$book_name','$book_author','$book_category','$isbn_number','$book_copies','$book_photo','$book_self')";

        $query_run3 = mysqli_query($connection,$query3);
        if($query_run3){

            move_uploaded_file($book_photo_loc,"../upload/{$book_photo}");

            $_SESSION['message'] = "Book has been Register Successfully";
            header('Location: books_lists.php?source=manage_books');
        }else{
            $_SESSION['message'] = " Books is not added";
            header('Location: books_lists.php?source=manage_books');
        }

    }else{
        $_SESSION['message'] = "Field is empty";
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

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form first">
            <div class="details_books">
                <span class="title text-center"> Books Details

                </span>

                <div class="feilds">

                    <div class="form-group">
                        <label for=""> Book Name </label>
                        <input type="text" name="book_name" class="form-control">
                        <small>*** Full name of book</small>
                    </div>
                    <div class="form-group">
                        <label for="">Book Authors</label>
                        <select name="book_author" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run2)):; ?>
                                <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Book author name </small>
                    </div>
                    <div class="form-group">
                        <label for="">Book Category</label>
                        <select name="book_category" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run)):; ?>
                                <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Book category name </small>
                    </div>
                    <div class="form-group">
                        <label for=""> ISBN Number </label>
                        <input type="text" name="isbn_number" class="form-control">
                        <small>*** International Standard Books Number</small>
                    </div>
                    <div class="form-group">
                        <label for="">Number of Copies</label>
                        <input type="number" name="book_copies" class="form-control">
                        <small>Number of copies</small>
                    </div>
                    <div class="form-group">
                        <label for="">Book Cover Photo</label>
                        <input type="file" class='form-control' name='book_photo'>
                        <small>Please uploada cover photo</small>
                    </div>
                    <div class="form-group">
                        <label for="">Book Self Details</label>
                        <input type="text" class='form-control' name='book_self'>
                        <small>Book self details</small>
                    </div>

                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary" name="register_book">Register Books </button>
                </div>

            </div>
        </div>
    </form>
</div>

