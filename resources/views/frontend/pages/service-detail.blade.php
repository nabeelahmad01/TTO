@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/service-detail.css') }}">
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
          <li class="nav-item"><a class="nav-link" href="service-listing.html">Service Listing</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / Breadcrumb -->
  <section class="hero">
    <div class="container px-3 px-md-4">
      <div class="breadcrumb-mini">Home / Services / Service Listing / Service Detail Page</div>
      <h1 class="page-title mb-0">Service Detail Page</h1>
    </div>
  </section>

  <!-- Service Overview -->
  <section class="overview">
    <div class="container px-3 px-md-4">
      <div class="row g-5 align-items-start">
        <div class="col-lg-6">
          <h2 class="section-title">Service Overview</h2>
          <p class="muted">
            Duis netus dignissim eros dui lorem adipiscing. Viverra dui massa arcu adipiscing quis integer habitasse at.
            Facilisis nulla maecenas malesuada pharetra vel quis. Neque facilisi vel eu risus et sed amet. Molestie
            habitasse
            dui sapien venenatis at. At urna egestas elit eu at vulputate in turpis. Ultrices ullamcorper amet iaculis
            urna velit at.
          </p>
        </div>
        <div class="col-lg-6">
          <div class="visual-box w-100 h-100"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Included in Service -->
  <section class="included">
    <div class="container px-3 px-md-4">
      <div class="row g-4">
        <div class="col-lg-6">
          <h2 class="section-title">What is included in service</h2>
          <p class="muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

          <div class="accordion" id="serviceAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="h1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c1"
                  aria-expanded="false" aria-controls="c1">
                  Vel leo id eleifend feugia
                </button>
              </h2>
              <div id="c1" class="accordion-collapse collapse" aria-labelledby="h1" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">Detailed explanation for this item. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="h2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2"
                  aria-expanded="false" aria-controls="c2">
                  Varius scelerisque ac amet
                </button>
              </h2>
              <div id="c2" class="accordion-collapse collapse" aria-labelledby="h2" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">Additional details for the second point. Integer posuere erat a ante.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="h3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3"
                  aria-expanded="false" aria-controls="c3">
                  Varius tortor maecenas placerat
                </button>
              </h2>
              <div id="c3" class="accordion-collapse collapse" aria-labelledby="h3" data-bs-parent="#serviceAccordion">
                <div class="accordion-body">Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="h4">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c4"
                  aria-expanded="true" aria-controls="c4">
                  Nunc lacus, gravida
                </button>
              </h2>
              <div id="c4" class="accordion-collapse collapse show" aria-labelledby="h4"
                data-bs-parent="#serviceAccordion">
                <div class="accordion-body">This section is expanded by default as in the mockup. Maecenas faucibus
                  mollis interdum.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <div class="visual-box w-100" style="min-height: 420px;"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section">
    <div class="container px-3 px-md-4">
      <h3 class="gallery-title">Gallery</h3>
      <div class="gallery-viewport">
        <div id="galleryTrack" class="gallery-track">
          <div class="gallery-item"><img
              src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop"
              alt="g1"></div>
          <div class="gallery-item"><img
              src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=800&auto=format&fit=crop"
              alt="g2"></div>
          <div class="gallery-item"><img
              src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop"
              alt="g3"></div>
          <div class="gallery-item"><img
              src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?q=80&w=800&auto=format&fit=crop"
              alt="g4"></div>
          <div class="gallery-item"><img
              src="https://images.unsplash.com/photo-1505692794403-34cb99ee5c02?q=80&w=800&auto=format&fit=crop"
              alt="g5"></div>
        </div>
      </div>
      <div class="gallery-nav">
        <button id="galPrev" class="gallery-btn" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
        <button id="galNext" class="gallery-btn" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>
   <script>
    (function () {
      const track = document.getElementById('galleryTrack');
      const items = Array.from(track.children);
      const prevBtn = document.getElementById('galPrev');
      const nextBtn = document.getElementById('galNext');
      let index = 2; // start with center item active

      function update() {
        const itemWidth = items[0].getBoundingClientRect().width + 28; // width + gap
        const viewportWidth = track.parentElement.getBoundingClientRect().width;
        const centerOffset = (viewportWidth / 2) - (itemWidth / 2);
        const translate = -index * itemWidth + centerOffset;
        track.style.transform = `translateX(${translate}px)`;
        items.forEach((el, i) => el.classList.toggle('active', i === index));
      }

      function clamp(i) { return Math.max(0, Math.min(items.length - 1, i)); }

      prevBtn.addEventListener('click', () => { index = clamp(index - 1); update(); });
      nextBtn.addEventListener('click', () => { index = clamp(index + 1); update(); });

      window.addEventListener('resize', update);
      // initialize
      update();
    })();
  </script>
    @endsection
