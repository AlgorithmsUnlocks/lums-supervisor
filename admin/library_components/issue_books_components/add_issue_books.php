<?php

// Add

if(isset($_POST['issue_book'])){

    $books_list = $_POST['books_list'];
    $student_name = $_POST['student_name'];
    if(isset($_POST['assign_date'])){
        $assign_date = $_POST['assign_date'];
    }else{
        echo "Not select";
    }
    if(isset($_POST['return_date'])){
        $return_date = $_POST['return_date'];
    }else{
        echo "Not select";
    }

    if($books_list == null || $student_name == null || $assign_date == null || $return_date == null){

        $_SESSION['missing'] ='Missing details. Please enter all fields';
        header('location: issue_books_lists.php?source=manage_issue_books');
    }else{
        $query = "INSERT INTO `issue_book`(`name`, `student_name`, `assign_date`, `return_date`) VALUES ('$books_list','$student_name','$assign_date','$return_date')";

        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script>alert('Issue book is assign success')</script>";
            echo "<script>location.href='issue_books_lists.php?source=manage_issue_books';</script>";
        }else{
            echo "Database Query Problem";
        }
    }

}

?>
<?php
/* Books List */

$query = "SELECT * FROM `books_list";
$query_run = mysqli_query($connection,$query);


/* Register Student */

$query2 = "SELECT * FROM `student_panel";
$query_run2 = mysqli_query($connection,$query2);


?>
<div class="container addBox">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form first">
            <div class="details_books">
                <span class="title text-center"> Assign Books Details
                </span>
                <h4>
                    <?php
                    if(isset($_SESSION['missing']) && $_SESSION['missing'] != ''){
                        echo '<h4 class="text-white text-center">'.$_SESSION['missing'].'</h4>';
                        unset($_SESSION['missing']);
                    }
                    ?>
                </h4>

                <div class="feilds">

                    <div class="form-group">
                        <label for="">Book Name</label>
                        <select name="books_list" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run)):; ?>
                                <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Book  name </small>
                    </div>
                    <div class="form-group">
                        <label for="">Student Name</label>
                        <select name="student_name" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run2)):; ?>
                                <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Regsister student name </small>
                    </div>

                    <div class="form-group">
                        <label for=""> Book Assign Date </label>
                        <input type="date" name="assign_date" class="form-control">
                        <small>*** Assign date of book</small>
                    </div>
                    <div class="form-group">
                        <label for=""> Book Return Date </label>
                        <input type="date" name="return_date" class="form-control">
                        <small>*** Return date of book</small>
                    </div>


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary" name="issue_book"><i class="fa-solid fa-book"> Assign Books </i></button>
                </div>

            </div>
        </div>
    </form>
</div>
