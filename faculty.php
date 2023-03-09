<?php include ("assets/includes/header.php")?>


    <main id="main">

        <?php
        $source = "";

        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }
        switch ($source){
            case "all_faculty_view":
                include "components/faculty_components/all_faculty_view.php";
                break;
            case "single_faculty_view":
                include "components/faculty_components/single_faculty_view.php";
                break;
            default:
                include "components/faculty_components/all_faculty_view.php";
        }

        ?>

    </main><!-- End #main -->

<?php include ("assets/includes/footer.php")?>