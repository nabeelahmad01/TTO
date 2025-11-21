@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/case-study-detail.css') }}">

    <!-- Hero -->
    <section class="cd-hero">
        <div class="container px-3 px-md-4 position-relative">
            <div class="cd-badges">
                <div class="cd-toggle">Colors<div class="cd-switch active"></div>
                </div>
                <div class="cd-toggle">Brands<div class="d-flex gap-1"><span class="cd-pill">DIOR</span><span
                            class="cd-pill">CHAUMET</span></div>
                </div>
            </div>
            <div class="cd-breadcrumb">Home / Case Studies / Amet minim mollit non deserunt ullamco es</div>
            <h1 class="cd-title">Amet minim mollit non deserunt ullamco es</h1>
            <button class="cd-fav"><i class="fa-regular fa-heart me-1"></i> Add to Favorites</button>
        </div>
    </section>

    <!-- Spec + description -->
    <section class="cd-spec">
        <div class="container px-3 px-md-4">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h4>Specifications</h4>
                    <div class="cd-list">
                        <div class="cd-li">
                            <div class="k">Year</div>
                            <div class="v">2018</div>
                        </div>
                        <div class="cd-li">
                            <div class="k">Brands</div>
                            <div class="v">Dior, Chaumet</div>
                        </div>
                        <div class="cd-li">
                            <div class="k">Type of space</div>
                            <div class="v">Office open-space</div>
                        </div>
                        <div class="cd-li">
                            <div class="k">Location</div>
                            <div class="v">Dubai, UAE</div>
                        </div>
                        <div class="cd-li">
                            <div class="k">Category</div>
                            <div class="v">Real Estate</div>
                        </div>
                        <div class="cd-li">
                            <div class="k">Designer</div>
                            <div class="v">Carl Chroesenberg</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-primary fw-bold">Pretium donec elementum sed dictumst mauris. Turpis vitae sodales nulla
                        nunc, ut egestas pharetra, neque.</h4>
                    <p style="color:#5b87d1">Accumsan id faucibus sed pretium arcu. Eget viverra id massa, vivamus
                        suspendisse. Suspendisse felis venenatis vivamus dictumst. Enim eget turpis faucibus tellus
                        malesuada cras morbi in accumsan. Posuere velit auctor in nibh sed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project USPs with accordion + large image -->
    <section class="cd-usp">
        <div class="container px-3 px-md-4">
            <div class="row g-4 align-items-start">
                <div class="col-lg-6">
                    <h3>Project USP’s</h3>
                    <p style="color:#5b87d1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <div class="cd-acc" id="cdAcc">
                        <div class="card">
                            <div class="card-header bg-white p-0">
                                <button class="btn btn-link w-100 text-start p-3" data-bs-toggle="collapse"
                                    data-bs-target="#c1">Vel leo id eleifend feugia</button>
                            </div>
                            <div id="c1" class="collapse show" data-bs-parent="#cdAcc">
                                <div class="card-body">Detail about point 1...</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white p-0">
                                <button class="btn btn-link w-100 text-start p-3" data-bs-toggle="collapse"
                                    data-bs-target="#c2">Varius scelerisque ac amet</button>
                            </div>
                            <div id="c2" class="collapse" data-bs-parent="#cdAcc">
                                <div class="card-body">Detail about point 2...</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white p-0">
                                <button class="btn btn-link w-100 text-start p-3" data-bs-toggle="collapse"
                                    data-bs-target="#c3">Varius tortor maecenas placerat</button>
                            </div>
                            <div id="c3" class="collapse" data-bs-parent="#cdAcc">
                                <div class="card-body">Detail about point 3...</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-white p-0">
                                <button class="btn btn-link w-100 text-start p-3" data-bs-toggle="collapse"
                                    data-bs-target="#c4">Nunc lacus, gravida</button>
                            </div>
                            <div id="c4" class="collapse" data-bs-parent="#cdAcc">
                                <div class="card-body">Detail about point 4...</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cd-usp-img"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery slider -->
    <section class="cd-gallery">
        <div class="container px-3 px-md-4">
            <h3>Gallery</h3>
            <div class="cd-g">
                <div id="cdCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#cdCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#cdCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#cdCarousel" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner cd-g-box">
                        <div class="carousel-item active"
                            style="height:340px;display:flex;align-items:center;justify-content:center">
                            <i class="fa-regular fa-image" style="font-size:140px;color:#a7c5ff"></i>
                        </div>
                        <div class="carousel-item"
                            style="height:340px;display:flex;align-items:center;justify-content:center">
                            <i class="fa-regular fa-image" style="font-size:140px;color:#a7c5ff"></i>
                        </div>
                        <div class="carousel-item"
                            style="height:340px;display:flex;align-items:center;justify-content:center">
                            <i class="fa-regular fa-image" style="font-size:140px;color:#a7c5ff"></i>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#cdCarousel"
                        data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span
                            class="visually-hidden">Previous</span></button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cdCarousel"
                        data-bs-slide="next"><span class="carousel-control-next-icon"></span><span
                            class="visually-hidden">Next</span></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="cd-products">
        <div class="container px-3 px-md-4">
            <h3>Products part of this Case Study</h3>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="cd-card">
                        <div class="cd-card-top"><i class="fa-regular fa-image" style="font-size:60px;color:#a7c5ff"></i>
                        </div>
                        <div class="cd-card-body">
                            <div class="cd-name">Paola Wood Chair</div>
                            <div class="cd-price">$ 5,900</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cd-card">
                        <div class="cd-card-top"><i class="fa-regular fa-image" style="font-size:60px;color:#a7c5ff"></i>
                        </div>
                        <div class="cd-card-body">
                            <div class="cd-name">Native Light Chair</div>
                            <div class="cd-price">$ 1,200</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cd-card">
                        <div class="cd-card-top"><i class="fa-regular fa-image" style="font-size:60px;color:#a7c5ff"></i>
                        </div>
                        <div class="cd-card-body">
                            <div class="cd-name">Moss Upholstery Fabric</div>
                            <div class="cd-price">$ 500</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3"><button class="btn btn-primary" style="background:#1e63e6;border:none">See
                    All</button></div>
        </div>
    </section>

    <!-- Next case banner -->
    <section class="cd-next">
        <div class="container px-3 px-md-4">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start"><i class="fa-regular fa-image art"></i></div>
                <div class="col-md-6">
                    <div style="color:#5b87d1; font-weight:800">Next Case Study</div>
                    <div class="nm">Case Study #5</div>
                    <button class="cd-go"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.cd-switch').forEach(sw => sw.addEventListener('click', () => sw.classList.toggle(
            'active')));
    </script>

@endsection
