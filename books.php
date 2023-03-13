<?php include ("assets/includes/header.php")?>


    <main id="main">


        <?php
        $source = "";

        if(isset($_GET['source'])){
            $source = $_GET['source'];
        }
        switch ($source){
            case "all_books_view":
                include "components/books_components/all_books_view.php";
                break;
            case "single_books_view":
                include "components/books_components/single_books_view.php";
                break;
            case "search_books_result":
                include "components/books_components/search_books_result.php";
                break;
            default:
                include "components/books_components/all_books_view.php";
        }

        ?>

    </main><!-- End #main -->

<?php include ("assets/includes/footer.php")?>