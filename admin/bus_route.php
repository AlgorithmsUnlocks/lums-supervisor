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
            case "add_route":
                include "bus_components/bus_route_components/add_route.php";
                break;
            case "manage_route":
                include "bus_components/bus_route_components/manage_route.php";
                break;
            case "edit_route":
                include "bus_components/bus_route_components/edit_route.php";
                break;
            default:
                include "bus_components/bus_route_components/manage_route.php";
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