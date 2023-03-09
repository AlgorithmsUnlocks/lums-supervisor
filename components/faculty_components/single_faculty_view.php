<?php
if(isset($_GET['id'])){
    echo $id = $_GET['id'];
}else{
    header("Location: faculty.php");
}

$query = "SELECT * FROM `faculty` WHERE id='$id'";
$query_fetch_faculty = mysqli_query($connection,$query);
confirmQuery($query_fetch_faculty);
while ($row = mysqli_fetch_assoc($query_fetch_faculty)) {
    $id = $row['id'];
    $faculty_name = $row['faculty_name'];
    $dean_name = $row['dean_name'];
    $dean_title = $row['dean_title'];
    $dean_tel = $row['dean_tel'];
    $dean_cell = $row['dean_cell'];
    $dean_email = $row['dean_email'];
    $dean_photo = $row['dean_photo'];
}

?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Faculty Details</h2>
            <ol>
                <li><a href="faculty.php">Faculty</a></li>
                <li><?php echo $dean_name; ?></li>
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
                    <h3 class="text-center">Dean Information</h3>
                   <div class="text-center">
                       <img src="upload/<?php echo $dean_photo ?>" class="img-fluid" style="width: 150px; border-radius: 20px; box-shadow: 0px 0 30px rgb(18 66 101 / 8%); margin: 15px 0;"/>
                        <h5 class="text-primary"> <?php echo $dean_name?></h5>
                   </div>
                    <ul>
                        <li><strong>Faculty Name </strong>: <?php echo $faculty_name?></li>
                        <li><strong>Tel. Office </strong>: <?php echo $dean_tel?></li>
                        <li><strong>Cell Phone </strong>: <?php echo $dean_cell?></li>
                        <li><strong>Email Address </strong>: <?php echo $dean_email?></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->