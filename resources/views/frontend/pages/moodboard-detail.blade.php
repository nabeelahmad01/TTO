@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/moodboard-detail.css') }}">
    <nav class="navbar navbar-expand-lg mbd-nav">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" href="index.html">totaloffice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mbdNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="mbdNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="moodboards.html">Moodboards</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="mbd-hero">
        <div class="container px-3 px-md-4">
            <div class="mbd-hero-top">
                <div class="mbd-breadcrumb">Home / Bespoke Solutions / Moodboards & Ideas / The Orange Blossom</div>
                <div class="mbd-share">Share: <a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i
                            class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a
                        href="#"><i class="fas fa-link"></i></a></div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-2">
                <div class="mbd-hero-illus"><i class="fa-regular fa-image"></i></div>
            </div>
            <div class="mbd-title-row">
                <h1 class="mbd-title">Sophistication Retro</h1>
                <button class="mbd-fav-btn"><i class="fa-solid fa-heart"></i> Add to Favorites</button>
            </div>
        </div>
    </section>

    <!-- Section A -->
    <section class="mbd-section">
        <div class="container px-3 px-md-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mbd-box mbd-square">
                        <div class="mbd-square-wrap"><i class="fa-regular fa-image mbd-illus"></i></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mbd-text">
                        <h3>Magna hendrerit hendrerit tempus aliquet.</h3>
                        <p>Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean
                            Separated they live in Bookmarks right</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section B (second image style) -->
    <section class="mbd-section pt-0">
        <div class="container px-3 px-md-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="mbd-text">
                        <h3>Pharetra diam risus eget condimentum lectus neque proin tincidunt nec. Egestas.</h3>
                        <p>Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean
                            Separated they live in Bookmarks right</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 d-flex justify-content-lg-end">
                    <div class="mbd-box mbd-circle">
                        <i class="fa-regular fa-image mbd-illus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Slider (autoplay) -->
    <section class="mbd-products">
        <div class="container px-3 px-md-4">
            <h3>Products in this moodboard</h3>
            <div class="mbd-slider-viewport" id="mbdViewport">
                <div class="mbd-slider-track" id="mbdTrack">
                    <div class="mbd-prod-card">
                        <div class="mbd-prod-top"><i class="fa-regular fa-image mbd-illus" style="font-size:64px"></i></div>
                        <div class="mbd-prod-body">
                            <div class="mbd-prod-name">Native Light Chair</div>
                            <div class="mbd-prod-price">$ 1,200</div>
                        </div>
                    </div>
                    <div class="mbd-prod-card">
                        <div class="mbd-prod-top"><i class="fa-regular fa-image mbd-illus" style="font-size:64px"></i></div>
                        <div class="mbd-prod-body">
                            <div class="mbd-prod-name">Moss Upholstery Fabric</div>
                            <div class="mbd-prod-price">$ 500</div>
                        </div>
                    </div>
                    <div class="mbd-prod-card">
                        <div class="mbd-prod-top"><i class="fa-regular fa-image mbd-illus" style="font-size:64px"></i></div>
                        <div class="mbd-prod-body">
                            <div class="mbd-prod-name">Desk Lamp</div>
                            <div class="mbd-prod-price">$ 220</div>
                        </div>
                    </div>
                    <div class="mbd-prod-card">
                        <div class="mbd-prod-top"><i class="fa-regular fa-image mbd-illus" style="font-size:64px"></i></div>
                        <div class="mbd-prod-body">
                            <div class="mbd-prod-name">Wall Panel</div>
                            <div class="mbd-prod-price">$ 310</div>
                        </div>
                    </div>
                    <div class="mbd-prod-card">
                        <div class="mbd-prod-top"><i class="fa-regular fa-image mbd-illus" style="font-size:64px"></i></div>
                        <div class="mbd-prod-body">
                            <div class="mbd-prod-name">Side Table</div>
                            <div class="mbd-prod-price">$ 480</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbd-slider-nav">
                <button class="mbd-btn" id="mbdPrev"><i class="fas fa-chevron-left"></i></button>
                <button class="mbd-btn" id="mbdNext"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Next Moodboard (third image style) -->
    <section class="mbd-next">
        <div class="container px-3 px-md-4">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="mbd-hero-illus" style="font-size:120px"><i class="fa-regular fa-image"></i></div>
                </div>
                <div class="col-md-6">
                    <div class="mbd-next-title">Next Moodboard</div>
                    <div class="mbd-next-name">Go Green</div>
                    <button class="mbd-go"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <script>
        (function() {
            const track = document.getElementById('mbdTrack');
            const viewport = document.getElementById('mbdViewport');
            const prev = document.getElementById('mbdPrev');
            const next = document.getElementById('mbdNext');
            let index = 0;
            let autoplay;

            function itemWidth() {
                const first = track.children[0];
                const styles = getComputedStyle(track);
                const gap = parseInt(styles.columnGap || styles.gap || 18);
                return first.getBoundingClientRect().width + gap;
            }

            function maxIndex() {
                return Math.max(0, track.children.length - Math.floor(viewport.clientWidth / track.children[0]
                    .clientWidth));
            }

            function update() {
                track.style.transform = `translateX(${-index * itemWidth()}px)`;
            }

            function go(dir) {
                index += dir;
                const max = maxIndex();
                if (index < 0) index = 0;
                if (index > max) index = 0;
                update();
            }

            prev.addEventListener('click', () => go(-1));
            next.addEventListener('click', () => go(1));
            window.addEventListener('resize', update);

            function start() {
                autoplay = setInterval(() => go(1), 2500);
            }

            function stop() {
                clearInterval(autoplay);
            }
            viewport.addEventListener('mouseenter', stop);
            viewport.addEventListener('mouseleave', start);
            start();
            update();
        })();
    </script>
@endsection
