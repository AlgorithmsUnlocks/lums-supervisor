<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$query = "SELECT * FROM `books_list` WHERE id ='$id'";
$query_fetch_books = mysqli_query($connection,$query);
confirmQuery($query_fetch_books);
while ($row = mysqli_fetch_assoc($query_fetch_books)) {

    $id = $row['id'];
    $book_photo = $row['book_photo'];
    $book_name = $row['book_name'];
    $isbn_number = $row['isbn_number'];
    $book_author = $row['book_author'];
    $book_category = $row['book_category'];
    $book_copies = $row['book_copies'];
    $book_self = $row['book_self'];
}

?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><?php echo $book_name?></h2>
            <ol>
                <li><a href="books.php">Books</a></li>
                <li><?php echo $book_author; ?></li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 m-auto">
                <div class="portfolio-info">
                    <h3 class="text-center">Book Information</h3>
                   <div class="text-center">
                       <img src="upload/<?php echo $book_photo ?>" class="img-fluid" style="width: 150px; border-radius: 20px; box-shadow: 0px 0 30px rgb(18 66 101 / 8%); margin: 15px 0;"/>
                        <h5 class="text-primary"> <?php echo $book_name." <span class='text-danger'>".$book_author."</span>" ?></h5>
                   </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>Books Categories : </strong></p>
                        <p><?php echo $book_category?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>Number of Copies : </strong></p>
                        <p><?php echo $book_copies?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>ISBN Number : </strong></p>
                        <p><?php echo $isbn_number?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>Book Self : </strong></p>
                        <p><?php echo $book_self?></p>
                    </div>

                </div>
            </div>

        </div>


    </div>
</section><!-- End Portfolio Details Section -->