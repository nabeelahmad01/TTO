@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/products-type.css') }}">
  <nav class="navbar navbar-expand-lg pt-nav">
    <div class="container-fluid px-3 px-md-4">
      <a class="navbar-brand" href="index.html">totaloffice</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ptNav"><span
          class="navbar-toggler-icon"></span></button>
      <div id="ptNav" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero with static content -->
  <section class="pt-hero">
    <div class="container px-3 px-md-4">
      <div class="pt-breadcrumb">Home / Products</div>
      <h1 class="pt-title">What product type do you need?</h1>

      <!-- Boxes slider (images only) -->
      <div class="pt-box-viewport mt-2">
        <button class="pt-prev" id="ptPrev" aria-label="Prev"><i class="fas fa-chevron-left"></i></button>
        <div class="pt-box-track" id="ptBoxTrack">
          <div class="pt-box"><img
              src="https://images.unsplash.com/photo-1503602642458-232111445657?q=80&w=600&auto=format&fit=crop"
              alt="View All" /></div>
          <div class="pt-box"><img
              src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?q=80&w=600&auto=format&fit=crop"
              alt="Furniture" /></div>
          <div class="pt-box"><img
              src="https://images.unsplash.com/photo-1567016432779-094069958ea5?q=80&w=600&auto=format&fit=crop"
              alt="Acoustic Products" /></div>
          <div class="pt-box"><img
              src="https://images.unsplash.com/photo-1493666438817-866a91353ca9?q=80&w=600&auto=format&fit=crop"
              alt="Writable" /></div>
          <div class="pt-box"><img
              src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=600&auto=format&fit=crop"
              alt="Fabrics" /></div>
          <div class="pt-box"><img
              src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?q=80&w=600&auto=format&fit=crop"
              alt="Greenwalls" /></div>
        </div>
        <button class="pt-next" id="ptNext" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Brands section (below) -->
  <section class="pt-brands">
    <div class="container px-3 px-md-4">
      <h3>Brands</h3>
      <p class="pt-br-desc">Separated they live in Bookmarks right at the coast of the famous Semantics, large language
        ocean Separated they live in Bookmarks right</p>

      <div class="pt-brand-viewport" id="ptBrandViewport">
        <div class="pt-brand-track" id="ptBrandTrack">
          <div class="pt-brand">Andreu World</div>
          <div class="pt-brand">studio t</div>
          <div class="pt-brand">arper</div>
          <div class="pt-brand">Manerba</div>
          <div class="pt-brand">LUUM</div>
          <div class="pt-brand">boss</div>
          <div class="pt-brand">emmegi</div>
          <div class="pt-brand">wi</div>
          <div class="pt-brand">KÖNIG + NEURATH</div>
          <div class="pt-brand">PEDRALI</div>
        </div>
      </div>
      <div class="pt-dots" id="ptDots"></div>
    </div>
  </section>

  <script>
    // Boxes slider (images only, manual)
    (function () {
      const track = document.getElementById('ptBoxTrack');
      const prev = document.getElementById('ptPrev');
      const next = document.getElementById('ptNext');
      let offset = 0;
      function itemStep() {
        const first = track.children[0];
        const gap = 14; // set in CSS
        return first.getBoundingClientRect().width + gap;
      }
      function slide(dir) {
        offset += dir * itemStep();
        const max = Math.max(0, track.scrollWidth - track.clientWidth);
        if (offset < 0) offset = 0; if (offset > max) offset = max;
        track.scrollTo({ left: offset, behavior: 'smooth' });
      }
      prev.addEventListener('click', () => slide(-1));
      next.addEventListener('click', () => slide(1));
      window.addEventListener('resize', () => { offset = track.scrollLeft; });
    })();

    // Brands grid pager with dots
    (function () {
      const track = document.getElementById('ptBrandTrack');
      const viewport = document.getElementById('ptBrandViewport');
      const dotsWrap = document.getElementById('ptDots');
      function pages() {
        const cardWidth = track.children[0].getBoundingClientRect().width + 18; // width + gap
        const perView = Math.max(1, Math.floor(viewport.clientWidth / cardWidth));
        return Math.max(1, Math.ceil(track.children.length / perView));
      }
      let page = 0;
      function renderDots() {
        dotsWrap.innerHTML = '';
        const total = pages();
        for (let i = 0; i < total; i++) {
          const d = document.createElement('div');
          d.className = 'pt-dot' + (i === page ? ' active' : '');
          d.addEventListener('click', () => { page = i; update(); renderDots(); });
          dotsWrap.appendChild(d);
        }
      }
      function update() {
        const total = pages();
        if (page >= total) page = total - 1;
        const cardWidth = track.children[0].getBoundingClientRect().width + 18;
        const perView = Math.max(1, Math.floor(viewport.clientWidth / cardWidth));
        const translate = -page * perView * cardWidth;
        track.style.transform = `translateX(${translate}px)`;
      }
      window.addEventListener('resize', () => { update(); renderDots(); });
      renderDots();
      update();
    })();
  </script>
    @endsection
