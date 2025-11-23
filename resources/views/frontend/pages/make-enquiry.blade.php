@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/make-enquiry.css') }}">
    <nav class="navbar" style="background:#fff;border-bottom:1px solid #e0e0e0;">
      <div class="container-fluid px-3 px-md-4">
        <a class="navbar-brand" style="color:#0066ff;font-weight:800;" href="index.html">totaloffice</a>
      </div>
    </nav>

    <main class="me-wrapper">
      <div class="me-card">
        <h1 class="me-title">Make an Enquiry</h1>
        <form id="meForm" novalidate>
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" id="firstName" placeholder="First name" required />
              <div class="invalid-feedback">Please enter first name</div>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" id="lastName" placeholder="Last name" required />
              <div class="invalid-feedback">Please enter last name</div>
            </div>
            <div class="col-12">
              <input type="email" class="form-control" id="email" placeholder="Your Email" required />
              <div class="invalid-feedback">Enter a valid email</div>
            </div>
            <div class="col-12">
              <select id="company" class="form-select" required>
                <option value="" selected disabled>Company Name</option>
                <option>Acme Inc.</option>
                <option>Globex</option>
                <option>Initech</option>
              </select>
              <div class="invalid-feedback">Select your company</div>
            </div>
            <div class="col-12">
              <textarea class="form-control" id="note" placeholder="Leave a note"></textarea>
            </div>
            <div class="col-12">
              <button class="btn w-100 me-btn" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </main>
    <script>
      (function(){
        const form = document.getElementById('meForm');
        form.addEventListener('submit', function(e){
          e.preventDefault();
          let ok = true;
          ['firstName','lastName','email','company'].forEach(id=>{
            const el = document.getElementById(id);
            if(!el.checkValidity()) { el.classList.add('is-invalid'); ok=false; } else { el.classList.remove('is-invalid'); }
          });
          if(ok){
            alert('Thank you! Your enquiry has been submitted.');
            form.reset();
          }
        });
        Array.from(document.querySelectorAll('#meForm .form-control, #meForm .form-select')).forEach(el=>{
          el.addEventListener('input', ()=> el.classList.remove('is-invalid'));
          el.addEventListener('change', ()=> el.classList.remove('is-invalid'));
        });
      })();
    </script>
    @endsection
