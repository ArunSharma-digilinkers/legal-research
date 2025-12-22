<nav class="navbar navbar-expand-lg navbar-light bg-light dd-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $path; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown-nav">
                    <a class="nav-link dropdown-nav-link">About Us</a>
                    <i class="fa-solid fa-chevron-down hidden-menu"></i>
                    <ul class="sub-drop sub-menu">
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Vision & Mission</a></li>
                        <li><a href="#">Network</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown-nav dropdown-mega">
                    <a class="nav-link dropdown-nav-link">Products</a>
                    <i class="fa-solid fa-chevron-down hidden-menu"></i>
                    <div class="menu-choices sub-drop sub-menu">

                        <!-- For larger screens -->
                        <div class="menu-choices-flex">
                            <div class="menu-choice-brands">
                                <h5 class="menu-title">By Brands</h5>
                                <ul class="sub-lists">
                                    <li class="sub-list-li">
                                        <img src="<?php echo $path; ?>img/demo.jpg" alt="" class="img-fluid" />
                                    </li>
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul>
                            </div>
                            <div class="menu-choice-series">
                                <h5 class="menu-title">By Series</h5>
                                <ul class="sub-lists">
                                    <li class="sub-list-li">
                                        <img src="<?php echo $path; ?>img/demo.jpg" alt="" class="img-fluid" />
                                    </li>
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul>
                            </div>
                            <div class="menu-choice-applications">
                                <h5 class="menu-title">By Application</h5>
                                <ul class="sub-lists">
                                    <li class="sub-list-li">
                                        <img src="<?php echo $path; ?>img/demo.jpg" alt="" class="img-fluid" />
                                    </li>
                                    <li><a href="#">Item 1</a></li>
                                    <li><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- For mobile size -->
                        <div class="menu-choices-sm">
                            <ul class="menu-list-sm">
                                <li>
                                    By Brands
                                    <ul class="menu-sublist-sm">
                                        <li><a href="#">Item 1</a></li>
                                        <li><a href="#">Item 2</a></li>
                                        <li><a href="#">Item 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    By Series
                                    <ul class="menu-sublist-sm">
                                        <li><a href="#">Item 1</a></li>
                                        <li><a href="#">Item 2</a></li>
                                        <li><a href="$">Item 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    By Application
                                    <ul class="menu-sublist-sm">
                                        <li><a href="#">Item 1</a></li>
                                        <li><a href="#">Item 2</a></li>
                                        <li><a href="#">Item 3</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>component">Components</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Navbar</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>nav-components">Dropdown Navbar</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>