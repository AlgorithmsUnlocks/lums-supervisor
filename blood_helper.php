<?php include ("assets/includes/header.php")?>


    <main id="main">


        <?php
        $source = "";

        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }
        switch ($source){
            case "all_blood_helper_view":
                include "components/blood_components/all_blood_helper_view.php";
                break;
            case "search_blood_helper_result":
                include "components/blood_components/search_blood_helper_result.php";
                break;
            default:
                include "components/blood_components/all_blood_helper_view.php";
        }

        ?>

    </main><!-- End #main -->

<?php include ("assets/includes/footer.php")?>