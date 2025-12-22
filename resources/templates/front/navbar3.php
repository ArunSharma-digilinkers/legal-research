<div class="container-fluid">
    <div class="top-nav">
        <ul class="top-nav-social">
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href=""><i class="fab fa-youtube"></i></a></li>
        </ul>
        <ul class="top-nav-details">
            <li class="top-nav-details__item">
                <i class="fa-solid fa-phone"></i>
                <span class="top-nav-details__content"><a href="tel:911000010000">+91-1000010000</a></span>
            </li>
            <li class="top-nav-details__item">
                <i class="fa-solid fa-envelope"></i>
                <span class="top-nav-details__content"><a href="mailto:info@example.com">info@example.com</a></span>
            </li>
        </ul>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <a class="navbar-brand" href="<?php echo $path; ?>">
        <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img">
        <img src="<?php echo $path; ?>img/logo-white.png" alt="" class="img-fluid logo-img dark-mode">
    </a>
    <div class="container nav-container">
        <button class="navbar-toggler menu-toggle" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
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
                <li class="nav-item">
                    <form action="" class="search-form">
                        <input type="text" class="form-control" placeholder="&nbsp;&nbsp; Search">
                        <button type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="scroll-point"></div>