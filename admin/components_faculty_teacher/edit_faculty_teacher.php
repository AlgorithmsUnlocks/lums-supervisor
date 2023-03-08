<?php

if(isset($_POST['update'])){

    $teacher_id = real_escape($_POST['teacher_id']);
    $teacher_title = real_escape($_POST['teacher_title']);
    $education_bg_conduct_course = real_escape($_POST['education_bg_conduct_course']);


            $query = "UPDATE `faculty_teachers` SET `teacher_title`='$teacher_title',`education_bg_conduct_course`='$education_bg_conduct_course' WHERE teacher_id = '$teacher_id'";

            $query_run = mysqli_query($connection, $query);

            confirmQuery($query_run);
            success_data();
}

?>

    <div class="card shadow mb-4">

            <div class="card-body">

                <?php
                // Edit Button Actions 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "SELECT * FROM `faculty_teachers` WHERE teacher_id='$id'";
                    $query_run = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($query_run)) {

                        $teacher_id = $row['teacher_id'];
                        $teacher_title= $row['teacher_title'];
                        $education_bg_conduct_course = $row['education_bg_conduct_course'];
                        $teacher_photo = $row['teacher_photo'];
                    }
                        ?>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="title">Teacher Title</label>
                                <input type="text" class='form-control' name='teacher_title' value="<?php echo $teacher_title ?>">
                            </div>
                            <div class="form-group">
                                <label for="education_bg">*** Education background and conduct courses </label>
                                <textarea name="education_bg_conduct_course" cols="40" rows="20" class='form-control' id="summernote">
                                   <?php echo $education_bg_conduct_course ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                              <img src="../upload/<?php echo $teacher_photo ?>" class="img-fluid" style="width: 180px" />
                            </div>
                            <div class="form-group">
                                <input type="hidden" class='form-control' name='teacher_id' value="<?php echo $teacher_id ?>">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name='update'>Save Changes</button>
                        </div>
                    </form>

                        <a href='faculty_teacher.php'><button type='submit' class='btn btn-warning'> Back </button></a>
                        <?php
                }else{
                    empty_data();
                }

                ?>

            </div>

    </div>
