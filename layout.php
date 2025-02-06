<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>AK Machinery Solutions - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
.bg-black-transparent {
    background-color: rgba(0, 0, 0, 0.8); /* Black with 80% opacity */
}

.navbar-dark .nav-link {
    color: #ffffff !important; /* Keep text white */
}

.navbar-dark .nav-link:hover {
    color: #007bff !important; /* Highlight on hover */
}

.navbar-dark .nav-link.active {
    color: #007bff !important; /* Active link color */
}
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

   <!-- Topbar Start -->
<div class="container-fluid bg-black-transparent d-none d-lg-block">
    <div class="row align-items-center">
        <!-- Left Section: Combined Logo -->
        <div class="col-lg-3 col-md-12 d-flex align-items-center">
            <div style="display: flex; align-items: center;">
                <!-- Upper Logo -->
                <img src="img/logo-atas.png" alt="Logo Atas" style="height: 75px;">
                <!-- Lower Logo Below -->
                <img src="img/logo-bawah.png" alt="Logo Bawah" style="height: 50px;">
            </div>
        </div>
        <div class="col-lg-9 col-md-12 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="fa fa-map-marker-alt text-primary me-2"></i>
                <p class="m-0 text-white">Kawasan Perindustrian Ehsan Jaya, Kuala Lumpur</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <i class="far fa-envelope-open text-primary me-2"></i>
                <p class="m-0 text-white">ak_machinerysolutions@yahoo.com</p>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.facebook.com/share/1DR2CbyBod/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.tiktok.com/@akmachinerysolutions?_t=ZS-8tIOL46XUxu&_r=1"><i class="fab fa-tiktok"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.instagram.com/akmachinerysolutions?igsh=bGR6dXh6YW12a3py"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<?php include('navbar.php'); ?>

    <!-- Yield section to include content specific to each page -->
    <?php echo $content; ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No. 215, Jalan 1, Taman Perindustrian Ehsan Jaya, Kepong, Kuala Lumpur, Malaysia, 52100</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>03-62620120</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ak_machinerysolutions@yahoo.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/share/1DR2CbyBod/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@akmachinerysolutions?_t=ZS-8tIOL46XUxu&_r=1"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/akmachinerysolutions?igsh=bGR6dXh6YW12a3py"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Saturday:</h6>
                    <p class="mb-4">08.30 AM - 05.30 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="">Food Processing Machinery</a>
                    <a class="btn btn-link" href="">Industrial Machinery & Equipments</a>
                    <a class="btn btn-link" href="">Stainless Steel Fabrication</a>
                    <a class="btn btn-link" href="">Electrical Switch Board & Control Panel</a>
                    <a class="btn btn-link" href="">Spare Parts & Tools Supply</a>
                    <a class="btn btn-link" href="">Layout Planning & Design</a>
                    <a class="btn btn-link" href="">Consultation</a>
                    <a class="btn btn-link" href="">After Sales Service</a>
                </div>                             
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Stay updated with our latest services and offers.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Ak Machinery Solutions</a>, All Right Reserved.
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
