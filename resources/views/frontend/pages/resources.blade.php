@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/reminder-email-template.css') }}">

     <!-- Hero -->
    <section class="rc-hero">
      <div class="container px-3 px-md-4">
        <div class="rc-breadcrumb">Home / Resources</div>
        <h1 class="rc-title">Resources</h1>
        <p class="rc-sub">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat.</p>
      </div>
    </section>

    <section>
      <div class="container px-3 px-md-4">
        <!-- Toolbar -->
        <div class="rc-toolbar">
          <div class="rc-search">
            <input type="text" placeholder="Search" />
            <button aria-label="search"><i class="fas fa-magnifying-glass"></i></button>
          </div>
          <select class="form-select rc-select">
            <option selected>Show: All</option>
            <option>Blog</option>
            <option>News</option>
            <option>Guides</option>
          </select>
          <select class="form-select rc-select">
            <option selected>Sort By</option>
            <option>Newest</option>
            <option>Oldest</option>
            <option>A — Z</option>
            <option>Z — A</option>
          </select>
        </div>

        <!-- Grid -->
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="rc-card rc-card-lg">
              <div class="rc-card-top">
                <i class="fa-regular fa-bookmark rc-pin"></i>
                <span class="rc-badge">News</span>
                <i class="fa-regular fa-image" style="font-size:64px; color:#a7c5ff"></i>
              </div>
              <div class="rc-card-body">
                <h4 class="rc-name">Lorem ipsum dolor sit amet, consectetur.</h4>
                <p class="rc-desc">Tempor incididunt ut labore et empor incididunt ut labore et dolore magna aliqua dolore magna aliqua...</p>
                <a class="rc-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="rc-card">
              <div class="rc-card-top">
                <i class="fa-regular fa-bookmark rc-pin"></i>
                <span class="rc-badge">Blog</span>
                <i class="fa-regular fa-image" style="font-size:52px; color:#a7c5ff"></i>
              </div>
              <div class="rc-card-body">
                <h5 class="rc-name">Amet minim mollit non deserunt ullamco es</h5>
                <p class="rc-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat...</p>
                <a class="rc-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="rc-card">
              <div class="rc-card-top">
                <i class="fa-regular fa-bookmark rc-pin"></i>
                <span class="rc-badge">News</span>
                <i class="fa-regular fa-image" style="font-size:52px; color:#a7c5ff"></i>
              </div>
              <div class="rc-card-body">
                <h5 class="rc-name">Amet minim mollit non deserunt ullamco es</h5>
                <p class="rc-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat...</p>
                <a class="rc-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="rc-card">
              <div class="rc-card-top">
                <i class="fa-regular fa-bookmark rc-pin"></i>
                <span class="rc-badge">Blog</span>
                <i class="fa-regular fa-image" style="font-size:52px; color:#a7c5ff"></i>
              </div>
              <div class="rc-card-body">
                <h5 class="rc-name">Amet minim mollit non deserunt ullamco es</h5>
                <p class="rc-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat...</p>
                <a class="rc-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="rc-card">
              <div class="rc-card-top">
                <i class="fa-regular fa-bookmark rc-pin"></i>
                <span class="rc-badge">News</span>
                <i class="fa-regular fa-image" style="font-size:52px; color:#a7c5ff"></i>
              </div>
              <div class="rc-card-body">
                <h5 class="rc-name">Amet minim mollit non deserunt ullamco es</h5>
                <p class="rc-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat...</p>
                <a class="rc-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
