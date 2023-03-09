<?php
if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `books_list` WHERE `id`= '$id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['message_error'] = " Books is Delete Successfully";
        header('Location: books_lists.php?source=manage_books');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: books_lists.php?source=manage_books');
    }
}

?>


<?php

$query = "SELECT * FROM `books_list";
$query_run = mysqli_query($connection,$query);

?>


<div class="container-fluid manage_items m-3">

    <h4 class="text-center text-primary border p-2 m-3">
        All Books
    </h4>

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
                <th>Books Cover</th>
                <th> Book Name</th>
                <th> ISBN Number </th>
                <th>Author Name</th>
                <th>Books Cateory</th>
                <th>Number of Copies</th>
                <th>Book Self</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot class="table_foot">
            <tr>
                <th> ID </th>
                <th>Books Cover</th>
                <th> Book Name</th>
                <th> ISBN Number </th>
                <th>Author Name</th>
                <th>Books Cateory</th>
                <th>Number of Copies</th>
                <th>Book Self</th>
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
                        <td>
                            <img src="../upload/<?php echo $row['book_photo']; ?>" class="img-fluid" style="border-radius: 50px; height: auto; width: 160px"/>
                        </td>

                        <td> <?php echo $row['book_name']; ?></td>
                        <td> <?php  echo $row['isbn_number']; ?></td>
                        <td> <?php echo $row['book_author']; ?> </td>
                        <td> <?php echo $row['book_category']; ?></td>
                        <td> <?php echo $row['book_copies']; ?></td>
                        <td> <?php echo $row['book_self']; ?></td>
                        <td>
                            <div class="action-form">
                                <form action="" method="POST">
                                    <input type="hidden" class="form-control" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger" name="delete_btn">
                                        Delete
                                    </button>
                                </form>

                                <form action="books_lists.php?source=edit_books" method="POST">
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


