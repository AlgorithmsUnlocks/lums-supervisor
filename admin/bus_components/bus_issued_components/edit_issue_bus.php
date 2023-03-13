<?php

// Edit
if(isset($_POST['update_issue_book'])){
    $id = $_POST['edit_id'];
    $update_issue = $_POST['update_issue'];
    $query = "UPDATE `issue_book` SET `message`= '$update_issue' WHERE `id` = '$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['update'] ='Issue Book is Update Successfully with id = '.$id;
        header('location: issue_books_lists.php?source=manage_issue_books');
    }
}

?>
<?php



?>


<div class="container addBox">

    <?php
    if(isset($_POST['edit_btn'])){
        $id = $_POST['edit_id'];
        $query = "SELECT * FROM `issue_book` WHERE `id` = '$id'";
        $query_run = mysqli_query($connection,$query);

        foreach($query_run as $row){

            ?>


            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form first">
                    <div class="details_books">
            <span class="title text-center"> Issue Books Edit
            </span>

                        <div class="feilds">

                            <div class="form-group">
                                <label for="">Select Action </label>
                                <select name="update_issue" id="" class="form-control">
                                    <option value="<?php echo $row['message']; ?>">
                                        <?php
                                        echo $row['message'];
                                        ?>
                                    </option>
                                    <?php
                                    if($row['message'] == 'Return'){
                                        echo $row['message'] = "Not Return";
                                        ?>
                                        <option value="<?php echo $row['message'] = "Not Return"; ?>"><?php echo $row['message'] = "Not Return"; ?>  </option>
                                        <?php
                                    }else{
                                        ?>
                                        <option value="<?php echo $row['message'] = "Return"; ?>"><?php echo $row['message'] = "Return"; ?>  </option>
                                        <?php
                                    }
                                    ?>

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="">*** Click the button for update</label>
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <input type="submit" value="Edit Action" class="form-control btn btn-warning" name="update_issue_book">
                            </div>




                        </div>
                    </div>

                </div>
            </form>


            <?php
        }

    }else{
        echo "Something went wrong";
    }

    ?>
</div>
