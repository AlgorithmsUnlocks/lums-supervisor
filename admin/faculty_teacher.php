<!--This is admin header part -->
<?php include("includes/admin_header.php"); ?>
<!--This is admin header part end -->

<!-- partial:partials/_sidebar -->
<?php include("includes/admin_sidebar.php") ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">


        <?php if($_SESSION['user_role'] === 'super_admin'){ ?>

        <!-- Main Content Panel -->

      <?php
      $source = "";

      if(isset($_GET['source'])){
          $source = $_GET['source'];
      }
      switch ($source){
          case "edit_faculty_teacher":
              include "components_faculty_teacher/edit_faculty_teacher.php";
              break;
          case "delete_faculty_teacher":
              include "components_faculty_teacher/delete_faculty_teacher.php";
              break;
          default:
              include "components_faculty_teacher/view_faculty_teacher.php";
      }

      ?>


        <?php
         }else{
             echo "Are you trying to access? Note that your are not allow!!! <span class='bg-danger p-3 text-white'> Entry Restricted</span>";
         }
         ?>


        <div class="row">
            <!-- Main Content Panel End -->
        </div>
    </div>       <!-- Admin Body -> write content -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer -->
<?php include("includes/admin_footer.php"); ?>