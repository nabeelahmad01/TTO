@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/conference-room-tables.css') }}">
    <!-- Header/Hero -->
    <section class="crt-nav">
        <div class="container px-3 px-md-4">
            <div class="crt-breadcrumb">Home / Shop By Space / Conference Rooms / Tables</div>
            <h1 class="crt-title">Conference Room Tables</h1>
        </div>
    </section>

    <section>
        <div class="container px-3 px-md-4">
            <!-- Top toolbar -->
            <div class="crt-toolbar">
                <div class="crt-search">
                    <input type="text" placeholder="Search for products" />
                    <button aria-label="Search"><i class="fas fa-magnifying-glass"></i></button>
                </div>
                <button id="crtToggle" class="crt-toggle">FILTER & SORT</button>
            </div>

            <!-- Results & view toggles -->
            <div class="d-flex align-items-center justify-content-between">
                <div class="crt-results">416 Results</div>
                <div class="d-flex align-items-center gap-3 text-primary">
                    <i class="fas fa-grip"></i>
                    <i class="fas fa-table-columns"></i>
                </div>
            </div>

            <!-- Grid wrapper: filters + products -->
            <div id="crtWrapper" class="crt-wrapper mt-2">
                <!-- Filters sidebar -->
                <aside class="crt-filters">
                    <div class="crt-sticky">
                        <div class="crt-filter-title">Filter & Sort <button id="crtClose"
                                class="btn btn-sm btn-link text-primary">Close</button></div>
                        <div class="input-group input-group-sm my-2">
                            <input type="text" class="form-control" placeholder="Search products">
                            <button class="btn btn-primary"><i class="fas fa-magnifying-glass"></i></button>
                        </div>
                        <div class="crt-filter-group">
                            <div class="fw-bold text-primary mb-2">Product type</div>
                            <div class="crt-chip-wrap">
                                <span class="crt-chip">Meeting Tables</span>
                                <span class="crt-chip">Meeting Chairs</span>
                                <span class="crt-chip">Electrics</span>
                                <span class="crt-chip">Credenza</span>
                                <span class="crt-chip">Writable Surfaces</span>
                            </div>
                        </div>
                        <div class="crt-filter-group">
                            <div class="fw-bold text-primary mb-2">Colors</div>
                            <div class="crt-chip-wrap">
                                <span class="crt-chip">Black</span>
                                <span class="crt-chip">Beige</span>
                                <span class="crt-chip">White</span>
                                <span class="crt-chip">Red</span>
                                <span class="crt-chip">Blue</span>
                                <span class="crt-chip">Green</span>
                            </div>
                        </div>
                        <div class="crt-filter-group">
                            <div class="fw-bold text-primary mb-2">Material</div>
                            <div class="crt-chip-wrap">
                                <span class="crt-chip">Oak</span>
                                <span class="crt-chip">Pine Wood</span>
                                <span class="crt-chip">Cedar</span>
                                <span class="crt-chip">Plastic</span>
                                <span class="crt-chip">Rosewood</span>
                            </div>
                        </div>
                        <div class="crt-filter-group">
                            <div class="fw-bold text-primary mb-2 d-flex justify-content-between"><span>Price</span><span
                                    id="crtPriceLabel">$ 17 - $ 815</span></div>
                            <input id="crtPrice" class="form-range crt-range" type="range" min="17" max="815"
                                value="417" />
                        </div>
                        <div class="crt-filter-group">
                            <div class="fw-bold text-primary mb-2">Sort by</div>
                            <div class="row g-2">
                                <div class="col-6"><button class="btn btn-sm w-100 btn-outline-primary">Popular
                                        First</button></div>
                                <div class="col-6"><button class="btn btn-sm w-100 btn-outline-primary">Latest
                                        First</button></div>
                                <div class="col-6"><button class="btn btn-sm w-100 btn-outline-primary">A — Z</button>
                                </div>
                                <div class="col-6"><button class="btn btn-sm w-100 btn-outline-primary">Z — A</button>
                                </div>
                                <div class="col-6"><button class="btn btn-sm w-100 btn-outline-primary">Price High To
                                        Low</button></div>
                                <div class="col-6"><button class="btn btn-sm w-100 btn-outline-primary">Price Low To
                                        High</button></div>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Products grid -->
                <main>
                    <div class="row g-3">
                        <div class="col-sm-6 col-lg-4">
                            <div class="crt-card">
                                <div class="crt-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="crt-card-body">
                                    <div class="crt-card-name">Paola Wood Chair</div>
                                    <div class="crt-card-price">$ 5,900</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="crt-card">
                                <div class="crt-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="crt-card-body">
                                    <div class="crt-card-name">Native Light Chair</div>
                                    <div class="crt-card-price">$ 1,200</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="crt-card">
                                <div class="crt-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="crt-card-body">
                                    <div class="crt-card-name">Moss Upholstery Fabric</div>
                                    <div class="crt-card-price">$ 500</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="crt-card">
                                <div class="crt-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="crt-card-body">
                                    <div class="crt-card-name">Round Meeting Table</div>
                                    <div class="crt-card-price">$ 2,100</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="crt-card">
                                <div class="crt-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="crt-card-body">
                                    <div class="crt-card-name">Rectangular Table</div>
                                    <div class="crt-card-price">$ 2,650</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="crt-card">
                                <div class="crt-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="crt-card-body">
                                    <div class="crt-card-name">Cable Management Table</div>
                                    <div class="crt-card-price">$ 3,100</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <script>
        // Toggle Filters & Sort panel (slide-out, like previous page)
        (function() {
            const wrapper = document.getElementById('crtWrapper');
            const toggle = document.getElementById('crtToggle');
            const closeBtn = document.getElementById('crtClose');
            const price = document.getElementById('crtPrice');
            const priceLabel = document.getElementById('crtPriceLabel');

            function open() {
                wrapper.classList.add('open');
                toggle.textContent = 'FILTER & SORT ✕';
            }

            function close() {
                wrapper.classList.remove('open');
                toggle.textContent = 'FILTER & SORT';
            }
            toggle.addEventListener('click', () => wrapper.classList.contains('open') ? close() : open());
            closeBtn.addEventListener('click', close);
            price.addEventListener('input', () => {
                priceLabel.textContent = `$ 17 - $ ${price.value}`;
            });
        })();
    </script>

@endsection
