@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/moodboards.css') }}">
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




@endsection
