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

      if(isset($_GET['source'])){
          $source = $_GET['source'];
      }else{
          $source = "";
      }

      switch($source){
          case 'edit_users':
              include "users_components/edit_users.php";
              break;
          default:
              include "users_components/view_all_users.php";
      }

      ?>





        <div class="row">
            <!-- Main Content Panel End -->
        </div>
    </div>       <!-- Admin Body -> write content -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer -->
<?php include("includes/admin_footer.php"); ?>