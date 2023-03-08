<?php

if(isset($_POST['update_btn'])){

    $id = real_escape($_POST['edit_id']);
    $faculty_name = real_escape($_POST['faculty_name']);
    $dean_name = real_escape($_POST['dean_name']);
    $dean_title = real_escape($_POST['dean_title']);
    $dean_tel = real_escape($_POST['dean_tel']);
    $dean_cell = real_escape($_POST['dean_cell']);
    $dean_email = real_escape($_POST['dean_email']);

    $dean_photo = real_escape($_FILES['dean_photo']['name']);
    $dean_photo_loc = real_escape($_FILES['dean_photo']['tmp_name']);


            $query = "UPDATE `faculty` SET `faculty_name`='$faculty_name',`dean_name`='$dean_name',`dean_title`='$dean_title',`dean_tel`='$dean_tel',`dean_cell`='$dean_cell',`dean_email`='$dean_email',`dean_photo`='$dean_photo' WHERE id = '$id'";

            $query_run = mysqli_query($connection, $query);

            confirmQuery($query_run);
            move_uploaded_file($dean_photo_loc, "../upload/{$dean_photo}");
            success_data();
}

?>

    <div class="card shadow mb-4">

            <div class="card-body">

                <?php
                // Edit Button Actions 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "SELECT * FROM `faculty` WHERE id='$id'";
                    $query_run = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($query_run)) {
                        $id = $row['id'];
                        $faculty_name = $row['faculty_name'];
                        $dean_name = $row['dean_name'];
                        $dean_title = $row['dean_title'];
                        $dean_tel = $row['dean_tel'];
                        $dean_cell = $row['dean_cell'];
                        $dean_email = $row['dean_email'];
                        $dean_photo = $row['dean_photo'];
                    }
                        ?>
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="text" class='form-control'name='faculty_name' placeholder='Faculty Name' value="<?php echo $faculty_name ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='dean_name' placeholder='Name of Dean' value="<?php echo $dean_name ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='dean_title' placeholder='Title of Dean' value="<?php echo $dean_title  ?>">
                            </div>
                            <div class="form-group">
                                <input type="tel" class='form-control'name='dean_tel' placeholder='Tel. Office' value="<?php echo $dean_tel; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='dean_cell' placeholder='Cell Number' value="<?php echo $dean_cell ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class='form-control'name='dean_email' placeholder='Dean Email' value="<?php echo $dean_email ?>">
                            </div>
                            <div class="form-group">
                                <img src="../upload/<?php echo $dean_photo ?>">
                                <input type="file" class='form-control'name='dean_photo' placeholder='photo' value="<?php echo $dean_photo ?> ">
                            </div>
                            <input type="hidden" name="edit_id" value="<?php echo $id ?>">
                            <button type='submit' class='btn btn-primary' name='update_btn'> Update </button>

                        </form>

                        <a href='faculty.php'><button type='submit' class='btn btn-warning'> CANCEL </button></a>
                        <?php
                }else{
                    empty_data();
                }

                ?>

            </div>

    </div>
