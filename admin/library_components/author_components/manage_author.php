<?php
if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `books_authors` WHERE `id`= '$id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['message_error'] = " Author is Delete Successfully";
        header('Location: book_author.php?source=manage_author');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: book_author.php?source=manage_author');
    }
}

?>


<?php
// Select the table data

$query = "SELECT * FROM `books_authors`";
$query_run = mysqli_query($connection,$query);

?>



<div class="container manage_items">
    <div class="table-responsive">

        <table id="example" class="display" style="width:100%!important">

            <?php

            if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                echo '<h4 class="message_text">'.$_SESSION['message'].'</h4>';
                unset($_SESSION['message']);
            }
            else if(isset($_SESSION['message_error']) && $_SESSION['message_error'] != ''){
                echo '<h4 class="message_Text_error">'.$_SESSION['message_error'].'</h4>';
                unset($_SESSION['message_error']);
            }

            ?>

            <thead class="table_head">
            <tr>
                <th> ID </th>
                <th> Author Name</th>
                <th>Creation Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot class="table_foot">
            <tr>
                <th> ID </th>
                <th> Author Name</th>
                <th>Creation Date</th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>


            <?php

            // fetch table data

            if(mysqli_num_rows($query_run) > 0){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>

                    <tr>
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['name']; ?></td>

                        <td> <?php  echo $row['creation_date']; ?></td>
                        <td>
                            <div class="action-form">
                                <form action="" method="POST">
                                    <input type="hidden" class="form-control" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger" name="delete_btn">
                                       Delete
                                    </button>
                                </form>

                                <form action="book_author.php?source=edit_author" method="POST">
                                    <input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-warning" name="edit_btn">
                                      Edit
                                    </button>
                                </form>
                            </div>

                        </td>
                    </tr>

                    <?php
                }
            }else{
                echo 'Data is not found';
            }

            ?>

            </tbody>


        </table>
    </div>
</div>

