<?php
$page = 'product';
ob_start();
?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Product</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Products Section -->
<div class="container py-5">
    <h2 class="section-title">Our Products</h2>
    <div class="row gy-4">

        <!-- Machinery Category -->
        <div class="col-md-4">
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#machineryModal">
                <i class="fas fa-blender"></i>
                <h5>MACHINERY</h5>
                <p>Products related to maintenance and support tools.</p>
            </div>
        </div>

        <!-- Conveyors Category -->
        <div class="col-md-4">
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#conveyorsModal">
                <i class="fas fa-dolly-flatbed"></i>
                <h5>CONVEYORS</h5>
                <p>State-of-the-art electrical products for all needs.</p>
            </div>
        </div>

        <!-- Stainless Steel Fabrications Category -->
        <div class="col-md-4">
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#stainlessSteelModal">
                <i class="fas fa-users-cog"></i>
                <h5>STAINLESS STEEL FABRICATIONS</h5>
                <p>High-quality stainless steel products for various industries.</p>
            </div>
        </div>

    </div>
</div>
<!-- Products Section End -->

<!-- Include Modals -->
<?php include 'modals.php'; ?>

<!-- Product Video Section -->
<div class="container-fluid my-5 px-0">
    <div class="video wow fadeInUp" data-wow-delay="0.1s">
        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="img/Media1.mp4" data-bs-target="#videoModal">
            <span></span>
        </button>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Product Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="img/Media1.mp4" id="video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-white mb-4">Wire Belt Conveyors</h1>
        <h3 class="text-white mb-0">24 Hours 7 Days a Week</h3>
    </div>
</div>
<!-- Product Video Section End -->

<?php
$content = ob_get_clean();
include('layout.php');
?>
