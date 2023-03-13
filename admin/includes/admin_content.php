<div class="row">

    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-3">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Faculty</p>
                        <?php

                        $query = "SELECT * FROM faculty";
                        $query_fetch_faculty = mysqli_query($connection,$query);
                        $query_fetch_faculty_count = mysqli_num_rows($query_fetch_faculty);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_faculty_count; ?></h1>

                    </div>
                    <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                </div>
                <a href="faculty.php" class="btn btn-primary form-control">View Faculty</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total  Department</p>
                        <?php

                        $query = "SELECT * FROM department";
                        $query_fetch_department = mysqli_query($connection,$query);
                        $query_fetch_department_count = mysqli_num_rows($query_fetch_department);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_department_count; ?></h1>

                    </div>
                    <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                </div>
                <a href="department.php" class="btn btn-primary form-control">View  Department</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Teachers</p>
                        <?php

                        $query = "SELECT * FROM faculty_teachers";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="faculty_teacher.php" class="btn btn-primary form-control">View  </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Books Categories  </p>
                        <?php

                        $query = "SELECT * FROM books_category";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="book_categories.php?source=manage_categories" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Books Authors  </p>
                        <?php

                        $query = "SELECT * FROM books_authors";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="book_author.php?source=manage_author" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Books  </p>
                        <?php

                        $query = "SELECT * FROM books_list";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="books_lists.php?source=manage_books" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Issue Books  </p>
                        <?php

                        $query = "SELECT * FROM issue_book";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="issue_books_lists.php?source=manage_issue_books" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Buses Category  </p>
                        <?php

                        $query = "SELECT * FROM buses_category";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="bus_categories.php?source=manage_categories" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Buses List  </p>
                        <?php

                        $query = "SELECT * FROM buses_listed";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="bus_lists.php?source=manage_bus" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Buses Issue  </p>
                        <?php

                        $query = "SELECT * FROM buses_issued";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="issue_bus.php?source=manage_issue_bus" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Buses Route  </p>
                        <?php

                        $query = "SELECT * FROM bus_route";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="bus_route.php?source=manage_route" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                        <p class="mb-2 text-md-center text-lg-left">Total Register Users </p>
                        <?php

                        $query = "SELECT * FROM users";
                        $query_fetch = mysqli_query($connection,$query);
                        $query_fetch_count = mysqli_num_rows($query_fetch);

                        ?>
                        <h1 class="mb-0"><?php echo $query_fetch_count; ?></h1>

                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                </div>
                <a href="users.php" class="btn btn-primary form-control">View </a>
            </div>
        </div>
    </div>

</div>


