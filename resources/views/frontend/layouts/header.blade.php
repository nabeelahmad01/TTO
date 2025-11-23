<div class="main_header">
    <div class="upper_header">
        <div class="container px-3 px-md-4">
            <div class="navbar-icons ms-auto">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                <a href="dashboard.html"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container px-3 px-md-4">
            <a class="navbar-brand" href="#"><img class="logo_img"
                    src="{{ asset('frontend_assets/images/logo.png') }}" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a id="navServices" class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a id="navProducts" class="nav-link" href="#"
                            onclick="toggleMainContainer(event)">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Initiatives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-book">Book a visit/call</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Header/Navbar -->

<!-- Services Mega Panel -->
<div id="servicesPanel" class="mega-panel">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
 <div class="mega-card-title">Service Listing</div>
            <div class="mega-card-desc">
                Sed et mollis massa, vitae rhoncus nibh. Sed accumsan tincidunt.
            </div>
            <a href="#" class="mega-card-link">Learn More <i class="fas fa-arrow-right"
                    style="margin-left: 6px"></i></a>
            </div>
            <div class="col-lg-4">
<div class="mega-card-title">
                The Ideal workspace : Our six step unique process
            </div>
            <div class="mega-card-desc">
                Sed et mollis massa, vitae rhoncus nibh. Sed accumsan tincidunt.
            </div>
            <a href="#" class="mega-card-link">Learn More <i class="fas fa-arrow-right"
                    style="margin-left: 6px"></i></a>
            </div>
            <div class="col-lg-4">
<div class="mega-card-title">Moodboards</div>
            <div class="mega-card-desc">
                Sed et mollis massa, vitae rhoncus nibh. Sed accumsan tincidunt.
            </div>
            <a href="#" class="mega-card-link">Learn More <i class="fas fa-arrow-right"
                    style="margin-left: 6px"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Main Content -->
<div class="main-container">
    <aside class="sidebar">
        <a href="#" class="sidebar-item active" data-type="products" onclick="showDropdown('products', event)">
            <i class="fas fa-cube"></i> Shop by Product
        </a>
        <a href="#" class="sidebar-item" data-type="industry" onclick="showDropdown('industry', event)">
            <i class="fas fa-industry"></i> Shop by Industry
        </a>
        <a href="#" class="sidebar-item" data-type="brand" onclick="showDropdown('brand', event)">
            <i class="fas fa-tag"></i> Shop by Brand
        </a>
        <a href="#" class="sidebar-item" data-type="space" onclick="showDropdown('space', event)">
            <i class="fas fa-home"></i> Shop by Space
        </a>
    </aside>

    <div class="dropdown-wrapper">
        <!-- Products Dropdown -->
        <div class="dropdown-menu-custom hide" id="productsDropdown">
            <div class="dropdown-column">
                <div class="dropdown-title">Shop by Product</div>
                <a href="#" class="dropdown-item">Furniture</a>
                <a href="#" class="dropdown-item">Acoustic Products</a>
                <a href="#" class="dropdown-item">Writable Surfaces</a>
                <a href="#" class="dropdown-item">Fabrics</a>
                <a href="#" class="dropdown-item">Greenwalls</a>
            </div>
            <div class="dropdown-column">
                <div class="dropdown-title">Discover All</div>
                <a href="#" class="dropdown-item">Furniture</a>
                <a href="#" class="dropdown-item">Acoustic Products</a>
                <a href="#" class="dropdown-item">Writable Surfaces</a>
                <a href="#" class="dropdown-item">Fabrics</a>
                <a href="#" class="dropdown-item">Greenwalls</a>
            </div>
            <div class="dropdown-column">
                <div
                    style="
                height: 100%;
                background-color: var(--light-bg);
                border-radius: 4px;
              ">
                </div>
            </div>
        </div>

        <div class="content-area">
            <span id="contentText">Select an option</span>
        </div>
    </div>
</div>

<script>
    // Hover-driven dropdowns for navbar
    (function() {
        const servicesLink = document.getElementById("navServices");
        const productsLink = document.getElementById("navProducts");
        const servicesPanel = document.getElementById("servicesPanel");
        const productsPanel = document.querySelector(".main-container");
        const productsDropdown = document.getElementById("productsDropdown");

        let hideServicesTO, hideProductsTO;

        function showServices() {
            clearTimeout(hideServicesTO);
            servicesPanel.classList.add("show");
        }

        function hideServices() {
            hideServicesTO = setTimeout(
                () => servicesPanel.classList.remove("show"),
                120
            );
        }

        function showProducts() {
            clearTimeout(hideProductsTO);
            // ensure inner dropdown visible
            productsDropdown && productsDropdown.classList.remove("hide");
            productsPanel.classList.add("show");
        }

        function hideProducts() {
            hideProductsTO = setTimeout(
                () => productsPanel.classList.remove("show"),
                120
            );
        }

        // Services hover
        if (servicesLink && servicesPanel) {
            servicesLink.addEventListener("mouseenter", () => {
                showServices();
                // hide products if open
                productsPanel.classList.remove("show");
            });
            servicesLink.addEventListener("mouseleave", hideServices);
            servicesPanel.addEventListener("mouseenter", showServices);
            servicesPanel.addEventListener("mouseleave", hideServices);
        }

        // Products hover
        if (productsLink && productsPanel) {
            productsLink.addEventListener("mouseenter", () => {
                showProducts();
                servicesPanel.classList.remove("show");
            });
            productsLink.addEventListener("mouseleave", hideProducts);
            productsPanel.addEventListener("mouseenter", showProducts);
            productsPanel.addEventListener("mouseleave", hideProducts);
        }
    })();

    // Testimonials slider state
    let currentTestimonialIndex = 0;
    const testimonialCards = document.querySelectorAll(".testimonial-card");
    const totalTestimonials = testimonialCards.length;

    function updateTestimonialSlider() {
        const slider = document.getElementById("testimonialsSlider");
        const offset = -currentTestimonialIndex * 100;
        slider.style.transform = `translateX(${offset}%)`;
    }

    function slideTestimonialLeft() {
        currentTestimonialIndex =
            (currentTestimonialIndex - 1 + totalTestimonials) % totalTestimonials;
        updateTestimonialSlider();
    }

    function slideTestimonialRight() {
        currentTestimonialIndex =
            (currentTestimonialIndex + 1) % totalTestimonials;
        updateTestimonialSlider();
    }

    // Case Studies slider functions
    function slideLeft() {
        const slider = document.getElementById("caseStudiesSlider");
        slider.scrollBy({
            left: -400,
            behavior: "smooth",
        });
    }

    function slideRight() {
        const slider = document.getElementById("caseStudiesSlider");
        slider.scrollBy({
            left: 400,
            behavior: "smooth",
        });
    }

    function playVideo() {
        // Replace with your actual video URL
        const videoUrl = "https://www.youtube.com/embed/dQw4w9WgXcQ";
        const modal = document.createElement("div");
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

        const videoFrame = document.createElement("div");
        videoFrame.style.cssText = `
                width: 90%;
                max-width: 900px;
                aspect-ratio: 22 / 9;
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

        modal.onclick = function(e) {
            if (e.target === modal) modal.remove();
        };
    }

    function toggleMainContainer(event) {
        event.preventDefault();
        const mainContainer = document.querySelector(".main-container");
        mainContainer.classList.toggle("show");

        // Show the first item's dropdown when opening
        if (mainContainer.classList.contains("show")) {
            const firstItem = document.querySelector(".sidebar-item.active");
            if (firstItem) {
                firstItem.click();
            }
        }
    }

    const dropdownData = {
        products: {
            col1: {
                title: "Shop by Product",
                items: [
                    "Furniture",
                    "Acoustic Products",
                    "Writable Surfaces",
                    "Fabrics",
                    "Greenwalls",
                ],
            },
            col2: {
                title: "Discover All",
                items: [
                    "Furniture",
                    "Acoustic Products",
                    "Writable Surfaces",
                    "Fabrics",
                    "Greenwalls",
                ],
            },
            text: "Products",
        },
        industry: {
            col1: {
                title: "Shop by Industry",
                items: ["Corporate", "Education", "Hospitality"],
            },
            col2: {
                title: "",
                items: []
            },
            text: "Industries",
        },
        brand: {
            col1: {
                title: "Shop by Brand",
                items: [
                    "Patra",
                    "Emmegi",
                    "Arper",
                    "JMM",
                    "Infiniti Design",
                    "Teknion",
                    "Manerba",
                    "MDD",
                ],
            },
            col2: {
                title: "",
                items: []
            },
            text: "Brands",
        },
        space: {
            col1: {
                title: "Shop by Space",
                items: [
                    "Conference Rooms",
                    "Office Cabins",
                    "Work Spaces",
                    "Cafe Space",
                ],
            },
            col2: {
                title: "",
                items: []
            },
            text: "Spaces",
        },
    };

    function showDropdown(type, event) {
        event.preventDefault();

        // Update sidebar active state
        document.querySelectorAll(".sidebar-item").forEach((item) => {
            item.classList.remove("active");
        });
        event.target.closest(".sidebar-item").classList.add("active");

        // Update dropdown content
        const dropdown = document.getElementById("productsDropdown");
        const contentText = document.getElementById("contentText");
        const data = dropdownData[type];

        contentText.textContent = data.text;

        // Build dropdown HTML
        let dropdownHTML = `
                <div class="dropdown-column">
                    <div class="dropdown-title">${data.col1.title}</div>
                    ${data.col1.items
                      .map(
                        (item) =>
                          `<a href="#" class="dropdown-item">${item}</a>`
                      )
                      .join("")}
                </div>
            `;

        if (data.col2.title) {
            dropdownHTML += `
                <div class="dropdown-column">
                    <div class="dropdown-title">${data.col2.title}</div>
                    ${data.col2.items
                      .map(
                        (item) =>
                          `<a href="#" class="dropdown-item">${item}</a>`
                      )
                      .join("")}
                </div>
                `;
        }

        dropdownHTML +=
            `<div class="dropdown-column"><div style="height: 100%; background-color: var(--light-bg); border-radius: 4px;"></div></div>`;

        dropdown.innerHTML = dropdownHTML;
        dropdown.classList.remove("hide");
        dropdown.classList.add("show");
    }
</script>
