<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>LEADING UNIVERSITY MANAGEMENT SYSTEM</h1>
                <h2><i>a promise to lead ... </i></h2>

            </div>
        </div>

        <div class="row icon-boxes">
            <h1 class="text-center text-primary">Our Featured</h1>
            <?php

            $feature = array(
              'Student Registration with Proper Validation',
              'Student Login System',
              'Login Authentication for Admin',
              'Login Authentication for Library Admin',
              'Login Authentication for Bus Admin',
              'Login Authentication for Teacher',
              'Faculty Dean Sector Management',
              'Faculty Teacher Sector Management',
              'Department Information Management',
              'Bus Schedule Management',
              'Bus Schedule Management',
              'Faculty Management',
              'Department Management',
              'Library Management',
              'Bus Management',
              'Blood Helper Management',
            );

            foreach ($feature as $value){ ?>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 mt-5" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href=""><?php echo $value ?></a></h4>
                        <p class="description">Here you can manage this featured with proper method</p>
                    </div>
                </div>

           <?php }

            ?>


        </div>
    </div>
</section><!-- End Hero -->