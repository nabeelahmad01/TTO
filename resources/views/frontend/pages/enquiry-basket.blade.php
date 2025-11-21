@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/enquiry-basket.css') }}">
    <nav class="navbar navbar-expand-lg" style="background:#fff;border-bottom:1px solid #e0e0e0;">
        <div class="container-fluid px-3 px-md-4">
            <a class="navbar-brand" style="color:#0066ff;font-weight:800;" href="index.html">totaloffice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ebNav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="ebNav" class="collapse navbar-collapse"></div>
        </div>
    </nav>

    <main class="container px-3 px-md-4">
        <h1 class="eb-title">Enquiry basket</h1>

        <div class="row g-4">
            <!-- Items column -->
            <div class="col-lg-8">
                <div class="row eb-head mb-2 d-none d-lg-flex">
                    <div class="col-6">Item</div>
                    <div class="col-2">Price</div>
                    <div class="col-2 text-center">QTY</div>
                    <div class="col-2 text-end">Subtotal</div>
                </div>

                <!-- Item 1 -->
                <div class="row eb-item align-items-center" data-price="3500">
                    <div class="col-9 col-lg-6 d-flex align-items-center gap-3">
                        <div class="eb-thumb"></div>
                        <div>
                            <p class="eb-name mb-1">Paola Wood Chair</p>
                            <div class="eb-variant">Black</div>
                            <div class="mt-2">
                                <span class="eb-icon" title="Bookmark"><i class="fa-regular fa-bookmark"></i></span>
                                <span class="eb-icon" title="Duplicate"><i class="fa-regular fa-clone"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-2 fw-bold text-primary">AED 3500</div>
                    <div class="col-6 col-lg-2 d-flex justify-content-lg-center mt-2 mt-lg-0">
                        <div class="eb-qty">
                            <button class="eb-dec" type="button">-</button>
                            <input class="eb-count" type="number" min="1" value="2" />
                            <button class="eb-inc" type="button">+</button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 text-end fw-bold text-primary"><span class="eb-sub">AED 7000</span></div>
                </div>

                <!-- Item 2 -->
                <div class="row eb-item align-items-center" data-price="3500">
                    <div class="col-9 col-lg-6 d-flex align-items-center gap-3">
                        <div class="eb-thumb"></div>
                        <div>
                            <p class="eb-name mb-1">Native Light Chair</p>
                            <div class="eb-variant">White</div>
                            <div class="mt-2">
                                <span class="eb-icon" title="Bookmark"><i class="fa-regular fa-bookmark"></i></span>
                                <span class="eb-icon" title="Remove"><i class="fa-regular fa-trash-can"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-lg-2 fw-bold text-primary">AED 3500</div>
                    <div class="col-6 col-lg-2 d-flex justify-content-lg-center mt-2 mt-lg-0">
                        <div class="eb-qty">
                            <button class="eb-dec" type="button">-</button>
                            <input class="eb-count" type="number" min="1" value="2" />
                            <button class="eb-inc" type="button">+</button>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 text-end fw-bold text-primary"><span class="eb-sub">AED 7000</span></div>
                </div>
            </div>

            <!-- Summary column -->
            <div class="col-lg-4">
                <div class="eb-summary">
                    <h6>Order Summary</h6>
                    <div class="d-flex justify-content-between mt-3">
                        <span>Subtotal</span>
                        <span class="text-primary fw-bold" id="ebSubtotal">AED 14000</span>
                    </div>
                    <hr />
                    <div class="eb-total">
                        <span class="fw-bold">Total</span>
                        <span class="eb-total-amount" id="ebTotal">AED 14000</span>
                    </div>
                    <button class="eb-cta mt-3">Request a Quote</button>
                </div>
            </div>
        </div>
    </main>

    <script>
        (function() {
            function formatAED(v) {
                return 'AED ' + v.toLocaleString('en-AE');
            }

            function recalc() {
                let total = 0;
                document.querySelectorAll('.eb-item').forEach(function(row) {
                    const price = Number(row.getAttribute('data-price')) || 0;
                    const qty = Math.max(1, Number(row.querySelector('.eb-count').value) || 1);
                    const sub = price * qty;
                    row.querySelector('.eb-sub').textContent = formatAED(sub);
                    total += sub;
                });
                document.getElementById('ebSubtotal').textContent = formatAED(total);
                document.getElementById('ebTotal').textContent = formatAED(total);
            }
            document.querySelectorAll('.eb-inc').forEach(b => b.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.eb-count');
                input.value = Number(input.value || 1) + 1;
                recalc();
            }));
            document.querySelectorAll('.eb-dec').forEach(b => b.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.eb-count');
                input.value = Math.max(1, Number(input.value || 1) - 1);
                recalc();
            }));
            document.querySelectorAll('.eb-count').forEach(i => i.addEventListener('input', recalc));
            recalc();
        })();
    </script>
@endsection
