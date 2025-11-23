@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/shop-by-space.css') }}">

     <nav class="navbar navbar-expand-lg sp-nav">
      <div class="container-fluid px-3 px-md-4">
        <a class="navbar-brand" href="index.html">totaloffice</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#spNav"><span class="navbar-toggler-icon"></span></button>
        <div id="spNav" class="collapse navbar-collapse"></div>
      </div>
    </nav>

    <section class="sp-hero">
      <div class="container px-3 px-md-4">
        <div class="sp-breadcrumb">Home / Shop By Space</div>
        <h1 class="sp-title">Products for what type of space do you need?</h1>
      </div>
    </section>

    <main>
      <div class="container px-3 px-md-4">
        <div class="sp-wrap">
          <div class="sp-card">
            <h4>Conference Rooms</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam lectus sagittis, massa aliquam commodo.</p>
            <a class="sp-link" href="#">Explore Products <i class="fas fa-arrow-right ms-1"></i></a>
            <button class="sp-arrow" aria-label="next"><i class="fas fa-chevron-right"></i></button>
          </div>
          <div class="sp-card">
            <h4>Office Cabins</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam lectus sagittis, massa aliquam commodo.</p>
            <a class="sp-link" href="#">Explore Products <i class="fas fa-arrow-right ms-1"></i></a>
            <button class="sp-arrow" aria-label="next"><i class="fas fa-chevron-right"></i></button>
          </div>
          <div class="sp-card">
            <h4>Work Spaces</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam lectus sagittis, massa aliquam commodo.</p>
            <a class="sp-link" href="#">Explore Products <i class="fas fa-arrow-right ms-1"></i></a>
            <button class="sp-arrow" aria-label="next"><i class="fas fa-chevron-right"></i></button>
          </div>
          <div class="sp-card">
            <h4>Cafe Space</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam lectus sagittis, massa aliquam commodo.</p>
            <a class="sp-link" href="#">Explore Products <i class="fas fa-arrow-right ms-1"></i></a>
            <button class="sp-arrow" aria-label="next"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
    </main>
    @endsection
