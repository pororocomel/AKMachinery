<div class="container-fluid nav-bar bg-black-transparent">
    <nav class="navbar navbar-expand-lg navbar-light bg-black p-3 py-lg-0 px-lg-4">
        <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
            <h1 class="text-primary m-0">AK Machinery Solution</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a href="index.php" class="nav-item nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>">About Us</a>
                <a href="portfolio.html" class="nav-item nav-link <?php echo ($page == 'portfolio') ? 'active' : ''; ?>">Portfolio</a>
                <a href="certificate.php" class="nav-item nav-link <?php echo ($page == 'certificate') ? 'active' : ''; ?>">Certificate</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo ($page == 'pages') ? 'active' : ''; ?>" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="product.html" class="dropdown-item">Product</a>
                        <a href="team.html" class="dropdown-item">Organizational Chart</a>
                        <a href="service.html" class="dropdown-item">Service</a>
                    </div>
                </div>
            </div>
            <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                    <i class="fa fa-phone-alt text-primary"></i>
                </div>
                <div class="ms-3">
                    <a href="contact.html" style="text-decoration: none;">
                        <p class="mb-1 text-white">Contact Us</p>
                        <h5 class="m-0 text-secondary">03-62620120</h5>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
