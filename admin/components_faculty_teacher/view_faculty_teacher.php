<?php
//Insert into Database

if(isset($_POST['register_teacher'])){

    $faculty_id = real_escape($_POST['faculty_id']);
    $department_id = real_escape($_POST['department_id']);
    $teacher_name = real_escape($_POST['teacher_name']);
    $teacher_title = real_escape($_POST['teacher_title']);
    $teacher_email = real_escape($_POST['teacher_email']);
    $teacher_cell = real_escape($_POST['teacher_cell']);
    $education_bg_conduct_course = real_escape($_POST['education_bg_conduct_course']);

    $teacher_photo = $_FILES['teacher_photo']['name'];
    $teacher_photo_loc = $_FILES['teacher_photo']['tmp_name'];


//    if(!empty($faculty_id) && !empty($department_id) && !empty($teacher_name) && !empty($teacher_title) && !empty($teacher_email) && !empty($teacher_cell)){

        $query = "INSERT INTO `faculty_teachers`(`faculty_id`, `department_id`, `teacher_name`, `teacher_title`, `teacher_email`, `teacher_cell`, `education_bg_conduct_course`, `teacher_photo`) VALUES ('$faculty_id','$department_id','$teacher_name','$teacher_title','$teacher_email','$teacher_cell','$education_bg_conduct_course','$teacher_photo')";

        $query_run = mysqli_query($connection, $query);

        confirmQuery($query_run);
        move_uploaded_file($teacher_photo_loc,"../upload/{$teacher_photo}");
        success_data();
//    }else{
//        empty_data();
//    }

}

// Delete Data

?>




<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Add Faculty Teachers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <select class="form-control" name="faculty_id">
                                <option value="">Select Faculty</option>
                                <?php
                                $query = "SELECT * FROM faculty";
                                $query_run = mysqli_query($connection,$query);
                                confirmQuery($query_run);
                                while($row = mysqli_fetch_assoc($query_run)){
                                    $faculty_id = $row['id '];
                                    $faculty_name = $row['faculty_name']; ?>
                                    <option value="<?php echo $faculty_id ?>"><?php echo $faculty_name ?></option>
                               <?php }

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="department_id">
                                <option value="">Select Department</option>
                                <?php
                                $query = "SELECT * FROM department";
                                $query_run = mysqli_query($connection,$query);
                                confirmQuery($query_run);
                                while($row = mysqli_fetch_assoc($query_run)){
                                    $department_id = $row['department_id'];
                                    $department_name = $row['department_name']; ?>
                                    <option value="<?php echo $department_id ?>"><?php echo $department_name ?></option>
                                <?php }

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class='form-control' name='teacher_name' placeholder='Teacher Name'>
                        </div>
                        <div class="form-group">
                            <input type="text" class='form-control' name='teacher_title' placeholder='Title of Teacher'>
                        </div>
                        <div class="form-group">
                            <input type="email" class='form-control' name='teacher_email' placeholder='Email Address'>
                        </div>
                        <div class="form-group">
                            <input type="tel" class='form-control' name='teacher_cell' placeholder='Cell Phone'>
                        </div>
                        <div class="form-group">
                            <label for="education_bg">*** Education background and conduct courses </label>
                            <textarea name="education_bg_conduct_course" cols="40" rows="20" class='form-control' id="summernote"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class='form-control' name='teacher_photo' placeholder='photo'>
                            <label for="teacher_photo">*** upload profile photo</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name='register_teacher'>Save Changes</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>




<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-lg-5">
        <div class="card-header py-3">
            <h2 class='text-center title p-3'>
                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalLong">
                        <i class="fa-solid fa-users-viewfinder"></i> <span>
                                          Click to Add Faculty Teachers
                               </span>
                    </button>
            </h2>

        </div>
        <div class="card-body">


            <div class="table-responsive">

                <?php
                $query = "SELECT * FROM `faculty_teachers`";
                $query_run = mysqli_query($connection,$query);
                $faculty_teachers_count = mysqli_num_rows($query_run);
                ?>
                <table id="example" class="display" style="width:100%!important">
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>Faculty</th>
                        <th>Department</th>
                        <th>Teacher Name</th>
                        <th>Title of Teacher</th>
                        <th>Email Address</th>
                        <th>Cell Phone</th>
                        <th>Education Background Conduct Courses</th>
                        <th>Profile</th>
                        <th>Actions</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php

                    if($faculty_teachers_count > 0){
                        while($row = mysqli_fetch_assoc($query_run)){

                            $teacher_id = $row['teacher_id'];
                            $faculty_id = $row['faculty_id'];
                            $department_id = $row['department_id'];
                            $teacher_name= $row['teacher_name'];
                            $teacher_title= substr($row['teacher_title'],0,6);
                            $teacher_email = substr($row['teacher_email'],0,5);
                            $teacher_cell = $row['teacher_cell'];
                            $education_bg_conduct_course = substr($row['education_bg_conduct_course'],0,20);
                            $teacher_photo = $row['teacher_photo'];

                            ?>
                            <tr>
                                <td><?php echo $teacher_id ?></td>
                                <td><?php echo $faculty_id ?></td>
                                <td><?php echo $department_id ?></td>
                                <td><?php echo $teacher_name ?></td>
                                <td><?php echo $teacher_title."..." ?></td>
                                <td><?php echo $teacher_email."..." ?></td>
                                <td><?php echo $teacher_cell ?></td>
                                <td><?php echo $education_bg_conduct_course."..." ?></td>
<!--                                <td>-->
<!---->
<!--                                    <img src="../upload/--><?php //echo $teacher_photo; ?><!--" class="img-fluid" style="border-radius: 50px; height: auto; width: 160px"/>-->
<!--                                </td>-->
<!---->
                                <td>
                                    <img src="../upload/<?php echo $teacher_photo; ?>" class="img-fluid" style="border-radius: 50px; height: auto; width: 160px"/>
                                </td>
                                <td>

                                    <a href="faculty_teacher.php?source=edit_faculty_teacher&id=<?php echo $teacher_id ?>" method="GET" class="bg-primary pt-2 pl-3 pb-2 pr-3 text-white">
                                            <i class="typcn typcn-edit menu-icon"></i>
                                    </a>
                                    <hr>
                                    <a href="faculty_teacher.php?source=delete_faculty_teacher&id=<?php echo $teacher_id ?>" method="GET" class="bg-warning pt-2 pl-3 pb-2 pr-3 text-white">
                                        <i class="typcn typcn-document-delete menu-icon"></i>
                                    </a>
                                </td>


                            </tr>

                            <?php
                        }

                    }else{
                        echo "Not Admin Found";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
