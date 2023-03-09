<?php

?>


<?php

/* Books Category */

$query = "SELECT * FROM `issue_book";
$query_run = mysqli_query($connection,$query);

?>

<div class="container-fluid manage_items m-3">

    <h4 class="text-center text-primary border p-2 m-3">
        All Issue Books
    </h4>
    <h4 class="text-center">
        <?php
        if(isset($_SESSION['update']) && $_SESSION['update'] != ''){
            echo '<h4 class="text-success text-center">'.$_SESSION['update'].'</h4>';
            unset($_SESSION['update']);
        }

        ?>

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
                <th> Book Name</th>
                <th> Student Name </th>
                <th>Book Assign Date</th>
                <th>Book Return Date</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot class="table_foot">
            <tr>
                <th> ID </th>
                <th> Book Name</th>
                <th> Student Name </th>
                <th>Book Assign Date</th>
                <th>Book Return Date</th>
                <th>Message</th>
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
                        <td> <?php  echo $row['student_name']; ?></td>
                        <td> <?php echo $row['assign_date']; ?> </td>
                        <td> <?php echo $row['return_date']; ?></td>
                        <td> <?php

                            if($row['message'] == 'Return'){
                                ?>
                                <span style="color: green; font-weight: 600"><i class="fa-solid fa-circle-check">
            </i> <?php echo $row['message']; ?> </span>
                                <?php
                            }else{
                                ?>
                                <span style="color: red; font-weight: 600"><i class="fa-solid fa-circle-xmark">
            </i> <?php echo $row['message']; ?> </span>
                                <?php
                            }

                            ?> </td>
                        <td>
                            <div class="action-form">
<!--                                <form action="issue_book_action.php" method="POST">-->
<!--                                    <input type="hidden" class="form-control" name="delete_id" value="--><?php //echo $row['id']; ?><!--">-->
<!--                                    <button type="submit" class="btn btn-danger" name="delete_btn">-->
<!--                                       Delete-->
<!--                                    </button>-->
<!--                                </form>-->
                                <form action="issue_books_lists.php?source=edit_issue_books" method="POST">
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
