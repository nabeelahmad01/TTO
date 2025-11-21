@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/conference-rooms.css') }}">
    <nav class="navbar navbar-expand-lg cr-nav">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" href="index.html">totaloffice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#crNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="crNav" class="collapse navbar-collapse"></div>
        </div>
    </nav>

    <section class="cr-hero">
        <div class="container px-3 px-md-4">
            <div class="cr-breadcrumb">Home / Shop By Space</div>
            <h1 class="cr-title">Conference Rooms</h1>
        </div>
    </section>

    <div class="container px-3 px-md-4">
        <!-- Reusable slider block template instances -->
        <div class="cr-block" data-slider>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="cr-head">Conference Chairs</div>
                <div class="d-flex gap-2">
                    <button class="cr-navbtn" data-prev><i class="fas fa-chevron-left"></i></button>
                    <button class="cr-navbtn" data-next><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="cr-viewport">
                <div class="cr-track">
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Paola Wood Chair</div>
                            <div class="cr-price">$ 5,900</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Native Light Chair</div>
                            <div class="cr-price">$ 1,200</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Moss Upholstery Fabric</div>
                            <div class="cr-price">$ 500</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Desk Armchair</div>
                            <div class="cr-price">$ 880</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Executive Chair</div>
                            <div class="cr-price">$ 1,950</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="d-inline-block mt-2 text-primary fw-bold">View All <i
                    class="fas fa-arrow-right ms-1"></i></a>
        </div>

        <div class="cr-block" data-slider>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="cr-head">Conference Table</div>
                <div class="d-flex gap-2">
                    <button class="cr-navbtn" data-prev><i class="fas fa-chevron-left"></i></button>
                    <button class="cr-navbtn" data-next><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="cr-viewport">
                <div class="cr-track">
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Oak Table</div>
                            <div class="cr-price">$ 2,400</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Walnut Table</div>
                            <div class="cr-price">$ 3,100</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Round Table</div>
                            <div class="cr-price">$ 1,750</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Glass Table</div>
                            <div class="cr-price">$ 2,990</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="d-inline-block mt-2 text-primary fw-bold">View All <i
                    class="fas fa-arrow-right ms-1"></i></a>
        </div>

        <div class="cr-block" data-slider>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="cr-head">Office Tables</div>
                <div class="d-flex gap-2">
                    <button class="cr-navbtn" data-prev><i class="fas fa-chevron-left"></i></button>
                    <button class="cr-navbtn" data-next><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="cr-viewport">
                <div class="cr-track">
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Work Desk</div>
                            <div class="cr-price">$ 640</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Standing Desk</div>
                            <div class="cr-price">$ 980</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Corner Desk</div>
                            <div class="cr-price">$ 1,120</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Compact Desk</div>
                            <div class="cr-price">$ 520</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="d-inline-block mt-2 text-primary fw-bold">View All <i
                    class="fas fa-arrow-right ms-1"></i></a>
        </div>

        <div class="cr-block" data-slider>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div class="cr-head">Lights</div>
                <div class="d-flex gap-2">
                    <button class="cr-navbtn" data-prev><i class="fas fa-chevron-left"></i></button>
                    <button class="cr-navbtn" data-next><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="cr-viewport">
                <div class="cr-track">
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Ceiling Lamp</div>
                            <div class="cr-price">$ 180</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Desk Lamp</div>
                            <div class="cr-price">$ 120</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Wall Sconce</div>
                            <div class="cr-price">$ 140</div>
                        </div>
                    </div>
                    <div class="cr-card">
                        <div class="cr-card-top"><i class="fa-regular fa-image"></i></div>
                        <div class="cr-card-body">
                            <div class="cr-name">Spot Light</div>
                            <div class="cr-price">$ 95</div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="d-inline-block mt-2 text-primary fw-bold">View All <i
                    class="fas fa-arrow-right ms-1"></i></a>
        </div>
    </div>

    <script>
        // Reusable, smooth sliders for all [data-slider] blocks
        (function() {
            document.querySelectorAll('[data-slider]').forEach(function(block) {
                const track = block.querySelector('.cr-track');
                const prev = block.querySelector('[data-prev]');
                const next = block.querySelector('[data-next]');
                let index = 0;

                function step() {
                    const first = track.children[0];
                    const gap = 18; // CSS gap
                    return first.getBoundingClientRect().width + gap;
                }

                function maxIndex() {
                    const viewport = block.querySelector('.cr-viewport');
                    const perView = Math.max(1, Math.floor(viewport.clientWidth / track.children[0]
                        .getBoundingClientRect().width));
                    return Math.max(0, track.children.length - perView);
                }

                function update() {
                    const translate = -index * step();
                    track.style.transform = `translateX(${translate}px)`;
                }
                prev.addEventListener('click', () => {
                    index = Math.max(0, index - 1);
                    update();
                });
                next.addEventListener('click', () => {
                    index = (index + 1 > maxIndex()) ? 0 : index + 1;
                    update();
                });
                window.addEventListener('resize', update);
                update();
            });
        })();
    </script>

@endsection
