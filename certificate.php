<?php
$content = '

    <!-- Certificates Section Start -->
    <section id="certificate" class="certificate section">
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="certificate-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter">All</li>
                    <li data-filter=".filter-certificate">Certificates</li>
                    <!-- Add more filters if needed -->
                </ul><!-- End certificate Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <!-- Certificate Items -->
                    <div class="col-lg-4 col-md-6 certificate-item isotope-item filter-certificate">
                        <div class="certificate-content h-100">
                            <img src="img/certificate1.jpg" class="img-fluid" alt="Certificate 1">
                            <div class="certificate-info">
                                <h4>Certificate 1</h4>
                                <p>Description of Certificate 1</p>
                                <a href="img/certificate1.jpg" title="Certificate 1" data-gallery="certificate-gallery-certificate" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="certificate-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Certificate Item -->
                    <div class="col-lg-4 col-md-6 certificate-item isotope-item filter-certificate">
                        <div class="certificate-content h-100">
                            <img src="img/certificate1.jpg" class="img-fluid" alt="Certificate 1">
                            <div class="certificate-info">
                                <h4>Certificate 1</h4>
                                <p>Description of Certificate 1</p>
                                <a href="img/certificate1.jpg" title="Certificate 1" data-gallery="certificate-gallery-certificate" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="certificate-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    

                    <!-- Add more certificate items as needed -->
                </div><!-- End certificate Container -->
            </div>
        </div>
    </section>
    <!-- Certificates Section End -->
';
include('layout.php');
