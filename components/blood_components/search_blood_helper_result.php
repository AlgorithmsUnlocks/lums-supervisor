<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">

            <h4> Search Result ... </h4>

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

    if(isset($_POST['search_btn'])){

        global $connection;
        $search_text = $_POST['search_text'];

        if(!empty($search_text)){
            $query = "SELECT * FROM users WHERE blood_group LIKE '%$search_text%'";

            $search_query = mysqli_query($connection, $query);

            if(!$search_query){
                die("QUERY FAILED".mysqli_connect_error());

            }else{
                $count = mysqli_num_rows($search_query);
                if($count == 0){
                    echo "<h2 class='not-found text-center'>No Result Found </h2>";
                }else{

                    while($row = mysqli_fetch_assoc($search_query)){
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

                }
            }
        }else{
            header("Location: blood_helper.php");
        }

    }else{
        header("Location: blood_helper.php");
    }


?>

        </div>

    </div>
</section><!-- End Service  Section -->
