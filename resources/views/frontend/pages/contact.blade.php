@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/contact.css') }}">
    <!-- Hero -->
    <section class="ct-hero">
        <div class="container px-3 px-md-4">
            <div class="ct-breadcrumb">Home / Contact Us</div>
            <h1 class="ct-title">Contact Us</h1>
            <p class="ct-sub">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                consequat.</p>
        </div>
    </section>

    <!-- CTA split -->
    <div class="ct-cta">
        <a href="#"><span>Book a call</span> <i class="fas fa-arrow-right"></i></a>
        <a href="#"><span>Schedule a visit</span> <i class="fas fa-arrow-right"></i></a>
    </div>

    <!-- Head office + form -->
    <section class="ct-section">
        <div class="container px-3 px-md-4">
            <div class="row g-4">
                <div class="col-lg-7">
                    <h3 class="ct-h3">Our Head Office</h3>
                    <div class="row g-3 align-items-stretch">
                        <div class="col-md-7">
                            <div class="ct-map">
                                <button class="btn btn-sm">Get Directions</button>
                                <i class="fa-solid fa-location-dot" style="color:#1e63e6; font-size:20px"></i>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="ct-photo"><i class="fa-regular fa-image" style="font-size:56px; color:#a7c5ff"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mt-1 ct-address">
                        <div class="col-md-6">
                            <h5>Physical address</h5>
                            <p><strong>Barsha Heights</strong><br />The View Tower – 8th Floor<br />Block 71, Building No.
                                14A+14B<br />Beside Symphony Hotel<br />Gulf Street – Salmiya<br />Kuwait<br />P.O. Box 174
                                SAFAT 13002 — Kuwait</p>
                            <p>Open from 8:30am to 4:30pm (Sun-Thu)</p>
                            <p>Tel:+965 22053700<br />Fax: +965 22053711</p>
                            <p>barsha@totaloffice.com</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Abu Dhabi</h5>
                            <p>The View Tower – 8th Floor<br />Block 71, Building No. 14A+14B<br />Beside Symphony
                                Hotel<br />Gulf Street – Salmiya<br />Kuwait<br />P.O. Box 174 SAFAT 13002 — Kuwait</p>
                            <p>Open from 8:30am to 4:30pm (Sun-Thu)</p>
                            <p>Tel:+965 22053700<br />Fax: +965 22053711</p>
                            <p>abudhabi@totaloffice.com</p>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="col-lg-5">
                    <h3 class="ct-h3">Stay In Touch</h3>
                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" placeholder="First name" required /></div>
                            <div class="col-md-6"><input class="form-control" placeholder="Last name" required /></div>
                            <div class="col-12"><input type="email" class="form-control" placeholder="Your Email"
                                    required /></div>
                            <div class="col-12"><input class="form-control" placeholder="Subject" /></div>
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12"><button class="ct-submit" type="submit">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Middle banner -->
    <section class="ct-section">
        <div class="container px-3 px-md-4">
            <div class="ct-banner"><i class="fa-regular fa-image" style="font-size:80px; color:#a7c5ff"></i></div>
        </div>
    </section>

    <!-- Showrooms -->
    <section class="ct-show">
        <div class="container px-3 px-md-4">
            <h4>Showrooms</h4>
            <div class="row g-4 ct-address">
                <div class="col-md-6">
                    <h5>Dubai</h5>
                    <p>The View Tower – 8th Floor<br />Block 71, Building No. 14A+14B<br />Beside Symphony Hotel<br />Gulf
                        Street – Salmiya<br />Kuwait<br />P.O. Box 174 SAFAT 13002 — Kuwait</p>
                    <p>Open from 8:30am to 4:30pm (Sun-Thu)</p>
                    <p>Tel:+965 22053700<br />Fax: +965 22053711</p>
                    <p>barsha@totaloffice.com</p>
                </div>
                <div class="col-md-6">
                    <h5>Abu Dhabi</h5>
                    <p>The View Tower – 8th Floor<br />Block 71, Building No. 14A+14B<br />Beside Symphony Hotel<br />Gulf
                        Street – Salmiya<br />Kuwait<br />P.O. Box 174 SAFAT 13002 — Kuwait</p>
                    <p>Open from 8:30am to 4:30pm (Sun-Thu)</p>
                    <p>Tel:+965 22053700<br />Fax: +965 22053711</p>
                    <p>abudhabi@totaloffice.com</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thanks! We\'ll get back to you shortly.');
            this.reset();
        });
    </script>
@endsection
