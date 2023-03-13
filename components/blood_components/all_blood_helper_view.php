<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <div class="counters">
                <?php
                $query = "SELECT * FROM `users`";
                $query_fetch_users = mysqli_query($connection,$query);
                $query_count = mysqli_num_rows($query_fetch_users);
                ?>
                <span><?php echo $query_count?></span>
            </div>
            <h2>All Blood Helper of <span class="text-bg-primary p-1">LU</span></h2>

          <div class="col-md-6 m-auto">
              <div class="search-form">
                  <form action="blood_helper.php?source=search_blood_helper_result" method="post">
                      <input type="text" name="search_text" placeholder="Search">
                      <input type="submit" value="Search" name="search_btn">
                  </form>
              </div>
          </div>


        </div>

        <div class="row">

            <?php

            $query = "SELECT * FROM `users`";
            $query_fetch_users = mysqli_query($connection,$query);
            confirmQuery($query_fetch_users);
            while ($row = mysqli_fetch_assoc($query_fetch_users)){

                $user_id  = $row['id'];
                $name  = $row['name'];
                $email  = $row['email'];
                $phone = $row['phone'];
                $st_id  = $row['st_id'];
                $department = $row['department'];
                $dob  = $row['dob'];
                $blood_group = $row['blood_group'];
                $profile = $row['profile'];
                $user_role = $row['user_role'];
                $create_date = $row['create_date'];

                ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <img src="upload/<?php echo $row['profile']; ?>" class="img-fluid" style="border-radius: 10px; height: 160px; width: 160px"/>
                        <h4><?php echo $name.",<span style='font-size: 16px; color: #007aff'> Blood group :  ".$blood_group."</span>" ?></h4>
                        <div class="personals-blood">
                            <p><strong>Phone Number : </strong> <?php echo $phone?></p>
                            <p><strong>Email Address : </strong> <?php echo $email?></p>
                            <p><strong>User Title : </strong> <?php echo $user_role?></p>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>



        </div>

    </div>
</section><!-- End Service  Section -->