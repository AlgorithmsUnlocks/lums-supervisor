<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <div class="counters">
                <?php
                $query = "SELECT * FROM `buses_issued`";
                $query_fetch_bus = mysqli_query($connection,$query);
                $query_count = mysqli_num_rows($query_fetch_bus);
                ?>
                <span><?php echo $query_count?></span>
            </div>
            <h2>All Bus of <span class="text-bg-primary p-1">LU</span></h2>

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

            $query = "SELECT * FROM `buses_issued`";
            $query_fetch_bus = mysqli_query($connection,$query);
            confirmQuery($query_fetch_bus);
            while ($row = mysqli_fetch_assoc($query_fetch_bus)){

                $id = $row['id'];
                $bus_name  = $row['bus_name'];
                $route_number = $row['route_number'];
                $start_location = $row['start_location'];
                $start_time = $row['start_time'];
                $category_status = $row['category_status'];

                ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <h4><?php echo "Liscense Number : ".$bus_name ?></h4>
                        <h4><?php echo "Route Number : ".$route_number ?></h4>
                        <h4><?php echo "Start Location : ".$start_location ?></h4>
                        <h4><?php echo "Start Time : ".$start_time ?></h4>
                    </div>
                </div>

                <?php
            }
            ?>



        </div>

    </div>
</section><!-- End Service  Section -->