@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/hospitality.css') }}">

    <!-- 1) Hero -->
    <section class="hp-hero">
        <div class="container px-3 px-md-4">
            <div class="hp-breadcrumb">Home / Products / Hospitality</div>
            <h1 class="hp-hero-title">Hospitality</h1>
            <p class="hp-hero-sub">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia.
            </p>
        </div>
    </section>

    <!-- 2) Intro + Benefits (Bootstrap rows/cols) -->
    <section class="hp-intro">
        <div class="container px-3 px-md-4">
            <div class="row g-5 align-items-start mb-4">
                <div class="col-lg-6">
                    <div class="hp-kicker">Intro</div>
                    <h2>Arcu neque risus porta ultricies auctor lacus.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <button class="hp-btn">See All Products</button>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                </div>
            </div>

            <div class="hp-benefits">
                <div class="row g-4">
                    <div class="col-12">
                        <h3>Benefits</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua.</p>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="hp-feature"><i class="fa-solid fa-border-all"></i>
                            <div>
                                <h6>Feature one</h6>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="hp-feature"><i class="fa-regular fa-circle"></i>
                            <div>
                                <h6>Feature two</h6>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="hp-feature"><i class="fa-regular fa-square"></i>
                            <div>
                                <h6>Feature three</h6>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div class="hp-feature"><i class="fa-regular fa-circle-dot"></i>
                            <div>
                                <h6>Feature four</h6>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3) Brands grid with dots -->
    <section class="hp-brands">
        <div class="container px-3 px-md-4">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h3>Brands</h3>
                    <p>Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean
                        Separated
                        they live in Bookmarks right</p>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3" id="hpBrandGrid">
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">Andreu World</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">studio t</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">arper</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">Manerba</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">LUUM</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">boss</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">emmegi</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">wi</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">K+N</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hp-brand-card">PEDRALI</div>
                        </div>
                    </div>
                    <div class="hp-dots" id="hpBrandDots"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4) Examples slider -->
    <section class="hp-examples">
        <div class="container px-3 px-md-4">
            <h3>Examples</h3>
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Exercitation veniam consequat sunt
                nostrud amet.</p>
            <div class="hp-ex-viewport">
                <button class="hp-ex-btn prev" id="hpExPrev"><i class="fas fa-chevron-left"></i></button>
                <div class="hp-ex-track" id="hpExTrack">
                    <div class="hp-ex-card"></div>
                    <div class="hp-ex-card"></div>
                    <div class="hp-ex-card"></div>
                </div>
                <button class="hp-ex-btn next" id="hpExNext"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- 5) Related products -->
    <section class="hp-related">
        <div class="container px-3 px-md-4">
            <h3>Related Products</h3>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="hp-prod">
                        <div class="hp-prod-top"><i class="fa-regular fa-image hp-prod-img"></i></div>
                        <div class="hp-prod-body">
                            <div class="hp-prod-name">Paola Wood Chair</div>
                            <div class="hp-prod-price">$ 5,900</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hp-prod">
                        <div class="hp-prod-top"><i class="fa-regular fa-image hp-prod-img"></i></div>
                        <div class="hp-prod-body">
                            <div class="hp-prod-name">Native Light Chair</div>
                            <div class="hp-prod-price">$ 1,200</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="hp-prod">
                        <div class="hp-prod-top"><i class="fa-regular fa-image hp-prod-img"></i></div>
                        <div class="hp-prod-body">
                            <div class="hp-prod-name">Moss Upholstery Fabric</div>
                            <div class="hp-prod-price">$ 500</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3"><button class="hp-btn">See All</button></div>
        </div>
    </section>

    <!-- 6) CTA banner -->
    <section class="hp-cta">
        <div class="container px-3 px-md-4">
            <h3>Healthcare</h3>
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia.</p>
            <button class="hp-btn">Explore Now</button>
        </div>
    </section>
    <script>
        // Brands grid pager with dots (paginate by rows visible)
        (function() {
            const grid = document.getElementById('hpBrandGrid');
            const dots = document.getElementById('hpBrandDots');
            let page = 0;

            function perPage() {
                const cards = grid.children;
                const cols = getComputedStyle(grid.parentElement.querySelector('.row'))
                .gridTemplateColumns; // not reliable
                // simple responsive breakpoints: 6 per page on lg+, 4 on md, 3 on sm
                const w = grid.clientWidth;
                if (w > 900) return 8; // 2 rows x 4 cols
                if (w > 600) return 6; // 2 x 3
                return 4; // 2 x 2
            }

            function total() {
                return Math.ceil(grid.children.length / perPage());
            }

            function render() {
                const totalPages = total();
                dots.innerHTML = '';
                for (let i = 0; i < totalPages; i++) {
                    const d = document.createElement('div');
                    d.className = 'hp-dot' + (i === page ? ' active' : '');
                    d.addEventListener('click', () => {
                        page = i;
                        update();
                        render();
                    });
                    dots.appendChild(d);
                }
            }

            function update() {
                const p = perPage();
                Array.from(grid.children).forEach((el, idx) => {
                    el.style.display = (Math.floor(idx / p) === page) ? '' : 'none';
                });
            }
            window.addEventListener('resize', () => {
                update();
                render();
            });
            update();
            render();
        })();

        // Examples slider
        (function() {
            const track = document.getElementById('hpExTrack');
            const prev = document.getElementById('hpExPrev');
            const next = document.getElementById('hpExNext');
            let i = 0;

            function step() {
                return track.children[0].getBoundingClientRect().width + 18;
            }

            function move(dir) {
                i += dir;
                if (i < 0) i = 0;
                if (i > track.children.length - 1) i = 0;
                track.scrollTo({
                    left: i * step(),
                    behavior: 'smooth'
                });
            }
            prev.addEventListener('click', () => move(-1));
            next.addEventListener('click', () => move(1));
        })();
    </script>

@endsection
