@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/case-studies.css') }}">
    <!-- Hero -->
    <section class="cs-hero">
        <div class="container px-3 px-md-4">
            <div class="cs-breadcrumb">Home / Case Studies</div>
            <h1 class="cs-title">Case Studies</h1>
        </div>
    </section>

    <section>
        <div class="container px-3 px-md-4">
            <!-- Search and Sort -->
            <div class="cs-toolbar">
                <div class="cs-search">
                    <input type="text" placeholder="Search" />
                    <button aria-label="search"><i class="fas fa-magnifying-glass"></i></button>
                </div>
                <div class="cs-sort dropdown">
                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown">Sort By</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Newest</a></li>
                        <li><a class="dropdown-item" href="#">Oldest</a></li>
                        <li><a class="dropdown-item" href="#">A — Z</a></li>
                        <li><a class="dropdown-item" href="#">Z — A</a></li>
                    </ul>
                </div>
            </div>

            <!-- Cases list -->
            <div class="row g-4">
                <!-- Case 1 -->
                <div class="col-12">
                    <div class="cs-card">
                        <i class="fa-regular fa-bookmark cs-pin"></i>
                        <div class="cs-right">
                            <div class="cs-toggle">Colors<div class="cs-switch active"></div>
                            </div>
                            <div class="cs-toggle">Brands<div class="d-flex gap-1"><span class="cs-pill">LUXOR</span><span
                                        class="cs-pill">TEKNION</span></div>
                            </div>
                        </div>
                        <div class="cs-name">Case study 1</div>
                        <div class="cs-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl, diam lectus
                            sagittis, massa aliquam commodo.</div>
                        <a class="d-inline-block mt-3 fw-bold text-primary" href="#">Learn More <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="col-12">
                    <div class="cs-card">
                        <i class="fa-regular fa-bookmark cs-pin"></i>
                        <div class="cs-right">
                            <div class="cs-toggle">Colors<div class="cs-switch"></div>
                            </div>
                            <div class="cs-toggle">Brands<div class="d-flex gap-1"><span class="cs-pill">LUXOR</span><span
                                        class="cs-pill">TEKNION</span></div>
                            </div>
                        </div>
                        <div class="cs-name">Case study 2</div>
                        <div class="cs-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl, diam lectus
                            sagittis, massa aliquam commodo.</div>
                        <a class="d-inline-block mt-3 fw-bold text-primary" href="#">Learn More <i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Toggle demo for color switchers
        document.querySelectorAll('.cs-switch').forEach(sw => {
            sw.addEventListener('click', () => sw.classList.toggle('active'));
        });
    </script>


@endsection
