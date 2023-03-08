<?php
//Insert into Database

if(isset($_POST['register_dean'])){

    $faculty_name = real_escape($_POST['faculty_name']);
    $dean_name = real_escape($_POST['dean_name']);
    $dean_title = real_escape($_POST['dean_title']);
    $dean_tel = real_escape($_POST['dean_tel']);
    $dean_cell = real_escape($_POST['dean_cell']);
    $dean_email = real_escape($_POST['dean_email']);

    $dean_photo = $_FILES['dean_photo']['name'];
    $dean_photo_loc = $_FILES['dean_photo']['tmp_name'];


    if(!empty($faculty_name) && !empty($dean_name) &&!empty($dean_title) &&!empty($dean_tel) &&!empty($dean_cell) &&!empty($dean_email) &&!empty($dean_photo)){

        $query = "INSERT INTO `faculty`(`faculty_name`, `dean_name`, `dean_title`, `dean_tel`, `dean_cell`, `dean_email`, `dean_photo`) VALUES ('$faculty_name','$dean_name','$dean_title','$dean_tel','$dean_cell','$dean_email','$dean_photo')";

        $query_run = mysqli_query($connection, $query);

        confirmQuery($query_run);
        move_uploaded_file($dean_photo_loc,"../upload/{$dean_photo}");
        success_data();
    }else{
        empty_data();
    }

}

// Delete Data

?>




<div class="container">

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLongTitle">Add Faculty</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class='form-control'name='faculty_name' placeholder='Faculty Name'>
                        </div>
                        <div class="form-group">
                            <input type="text" class='form-control'name='dean_name' placeholder='Name of Dean'>
                        </div>
                        <div class="form-group">
                            <input type="text" class='form-control'name='dean_title' placeholder='Title of Dean'>
                        </div>
                        <div class="form-group">
                            <input type="tel" class='form-control'name='dean_tel' placeholder='Tel. Office'>
                        </div>
                        <div class="form-group">
                            <input type="text" class='form-control'name='dean_cell' placeholder='Cell Number'>
                        </div>
                        <div class="form-group">
                            <input type="email" class='form-control'name='dean_email' placeholder='Dean Email'>
                        </div>
                        <div class="form-group">
                            <input type="file" class='form-control'name='dean_photo' placeholder='photo'>
                            <label for="dean_photo">Please upload profile photo</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name='register_dean'>Save Changes</button>
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
                                          Click to Add Faculty
                               </span>
                    </button>
            </h2>

        </div>
        <div class="card-body">


            <div class="table-responsive">

                <?php
                $query = "SELECT * FROM `faculty`";
                $query_run = mysqli_query($connection,$query);
                $faculty_count = mysqli_num_rows($query_run);
                ?>
                <table id="example" class="display" style="width:100%!important">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Faculty Name</th>
                        <th>Name of Dean</th>
                        <th>Tiftle of Dean</th>
                        <th>Tel. Office</th>
                        <th>Cell</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Actions</th>


                    </tr>
                    </thead>

                    <tbody>
                    <?php

                    if($faculty_count > 0){
                        while($row = mysqli_fetch_assoc($query_run)){
                            $id = $row['id'];
                            $faculty_name = $row['faculty_name'];
                            $dean_name = $row['dean_name'];
                            $dean_title = $row['dean_title'];
                            $dean_tel = $row['dean_tel'];
                            $dean_cell = $row['dean_cell'];
                            $dean_email = $row['dean_email'];
                            $dean_photo = $row['dean_photo'];

                            ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $faculty_name ?></td>
                                <td><?php echo $dean_name ?></td>
                                <td><?php echo $dean_title ?></td>
                                <td><?php echo $dean_tel ?></td>
                                <td><?php echo $dean_cell ?></td>

                                <td>
                                    <?php echo $dean_email ?>
                                </td>
                                <td>

                                    <img src="../upload/<?php echo $dean_photo; ?>" class="img-fluid" style="border-radius: 50px; height: auto; width: 160px"/>
                                </td>

                                <td>

                                    <a href="faculty.php?source=edit_faculty&id=<?php echo $id ?>" method="GET" class="bg-primary pt-2 pl-3 pb-2 pr-3 text-white">
                                            <i class="typcn typcn-edit menu-icon"></i>
                                    </a>
                                    <hr>
                                    <a href="faculty.php?source=delete_faculty&id=<?php echo $id ?>" method="GET" class="bg-warning pt-2 pl-3 pb-2 pr-3 text-white">
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
