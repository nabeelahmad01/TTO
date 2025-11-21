@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/all-products.css') }}">
    <section class="ap-hero">
        <div class="container px-3 px-md-4">
            <div class="ap-breadcrumb">Home / Products / Product Type</div>
            <h1 class="ap-title">All Products</h1>

            <!-- Top toolbar -->
            <div class="ap-toolbar">
                <div class="ap-search">
                    <input type="text" placeholder="Search for products" />
                    <button aria-label="Search"><i class="fas fa-magnifying-glass"></i></button>
                </div>
                <button id="apToggle" class="ap-toggle">FILTER & SORT</button>
            </div>

            <!-- Results & view toggles -->
            <div class="d-flex align-items-center justify-content-between">
                <div class="ap-results">416 Results</div>
                <div class="d-flex align-items-center gap-3 text-primary">
                    <i class="fas fa-grip text-primary"></i>
                    <i class="fas fa-table-columns text-primary"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Grid wrapper: filters + products -->
    <section>
        <div class="container px-3 px-md-4">
            <div id="apWrapper" class="ap-wrapper">
                <!-- Filters sidebar -->
                <aside class="ap-filters">
                    <div class="ap-sticky">
                        <div class="ap-filter-title">Filter & Sort <button id="apClose"
                                class="btn btn-sm btn-link text-primary">Close</button></div>
                        <div class="input-group input-group-sm my-2">
                            <input type="text" class="form-control" placeholder="Search products">
                            <button class="btn btn-primary"><i class="fas fa-magnifying-glass"></i></button>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary mb-2">Product type</div>
                            <div class="ap-chip-wrap">
                                <span class="ap-chip">Furniture</span>
                                <span class="ap-chip">Acoustic Products</span>
                                <span class="ap-chip">Writable Walls</span>
                                <span class="ap-chip">Fabrics</span>
                            </div>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary mb-2">By Industry</div>
                            <div class="ap-chip-wrap">
                                <span class="ap-chip">Hospitality</span>
                                <span class="ap-chip">Healthcare</span>
                                <span class="ap-chip">Education</span>
                                <span class="ap-chip">Corporate</span>
                            </div>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary mb-2">By Space</div>
                            <div class="ap-chip-wrap">
                                <span class="ap-chip">Office</span>
                                <span class="ap-chip">Kitchen</span>
                                <span class="ap-chip">Hall</span>
                                <span class="ap-chip">Studio</span>
                            </div>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary mb-2">Colors</div>
                            <div class="ap-chip-wrap">
                                <span class="ap-chip">Black</span>
                                <span class="ap-chip">Beige</span>
                                <span class="ap-chip">White</span>
                                <span class="ap-chip">Red</span>
                                <span class="ap-chip">Blue</span>
                                <span class="ap-chip">Green</span>
                            </div>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary mb-2">Material</div>
                            <div class="ap-chip-wrap">
                                <span class="ap-chip">Oak</span>
                                <span class="ap-chip">Pine</span>
                                <span class="ap-chip">Cedar</span>
                                <span class="ap-chip">Plastic</span>
                                <span class="ap-chip">Rosewood</span>
                            </div>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary mb-2">By Brand</div>
                            <div class="ap-chip-wrap">
                                <span class="ap-chip">Patra</span>
                                <span class="ap-chip">Emmegi</span>
                                <span class="ap-chip">Arper</span>
                                <span class="ap-chip">Teknion</span>
                            </div>
                        </div>
                        <div class="ap-filter-group">
                            <div class="fw-bold text-primary d-flex justify-content-between mb-2"><span>Price</span><span
                                    id="apPriceLabel">$ 17 - $ 815</span></div>
                            <input id="apPrice" class="form-range ap-range" type="range" min="17" max="815"
                                value="417" />
                        </div>
                        <div class="ap-filter-group">
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
                            <div class="ap-card">
                                <div class="ap-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="ap-card-body">
                                    <div class="ap-card-name">Paola Wood Chair</div>
                                    <div class="ap-card-price">$ 5,900</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="ap-card">
                                <div class="ap-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="ap-card-body">
                                    <div class="ap-card-name">Native Light Chair</div>
                                    <div class="ap-card-price">$ 1,200</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="ap-card">
                                <div class="ap-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="ap-card-body">
                                    <div class="ap-card-name">Moss Upholstery Fabric</div>
                                    <div class="ap-card-price">$ 500</div>
                                </div>
                            </div>
                        </div>
                        <!-- duplicate row to show grid -->
                        <div class="col-sm-6 col-lg-4">
                            <div class="ap-card">
                                <div class="ap-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="ap-card-body">
                                    <div class="ap-card-name">Paola Wood Chair</div>
                                    <div class="ap-card-price">$ 5,900</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="ap-card">
                                <div class="ap-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="ap-card-body">
                                    <div class="ap-card-name">Native Light Chair</div>
                                    <div class="ap-card-price">$ 1,200</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="ap-card">
                                <div class="ap-card-top"><i class="fa-regular fa-image"></i></div>
                                <div class="ap-card-body">
                                    <div class="ap-card-name">Moss Upholstery Fabric</div>
                                    <div class="ap-card-price">$ 500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <script>
        // Toggle Filters & Sort panel (like your second image)
        (function() {
            const wrapper = document.getElementById('apWrapper');
            const toggle = document.getElementById('apToggle');
            const closeBtn = document.getElementById('apClose');
            const price = document.getElementById('apPrice');
            const priceLabel = document.getElementById('apPriceLabel');

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
