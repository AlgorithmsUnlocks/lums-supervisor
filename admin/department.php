<!--This is admin header part -->
<?php include("includes/admin_header.php"); ?>
<!--This is admin header part end -->

<!-- partial:partials/_sidebar -->
<?php include("includes/admin_sidebar.php") ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <!-- Main Content Panel -->

      <?php
      $source = "";

      if(isset($_GET['source'])){
          $source = $_GET['source'];
      }
      switch ($source){
          case "edit_department":
              include "components_department/edit_department.php";
              break;
          case "delete_department":
              include "components_department/delete_department.php";
              break;
          default:
              include "components_department/view_department.php";
      }

      ?>





        <div class="row">
            <!-- Main Content Panel End -->
        </div>
    </div>       <!-- Admin Body -> write content -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer -->
<?php include("includes/admin_footer.php"); ?>