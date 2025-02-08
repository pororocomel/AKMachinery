<?php
$page = 'certificate';
ob_start();
?>

<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container position-relative">
        <h1>Certificates</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li class="current">Certificates</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-product">Product</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-books">Books</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                <?php
                // Fetch images from the "img" folder dynamically
                $img_folder = 'img/';
                $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
                $portfolio_items = [];

                if (is_dir($img_folder)) {
                    $files = scandir($img_folder);
                    foreach ($files as $file) {
                        $file_path = $img_folder . $file;
                        $file_ext = pathinfo($file, PATHINFO_EXTENSION);

                        if (in_array(strtolower($file_ext), $allowed_extensions)) {
                            $portfolio_items[] = [
                                'image' => $file_path,
                                'title' => ucfirst(pathinfo($file, PATHINFO_FILENAME)), // Filename as title
                                'category' => 'filter-app' // Default category (can be customized)
                            ];
                        }
                    }
                }

                // Display images dynamically
                foreach ($portfolio_items as $item) {
                    echo "<div class='col-lg-4 col-md-6 portfolio-item isotope-item {$item['category']}'>
                            <div class='portfolio-content h-100'>
                                <img src='{$item['image']}' class='img-fluid' alt='{$item['title']}'>
                                <div class='portfolio-info'>
                                    <h4>{$item['title']}</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href='{$item['image']}' title='{$item['title']}' data-gallery='portfolio-gallery' class='glightbox preview-link'><i class='bi bi-zoom-in'></i></a>
                                    <a href='portfolio-details.php' title='More Details' class='details-link'><i class='bi bi-link-45deg'></i></a>
                                </div>
                            </div>
                          </div>";
                }
                ?>
            </div><!-- End Portfolio Container -->

        </div>
    </div>
</section><!-- /Portfolio Section -->

<?php
$content = ob_get_clean();
include('layout.php');
?>
