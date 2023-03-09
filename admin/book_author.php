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
            case "add_author":
                include "library_components/author_components/add_author.php";
                break;
            case "manage_author":
                include "library_components/author_components/manage_author.php";
                break;
            case "edit_author":
                include "library_components/author_components/edit_author.php";
                break;
            default:
                include "";
        }

        ?>





        <div class="row">
            <!-- Main Content Panel End -->
        </div>
    </div>       <!-- Admin Body -> write content -->
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer -->
<?php include("includes/admin_footer.php"); ?>