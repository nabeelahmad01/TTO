@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/resource-detail.css') }}">
    <!-- Hero -->
    <section class="rd-hero">
      <div class="container px-3 px-md-4">
        <div class="row g-3 align-items-center">
          <div class="col-md-8">
            <div class="rd-breadcrumb">Home / Resources / Amet minim mollit non deserunt ullamco es</div>
            <h1 class="rd-title">Amet minim mollit non deserunt ullamco es</h1>
          </div>
          <div class="col-md-4 text-md-end">
            <button class="rd-fav"><i class="fa-regular fa-bookmark me-1"></i> Add to Boards</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Article -->
    <section class="py-4">
      <div class="container px-3 px-md-4">
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="rd-cover mb-3"><i class="fa-regular fa-image" style="font-size:84px;color:#a7c5ff"></i></div>
            <p class="rd-par">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="rd-par">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <div class="rd-quote mt-3 mb-1">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis”</div>
            <div class="rd-author">Name Surname, vice president of programs</div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex align-items-center mb-2"><span class="me-2" style="color:#5b87d1">Share:</span><div class="rd-share"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fas fa-link"></i></a></div></div>
            <div class="rd-relbox">
              <div class="fw-bold text-primary mb-2">RELEVANT ARTICLES</div>
              <div class="item"><div class="rd-thumb"></div><a class="text-primary fw-bold" href="#">Expo 2020 Dubai...</a></div>
              <div class="item"><div class="rd-thumb"></div><a class="text-primary fw-bold" href="#">Move: The 13 Best Electric Bikes...</a></div>
              <div class="item"><div class="rd-thumb"></div><a class="text-primary fw-bold" href="#">Marília Mendonça, Brazilian Pop Singer...</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Relevant slider -->
    <section class="rd-relevant">
      <div class="container px-3 px-md-4">
        <div class="d-flex align-items-center justify-content-between">
          <h3 class="rd-rel-title">Relevant</h3>
          <div class="rd-nav">
            <button class="rd-btn" id="rdPrev"><i class="fas fa-chevron-left"></i></button>
            <button class="rd-btn" id="rdNext"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
        <div class="rd-s-viewport mt-2" id="rdViewport">
          <div class="rd-s-track" id="rdTrack">
            <div class="rd-card"><div class="rd-card-top"><i class="fa-regular fa-bookmark rd-pin"></i><i class="fa-regular fa-image" style="font-size:48px;color:#a7c5ff"></i></div><div class="rd-card-body"><div class="rd-name">Amet minim mollit non deserunt ullamco es</div><div class="rd-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</div><a class="rd-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a></div></div>
            <div class="rd-card"><div class="rd-card-top"><i class="fa-regular fa-bookmark rd-pin"></i><i class="fa-regular fa-image" style="font-size:48px;color:#a7c5ff"></i></div><div class="rd-card-body"><div class="rd-name">Amet minim mollit non deserunt ullamco es</div><div class="rd-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</div><a class="rd-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a></div></div>
            <div class="rd-card"><div class="rd-card-top"><i class="fa-regular fa-bookmark rd-pin"></i><i class="fa-regular fa-image" style="font-size:48px;color:#a7c5ff"></i></div><div class="rd-card-body"><div class="rd-name">Amet minim mollit non deserunt ullamco es</div><div class="rd-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</div><a class="rd-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a></div></div>
            <div class="rd-card"><div class="rd-card-top"><i class="fa-regular fa-bookmark rd-pin"></i><i class="fa-regular fa-image" style="font-size:48px;color:#a7c5ff"></i></div><div class="rd-card-body"><div class="rd-name">Amet minim mollit non deserunt ullamco es</div><div class="rd-desc">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</div><a class="rd-link" href="#">Read More <i class="fas fa-arrow-right ms-1"></i></a></div></div>
          </div>
        </div>
      </div>
    </section>

    <script>
      // Relevant slider controls
      (function(){
        const viewport = document.getElementById('rdViewport');
        const track = document.getElementById('rdTrack');
        const prev = document.getElementById('rdPrev');
        const next = document.getElementById('rdNext');
        let index = 0;
        function step(){ const first = track.children[0]; const gap = 18; return first.getBoundingClientRect().width + gap; }
        function perView(){ return Math.max(1, Math.floor(viewport.clientWidth / step())); }
        function max(){ return Math.max(0, track.children.length - perView()); }
        function update(){ track.style.transform = `translateX(${-index*step()}px)`; }
        prev.addEventListener('click', ()=> { index = Math.max(0, index-1); update(); });
        next.addEventListener('click', ()=> { index = index+1>max()?0:index+1; update(); });
        window.addEventListener('resize', update);
        update();
      })();
    </script>
    @endsection
