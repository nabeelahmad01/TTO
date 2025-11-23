@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/sustainability.css') }}">

     <nav class="navbar" style="background:#fff;border-bottom:1px solid #e0e0e0;">
      <div class="container-fluid px-3 px-md-4">
        <a class="navbar-brand" style="color:#0066ff;font-weight:800;" href="index.html">totaloffice</a>
      </div>
    </nav>

    <!-- Hero split layout -->
    <section class="su-hero">
      <div class="container-fluid px-0">
        <div class="row g-0 align-items-stretch">
          <div class="col-lg-6 su-left"><div class="su-ph"></div></div>
          <div class="col-lg-6 su-right">
            <div class="su-breadcrumb">Home / Sustainability</div>
            <h1 class="su-title">Sustainability</h1>
            <p class="su-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Introduction -->
    <section class="su-intro">
      <div class="container px-3 px-md-4">
        <h3>Introduction</h3>
        <div class="row g-4">
          <div class="col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
          <div class="col-md-6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
        </div>
      </div>
    </section>

    <!-- Accomplishments list -->
    <section class="su-acc">
      <div class="container px-3 px-md-4">
        <h3>Accomplishments</h3>
        <div class="su-row row g-3 align-items-start">
          <div class="col-2 col-md-1 su-num">01</div>
          <div class="col-10 col-md-3 su-name">Human Kind</div>
          <div class="col-12 col-md-8 su-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
        </div>
        <div class="su-row row g-3 align-items-start">
          <div class="col-2 col-md-1 su-num">02</div>
          <div class="col-10 col-md-3 su-name">Innovation</div>
          <div class="col-12 col-md-8 su-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
        </div>
        <div class="su-row row g-3 align-items-start">
          <div class="col-2 col-md-1 su-num">03</div>
          <div class="col-10 col-md-3 su-name">Reliable</div>
          <div class="col-12 col-md-8 su-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
        </div>
        <div class="su-row row g-3 align-items-start">
          <div class="col-2 col-md-1 su-num">04</div>
          <div class="col-10 col-md-3 su-name">Collaborate</div>
          <div class="col-12 col-md-8 su-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
        </div>
      </div>
    </section>
    @endsection
