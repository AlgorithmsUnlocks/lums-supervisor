<?php

if(isset($_POST['delete_btn'])){

    $id = $_POST['delete_id'];
    $query = "DELETE FROM `faculty_teachers` WHERE `teacher_id`= '$id'";
    $query_run = mysqli_query($connection,$query);

    confirmQuery($query_run);
    success_data();
    header("Location: faculty_teacher.php");
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
                    $teacher_name = $row['teacher_name'];
                    $teacher_photo = $row['teacher_photo'];

                    if($teacher_id == $id){

                ?>

                <div class="delete_cards text-center">
                    <h4> Are you sure you want to delete  <i class="typcn typcn-user-delete-outline menu-icon"></i> ???</h4>
                    <div class="image_container">
                        <img src="../upload/<?php echo $teacher_photo ?>"/>
                    </div>
                    <div class="name_container">
                        <h5><?php echo $teacher_name ?></h5>
                    </div>

                    <div class="row justify-content-around d-flex">

                        <form action="" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $teacher_id ?>">
                            <button type='submit' class='btn btn-danger' name="delete_btn"> Delete   <i class="typcn typcn-document-delete menu-icon"></i></button>
                        </form>

                        <a href='faculty_teacher.php'><button type='submit' class='btn btn-success'> Back </button></a>
                    </div>


                </div>

           <?php

            }else{
                empty_data();
            }

            }

        }
        ?>

    </div>

</div>
