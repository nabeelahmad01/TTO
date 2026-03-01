@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/homepage.css') }}">
        <!-- Hero -->
    <section class="ab-hero">
      <div class="container px-3 px-md-4">
        <div class="ab-breadcrumb">Home / Our Story</div>
        <h1 class="ab-hero-title">About Total Office</h1>
        <div class="ab-hero-sub">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
          sint. Velit officia consequat.
        </div>
      </div>
    </section>

    <!-- About Us with varying image widths/heights -->
    <section class="ab-about">
      <div class="container px-3 px-md-4">
        <div class="row g-4 mb-2">
          <div class="col-lg-6">
            <h3>About Us</h3>
            <p style="color: #5b87d1">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Category Slider (same as homepage) -->
    <section class="slider-section">
        <div class="slider-container">
            <div class="slider-wrapper" id="abSliderWrapper">
                <div class="category-card" data-index="0">
                    <div class="card-icon">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Furniture" width="100px" />
                    </div>
                    <h3 class="card-title">Furniture</h3>
                    <p class="card-items">40+ items</p>
                </div>
                <div class="category-card" data-index="1">
                    <div class="card-icon">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Acoustic Products" width="100px" />
                    </div>
                    <h3 class="card-title">Acoustic Products</h3>
                    <p class="card-items">40+ items</p>
                </div>
                <div class="category-card" data-index="2">
                    <div class="card-icon">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Writable Surfaces" width="100px" />
                    </div>
                    <h3 class="card-title">Writable Surfaces</h3>
                    <p class="card-items">40+ items</p>
                </div>
                <div class="category-card" data-index="3">
                    <div class="card-icon">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Fabrics" width="100px" />
                    </div>
                    <h3 class="card-title">Fabrics</h3>
                    <p class="card-items">40+ items</p>
                </div>
                <div class="category-card" data-index="4">
                    <div class="card-icon">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Greenwalls" width="100px" />
                    </div>
                    <h3 class="card-title">Greenwalls</h3>
                    <p class="card-items">40+ items</p>
                </div>
                <div class="category-card" data-index="5">
                    <div class="card-icon">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Office Supplies" width="100px" />
                    </div>
                    <h3 class="card-title">Office Supplies</h3>
                    <p class="card-items">40+ items</p>
                </div>
            </div>
        </div>

        <div class="dots-container" id="abDotsContainer"></div>

        <div class="text-center">
            <a href="#" class="cta-button">SEE ALL PRODUCTS</a>
        </div>
    </section>

    <!-- USP Tabs -->
    <section class="ab-usp">
      <div class="container px-3 px-md-4">
        <h3>USP's</h3>
        <div class="ab-usp-sub">
          With the new AirPlay 2, you can control your home audio system and the
          speakers throughout your house 4 You can play a song in the living room
          and your kitchen at the same time.
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="usp-title">USP 1</div>
            <p class="usp-desc">
              Eget neque lorem commodo sit. Viverra ut posuere consequat
              nunc.
            </p>
          </div>
          <div class="col-md-4">
            <div class="usp-title">USP 2</div>
            <p class="usp-desc">
              Cum lacinia magna aliquet metus. Arcu tortor, nisi id dui
              amet ac eu. Turpis erat ornare mauris, aliquet arcu.
              facilisis eleifend.
            </p>
          </div>
          <div class="col-md-4">
            <div class="usp-title">USP 3</div>
            <p class="usp-desc">
              Id senectus semper id lacus. Risus a, erat arcu morbi
              tortor. Nisl, vel mauris vulputate arcu venenatis.
            </p>
          </div>
        </div>

        <div class="row g-4 mt-2">
          <div class="col-md-4">
            <div class="ab-pattern ab-box-sm"></div>
          </div>
          <div class="col-md-8">
            <div class="ab-pattern ab-box-lg"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- History with tabs + timeline -->
    <section class="ab-history">
      <div class="container px-3 px-md-4">
        <div class="mb-2" style="color: #5b87d1; font-weight: 800">
          Our History
        </div>
        <ul class="nav nav-pills" id="histTabs" role="tablist">
          <li class="nav-item">
            <button
              class="nav-link active"
              data-bs-toggle="pill"
              data-bs-target="#hist1"
            >
              Our History
            </button>
          </li>
          <li class="nav-item">
            <button
              class="nav-link"
              data-bs-toggle="pill"
              data-bs-target="#hist2"
            >
              Future Roadmap
            </button>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="hist1">
            <h2>Start of journey 1998</h2>
            <div class="row g-4">
              <div class="col-md-6">
                <p style="color: #5b87d1">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
              <div class="col-md-6">
                <p style="color: #5b87d1">
                  Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                  ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="ab-timeline row g-4 mt-3">
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">1998</div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incidid
                </p>
              </div>
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2000</div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incidid
                </p>
              </div>
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2005</div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incidid
                </p>
              </div>
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2020</div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incidid
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="hist2">
            <h2>Future Roadmap</h2>
            <div class="ab-timeline row g-4 mt-3">
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2025</div>
                <p>Key milestone one.</p>
              </div>
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2026</div>
                <p>Key milestone two.</p>
              </div>
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2027</div>
                <p>Key milestone three.</p>
              </div>
              <div class="col-6 col-md-3 ab-time-item">
                <div class="year">2030</div>
                <p>Key milestone four.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Team with tabs and stacked images groups -->
    <section class="ab-team">
      <div class="container px-3 px-md-4">
        <h3>The Team</h3>
        <div class="d-flex justify-content-center mb-3">
          <ul class="nav nav-pills" id="teamTabs" role="tablist">
            <li class="nav-item">
              <button
                class="nav-link active"
                data-bs-toggle="pill"
                data-bs-target="#board"
              >
                Board Members
              </button>
            </li>
            <li class="nav-item">
              <button
                class="nav-link"
                data-bs-toggle="pill"
                data-bs-target="#mgmt"
              >
                Management
              </button>
            </li>
          </ul>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="board">
            <div class="row g-4 text-primary">
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team 1</div>
              </div>
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team 2</div>
              </div>
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team 3</div>
              </div>
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team 4</div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="mgmt">
            <div class="row g-4 text-primary">
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team A</div>
              </div>
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team B</div>
              </div>
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team C</div>
              </div>
              <div class="col-6 col-lg-3 ab-team-group">
                <div class="ab-stack">
                  <div class="ab-card"></div>
                  <div class="ab-card"></div>
                </div>
                <div>Team D</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sustainability list -->
    <section class="ab-sus">
      <div class="container px-3 px-md-4">
        <h3>Sustainability</h3>
        <div class="ab-srow row g-3 align-items-start">
          <div class="col-2 col-md-1 ab-snum">01</div>
          <div class="col-10 col-md-5 ab-sname">Low Waste</div>
          <div class="col-12 col-md-6 ab-sdesc">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </div>
        </div>
        <div class="ab-srow row g-3 align-items-start">
          <div class="col-2 col-md-1 ab-snum">02</div>
          <div class="col-10 col-md-5 ab-sname">
            Our products are made from 100% recycled material.
          </div>
          <div class="col-12 col-md-6 ab-sdesc">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </div>
        </div>
        <div class="ab-srow row g-3 align-items-start">
          <div class="col-2 col-md-1 ab-snum">03</div>
          <div class="col-10 col-md-5 ab-sname">
            Our goal is to have zero carbon footprint by 2030.
          </div>
          <div class="col-12 col-md-6 ab-sdesc">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </div>
        </div>
        <div class="ab-srow row g-3 align-items-start">
          <div class="col-2 col-md-1 ab-snum">04</div>
          <div class="col-10 col-md-5 ab-sname">
            All our products made with sustainability in mind
          </div>
          <div class="col-12 col-md-6 ab-sdesc">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Slider Section (same as homepage) -->
    <section class="testi-slider-section">
        <div class="testi-slider-header">
            <h2 class="testi-slider-title">Testimonials</h2>
        </div>

        <div class="testi-slider-wrapper">
            <button class="testi-nav-btn testi-nav-prev" onclick="abTestiPrev()">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="testi-slider-inner">
                <!-- Left image -->
                <div class="testi-slider-image">
                    <i class="fas fa-image"></i>
                </div>

                <!-- Right: two cards visible at a time -->
                <div class="testi-cards-viewport">
                    <div class="testi-cards-track" id="abTestiTrack">
                        <!-- Card 1 -->
                        <div class="testi-slide-card">
                            <p class="testi-slide-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet.
                                All base UI elements are made using Nested Symbols"
                            </p>
                            <div class="testi-slide-author">
                                <div class="testi-avatar"></div>
                                <div>
                                    <div class="testi-name">Name Surname</div>
                                    <div class="testi-company">Founder, Acme Company</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="testi-slide-card">
                            <p class="testi-slide-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet.
                                All base UI elements are made using Nested Symbols"
                            </p>
                            <div class="testi-slide-author">
                                <div class="testi-avatar"></div>
                                <div>
                                    <div class="testi-name">Name Surname</div>
                                    <div class="testi-company">Founder, Acme Company</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="testi-slide-card">
                            <p class="testi-slide-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet.
                                All base UI elements are made using Nested Symbols"
                            </p>
                            <div class="testi-slide-author">
                                <div class="testi-avatar"></div>
                                <div>
                                    <div class="testi-name">Name Surname</div>
                                    <div class="testi-company">Founder, Acme Company</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="testi-slide-card">
                            <p class="testi-slide-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet.
                                All base UI elements are made using Nested Symbols"
                            </p>
                            <div class="testi-slide-author">
                                <div class="testi-avatar"></div>
                                <div>
                                    <div class="testi-name">Name Surname</div>
                                    <div class="testi-company">Founder, Acme Company</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="testi-nav-btn testi-nav-next" onclick="abTestiNext()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </section>

    <script>
        // About Testimonials Slider
        (function() {
            const track = document.getElementById('abTestiTrack');
            if (!track) return;
            const cards = track.querySelectorAll('.testi-slide-card');
            const totalCards = cards.length;
            let abTestiIndex = 0;

            function getCardsPerView() {
                return window.innerWidth <= 768 ? 1 : 2;
            }

            function updateSlider() {
                const perView = getCardsPerView();
                const maxIndex = Math.max(0, totalCards - perView);
                if (abTestiIndex > maxIndex) abTestiIndex = maxIndex;
                const pct = (abTestiIndex / perView) * 100;
                track.style.transform = 'translateX(-' + pct + '%)';
            }

            window.abTestiNext = function() {
                const perView = getCardsPerView();
                const maxIndex = Math.max(0, totalCards - perView);
                abTestiIndex = Math.min(abTestiIndex + 1, maxIndex);
                updateSlider();
            };

            window.abTestiPrev = function() {
                abTestiIndex = Math.max(abTestiIndex - 1, 0);
                updateSlider();
            };

            window.addEventListener('resize', updateSlider);
        })();
    </script>

    <script>
        // About Category Slider
        (function() {
            const wrapper = document.getElementById('abSliderWrapper');
            if (!wrapper) return;
            const cards = wrapper.querySelectorAll('.category-card');
            const dotsContainer = document.getElementById('abDotsContainer');
            let currentIndex = 0;

            function getCardsPerView() {
                if (window.innerWidth <= 576) return 2;
                if (window.innerWidth <= 992) return 3;
                return 4;
            }

            function updateSlider() {
                const perView = getCardsPerView();
                const cardWidth = cards[0].offsetWidth + 20;
                const maxIndex = Math.max(0, cards.length - perView);
                if (currentIndex > maxIndex) currentIndex = maxIndex;
                wrapper.style.transform = 'translateX(-' + (currentIndex * cardWidth) + 'px)';
                updateDots();
            }

            function updateDots() {
                if (!dotsContainer) return;
                const perView = getCardsPerView();
                const totalDots = Math.max(1, cards.length - perView + 1);
                dotsContainer.innerHTML = '';
                for (let i = 0; i < totalDots; i++) {
                    const dot = document.createElement('span');
                    dot.className = 'dot' + (i === currentIndex ? ' active' : '');
                    dot.onclick = function() { currentIndex = i; updateSlider(); };
                    dotsContainer.appendChild(dot);
                }
            }

            // Elevated card effect
            cards.forEach(function(card, i) {
                if (i % 2 === 1) card.classList.add('elevated');
            });

            window.addEventListener('resize', updateSlider);
            updateSlider();
        })();
    </script>
@endsection
