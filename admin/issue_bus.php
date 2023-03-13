<!--This is admin header part -->
<?php include("includes/admin_header.php"); ?>
<!--This is admin header part end -->

<!-- partial:partials/_sidebar -->
<?php include("includes/admin_sidebar.php") ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

         <?php if(($_SESSION['user_role'] == 'super_admin') || ($_SESSION['user_role'] == 'bus_admin')){ ?>

        <!-- Main Content Panel -->

        <?php
        $source = "";

        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }
        switch ($source){
            case "add_issue_bus":
                include "bus_components/bus_issued_components/add_issue_bus.php";
                break;
            case "manage_issue_bus":
                include "bus_components/bus_issued_components/manage_issue_bus.php";
                break;
            case "edit_issue_bus":
                include "bus_components/bus_issued_components/edit_issue_bus.php";
                break;
            default:
                include "bus_components/bus_issued_components/manage_issue_bus.php";
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