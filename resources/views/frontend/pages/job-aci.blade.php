@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/job-aci.css') }}">
    <!-- Hero -->
    <section class="jd-hero">
        <div class="container px-3 px-md-4">
            <div class="jd-breadcrumb">Home / Careers / Vacancies listing / ACI (Internship)</div>
            <h1 class="jd-title">ACI (Internship)</h1>
        </div>
    </section>

    <!-- Job content -->
    <section class="jd-section">
        <div class="container px-3 px-md-4">
            <div class="row g-4">
                <div class="col-lg-8">
                    <h4>Job Description</h4>
                    <p class="jd-par">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    <h4>Profile</h4>
                    <ul class="jd-list">
                        <li>Graduate or a Diploma in business administration, sales or related course.</li>
                        <li>Selling experience of at least 2 years preferably in high end segment in retail, hospitality or
                            brands.</li>
                        <li>Excellent communication (including spoken and written English).</li>
                        <li>Strong selling skills & customer oriented.</li>
                        <li>Confident, friendly & engaging personality.</li>
                        <li>Well-mannered and polite.</li>
                        <li>Immaculately groomed & physically fit.</li>
                        <li>Good numerical ability and IT skills.</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="jd-apply">
                        <h6>Apply for this Position</h6>
                        <p class="jd-par">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a class="btn w-100" href="make-enquiry.html">Apply Now</a>
                    </div>
                </div>
            </div>

            <!-- Relevant Vacancies -->
            <div class="d-flex align-items-center justify-content-between jd-rel">
                <h4>Relevant Vacancies</h4>
                <div class="jd-nav">
                    <button class="jd-btn" id="jdPrev"><i class="fas fa-chevron-left"></i></button>
                    <button class="jd-btn" id="jdNext"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="jd-viewport" id="jdViewport">
                <div class="jd-track" id="jdTrack">
                    <div class="jd-card">
                        <div class="d-flex justify-content-between">
                            <h6>ACI (Internship)</h6>
                            <div class="jd-date">09.09.2021</div>
                        </div>
                        <div class="jd-desc">Lorem ipsum dolor sit amet, consectetur...</div><a class="jd-link"
                            href="#">Learn More ›</a>
                    </div>
                    <div class="jd-card">
                        <div class="d-flex justify-content-between">
                            <h6>Associate Consultant</h6>
                            <div class="jd-date">09.09.2021</div>
                        </div>
                        <div class="jd-desc">Lorem ipsum dolor sit amet, consectetur...</div><a class="jd-link"
                            href="#">Learn More ›</a>
                    </div>
                    <div class="jd-card">
                        <div class="d-flex justify-content-between">
                            <h6>SA (Internship)</h6>
                            <div class="jd-date">09.09.2021</div>
                        </div>
                        <div class="jd-desc">Lorem ipsum dolor sit amet, consectetur...</div><a class="jd-link"
                            href="#">Learn More ›</a>
                    </div>
                    <div class="jd-card">
                        <div class="d-flex justify-content-between">
                            <h6>Consultant</h6>
                            <div class="jd-date">09.09.2021</div>
                        </div>
                        <div class="jd-desc">Lorem ipsum dolor sit amet, consectetur...</div><a class="jd-link"
                            href="#">Learn More ›</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Relevant vacancies slider
        (function() {
            const viewport = document.getElementById('jdViewport');
            const track = document.getElementById('jdTrack');
            const prev = document.getElementById('jdPrev');
            const next = document.getElementById('jdNext');
            let index = 0;

            function step() {
                const first = track.children[0];
                const gap = 18;
                return first.getBoundingClientRect().width + gap;
            }

            function perView() {
                return Math.max(1, Math.floor(viewport.clientWidth / step()));
            }

            function max() {
                return Math.max(0, track.children.length - perView());
            }

            function update() {
                track.style.transform = `translateX(${-index*step()}px)`;
            }
            prev.addEventListener('click', () => {
                index = Math.max(0, index - 1);
                update();
            });
            next.addEventListener('click', () => {
                index = index + 1 > max() ? 0 : index + 1;
                update();
            });
            window.addEventListener('resize', update);
            update();
        })();
    </script>
@endsection
