@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/homepage.css') }}">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-content">
                        <h1 class="hero-title">Total Office<br />Enhancing Workspaces</h1>
                        <p class="hero-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl
                            diam lectus sagittis, massa aliquam commodo blandit viverra. Sem
                            arcu, ullamcorper egestas convallis. In velit sit montes, dol.
                            Egestas et aliquot quis praesent diam.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-image">
                        <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="container">
        <div class="video-container" onclick="playVideo()">
            <div class="video-play-button">
                <i class="fas fa-play"></i>
            </div>
            <div class="video-text">Watch Our Showreel</div>
        </div>
    </section>

    <!-- Bespoke Solutions Section -->
    <section class="bespoke-section">
        <div class="bespoke-container">
            <div class="bespoke-left">
                <h2 class="bespoke-title">Bespoke Solutions</h2>
                <div class="bespoke-icon">
                    <i class="fas fa-image"></i>
                </div>
            </div>
            <div class="bespoke-right">

                <p class="bespoke-description">
                    Duis netus dignissim eros dui lorem adipiscing. Viverra dui massa
                    arcu adipiscing quis integer habitasse et. Facilisis nulla muscenas
                    malesuada pharetra vel quis. Neque facilisi vel eu risus et sed
                    amet. Molestie habitasse du sapien venenatis at. At urna egestas
                    elit et at valpulate in turpis. Ultrices ullamcorper amet lacus urna
                    velit at.
                </p>
                <button class="bespoke-button">GET STARTED</button>

                <div class="bespoke-industries-title">Industries:</div>
                <div class="bespoke-industries">
                    <div class="industry-item">
                        <span class="industry-name">Hospitality</span>
                        <span class="industry-arrow"><i class="fa-regular fa-square-arrow-up-right"></i></span>
                    </div>
                    <div class="industry-item">
                        <span class="industry-name">Healthcare</span>
                        <span class="industry-arrow"><i class="fa-regular fa-square-arrow-up-right"></i></span>
                    </div>
                    <div class="industry-item">
                        <span class="industry-name">Education</span>
                        <span class="industry-arrow"><i class="fa-regular fa-square-arrow-up-right"></i></span>
                    </div>
                    <div class="industry-item">
                        <span class="industry-name">Corporate</span>
                        <span class="industry-arrow"><i class="fa-regular fa-square-arrow-up-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="testimonial-header">
            <h2 class="testimonial-title">Testimonials</h2>
        </div>

        <div class="testimonial-container">
            <div class="testimonial-left">
                <div class="testimonial-image-static">
                    <i class="fas fa-image"></i>
                </div>
            </div>

            <div class="testimonial-right">
                <div class="testimonials-slider-wrapper">
                    <div class="testimonials-slider" id="testimonialsSlider">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card">
                            <div class="testimonial-label">Testimonial</div>
                            <p class="testimonial-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet. All base UI elements
                                are made using Nested Symbols"
                            </p>
                            <div class="testimonial-author">Name Surname</div>
                            <div class="testimonial-company">Founder, Acme Company</div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card">
                            <div class="testimonial-label">Testimonial</div>
                            <p class="testimonial-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet. All base UI elements
                                are made using Nested Symbols"
                            </p>
                            <div class="testimonial-author">Name Surname</div>
                            <div class="testimonial-company">Founder, Acme Company</div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card">
                            <div class="testimonial-label">Testimonial</div>
                            <p class="testimonial-quote">
                                "All base UI elements are made using Nested Symbols and shared
                                styles that are logically connected. Gorgeous, high-quality
                                video sharing on desktop, mobile, tablet. All base UI elements
                                are made using Nested Symbols"
                            </p>
                            <div class="testimonial-author">Name Surname</div>
                            <div class="testimonial-company">Founder, Acme Company</div>
                        </div>
                    </div>
                </div>

                <div class="testimonials-nav">
                    <button class="testimonial-nav-btn" onclick="slideTestimonialLeft()">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="testimonial-nav-btn" onclick="slideTestimonialRight()">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section class="case-studies-section">
        <div class="case-studies-header">
            <h2 class="case-studies-title">Case Studies</h2>
        </div>

        <div class="case-studies-slider-wrapper">
            <div class="case-studies-slider" id="caseStudiesSlider">
                <!-- Case Study Card 1 -->
                <div class="case-study-card">
                    <div class="case-study-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <h3 class="case-study-title">Case study 1</h3>
                    <p class="case-study-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam
                        lectus sagittis, massa aliquam commodo.
                    </p>
                    <a href="#" class="case-study-link">Learn More
                        <i class="fa-regular fa-square-arrow-up-right" style="margin-left: 5px"></i></a>
                    <div class="case-study-tags">
                        <span class="case-study-tag">Fabrics</span>
                        <span class="case-study-tag">Brand</span>
                    </div>
                </div>

                <!-- Case Study Card 2 -->
                <div class="case-study-card">
                    <div class="case-study-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <h3 class="case-study-title">Case study 2</h3>
                    <p class="case-study-description">
                        Viverra dui massa arcu adipiscing quis integer habitasse et.
                        Facilisis nulla muscenas malesuada pharetra vel quis.
                    </p>
                    <a href="#" class="case-study-link">Learn More
                        <i class="fa-regular fa-square-arrow-up-right" style="margin-left: 5px"></i></a>
                    <div class="case-study-tags">
                        <span class="case-study-tag">Furniture</span>
                        <span class="case-study-tag">Corporate</span>
                    </div>
                </div>

                <!-- Case Study Card 3 -->
                <div class="case-study-card">
                    <div class="case-study-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <h3 class="case-study-title">Case study 3</h3>
                    <p class="case-study-description">
                        Neque facilisi vel eu risus et sed amet. Molestie habitasse du
                        sapien venenatis at. At urna egestas elit et.
                    </p>
                    <a href="#" class="case-study-link">Learn More
                        <i class="fa-regular fa-square-arrow-up-right" style="margin-left: 5px"></i></a>
                    <div class="case-study-tags">
                        <span class="case-study-tag">Acoustic</span>
                        <span class="case-study-tag">Education</span>
                    </div>
                </div>

                <!-- Case Study Card 4 -->
                <div class="case-study-card">
                    <div class="case-study-icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <h3 class="case-study-title">Case study 4</h3>
                    <p class="case-study-description">
                        Ultrices ullamcorper amet lacus urna velit at. Valpulate in turpis
                        sem arcu ullamcorper egestas convallis.
                    </p>
                    <a href="#" class="case-study-link">Learn More
                        <i class="fa-regular fa-square-arrow-up-right" style="margin-left: 5px"></i></a>
                    <div class="case-study-tags">
                        <span class="case-study-tag">Greenwalls</span>
                        <span class="case-study-tag">Hospitality</span>
                    </div>
                </div>
            </div>

            <div class="slider-controls">
                <div class="slider-buttons">
                    <button class="slider-btn" onclick="slideLeft()">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slider-btn" onclick="slideRight()">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <button class="explore-all-btn">Explore All</button>
            </div>
        </div>
    </section>

    <!-- Explore by Category Section -->
    <section class="slider-section">
        <h1 class="section-title">Explore by Category</h1>

        <div class="slider-container">
            <div class="slider-wrapper" id="sliderWrapper">
                <!-- Card 1: Furniture -->
                <div class="category-card" data-index="0">
                    <div class="card-icon">
                                                <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" width="100px" />

                    </div>
                    <h3 class="card-title">Furniture</h3>
                    <p class="card-items">40+ items</p>
                </div>

                <!-- Card 2: Acoustic Products -->
                <div class="category-card" data-index="1">
                    <div class="card-icon">
                                                <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" width="100px" />

                    </div>
                    <h3 class="card-title">Acoustic Products</h3>
                    <p class="card-items">40+ items</p>
                </div>

                <!-- Card 3: Writable Surfaces -->
                <div class="category-card" data-index="2">
                    <div class="card-icon">
                                                <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" width="100px" />

                    </div>
                    <h3 class="card-title">Writable Surfaces</h3>
                    <p class="card-items">40+ items</p>
                </div>

                <!-- Card 4: Fabrics -->
                <div class="category-card" data-index="3">
                    <div class="card-icon">
                                                <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" width="100px" />

                    </div>
                    <h3 class="card-title">Fabrics</h3>
                    <p class="card-items">40+ items</p>
                </div>

                <!-- Card 5: Greenwalls -->
                <div class="category-card" data-index="4">
                    <div class="card-icon">
                                               <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" width="100px" />

                    </div>
                    <h3 class="card-title">Greenwalls</h3>
                    <p class="card-items">40+ items</p>
                </div>

                <!-- Card 6: Office Supplies -->
                <div class="category-card" data-index="5">
                    <div class="card-icon">
                                                <img src="{{asset('frontend_assets/images/banner_img.png')}}" alt="Hero Image" width="100px" />

                    </div>
                    <h3 class="card-title">Office Supplies</h3>
                    <p class="card-items">40+ items</p>
                </div>
            </div>
        </div>

        <div class="dots-container" id="dotsContainer"></div>

        <div class="text-center">
            <a href="#" class="cta-button">SEE ALL PRODUCTS</a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products-section">
        <div class="featured-products-header">
            <h2 class="featured-products-title">Featured Products</h2>
        </div>

        <div class="featured-products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image-container">
                    <span class="product-bookmark">
                        <i class="fas fa-bookmark"></i>
                    </span>
                    <div class="product-image">
                        <i class="fas fa-chair"></i>
                    </div>
                </div>
                <h3 class="product-name">Paola Wood Chair</h3>
                <p class="product-price">$ 5,900</p>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image-container">
                    <span class="product-bookmark">
                        <i class="fas fa-bookmark"></i>
                    </span>
                    <div class="product-image">
                        <i class="fas fa-chair"></i>
                    </div>
                </div>
                <h3 class="product-name">Native Light Chair</h3>
                <p class="product-price">$ 1,200</p>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image-container">
                    <span class="product-bookmark">
                        <i class="fas fa-bookmark"></i>
                    </span>
                    <div class="product-image">
                        <i class="fas fa-chair"></i>
                    </div>
                </div>
                <h3 class="product-name">Moss Upholstery Fabric</h3>
                <p class="product-price">$ 500</p>
            </div>
        </div>
    </section>

    <!-- Book a Visit Section -->
    <section class="book-visit-section">
        <div class="book-visit-content">
            <h2 class="book-visit-title">Book a Visit to our Showroom</h2>
        </div>
        <button class="book-visit-button">Book a Visit</button>
    </section>

    <!-- Resources Section -->
    <section class="resources-section">
        <div class="resources-header">
            <h2 class="resources-title">Resources</h2>
            <button class="resources-see-all-btn">See all</button>
        </div>

        <div class="resources-grid">
            <!-- Resource 1 -->
            <div class="resource-card">
                <div class="resource-image-container">
                    <span class="resource-bookmark">
                        <i class="fas fa-bookmark"></i>
                    </span>
                    <span class="resource-badge">News</span>
                </div>
                <h3 class="resource-title">
                    Long headline to turn your visitors into users
                </h3>
                <p class="resource-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam
                    lectus sagittis.
                </p>
                <a href="#" class="resource-link">Read More
                    <i class="fas fa-arrow-right" style="margin-left: 5px"></i></a>
            </div>

            <!-- Resource 2 -->
            <div class="resource-card">
                <div class="resource-image-container">
                    <span class="resource-bookmark">
                        <i class="fas fa-bookmark"></i>
                    </span>
                    <span class="resource-badge">Blog</span>
                </div>
                <h3 class="resource-title">
                    Long headline to turn your visitors into users
                </h3>
                <p class="resource-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam
                    lectus sagittis.
                </p>
                <a href="#" class="resource-link">Read More
                    <i class="fas fa-arrow-right" style="margin-left: 5px"></i></a>
            </div>

            <!-- Resource 3 -->
            <div class="resource-card">
                <div class="resource-image-container">
                    <span class="resource-bookmark">
                        <i class="fas fa-bookmark"></i>
                    </span>
                    <span class="resource-badge">Blog</span>
                </div>
                <h3 class="resource-title">
                    Long headline to turn your visitors into users
                </h3>
                <p class="resource-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl diam
                    lectus sagittis.
                </p>
                <a href="#" class="resource-link">Read More
                    <i class="fas fa-arrow-right" style="margin-left: 5px"></i></a>
            </div>
        </div>
    </section>
    <script>
        const sliderWrapper = document.getElementById('sliderWrapper');
        const dotsContainer = document.getElementById('dotsContainer');
        const cardsContainer = sliderWrapper;

        // Clone all cards for infinite loop
        const originalCards = Array.from(cardsContainer.children);
        originalCards.forEach(card => {
            const clone = card.cloneNode(true);
            cardsContainer.appendChild(clone);
        });

        const allCards = document.querySelectorAll('.category-card');
        let currentIndex = 0;
        const totalCards = originalCards.length;

        // Calculate card width dynamically based on screen size
        function getCardWidth() {
            if (window.innerWidth <= 480) {
                return 215; // 200px card + 15px gap
            } else if (window.innerWidth <= 768) {
                return 240; // 220px card + 20px gap
            } else if (window.innerWidth <= 992) {
                return 290; // 260px card + 30px gap
            }
            return 310; // 280px card + 30px gap (desktop)
        }

        let cardWidth = getCardWidth();

        // Update card width on window resize
        window.addEventListener('resize', () => {
            cardWidth = getCardWidth();
            updateSlider(false);
        });

        // Create dots
        for (let i = 0; i < totalCards; i++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }

        const dots = document.querySelectorAll('.dot');

        function updateElevatedCard() {
            // Remove elevated class from all cards
            allCards.forEach(card => card.classList.remove('elevated'));

            // Add elevated class to cards in 2nd and 4th positions
            // 2nd visible card is at position currentIndex + 1
            const secondPosition = (currentIndex + 1) % (totalCards * 2);
            // 4th visible card is at position currentIndex + 3
            const fourthPosition = (currentIndex + 3) % (totalCards * 2);

            if (allCards[secondPosition]) {
                allCards[secondPosition].classList.add('elevated');
            }
            if (allCards[fourthPosition]) {
                allCards[fourthPosition].classList.add('elevated');
            }
        }

        function updateSlider(smooth = true) {
            if (!smooth) {
                sliderWrapper.style.transition = 'none';
            } else {
                sliderWrapper.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            }

            // Smooth slide animation
            sliderWrapper.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

            // Update dots (modulo for infinite loop)
            dots.forEach((dot, index) => {
                dot.classList.remove('active');
                if (index === currentIndex % totalCards) {
                    dot.classList.add('active');
                }
            });

            // Update elevated cards based on position
            updateElevatedCard();

            // Handle infinite loop - reset position when reaching cloned cards
            if (currentIndex >= totalCards) {
                setTimeout(() => {
                    currentIndex = 0;
                    updateSlider(false);
                }, 600); // Wait for animation to complete
            }
        }

        function goToSlide(index) {
            currentIndex = index;
            updateSlider();
        }

        // Auto-play slider with infinite loop
        setInterval(() => {
            currentIndex++;
            updateSlider();
        }, 2500); // Auto slides every 2.5 seconds

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalCards - 1;
                }
                updateSlider();
            } else if (e.key === 'ArrowRight') {
                currentIndex++;
                updateSlider();
            }
        });

        // Touch/Swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        sliderWrapper.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        sliderWrapper.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            if (touchEndX < touchStartX - 50) {
                currentIndex++;
                updateSlider();
            }
            if (touchEndX > touchStartX + 50) {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = totalCards - 1;
                }
                updateSlider();
            }
        }

        // Initialize
        updateSlider();
    </script>
@endsection
