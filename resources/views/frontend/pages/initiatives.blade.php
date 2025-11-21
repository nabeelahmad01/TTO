@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/initiatives.css') }}">
    <!-- Hero -->
    <section class="in-hero">
        <div class="container px-3 px-md-4">
            <div class="in-breadcrumb">Home / Initiatives</div>
            <h1 class="in-title">Initiatives</h1>
        </div>
    </section>
    <div class="container px-3 px-md-4" style="padding:26px 0 60px">
        <div class="in-wrap">
            <div class="in-card">
                <div class="row g-3 align-items-start">
                    <div class="col-md-3">
                        <h4>CSR</h4>
                    </div>
                    <div class="col-md-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet...</p>
                        <a href="#" class="in-link">Explore <span class="ms-1">›</span></a>
                    </div>
                </div>
            </div>

            <div class="in-card">
                <div class="row g-3 align-items-start">
                    <div class="col-md-3">
                        <h4>Sustainability</h4>
                    </div>
                    <div class="col-md-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet...</p>
                        <a href="#" class="in-link">Explore <span class="ms-1">›</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
