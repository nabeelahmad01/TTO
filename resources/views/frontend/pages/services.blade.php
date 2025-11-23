@extends('frontend.layouts.master')
@section('title', 'Home - Welcome')
@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/services.css') }}">
     <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-3 px-md-4">
            <!-- ... -->
            <a class="navbar-brand" href="#">totaloffice</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleMainContainer(event)">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Initiatives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

                <div class="navbar-icons ms-auto">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                    <button class="btn btn-book">Book a visit/call</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="services-hero">
        <div class="services-hero-container">
            <div class="services-breadcrumb">
                <a href="#">Home</a> / <a href="#">Services</a>
            </div>

            <div class="services-subtitle">
                Select what you are looking for and we will prepare appropriate selection for you
            </div>

            <div class="services-main-heading">
                <div class="services-heading-line">
                    <span>I'm looking for a</span>
                    <span class="services-highlight">Design</span>
                </div>
                <div class="services-heading-line">
                    <span>Services</span>
                    <span class="services-highlight">for a</span>
                </div>
                <div class="services-heading-line">
                    <span class="services-highlight">Open-space</span>
                    <span class="services-highlight">Office-type</span>
                </div>
                <div class="services-heading-line">
                    <span>for my</span>
                    <span class="services-highlight">Medium-sized</span>
                    <span class="services-highlight">company</span>
                </div>
            </div>

            <button class="services-btn">Book a meeting</button>

            <div class="services-footer-text">
                See our Services for you below
            </div>
        </div>
    </section>

    <!-- Services Content Section -->
    <section class="services-content">
        <div class="services-content-container">
            <div class="services-content-left">
                <h2 class="services-content-title">The balance between high-end luxury and top-notch functionality</h2>
                <p class="services-content-text">
                    Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean
                </p>
                <p class="services-content-text">
                    Separated they live in Bookmarks right
                </p>
            </div>
            <div class="services-content-right">
                <div class="services-content-illustration">
                    <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="150" cy="150" r="140" fill="#e6f0ff" stroke="none"/>
                        <g stroke="#4a90e2" stroke-width="2" fill="none">
                            <path d="M 100 120 Q 120 100 140 110"/>
                            <path d="M 160 100 Q 180 110 190 130"/>
                            <circle cx="150" cy="140" r="8"/>
                            <path d="M 130 160 L 170 160"/>
                            <path d="M 120 180 Q 150 200 180 180"/>
                            <circle cx="140" cy="170" r="5"/>
                            <circle cx="160" cy="175" r="5"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Content Section Alternate (Mirrored) -->
    <section class="services-content services-content-alt">
        <div class="services-content-container services-content-container-alt">
            <div class="services-content-left-alt">
                <div class="services-content-illustration">
                    <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="150" cy="150" r="140" fill="#e6f0ff" stroke="none"/>
                        <g stroke="#4a90e2" stroke-width="2" fill="none">
                            <path d="M 100 120 Q 120 100 140 110"/>
                            <path d="M 160 100 Q 180 110 190 130"/>
                            <circle cx="150" cy="140" r="8"/>
                            <path d="M 130 160 L 170 160"/>
                            <path d="M 120 180 Q 150 200 180 180"/>
                            <circle cx="140" cy="170" r="5"/>
                            <circle cx="160" cy="175" r="5"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="services-content-right-alt">
                <h2 class="services-content-title">The impression is made from the first seconds</h2>
                <p class="services-content-text">
                    Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean
                </p>
                <p class="services-content-text">
                    Separated they live in Bookmarks right
                </p>
            </div>
        </div>
    </section>

    <!-- Services List Section -->
    <section class="services-list-section">
        <div class="services-list-container">
            <div class="services-list-left">
                <h2 class="services-list-title">Services</h2>
                <p class="services-list-description">
                    Amet vivam mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                </p>
                <div class="services-list-columns">
                    <div class="services-list-column">
                        <a href="#" class="services-list-item">
                            <span>Specification & Finishes Selection</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a href="#" class="services-list-item">
                            <span>Space Planning</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a href="#" class="services-list-item">
                            <span>MoodBoards</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a href="#" class="services-list-item">
                            <span>Ergonomics Consultancy</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="services-list-column">
                        <a href="#" class="services-list-item">
                            <span>LEED Process</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a href="#" class="services-list-item">
                            <span>Procurement and Installation</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a href="#" class="services-list-item">
                            <span>Acoustic Review</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="services-list-right">
                <div class="services-list-illustration">
                    <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                        <rect x="50" y="50" width="200" height="200" fill="#e6f0ff" rx="8"/>
                        <g stroke="#4a90e2" stroke-width="2" fill="none">
                            <path d="M 100 120 Q 120 100 140 110"/>
                            <path d="M 160 100 Q 180 110 190 130"/>
                            <circle cx="150" cy="140" r="8"/>
                            <path d="M 130 160 L 170 160"/>
                            <path d="M 120 180 Q 150 200 180 180"/>
                            <circle cx="140" cy="170" r="5"/>
                            <circle cx="160" cy="175" r="5"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Process Section -->
    <section class="services-process-section">
        <div class="services-process-container">
            <div class="services-process-left">
                <div class="services-process-illustration">
                    <svg viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                        <rect x="40" y="40" width="220" height="220" fill="#e6f0ff" rx="8"/>
                        <g stroke="#4a90e2" stroke-width="2" fill="none">
                            <path d="M 100 120 Q 120 100 140 110"/>
                            <path d="M 160 100 Q 180 110 190 130"/>
                            <circle cx="150" cy="140" r="8"/>
                            <path d="M 130 160 L 170 160"/>
                            <path d="M 120 180 Q 150 200 180 180"/>
                            <circle cx="140" cy="170" r="5"/>
                            <circle cx="160" cy="175" r="5"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="services-process-right">
                <h2 class="services-process-title">The ideal workspace : Our six step unique process</h2>
                <p class="services-process-text">
                    Separated they live in Bookmarks right at the coast of the famous Semantics, large language ocean
                </p>
                <p class="services-process-text">
                    Separated they live in Bookmarks right
                </p>
                <a href="#" class="services-process-link">
                    <span>Explore More</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Slider Section -->
    <section class="services-slider-section">
        <div class="services-slider-header">
            <h2 class="services-slider-title">Moodboards</h2>
            <button class="services-slider-btn">SEE ALL</button>
        </div>
        <div class="services-slider-container">
            <div class="services-slider-wrapper">
                <div class="services-slider-track" id="servicesSliderTrack">
                    <div class="services-slider-card">
                        <div class="services-card-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="services-card-image">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="90" fill="#e6f0ff" stroke="none"/>
                                <g stroke="#4a90e2" stroke-width="1.5" fill="none">
                                    <path d="M 70 90 Q 85 75 100 85"/>
                                    <path d="M 120 75 Q 135 85 145 100"/>
                                    <circle cx="100" cy="105" r="6"/>
                                    <path d="M 85 120 L 115 120"/>
                                    <path d="M 80 135 Q 100 150 120 135"/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="services-card-title">Native Light Chair</h3>
                        <p class="services-card-description">Dipsium sed sit ut mattis. Elli adipiscing premium sed risque nam</p>
                    </div>
                    <div class="services-slider-card">
                        <div class="services-card-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="services-card-image">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="90" fill="#e6f0ff" stroke="none"/>
                                <g stroke="#4a90e2" stroke-width="1.5" fill="none">
                                    <path d="M 70 90 Q 85 75 100 85"/>
                                    <path d="M 120 75 Q 135 85 145 100"/>
                                    <circle cx="100" cy="105" r="6"/>
                                    <path d="M 85 120 L 115 120"/>
                                    <path d="M 80 135 Q 100 150 120 135"/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="services-card-title">Moss Upholstery Fabric</h3>
                        <p class="services-card-description">Dipsium sed sit ut mattis. Elli adipiscing premium sed risque nam</p>
                    </div>
                    <div class="services-slider-card">
                        <div class="services-card-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="services-card-image">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="90" fill="#e6f0ff" stroke="none"/>
                                <g stroke="#4a90e2" stroke-width="1.5" fill="none">
                                    <path d="M 70 90 Q 85 75 100 85"/>
                                    <path d="M 120 75 Q 135 85 145 100"/>
                                    <circle cx="100" cy="105" r="6"/>
                                    <path d="M 85 120 L 115 120"/>
                                    <path d="M 80 135 Q 100 150 120 135"/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="services-card-title">Moss Upholstery Fabric</h3>
                        <p class="services-card-description">Dipsium sed sit ut mattis. Elli adipiscing premium sed risque nam</p>
                    </div>
                    <div class="services-slider-card">
                        <div class="services-card-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <div class="services-card-image">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="100" r="90" fill="#e6f0ff" stroke="none"/>
                                <g stroke="#4a90e2" stroke-width="1.5" fill="none">
                                    <path d="M 70 90 Q 85 75 100 85"/>
                                    <path d="M 120 75 Q 135 85 145 100"/>
                                    <circle cx="100" cy="105" r="6"/>
                                    <path d="M 85 120 L 115 120"/>
                                    <path d="M 80 135 Q 100 150 120 135"/>
                                </g>
                            </svg>
                        </div>
                        <h3 class="services-card-title">Moss Upholstery</h3>
                        <p class="services-card-description">Dipsium sed sit ut mattis. Elli adipiscing premium sed risque nam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Testimonials slider state
        let currentTestimonialIndex = 0;
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        const totalTestimonials = testimonialCards.length;

        function updateTestimonialSlider() {
            const slider = document.getElementById('testimonialsSlider');
            const offset = -currentTestimonialIndex * 100;
            slider.style.transform = `translateX(${offset}%)`;
        }

        function slideTestimonialLeft() {
            currentTestimonialIndex = (currentTestimonialIndex - 1 + totalTestimonials) % totalTestimonials;
            updateTestimonialSlider();
        }

        function slideTestimonialRight() {
            currentTestimonialIndex = (currentTestimonialIndex + 1) % totalTestimonials;
            updateTestimonialSlider();
        }

        // Case Studies slider functions
        function slideLeft() {
            const slider = document.getElementById('caseStudiesSlider');
            slider.scrollBy({
                left: -400,
                behavior: 'smooth'
            });
        }

        function slideRight() {
            const slider = document.getElementById('caseStudiesSlider');
            slider.scrollBy({
                left: 400,
                behavior: 'smooth'
            });
        }

        function playVideo() {
            // Replace with your actual video URL
            const videoUrl = 'https://www.youtube.com/embed/dQw4w9WgXcQ';
            const modal = document.createElement('div');
            modal.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            `;

            const videoFrame = document.createElement('div');
            videoFrame.style.cssText = `
                width: 90%;
                max-width: 900px;
                aspect-ratio: 16 / 9;
                position: relative;
            `;

            videoFrame.innerHTML = `
                <button onclick="this.closest('div').parentElement.remove()" style="
                    position: absolute;
                    top: -40px;
                    right: 0;
                    background: white;
                    border: none;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    cursor: pointer;
                    font-size: 24px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                ">×</button>
                <iframe width="100%" height="100%" src="${videoUrl}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            `;

            modal.appendChild(videoFrame);
            document.body.appendChild(modal);

            modal.onclick = function (e) {
                if (e.target === modal) modal.remove();
            };
        }

        function toggleMainContainer(event) {
            event.preventDefault();
            const mainContainer = document.querySelector('.main-container');
            mainContainer.classList.toggle('show');

            // Show the first item's dropdown when opening
            if (mainContainer.classList.contains('show')) {
                const firstItem = document.querySelector('.sidebar-item.active');
                if (firstItem) {
                    firstItem.click();
                }
            }
        }

        const dropdownData = {
            products: {
                col1: { title: 'Shop by Product', items: ['Furniture', 'Acoustic Products', 'Writable Surfaces', 'Fabrics', 'Greenwalls'] },
                col2: { title: 'Discover All', items: ['Furniture', 'Acoustic Products', 'Writable Surfaces', 'Fabrics', 'Greenwalls'] },
                text: 'Products'
            },
            industry: {
                col1: { title: 'Shop by Industry', items: ['Corporate', 'Education', 'Hospitality'] },
                col2: { title: '', items: [] },
                text: 'Industries'
            },
            brand: {
                col1: { title: 'Shop by Brand', items: ['Patra', 'Emmegi', 'Arper', 'JMM', 'Infiniti Design', 'Teknion', 'Manerba', 'MDD'] },
                col2: { title: '', items: [] },
                text: 'Brands'
            },
            space: {
                col1: { title: 'Shop by Space', items: ['Conference Rooms', 'Office Cabins', 'Work Spaces', 'Cafe Space'] },
                col2: { title: '', items: [] },
                text: 'Spaces'
            }
        };

        function showDropdown(type, event) {
            event.preventDefault();

            // Update sidebar active state
            document.querySelectorAll('.sidebar-item').forEach(item => {
                item.classList.remove('active');
            });
            event.target.closest('.sidebar-item').classList.add('active');

            // Update dropdown content
            const dropdown = document.getElementById('productsDropdown');
            const contentText = document.getElementById('contentText');
            const data = dropdownData[type];

            contentText.textContent = data.text;

            // Build dropdown HTML
            let dropdownHTML = `
                <div class="dropdown-column">
                    <div class="dropdown-title">${data.col1.title}</div>
                    ${data.col1.items.map(item => `<a href="#" class="dropdown-item">${item}</a>`).join('')}
                </div>
            `;

            if (data.col2.title) {
                dropdownHTML += `
                <div class="dropdown-column">
                    <div class="dropdown-title">${data.col2.title}</div>
                    ${data.col2.items.map(item => `<a href="#" class="dropdown-item">${item}</a>`).join('')}
                </div>
                `;
            }

            dropdownHTML += `<div class="dropdown-column"><div style="height: 100%; background-color: var(--light-bg); border-radius: 4px;"></div></div>`;

            dropdown.innerHTML = dropdownHTML;
            dropdown.classList.remove('hide');
            dropdown.classList.add('show');
        }

    </script>
    @endsection
