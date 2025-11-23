@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/product-detail.css') }}">
       <nav class="navbar navbar-expand-lg pd-nav">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" href="index.html">totaloffice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pdNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="pdNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="pd-hero">
        <div class="container px-3 px-md-4">
            <div class="d-flex justify-content-between align-items-start">
                <div class="pd-breadcrumb">Home / Products / Moss upholstery fabric</div>
                <div class="pd-share">Share: <a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i
                            class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a
                        href="#"><i class="fas fa-link"></i></a></div>
            </div>
            <h1 class="pd-title">Moss Upholstery Fabric</h1>
            <div class="pd-price">$ 1,200</div>
            <div class="pd-cta-wrap">
                <button class="pd-btn primary">Add to Enquiry Basket</button>
                <button class="pd-btn"><i class="fa-regular fa-heart me-1"></i> Add to Favorites</button>
            </div>
        </div>
    </section>

    <!-- Visual section (two boxes) -->
    <section class="py-4">
        <div class="container px-3 px-md-4">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="pd-illus"></div>
                </div>
                <div class="col-md-6">
                    <div class="pd-illus"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specification with Tabs -->
    <section class="pd-spec">
        <div class="container px-3 px-md-4">
            <h2>Specification</h2>
            <ul class="nav nav-pills justify-content-center pd-tabs" id="specTabs" role="tablist">
                <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill"
                        data-bs-target="#pinfo" type="button">Product Information</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
                        data-bs-target="#materials" type="button">Materials</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
                        data-bs-target="#assets" type="button">Assets</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
                        data-bs-target="#care" type="button">Care Instructions</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
                        data-bs-target="#assembly" type="button">Assembly Instructions</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill"
                        data-bs-target="#sustain" type="button">Sustainability</button></li>
            </ul>
            <div class="tab-content mt-4">
                <div class="tab-pane fade show active" id="pinfo">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="fw-bold text-primary mb-2">Short headline</div>
                            <p class="muted">Acme automates your subscription revenue and customer reporting. Just
                                connect your data and Acme will calculate and visualize your most important metrics.</p>
                            <div class="fw-bold text-primary mb-2">Give more</div>
                            <p class="muted">Remove the playbar, add speed controls, and more. Increase engagement with
                                CTAs and custom end screens, or keep your video private and password-protected.</p>
                            <div class="fw-bold text-primary mb-2">Change the color to match your brand</div>
                            <p class="muted">Remove the playbar, add speed controls, and more. Increase engagement with
                                CTAs and custom end screens, or keep your video private and password-protected.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="fw-bold text-primary mb-2">Start by checking your upgrade</div>
                            <p class="muted">Change the color to match your brand or vision, add your logo, choose the
                                perfect thumbnail, remove the playbar, add speed controls, and more. Increase engagement
                                with CTAs and custom end screens, or keep your video private and password-protected.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="materials">Materials tab content...</div>
                <div class="tab-pane fade" id="assets">Assets tab content...</div>
                <div class="tab-pane fade" id="care">Care instructions...</div>
                <div class="tab-pane fade" id="assembly">Assembly instructions...</div>
                <div class="tab-pane fade" id="sustain">Sustainability details...</div>
            </div>
        </div>
    </section>

    <!-- Product USP style block -->
    <section class="py-4">
        <div class="container px-3 px-md-4">
            <div class="row g-5 align-items-start">
                <div class="col-md-6">
                    <h3 class="text-primary fw-bold">Product USP</h3>
                    <div class="fw-bold text-primary mb-2">Short headline</div>
                    <p class="text-primary-50" style="color:#5b87d1">Acme automates your subscription revenue and
                        customer reporting. Just connect your data and Acme will calculate and visualize your most
                        important metrics.</p>
                    <div class="fw-bold text-primary mb-2">Start by checking your upgrade</div>
                    <p class="text-primary-50" style="color:#5b87d1">Change the color to match your brand or vision, add
                        your logo, choose the perfect thumbnail, remove the playbar, add speed controls, and more.</p>
                </div>
                <div class="col-md-6">
                    <div class="fw-bold text-primary mb-2">Short headline</div>
                    <p class="text-primary-50" style="color:#5b87d1">Acme automates your subscription revenue and
                        customer reporting. Just connect your data and Acme will calculate and visualize your most
                        important metrics.</p>
                    <div class="fw-bold text-primary mb-2">Start by checking your upgrade</div>
                    <p class="text-primary-50" style="color:#5b87d1">Change the color to match your brand or vision, add
                        your logo, choose the perfect thumbnail, remove the playbar, add speed controls, and more.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability section -->
    <section class="pd-sustain">
        <div class="container px-3 px-md-4">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h3>Sustainability</h3>
                    <p style="color:#5b87d1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="pd-feature"><i class="fa-regular fa-square"></i><span>Our products are made from
                                    100% recycled material.</span></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pd-feature"><i class="fa-regular fa-circle"></i><span>Our goal is to have
                                    zero-carbon footprint by 2030.</span></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pd-feature"><i class="fa-solid fa-border-all"></i><span>All our products made
                                    with sustainability in mind.</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pd-illus" style="min-height:260px"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery slider -->
    <section class="pd-gallery">
        <div class="container px-3 px-md-4">
            <h3>Gallery</h3>
            <div id="pdCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active pd-g-item">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1200&auto=format&fit=crop"
                            alt="g1" />
                    </div>
                    <div class="carousel-item pd-g-item">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=1200&auto=format&fit=crop"
                            alt="g2" />
                    </div>
                    <div class="carousel-item pd-g-item">
                        <img class="d-block w-100"
                            src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1200&auto=format&fit=crop"
                            alt="g3" />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#pdCarousel"
                    data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span
                        class="visually-hidden">Previous</span></button>
                <button class="carousel-control-next" type="button" data-bs-target="#pdCarousel"
                    data-bs-slide="next"><span class="carousel-control-next-icon"></span><span
                        class="visually-hidden">Next</span></button>
            </div>
        </div>
    </section>

    <!-- Paired products + banner + next -->
    <section class="pd-paired">
        <div class="container px-3 px-md-4">
            <h3>Can be paired with</h3>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="pd-card">
                        <div class="pd-card-top"><i class="fa-regular fa-image"
                                style="font-size:60px;color:#a7c5ff"></i></div>
                        <div class="pd-card-body">
                            <div class="pd-card-name">Paola Wood Chair</div>
                            <div class="pd-card-price">$ 5,900</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pd-card">
                        <div class="pd-card-top"><i class="fa-regular fa-image"
                                style="font-size:60px;color:#a7c5ff"></i></div>
                        <div class="pd-card-body">
                            <div class="pd-card-name">Native Light Chair</div>
                            <div class="pd-card-price">$ 1,200</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pd-card">
                        <div class="pd-card-top"><i class="fa-regular fa-image"
                                style="font-size:60px;color:#a7c5ff"></i></div>
                        <div class="pd-card-body">
                            <div class="pd-card-name">Moss Upholstery Fabric</div>
                            <div class="pd-card-price">$ 500</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd-banner">
                <div class="fw-bold text-primary">The Ideal workspace<br />Our six step unique process</div><button
                    class="pd-btn primary">Explore More</button>
            </div>
            <div class="pd-next">
                <h3>Next</h3>
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="pd-next-tile">Paola Wood Chair</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pd-next-tile">Native White Chair</div>
                    </div>
                    <div class="col-md-4">
                        <div class="pd-next-tile">Studio Acoustics</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
