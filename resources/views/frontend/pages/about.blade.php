@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/about.css') }}">
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
        <div class="row g-4 align-items-end">
          <div class="col-6 col-md-3">
            <div class="ab-img ab-h-1"><i class="fa-regular fa-image"></i></div>
          </div>
          <div class="col-6 col-md-3">
            <div class="ab-img ab-h-2"><i class="fa-regular fa-image"></i></div>
          </div>
          <div class="col-6 col-md-3">
            <div class="ab-img ab-h-1"><i class="fa-regular fa-image"></i></div>
          </div>
          <div class="col-6 col-md-3">
            <div class="ab-img ab-h-2"><i class="fa-regular fa-image"></i></div>
          </div>
        </div>
      </div>
    </section>

    <!-- USP Tabs -->
    <section class="ab-usp">
      <div class="container px-3 px-md-4">
        <h3>USP’s</h3>
        <div class="ab-usp-sub">
          With the new AirPlay 2, you can control your home audio system and the
          speakers throughout your house. You can play a song in the living room
          and your kitchen at the same time.
        </div>
        <ul
          class="nav nav-pills justify-content-start"
          id="uspTabs"
          role="tablist"
        >
          <li class="nav-item">
            <button
              class="nav-link active"
              data-bs-toggle="pill"
              data-bs-target="#usp1"
            >
              USP 1
            </button>
          </li>
          <li class="nav-item">
            <button
              class="nav-link"
              data-bs-toggle="pill"
              data-bs-target="#usp2"
            >
              USP 2
            </button>
          </li>
          <li class="nav-item">
            <button
              class="nav-link"
              data-bs-toggle="pill"
              data-bs-target="#usp3"
            >
              USP 3
            </button>
          </li>
        </ul>
        <div class="tab-content mt-3">
          <div class="tab-pane fade show active" id="usp1">
            <div class="row g-4">
              <div class="col-md-4">
                <div class="usp-title">USP 1</div>
                <p style="color: #5b87d1">
                  Eget neque lorem commodo sit. Viverra ut posuere consequat
                  nunc.
                </p>
              </div>
              <div class="col-md-4">
                <div class="usp-title">USP 2</div>
                <p style="color: #5b87d1">
                  Cum lacinia magna aliquet metus. Arcu tortor, nisi id dui amet
                  ac eu.
                </p>
              </div>
              <div class="col-md-4">
                <div class="usp-title">USP 3</div>
                <p style="color: #5b87d1">
                  Id senectus semper id lacus. Risus a, erat arcu morbi tortor.
                </p>
              </div>
              <div class="col-md-4">
                <div class="ab-pattern ab-box-sm"></div>
              </div>
              <div class="col-md-8">
                <div class="ab-pattern ab-box-lg"></div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="usp2">
            <div class="ab-pattern ab-box-lg"></div>
          </div>
          <div class="tab-pane fade" id="usp3">
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

    <!-- Testimonials slider -->
    <section class="ab-test">
        <div class="container px-3 px-md-4 position-relative">
            <h3>Testimonials</h3>
            <div class="ab-t-viewport">
                <button class="ab-t-nav ab-t-prev" id="abPrev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="ab-t-track" id="abTrack">
                    <div class="ab-t-card">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 text-center">
                                <i class="fa-regular fa-image ab-t-left"></i>
                            </div>
                            <div class="col-md-9">
                                <p style="color: #1f67eb; font-weight: 700">
                                    “All base UI elements are made using Nested Symbols and
                                    shared styles that are logically connected. Gorgeous,
                                    high-quality video sharing on desktop, mobile, tablet.”
                                </p>
                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        style="
                        width: 34px;
                        height: 34px;
                        border-radius: 50%;
                        background: #eaf3ff;
                        display: inline-block;
                      "></span>
                                    <div>
                                        <div class="fw-bold text-primary" style="font-size: 14px">
                                            Name Surname
                                        </div>
                                        <div style="color: #8fb0f0; font-size: 12px">
                                            Founder, Acme Company
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ab-t-card">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 text-center">
                                <i class="fa-regular fa-image ab-t-left"></i>
                            </div>
                            <div class="col-md-9">
                                <p style="color: #1f67eb; font-weight: 700">
                                    “All base UI elements are made using Nested Symbols and
                                    shared styles that are logically connected. Gorgeous,
                                    high-quality video sharing on desktop, mobile, tablet.”
                                </p>
                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        style="
                        width: 34px;
                        height: 34px;
                        border-radius: 50%;
                        background: #eaf3ff;
                        display: inline-block;
                      "></span>
                                    <div>
                                        <div class="fw-bold text-primary" style="font-size: 14px">
                                            Name Surname
                                        </div>
                                        <div style="color: #8fb0f0; font-size: 12px">
                                            Founder, Acme Company
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ab-t-card">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 text-center">
                                <i class="fa-regular fa-image ab-t-left"></i>
                            </div>
                            <div class="col-md-9">
                                <p style="color: #1f67eb; font-weight: 700">
                                    “All base UI elements are made using Nested Symbols and
                                    shared styles that are logically connected. Gorgeous,
                                    high-quality video sharing on desktop, mobile, tablet.”
                                </p>
                                <div class="d-flex align-items-center gap-2">
                                    <span
                                        style="
                        width: 34px;
                        height: 34px;
                        border-radius: 50%;
                        background: #eaf3ff;
                        display: inline-block;
                      "></span>
                                    <div>
                                        <div class="fw-bold text-primary" style="font-size: 14px">
                                            Name Surname
                                        </div>
                                        <div style="color: #8fb0f0; font-size: 12px">
                                            Founder, Acme Company
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="ab-t-nav ab-t-next" id="abNext">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>
    <script>
        // Simple testimonials slider
        (function() {
            const track = document.getElementById("abTrack");
            const prev = document.getElementById("abPrev");
            const next = document.getElementById("abNext");
            let index = 0;

            function cardWidth() {
                return track.children[0].getBoundingClientRect().width + 30;
            }

            function max() {
                const viewport = track.parentElement.getBoundingClientRect().width;
                const perView = Math.max(1, Math.floor(viewport / cardWidth()));
                return Math.max(0, track.children.length - perView);
            }

            function update() {
                track.style.transform = `translateX(${-index * cardWidth()}px)`;
            }
            prev.addEventListener("click", () => {
                index = Math.max(0, index - 1);
                update();
            });
            next.addEventListener("click", () => {
                index = index + 1 > max() ? 0 : index + 1;
                update();
            });
            window.addEventListener("resize", update);
            update();
        })();
    </script>
@endsection
