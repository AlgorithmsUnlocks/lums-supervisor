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

</div>




<div class="row">
    <ul>
        <div class="section-dividor"></div>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="typcn typcn-film menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="typcn typcn-chart-pie-outline menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="typcn typcn-th-small-outline menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="typcn typcn-user-add-outline menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="typcn typcn-globe-outline menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html">
                <i class="typcn typcn-mortar-board menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</div>