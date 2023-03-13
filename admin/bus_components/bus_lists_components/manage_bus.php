<?php
if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `buses_listed` WHERE `id`= '$id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        $_SESSION['message_error'] = "Delete Successfully";
        header('Location: bus_lists.php?source=manage_bus');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: bus_lists.php?source=manage_bus');
    }
}

?>


<?php
$query = "SELECT * FROM `buses_listed`";
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
                <th> Bus Licence</th>
                <th> Code Name</th>
                <th> Capacity</th>
                <th> Driver Name</th>
                <th> Driver Contact Number</th>
                <th> Category Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot class="table_foot">
            <tr>
                <th> ID </th>
                <th> Bus Licence</th>
                <th> Code Name</th>
                <th> Capacity</th>
                <th> Driver Name</th>
                <th> Driver Contact Number</th>
                <th> Category Status</th>
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
                        <td> <?php echo $row['bus_licence']; ?></td>
                        <td> <?php echo $row['code_name']; ?></td>
                        <td> <?php  echo $row['capacity']; ?></td>
                        <td> <?php  echo $row['driver_name']; ?></td>
                        <td> <?php  echo $row['driver_contact_num']; ?></td>
                        <td> <?php  echo $row['category_status']; ?></td>
                        <td>
                            <div class="action-form">
                                <form action="" method="POST">
                                    <input type="hidden" class="form-control" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger" name="delete_btn">
                                        Delete
                                    </button>
                                </form>

                                <form action="bus_lists.php?source=edit_bus" method="POST">
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


