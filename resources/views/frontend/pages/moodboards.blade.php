@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/moodboards.css') }}">
    <nav class="navbar navbar-expand-lg mb-nav">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" href="index.html">totaloffice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mbNav"
                aria-controls="mbNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="mbNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="mb-hero">
        <div class="container px-3 px-md-4">
            <div class="mb-breadcrumb">Home / Bespoke Solutions / Moodboards</div>
            <h1 class="mb-title mb-0">Moodboards</h1>
        </div>
    </section>

    <div class="container px-3 px-md-4">
        <!-- Filters -->
        <div class="mb-filters">
            <div class="dropdown">
                <button class="btn mb-filter-btn dropdown-toggle" data-bs-toggle="dropdown" type="button">By Space</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Office</a></li>
                    <li><a class="dropdown-item" href="#">Hospitality</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn mb-filter-btn dropdown-toggle" data-bs-toggle="dropdown" type="button">By Color</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Blue</a></li>
                    <li><a class="dropdown-item" href="#">Neutral</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn mb-filter-btn dropdown-toggle" data-bs-toggle="dropdown" type="button">By Brand</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Brand A</a></li>
                    <li><a class="dropdown-item" href="#">Brand B</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn mb-filter-btn dropdown-toggle" data-bs-toggle="dropdown" type="button">By Product
                    Type</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Furniture</a></li>
                    <li><a class="dropdown-item" href="#">Fabric</a></li>
                </ul>
            </div>
        </div>

        <!-- Cards grid -->
        <div class="mb-grid">
            <div class="mb-card">
                <div class="mb-card-top">
                    <i class="fa-solid fa-heart mb-pin"></i>
                    <i class="fa-regular fa-image mb-illus"></i>
                </div>
                <div class="mb-card-body">
                    <h4 class="mb-card-title">The Orange Blossom</h4>
                    <div class="mb-card-desc">Dignissim sed sit mattis. Elit adipiscing pretium sed neque nam.</div>
                </div>
            </div>
            <div class="mb-card">
                <div class="mb-card-top">
                    <i class="fa-regular fa-bookmark mb-pin"></i>
                    <i class="fa-regular fa-image mb-illus"></i>
                </div>
                <div class="mb-card-body">
                    <h4 class="mb-card-title">The Beauty of Olea</h4>
                    <div class="mb-card-desc">Dignissim sed sit mattis. Elit adipiscing pretium sed neque nam.</div>
                </div>
            </div>
            <div class="mb-card">
                <div class="mb-card-top">
                    <i class="fa-regular fa-bookmark mb-pin"></i>
                    <i class="fa-regular fa-image mb-illus"></i>
                </div>
                <div class="mb-card-body">
                    <h4 class="mb-card-title">From Pink Salt to Pink Sand !</h4>
                    <div class="mb-card-desc">Dignissim sed sit mattis. Elit adipiscing pretium sed neque nam.</div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mb-pagination">
            <a class="mb-page-link" href="#"><i class="fas fa-chevron-left me-1"></i> Prev Page</a>
            <span class="mb-page-num active">1</span>
            <a class="mb-page-link" href="#">2</a>
            <a class="mb-page-link" href="#">3</a>
            <a class="mb-page-link" href="#">4</a>
            <a class="mb-page-link" href="#">Next Page <i class="fas fa-chevron-right ms-1"></i></a>
        </div>
    </div>

    <!-- Footer (same as your design) -->
    <footer class="footer-section">
        <div class="footer-wrapper">
            <div class="footer-top">
                <div class="footer-brand">
                    <div class="footer-logo">totaloffice</div>
                </div>
                <div>
                    <div class="footer-column-title">Services</div>
                    <div class="footer-links">
                        <a href="#" class="footer-link">Services</a>
                        <a href="#" class="footer-link">Initiatives</a>
                        <a href="#" class="footer-link">About</a>
                        <a href="#" class="footer-link">News Us</a>
                        <a href="#" class="footer-link">Sign Up</a>
                        <a href="#" class="footer-link">Sign In</a>
                    </div>
                </div>
                <div>
                    <div class="footer-column-title">All Products</div>
                    <div class="footer-links">
                        <a href="#" class="footer-link">Furniture</a>
                        <a href="#" class="footer-link">Acoustic Products</a>
                        <a href="#" class="footer-link">Writable surfaces</a>
                        <a href="#" class="footer-link">Fabrics</a>
                        <a href="#" class="footer-link">Greenwalls</a>
                    </div>
                </div>
                <div>
                    <div class="footer-column-title">Contact Us</div>
                    <div class="footer-links">
                        <a href="#" class="footer-link">Careers</a>
                        <a href="#" class="footer-link">Book a Visit</a>
                        <a href="#" class="footer-link">Book a Call</a>
                        <a href="#" class="footer-link">Track Order</a>
                    </div>
                </div>
                <div class="footer-newsletter">
                    <div class="footer-column-title">Subscribe to newsletter</div>
                    <div class="newsletter-input-wrapper">
                        <input type="email" class="newsletter-input" placeholder="enter email" />
                        <button class="newsletter-btn"><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <div class="social-icons">
                        <a href="#" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright">© 2022 Total Office. All rights reserved.</div>
                <div class="footer-bottom-links"><a href="#" class="footer-bottom-link">Privacy Policy</a><span
                        style="color:#e0e0e0" class="mx-2">|</span><a href="#" class="footer-bottom-link">Terms
                        of use</a></div>
                <div class="footer-credit">Made with <span style="color:#ff6b6b">❤</span> by tentwenty</div>
            </div>
        </div>
    </footer>




@endsection
