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
            case "add_books":
                include "library_components/books_components/add_books.php";
                break;
            case "manage_books":
                include "library_components/books_components/manage_books.php";
                break;
            case "edit_books":
                include "library_components/books_components/edit_books.php";
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