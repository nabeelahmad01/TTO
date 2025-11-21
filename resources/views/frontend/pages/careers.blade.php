@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/careers.css') }}">

    <!-- Hero -->
    <section class="crs-hero">
        <div class="container-fluid px-0">
            <div class="row g-0 align-items-stretch">
                <div class="col-lg-6 crs-left">
                    <div class="crs-ph"></div>
                </div>
                <div class="col-lg-6 crs-right">
                    <div class="crs-breadcrumb">Home / Careers</div>
                    <h1 class="crs-title">Working at<br />Total Office</h1>
                    <p class="crs-lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="crs-values">
        <div class="container px-3 px-md-4">
            <h3>Our Core Values</h3>
            <div class="crs-vrow row g-3 align-items-start">
                <div class="col-2 col-md-1 crs-num">01</div>
                <div class="col-10 col-md-3 crs-vname">Human Kind</div>
                <div class="col-12 col-md-8 crs-vdesc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s,
                </div>
            </div>
            <div class="crs-vrow row g-3 align-items-start">
                <div class="col-2 col-md-1 crs-num">02</div>
                <div class="col-10 col-md-3 crs-vname">Innovation</div>
                <div class="col-12 col-md-8 crs-vdesc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s,
                </div>
            </div>
            <div class="crs-vrow row g-3 align-items-start">
                <div class="col-2 col-md-1 crs-num">03</div>
                <div class="col-10 col-md-3 crs-vname">Reliable</div>
                <div class="col-12 col-md-8 crs-vdesc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s,
                </div>
            </div>
            <div class="crs-vrow row g-3 align-items-start">
                <div class="col-2 col-md-1 crs-num">04</div>
                <div class="col-10 col-md-3 crs-vname">Collaborate</div>
                <div class="col-12 col-md-8 crs-vdesc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s,
                </div>
            </div>
        </div>
    </section>

    <!-- Workplace experts with gallery thumbs -->
    <section class="crs-experts">
        <div class="container px-3 px-md-4">
            <div class="row g-4 align-items-start">
                <div class="col-lg-6">
                    <h3>We are workplace experts</h3>
                    <p style="color: #5b87d1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p style="color: #5b87d1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="crs-big d-flex justify-content-center align-items-center mb-3">
                        <i class="fa-regular fa-image" style="font-size: 80px; color: #a7c5ff"></i>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="flex-fill crs-thumb"></div>
                        <div class="flex-fill crs-thumb"></div>
                        <div class="flex-fill crs-thumb"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vacancy Listing -->
    <section class="crs-vac">
        <div class="container px-3 px-md-4">
            <h3>Vacancy Listing</h3>
            <div class="row g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="crs-job">
                        <div class="d-flex justify-content-between">
                            <h5>ACI (Internship)</h5>
                            <div class="crs-date">09.09.2021</div>
                        </div>
                        <div class="crs-jdesc">
                            Adipiscing nulla nunc, ultricies tortor. Ut purus massa, eget
                            vel, fermentum lacus nullam.
                        </div>
                        <a class="crs-link" href="#">Learn More ›</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="crs-job">
                        <div class="d-flex justify-content-between">
                            <h5>Associate Consultant</h5>
                            <div class="crs-date">09.09.2021</div>
                        </div>
                        <div class="crs-jdesc">
                            Adipiscing nulla nunc, ultricies tortor. Ut purus massa, eget
                            vel, fermentum lacus nullam.
                        </div>
                        <a class="crs-link" href="#">Learn More ›</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="crs-job">
                        <div class="d-flex justify-content-between">
                            <h5>SA (Internship)</h5>
                            <div class="crs-date">09.09.2021</div>
                        </div>
                        <div class="crs-jdesc">
                            Adipiscing nulla nunc, ultricies tortor. Ut purus massa, eget
                            vel, fermentum lacus nullam.
                        </div>
                        <a class="crs-link" href="#">Learn More ›</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="crs-job">
                        <div class="d-flex justify-content-between">
                            <h5>Customer Care</h5>
                            <div class="crs-date">09.09.2021</div>
                        </div>
                        <div class="crs-jdesc">
                            Adipiscing nulla nunc, ultricies tortor. Ut purus massa, eget
                            vel, fermentum lacus nullam.
                        </div>
                        <a class="crs-link" href="#">Learn More ›</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="crs-job">
                        <div class="d-flex justify-content-between">
                            <h5>Sales Associate</h5>
                            <div class="crs-date">09.09.2021</div>
                        </div>
                        <div class="crs-jdesc">
                            Adipiscing nulla nunc, ultricies tortor. Ut purus massa, eget
                            vel, fermentum lacus nullam.
                        </div>
                        <a class="crs-link" href="#">Learn More ›</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="crs-job">
                        <div class="d-flex justify-content-between">
                            <h5>HR Associate</h5>
                            <div class="crs-date">09.09.2021</div>
                        </div>
                        <div class="crs-jdesc">
                            Adipiscing nulla nunc, ultricies tortor. Ut purus massa, eget
                            vel, fermentum lacus nullam.
                        </div>
                        <a class="crs-link" href="#">Learn More ›</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resume form -->
    <section class="crs-form">
        <div class="container px-3 px-md-4" style="max-width: 820px">
            <h3>Send us your resume</h3>
            <form id="cvForm" novalidate>
                <div class="row g-3">
                    <div class="col-12">
                        <input required class="form-control" placeholder="Full name" />
                    </div>
                    <div class="col-12">
                        <input required class="form-control" placeholder="Department you're interested in" />
                    </div>
                    <div class="col-12">
                        <input required class="form-control" placeholder="Profession you're interested in" />
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="crs-upload">
                            <label class="crs-file-label" for="cvFile"><i class="fas fa-paperclip"></i> Attach
                                CV</label>
                            <input id="cvFile" class="crs-file" type="file" accept=".pdf,.doc,.docx" />
                            <span id="cvName" class="crs-file-name"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="crs-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        // Show chosen filename and simple validation
        (function() {
            const file = document.getElementById("cvFile");
            const name = document.getElementById("cvName");
            file.addEventListener("change", () => {
                name.textContent = file.files[0] ? file.files[0].name + " ✕" : "";
            });
            name.addEventListener("click", () => {
                file.value = "";
                name.textContent = "";
            });
            document
                .getElementById("cvForm")
                .addEventListener("submit", function(e) {
                    e.preventDefault();
                    alert("Thanks! Your resume has been submitted.");
                    this.reset();
                    name.textContent = "";
                });
        })();
    </script>
@endsection
