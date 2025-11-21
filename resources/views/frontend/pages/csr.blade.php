@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/csr.css') }}">
    <nav class="navbar" style="background:#fff;border-bottom:1px solid #e0e0e0;">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" style="color:#0066ff;font-weight:800;" href="index.html">totaloffice</a>
        </div>
    </nav>

    <!-- Hero split layout -->
    <section class="csr-hero">
        <div class="container-fluid px-0">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 csr-left">
                    <div class="csr-ph"></div>
                </div>
                <div class="col-lg-6 csr-right">
                    <div class="csr-breadcrumb">Home / CSR</div>
                    <h1 class="csr-title">Corporate Social<br />Responsibility</h1>
                    <p class="csr-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Introduction -->
    <section class="csr-intro">
        <div class="container px-3 px-md-4">
            <h3>Introduction</h3>
            <div class="row g-4">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accomplishments list -->
    <section class="csr-acc">
        <div class="container px-3 px-md-4">
            <h3>Accomplishments</h3>
            <div class="csr-row row g-3 align-items-start">
                <div class="col-2 col-md-1 csr-num">01</div>
                <div class="col-10 col-md-3 csr-name">Human Kind</div>
                <div class="col-12 col-md-8 csr-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
            </div>
            <div class="csr-row row g-3 align-items-start">
                <div class="col-2 col-md-1 csr-num">02</div>
                <div class="col-10 col-md-3 csr-name">Innovation</div>
                <div class="col-12 col-md-8 csr-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
            </div>
            <div class="csr-row row g-3 align-items-start">
                <div class="col-2 col-md-1 csr-num">03</div>
                <div class="col-10 col-md-3 csr-name">Reliable</div>
                <div class="col-12 col-md-8 csr-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
            </div>
            <div class="csr-row row g-3 align-items-start">
                <div class="col-2 col-md-1 csr-num">04</div>
                <div class="col-10 col-md-3 csr-name">Collaborate</div>
                <div class="col-12 col-md-8 csr-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
            </div>
        </div>
    </section>

@endsection
