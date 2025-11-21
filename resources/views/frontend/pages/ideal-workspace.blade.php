@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/ideal-workspace.css') }}">


  <section class="iw-hero">
    <div class="container px-3 px-md-4">
      <div class="iw-breadcrumb">Home / Bespoke Solutions / The Ideal workspace</div>
      <h1 class="iw-title">The Ideal workspace</h1>
    </div>
  </section>

  <section class="iw-process-wrap">
    <div class="container px-3 px-md-4">
      <h3 class="iw-process-heading">Our six step unique process</h3>

      <div class="iw-step iw-first-row open">
        <div class="iw-step-header" data-iw-toggle>
          <div class="row w-100 g-3 align-items-center">
            <div class="col-md-4">
              <div class="iw-step-title">The Workspace Primer</div>
            </div>
            <div class="col-md-7">
              <div class="iw-first-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet...</div>
            </div>
            <div class="col-md-1 d-flex justify-content-end">
              <div class="iw-step-icon">—</div>
            </div>
          </div>
        </div>
        <div class="iw-step-body">Additional explanatory text for step one. Replace with your content.</div>
      </div>

      <div class="iw-step">
        <div class="iw-step-header" data-iw-toggle>
          <span class="iw-step-title">The Imagination Showcase</span>
          <div class="iw-step-icon">+</div>
        </div>
        <div class="iw-step-body">Details about this step. Lorem ipsum dolor sit amet.</div>
      </div>

      <div class="iw-step">
        <div class="iw-step-header" data-iw-toggle>
          <span class="iw-step-title">The Three Haves</span>
          <div class="iw-step-icon">+)</div>
        </div>
        <div class="iw-step-body">Details about this step. Lorem ipsum dolor sit amet.</div>
      </div>

      <div class="iw-step">
        <div class="iw-step-header" data-iw-toggle>
          <span class="iw-step-title">The Communication Links</span>
          <div class="iw-step-icon">+</div>
        </div>
        <div class="iw-step-body">Details about this step. Lorem ipsum dolor sit amet.</div>
      </div>

      <div class="iw-step">
        <div class="iw-step-header" data-iw-toggle>
          <span class="iw-step-title">Expected Delivered</span>
          <div class="iw-step-icon">+</div>
        </div>
        <div class="iw-step-body">Details about this step. Lorem ipsum dolor sit amet.</div>
      </div>

      <div class="iw-step">
        <div class="iw-step-header" data-iw-toggle>
          <span class="iw-step-title">Day 2 - Training</span>
          <div class="iw-step-icon">+</div>
        </div>
        <div class="iw-step-body">Details about this step. Lorem ipsum dolor sit amet.</div>
      </div>

      <div class="iw-cta">
        <h4 class="iw-cta-title">Book a Meeting to<br />discuss the details</h4>
        <button class="iw-cta-btn">Book a Meeting</button>
      </div>
    </div>
  </section>
   <script>
    (function () {
      document.querySelectorAll('[data-iw-toggle]').forEach(function (h) {
        h.addEventListener('click', function () {
          var step = h.closest('.iw-step');
          var open = step.classList.contains('open');
          document.querySelectorAll('.iw-step').forEach(function (s) { s.classList.remove('open'); s.querySelector('.iw-step-icon').textContent = '+'; });
          if (!open) { step.classList.add('open'); var icon = step.querySelector('.iw-step-icon'); if (icon) icon.textContent = '—'; }
        });
      });
    })();
  </script>
    @endsection
