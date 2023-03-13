<?php include ("assets/includes/header.php")?>


    <main id="main">


        <?php
        $source = "";

        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }
        switch ($source){
            case "all_bus_view":
                include "components/bus_components/all_bus_view.php";
                break;

        }

        ?>

    </main><!-- End #main -->

<?php include ("assets/includes/footer.php")?>