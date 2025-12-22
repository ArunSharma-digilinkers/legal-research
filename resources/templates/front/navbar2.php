<div class="top-nav">
    <a class="navbar-brand" href="<?php echo $path; ?>">
        <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img">
        <img src="<?php echo $path; ?>img/logo-white.png" alt="" class="img-fluid logo-img dark-mode">
    </a>
    <div class="top-nav-details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="top-nav-details__opening">
                        <i class="fa-solid fa-calendar-days"></i>
                        <div class="top-nav-details__content">
                            <span>Opening Hour</span>
                            <span>Mon-Fri: 9:00 to 6:00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="top-nav-details__phone">
                        <i class="fa-solid fa-phone"></i>
                        <div class="top-nav-details__content">
                            <span>Call us</span>
                            <span><a href="tel:911000010000">+91-1000010000</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="top-nav-details__mail">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="top-nav-details__content">
                            <span>Email us</span>
                            <span><a href="mailto:info@example.com">info@example.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container nav-container">
        <button class="navbar-toggler menu-toggle" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>about-us">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>component">Components</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Navbar</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $path; ?>nav-components">Dropdown Navbar</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>contact-us">Contact</a>
                </li>
                <li class="nav-item nav-item-modal">
                    <a class="nav-link btn c-btn btn-show-modal" href="#">Quick Enquiry</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-point"></div>