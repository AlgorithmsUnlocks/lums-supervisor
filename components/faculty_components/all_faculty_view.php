<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <div class="counters">
                <?php
                $query = "SELECT * FROM `faculty`";
                $query_fetch_faculty = mysqli_query($connection,$query);
                $query_count = mysqli_num_rows($query_fetch_faculty);
                ?>
                <span><?php echo $query_count?></span>
            </div>
            <h2>All Faculty of <span class="text-bg-primary p-1">Leading University</span></h2>
            <h6>Here you can see all the faculty of Leading University</h6>
        </div>

        <div class="row">

            <?php

            $query = "SELECT * FROM `faculty`";
            $query_fetch_faculty = mysqli_query($connection,$query);
            confirmQuery($query_fetch_faculty);
            while ($row = mysqli_fetch_assoc($query_fetch_faculty)){
                $id = $row['id'];
                $faculty_name = $row['faculty_name'];
                $dean_name = $row['dean_name'];
                $dean_title = $row['dean_title'];
                $dean_tel = $row['dean_tel'];
                $dean_cell = $row['dean_cell'];
                $dean_email = $row['dean_email'];
                $dean_photo = $row['dean_photo'];
                ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <img src="upload/faculty.png" width="100" viewBox="0 0 600 600"/>
                        </div>
                        <h4><a href="faculty.php?source=single_faculty_view&id=<?php echo $id ?>"><?php echo $faculty_name ?></a></h4>
                        <h6>
                            <?php
                            echo $dean_title.", <span class='text-primary'>".$dean_name."</span>";
                            ?>
                        </h6>
                    </div>
                </div>

                <?php
            }
            ?>



        </div>

    </div>
</section><!-- End Service  Section -->