<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">

            <h4> Search Result ... </h4>

            <div class="col-md-6 m-auto">
                <div class="search-form">
                    <form action="books.php?source=search_books_result" method="post">
                        <input type="text" name="search_text" placeholder="Search">
                        <input type="submit" value="Search" name="search_btn">
                    </form>
                </div>
            </div>

        </div>

        <div class="row">

<?php

    if(isset($_POST['search_btn'])){

        global $connection;
        $search_text = $_POST['search_text'];

        if(!empty($search_text)){
            $query = "SELECT * FROM books_list WHERE book_name LIKE '%$search_text%'";

            $search_query = mysqli_query($connection, $query);

            if(!$search_query){
                die("QUERY FAILED".mysqli_connect_error());

            }else{
                $count = mysqli_num_rows($search_query);
                if($count == 0){
                    echo "<h2 class='not-found text-center'>No Result Found </h2>";
                }else{

                    while($row = mysqli_fetch_assoc($search_query)){

                        $id = $row['id'];
                        $book_photo = $row['book_photo'];
                        $book_name = $row['book_name'];
                        $isbn_number = $row['isbn_number'];
                        $book_author = $row['book_author'];
                        $book_category = $row['book_category'];
                        $book_copies = $row['book_copies'];
                        $book_self = $row['book_self'];
                        ?>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <img src="upload/<?php echo $row['book_photo']; ?>" class="img-fluid" style="border-radius: 10px; height: 160px; width: 160px"/>
                                <h4><a href="books.php?source=single_books_view&id=<?php echo $id  ?>"> <?php echo $book_name.",<span style='font-size: 16px; color: #007aff'> Writer of the books ".$book_author."</span>" ?></a></h4>
                            </div>
                        </div>

                        <?php

                    }

                }
            }
        }else{
            header("Location: books.php");
        }

    }else{
        header("Location: books.php");
    }


?>

        </div>

    </div>
</section><!-- End Service  Section -->
