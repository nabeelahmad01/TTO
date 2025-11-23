@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/service-listing.css') }}">
      <!-- Simple Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid px-3 px-md-4">
      <a class="navbar-brand" href="index.html">totaloffice</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="nav" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / Breadcrumb -->
  <section class="hero-bar">
    <div class="container px-3 px-md-4">
      <div class="breadcrumb-mini">Home / Services / Service Listing</div>
      <h1 class="page-title mb-0">Service Listing</h1>
    </div>
  </section>

  <!-- Filters Row -->
  <div class="container px-3 px-md-4">
    <div class="d-flex flex-wrap filters-wrap">
      <div class="dropdown">
        <button class="btn filter-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          By Type
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Consulting</a></li>
          <li><a class="dropdown-item" href="#">Installation</a></li>
          <li><a class="dropdown-item" href="#">Maintenance</a></li>
        </ul>
      </div>
      <div class="dropdown">
        <button class="btn filter-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          By Space
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Office</a></li>
          <li><a class="dropdown-item" href="#">Hospitality</a></li>
          <li><a class="dropdown-item" href="#">Education</a></li>
        </ul>
      </div>
      <div class="dropdown">
        <button class="btn filter-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          By Size
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Small</a></li>
          <li><a class="dropdown-item" href="#">Medium</a></li>
          <li><a class="dropdown-item" href="#">Large</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Services List -->
  <div class="container px-3 px-md-4 mt-2">
    <!-- Card 1 -->
    <div class="service-card">
      <div class="row g-3 align-items-start">
        <div class="col-md-3">
          <div class="service-title">Service #1</div>
        </div>
        <div class="col-md-7">
          <div class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet...</div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
          <a class="service-link" href="#">Explore <i class="fa-solid fa-angle-right ms-1"></i></a>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="service-card">
      <div class="row g-3 align-items-start">
        <div class="col-md-3">
          <div class="service-title">Service #2</div>
        </div>
        <div class="col-md-7">
          <div class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat...</div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
          <a class="service-link" href="#">Explore <i class="fa-solid fa-angle-right ms-1"></i></a>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="service-card">
      <div class="row g-3 align-items-start">
        <div class="col-md-3">
          <div class="service-title">Service #3</div>
        </div>
        <div class="col-md-7">
          <div class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat...</div>
        </div>
        <div class="col-md-2 d-flex align-items-center">
          <a class="service-link" href="#">Explore <i class="fa-solid fa-angle-right ms-1"></i></a>
        </div>
      </div>
    </div>

    <div class="page-spacer"></div>
  </div>
    @endsection
