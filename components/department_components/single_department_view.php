<?php
if(isset($_GET['id'])){
    echo $id = $_GET['id'];
}else{
    header("Location: faculty.php");
}

$query = "SELECT * FROM `department` WHERE department_id='$id'";
$query_fetch_department = mysqli_query($connection,$query);
confirmQuery($query_fetch_department);
while ($row = mysqli_fetch_assoc($query_fetch_department)) {

    $department_id = $row['department_id'];
    $department_name = $row['department_name'];
    $head_name = $row['head_name'];
    $head_email = $row['head_email'];
    $head_phone = $row['head_phone'];
    $head_description = $row['head_description'];
    $head_photo = $row['head_photo'];
}

?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Department Details</h2>
            <ol>
                <li><a href="department.php">Department</a></li>
                <li><?php echo $head_name; ?></li>
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
                    <h3 class="text-center">Department Head Information</h3>
                   <div class="text-center">
                       <img src="upload/<?php echo $head_photo ?>" class="img-fluid" style="width: 150px; border-radius: 20px; box-shadow: 0px 0 30px rgb(18 66 101 / 8%); margin: 15px 0;"/>
                        <h5 class="text-primary"> <?php echo $head_name ?></h5>
                   </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>Department Name : </strong></p>
                        <p><?php echo $department_name?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>Phone Number : </strong></p>
                        <p><?php echo $head_phone?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p><strong>Email Address : </strong></p>
                        <p><?php echo $head_email?></p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Details Section -->