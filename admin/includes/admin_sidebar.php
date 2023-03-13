<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">

<!-- Sidebar Content -->

        <?php
        if($_SESSION['user_role'] === 'super_admin'){ ?>


            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="typcn typcn-device-desktop menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                    <!--                <div class="badge badge-danger">new</div>-->
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#faculty_lus" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-folder-add menu-icon"></i>
                    <span class="menu-title">Faculty of LU</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="faculty_lus">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="faculty.php">View Faculty</a></li>
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Add New Faculty</a></li>-->
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#department" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-folder-add menu-icon"></i>
                    <span class="menu-title">Department of LU</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="department">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="department.php">View Department</a></li>
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Add New Faculty</a></li>-->
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#faculty_teacher" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user-add menu-icon"></i>
                    <span class="menu-title">Faculty Teacher of LU</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="faculty_teacher">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="faculty_teacher.php">View Teachers</a></li>
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of EEE</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of BBA</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of ENGLISH</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of ARCHITECTURE</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of CIVIL ENGINEERING</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of ISLAMIC STUDIES</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of PUBLIC HEALTH</a></li>-->
                        <!--                    <li class="nav-item"> <a class="nav-link" href="">Faculty of TOURISM & H.M.</a></li>-->

                    </ul>
                </div>
            </li>

            <!-- Library Admin Part -->
            <div class="section-dividor"></div>
            <h6 class="text-primary">Library Management</h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lus_books" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-book menu-icon"></i>
                    <span class="menu-title">Books Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lus_books">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="book_categories.php?source=add_categories">Add Category</a></li>
                        <li class="nav-item"> <a class="nav-link" href="book_categories.php?source=manage_categories">Manage Category</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lus_authors" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user menu-icon"></i>
                    <span class="menu-title">Books Authors</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lus_authors">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="book_author.php?source=add_author">Add Authors</a></li>
                        <li class="nav-item"> <a class="nav-link" href="book_author.php?source=manage_author">Manage Authors</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#books" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user menu-icon"></i>
                    <span class="menu-title">Lists of Books</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="books">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="books_lists.php?source=add_books">Add Books</a></li>
                        <li class="nav-item"> <a class="nav-link" href="books_lists.php?source=manage_books">Manage Books</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lusl_issue" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-bookmark menu-icon"></i>
                    <span class="menu-title">Lists of Issue Books</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lusl_issue">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="issue_books_lists.php?source=add_issue_books">Add Issues Books</a></li>
                        <li class="nav-item"> <a class="nav-link" href="issue_books_lists.php?source=manage_issue_books">Manage Issues Books</a></li>

                    </ul>
                </div>
            </li>

            <!-- Library Admin Part  End-->

            <div class="section-dividor"></div>

            <!-- Bus Management Admin -->
            <h6 class="text-primary">Bus Management</h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lus_bus" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-book menu-icon"></i>
                    <span class="menu-title">Bus Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lus_bus">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="bus_categories.php?source=add_categories">Add Category</a></li>
                        <li class="nav-item"> <a class="nav-link" href="bus_categories.php?source=manage_categories">Manage Category</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user menu-icon"></i>
                    <span class="menu-title">Title</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="">...</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">...</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user menu-icon"></i>
                    <span class="menu-title">Title</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="">...</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">...</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-bookmark menu-icon"></i>
                    <span class="menu-title">Title</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="">...</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">...</a></li>

                    </ul>
                </div>
            </li>

            <!-- Bus Management Admin End-->

            <div class="section-dividor"></div>

            <h6 class="text-primary">Project Thesis Proposal (LUMS)</h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#project" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-bookmark menu-icon"></i>
                    <span class="menu-title">Project / Thesis Proposal</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="project">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="">View Proposal Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">Manage Proposal Lists</a></li>

                    </ul>
                </div>
            </li>

            <div class="section-dividor"></div>
            <h6 class="text-primary">All Users</h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-bookmark menu-icon"></i>
                    <span class="menu-title">All Users</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="users.php">View All Users</a></li>

                    </ul>
                </div>
            </li>

            <div class="section-dividor"></div>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user-add-outline menu-icon"></i>
                    <span class="menu-title">Profiles</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="profile">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="user_profiles.php">View Profiles</a></li>

                    </ul>
                </div>
            </li>

        <?php }elseif($_SESSION['user_role'] === 'student'){ ?>
            <h6 class="text-primary">Project Thesis Proposal (LUMS)</h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#project" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-bookmark menu-icon"></i>
                    <span class="menu-title">Project / Thesis Proposal</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="project">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="">View Proposal Lists</a></li>
                        <li class="nav-item"> <a class="nav-link" href="">Manage Proposal Lists</a></li>

                    </ul>
                </div>
            </li>

            <div class="section-dividor"></div>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user-add-outline menu-icon"></i>
                    <span class="menu-title">Profiles</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="profile">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="user_profiles.php">View Profiles</a></li>

                    </ul>
                </div>
            </li>

       <?php }elseif($_SESSION['user_role'] === 'library_admin'){ ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="typcn typcn-device-desktop menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                    <!--                <div class="badge badge-danger">new</div>-->
                </a>
            </li>
            <!-- Library Admin Part -->
            <div class="section-dividor"></div>
            <h6 class="text-primary">Library Management</h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lus_books" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-book menu-icon"></i>
                    <span class="menu-title">Books Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lus_books">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="book_categories.php?source=add_categories">Add Category</a></li>
                        <li class="nav-item"> <a class="nav-link" href="book_categories.php?source=manage_categories">Manage Category</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lus_authors" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user menu-icon"></i>
                    <span class="menu-title">Books Authors</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lus_authors">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="book_author.php?source=add_author">Add Authors</a></li>
                        <li class="nav-item"> <a class="nav-link" href="book_author.php?source=manage_author">Manage Authors</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#books" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-user menu-icon"></i>
                    <span class="menu-title">Lists of Books</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="books">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="books_lists.php?source=add_books">Add Books</a></li>
                        <li class="nav-item"> <a class="nav-link" href="books_lists.php?source=manage_books">Manage Books</a></li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lusl_issue" aria-expanded="false" aria-controls="ui-basic">
                    <i class="typcn typcn-bookmark menu-icon"></i>
                    <span class="menu-title">Lists of Issue Books</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="lusl_issue">
                    <ul class="nav flex-column sub-menu">

                        <li class="nav-item"> <a class="nav-link" href="issue_books_lists.php?source=add_issue_books">Add Issues Books</a></li>
                        <li class="nav-item"> <a class="nav-link" href="issue_books_lists.php?source=manage_issue_books">Manage Issues Books</a></li>

                    </ul>
                </div>
            </li>

            <!-- Library Admin Part  End-->
        <?php }elseif($_SESSION['user_role'] === 'bus_admin'){?>

        <?php }elseif($_SESSION['user_role'] === 'teacher'){?>

        <?php }
        ?>



    </ul>

</nav>