<?php

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `buses_issued` WHERE `id`= '$id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['message_error'] = "Delete Successfully";
        header('Location: issue_bus.php?source=manage_issue_bus');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: issue_bus.php?source=manage_issue_bus');
    }
}

?>


<?php

/* Books Category */

$query = "SELECT * FROM `buses_issued";
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
                <th> Bus Name</th>
                <th> Route Number</th>
                <th> Start Location</th>
                <th> Start Time</th>
                <th>  Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot class="table_foot">
            <tr>
                <th> ID </th>
                <th> Bus Name</th>
                <th> Route Number</th>
                <th> Start Location</th>
                <th> Start Time</th>
                <th>  Status</th>
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
                        <td> <?php echo $row['bus_name']; ?></td>
                        <td> <?php echo $row['route_number']; ?></td>
                        <td> <?php  echo $row['start_location']; ?></td>
                        <td> <?php  echo $row['start_time']; ?></td>
                        <td> <?php  echo $row['category_status']; ?></td>
                        <td>
                            <div class="action-form">
                                <form action="" method="POST">
                                    <input type="hidden" class="form-control" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger" name="delete_btn">
                                       Delete
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
