<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUSWISS TRADERS INDIA PVT LTD - Premium Food Products</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Hero Slider -->
    <section id="home" class="hero-slider">
        <div class="hero-slide active" style="background-image: url('./assets/img/Oils/Groundnut-Oil.jpg');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content" data-aos="fade-up">
                    <h1>Premium Quality Food Products</h1>
                    <p>Delivering Excellence in Coconut Oil, Groundnut Oil, Spices & More Since 2018</p>
                    <div class="hero-buttons">
                        <a href="#products" class="hero-btn primary"><i
                                class="fas fa-shopping-basket"></i>OurProducts</a>
                        <a href="#contact" class="hero-btn"><i class="fas fa-phone"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('./assets/img/Spices/Cardamom.jpg');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1>Pure & Aromatic Spices</h1>
                    <p>Handpicked spices bursting with authentic flavor, freshness, and rich aroma</p>
                    <div class="hero-buttons">
                        <a href="#products" class="hero-btn primary"><i class="fas fa-tag"></i>Special Offers</a>
                        <a href="#about" class="hero-btn"><i class="fas fa-arrow-right"></i>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('./assets/img/Pulses/pulses.avif');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1>Premium Quality Pulses</h1>
                    <p>Nutritious, carefully selected pulses for healthy and wholesome meals</p>
                    <div class="hero-buttons">
                        <a href="#services" class="hero-btn primary"><i class="fas fa-truck"></i>Our Services</a>
                        <a href="#contact" class="hero-btn"><i class="fas fa-headset"></i>Get Support</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-controls">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About GUSWISS TRADERS INDIA PRIVATE LIMITED</h2>
                <p>Your Trusted Partner in Quality Food Products</p>
            </div>
            <div class="about-content">
                <div class="about-images" data-aos="fade-right">
                    <img src="./assets/img/Pulses/pulses.avif" alt="About Us" class="about-img-main">
                    <img src="./assets/img/Oils/Coconut-Oil.jpg" alt="Quality" class="about-img-float">
                </div>
                <div class="about-text" data-aos="fade-left">
                    <h3>Leading Manufacturer & <span>Supplier</span></h3>
                    <p>Established in 2018, M/s. GUSWISS TRADERS INDIA PVT LTD is a premier manufacturer and supplier of
                        premium quality food products based in Coimbatore, Tamil Nadu. Led by our visionary CEO, Mr.
                        Chinnasamy Gunasekaran, we have built a reputation for excellence in the food industry.</p>
                    <p>With 15 years of industry experience and a dedicated team of 25 professionals, we specialize in
                        manufacturing coconut oil and groundnut oil while supplying a wide range of quality food
                        products including rice, pulses, spices, and cow ghee.</p>
                    <p><strong>Our USPs:</strong> Guaranteed lowest prices, exceptional quality and innovation, speedy
                        service, 24/7 expert support, and unwavering commitment to customer satisfaction.</p>
                    <div class="about-stats">
                        <div class="stat-box" data-aos="zoom-in" data-aos-delay="100">
                            <h4>2018</h4>
                            <p>Established</p>
                        </div>
                        <div class="stat-box" data-aos="zoom-in" data-aos-delay="200">
                            <h4>25+</h4>
                            <p>Team Members</p>
                        </div>
                        <div class="stat-box" data-aos="zoom-in" data-aos-delay="300">
                            <h4>1000+</h4>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Premium Products</h2>
                <p>Quality Food Products for Your Healthy Lifestyle</p>
            </div>

            <div class="products-grid">

                <!-- Coconut Oil -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-image">
                        <img src="./assets/img/Oils/Coconut-Oil.jpg" height="300px" width="100%" alt="">
                        <span class="product-badge">Best Seller</span>
                    </div>
                    <div class="product-info">
                        <h4>Coconut Oil</h4>
                        <p>Pure and natural coconut oil extracted from fresh coconuts using traditional methods.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="coconut-oil.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Groundnut Oil -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-image">
                        <img src="./assets/img/Oils/Groundnut-Oil.jpg" height="300px" width="100%" alt="">
                        <span class="product-badge">Premium</span>
                    </div>
                    <div class="product-info">
                        <h4>Groundnut Oil</h4>
                        <p>High-quality groundnut oil made from carefully selected peanuts.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="groundnut-oil.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Palm Oil -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-image">
                        <img src="./assets/img/Oils/Palm-Oil.jpg" height="300px" width="100%" alt="">
                        <span class="product-badge">Hot</span>
                    </div>
                    <div class="product-info">
                        <h4>Palm Oil</h4>
                        <p>Refined palm oil processed under strict quality standards.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="palm-oil.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sesame Oil -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-image">
                        <img src="./assets/img/Oils/Sesame-Oil.jpg" height="300px" width="100%" alt="">
                        <span class="product-badge">Organic</span>
                    </div>
                    <div class="product-info">
                        <h4>Sesame Oil</h4>
                        <p>Traditional sesame oil prepared from premium sesame seeds.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="sesame-oil.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Cow Ghee -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="product-image">
                        <img src="./assets/img/Dairy-Products/Ghee.jpg" height="300px" width="100%" alt="">
                        <span class="product-badge">Pure</span>
                    </div>
                    <div class="product-info">
                        <h4>Cow Ghee</h4>
                        <p>Pure cow ghee made from fresh milk using hygienic processes.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="cow-ghee.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ponni Rice -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Grains/Rice.jpg" height="300px" width="100%" alt="">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Ponni Rice</h4>
                        <p>Carefully sourced premium quality rice.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="ponni-rice.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pulses Collection -->

                <!-- Black Chickpeas -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/Black-Chickpeas.jpg" height="300px" width="100%" alt="Black Chickpeas">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Black Chickpeas</h4>
                        <p>Nutritious and high-quality pulses.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="black-chickpeas.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>
                <!-- pulses -->
                <!-- Black Masoor Pulses -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/Black-Masoor-Pulses.jpg" height="300px" width="100%" alt="Black Masoor Pulses">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Black Masoor Pulses</h4>
                        <p>Nutritious and high-quality pulses.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="black-masoor-pulses.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Yellow Moong Pulses -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/Yellow-Moong-Pulses.jpg" height="300px" width="100%" alt="Yellow Moong Pulses">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Yellow Moong Pulses</h4>
                        <p>Rich in protein and essential nutrients.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="yellow-moong-pulses.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- White Chickpeas -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/White-Chickpeas.jpg" height="300px" width="100%" alt="White Chickpeas">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>White Chickpeas</h4>
                        <p>High-quality pulses perfect for soups and salads.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="white-chickpeas.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Toor Pulses -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/Toor-Pulses.webp" height="300px" width="100%" alt="Toor Pulses">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Toor Pulses</h4>
                        <p>Essential pulses rich in fiber and protein.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="toor-pulses.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Red Masoor Pulses -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/Red-Masoor-Pulses.webp" height="300px" width="100%" alt="Red Masoor Pulses">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Red Masoor Pulses</h4>
                        <p>Quick-cooking, nutritious pulses for everyday meals.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="red-masoor-pulses.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Chana Pulses -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Pulses/Chana-Pulses.webp" height="300px" width="100%" alt="Chana Pulses">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Chana Pulses</h4>
                        <p>Premium pulses ideal for curries and snacks.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="chana-pulses.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Spices Collection -->
                <!-- Cumin Seeds -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Spices/Cumin.jpg" height="300px" width="100%" alt="Cumin Seeds">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Cumin Seeds</h4>
                        <p>Premium quality cumin seeds perfect for enhancing flavor in curries and dishes.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="cumin.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Cardamom -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Spices/Cardamom.jpg" height="300px" width="100%" alt="Cardamom">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Green Cardamom</h4>
                        <p>Premium green cardamom with rich aroma, ideal for desserts and beverages.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="cardamom.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Black Pepper -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Spices/Black-Pepper.jpg" height="300px" width="100%" alt="Black Pepper">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Black Pepper</h4>
                        <p>High-quality black pepper to add spice and flavor to all your dishes.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="black-pepper.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Additional Spices -->

                <!-- Green Peas -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Spices/Green-Peas.jpg" height="300px" width="100%" alt="Green Peas">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Green Peas</h4>
                        <p>Fresh green peas, perfect for soups, salads, and cooking.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="green-peas.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dried Red Chilli -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Spices/dried-red-chilli.jpg" height="300px" width="100%" alt="Dried Red Chilli">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Dried Red Chilli</h4>
                        <p>High-quality dried red chilies to add heat and flavor to any dish.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="dried-red-chilli.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Coriander Seeds -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="product-image">
                        <img src="./assets/img/Spices/coriander-seeds.webp" height="300px" width="100%" alt="Coriander Seeds">
                        <span class="product-badge">Fresh</span>
                    </div>
                    <div class="product-info">
                        <h4>Coriander Seeds</h4>
                        <p>Premium coriander seeds for aromatic flavor in curries and spice blends.</p>
                        <div class="product-buttons">
                            <button class="product-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="fas fa-paper-plane"></i> Enquiry
                            </button>
                            <a href="coriander-seeds.php" class="product-btn primary">
                                <i class="fas fa-info-circle"></i> Details
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="services-overlay"></div>
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Comprehensive Food Solutions Tailored for You</p>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="service-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h4>Manufacturing</h4>
                    <p>State-of-the-art manufacturing facilities for coconut oil and groundnut oil with strict quality
                        control.</p>
                </div>
                <div class="service-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h4>Supply Chain</h4>
                    <p>Reliable supply of rice, pulses, spices, and other food items with timely delivery nationwide.
                    </p>
                </div>
                <div class="service-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Quality Assurance</h4>
                    <p>Rigorous quality checks and certifications ensuring the highest standards in every product.</p>
                </div>
                <div class="service-card" data-aos="flip-left" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h4>Best Prices</h4>
                    <p>Guaranteed lowest prices in the market without compromising on quality or service.</p>
                </div>
                <div class="service-card" data-aos="flip-left" data-aos-delay="500">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Round-the-clock expert customer support for all your queries and requirements.</p>
                </div>
                <div class="service-card" data-aos="flip-left" data-aos-delay="600">
                    <div class="service-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h4>Fast Delivery</h4>
                    <p>Quick and efficient delivery services ensuring your products reach you on time, every time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Gallery</h2>
                <p>A Glimpse into Our Operations and Products</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="zoom-in"
                    onclick="openGallery('./assets/img/Dairy-Products/Ghee.jpg')">
                    <img src="./assets/img/Dairy-Products/Ghee.jpg" alt="Gallery 1">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100"
                    onclick="openGallery('./assets/img/Grains/Rice.jpg')">
                    <img src="./assets/img/Grains/Rice.jpg" alt="Gallery 2">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200"
                    onclick="openGallery('./assets/img/Oils/Coconut-Oil.jpg')">
                    <img src="./assets/img/Oils/Coconut-Oil.jpg" alt="Gallery 3">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300"
                    onclick="openGallery('./assets/img/Oils/Groundnut-Oil.jpg')">
                    <img src="./assets/img/Oils/Groundnut-Oil.jpg" alt="Gallery 4">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400"
                    onclick="openGallery('./assets/img/Oils/Palm-Oil.jpg')">
                    <img src="./assets/img/Oils/Palm-Oil.jpg" alt="Gallery 5">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Oils/Sesame-Oil.jpg')">
                    <img src="./assets/img/Oils/Sesame-Oil.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/pulses.avif')">
                    <img src="./assets/img/Pulses/pulses.avif" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Spices/Black-Pepper.jpg')">
                    <img src="./assets/img/Spices/Black-Pepper.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Spices/Cardamom.jpg')">
                    <img src="./assets/img/Spices/Cardamom.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Spices/Cumin.jpg')">
                    <img src="./assets/img/Spices/Cumin.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/Black-Chickpeas.jpg')">
                    <img src="./assets/img/Pulses/Black-Chickpeas.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/Black-Masoor-Pulses.jpg')">
                    <img src="./assets/img/Pulses/Black-Masoor-Pulses.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/Chana-Pulses.webp')">
                    <img src="./assets/img/Pulses/Chana-Pulses.webp" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/Red-Masoor-Pulses.webp')">
                    <img src="./assets/img/Pulses/Red-Masoor-Pulses.webp" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/Toor-Pulses.webp')">
                    <img src="./assets/img/Pulses/Toor-Pulses.webp" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/White-Chickpeas.jpg')">
                    <img src="./assets/img/Pulses/White-Chickpeas.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/Yellow-Moong-Pulses.jpg')">
                    <img src="./assets/img/Pulses/Yellow-Moong-Pulses.jpg" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500"
                    onclick="openGallery('./assets/img/Pulses/pulses.avif')">
                    <img src="./assets/img/Pulses/pulses.avif" alt="Gallery 6">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <!--  -->

            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div class="gallery-modal" id="galleryModal">
        <span class="modal-close" onclick="closeGallery()">&times;</span>
        <img id="modalImage" src="" alt="Gallery">
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Get In Touch</h2>
                <p>We'd Love to Hear From You</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info-box" data-aos="fade-right">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Address</h5>
                            <p>48, Ponnurangam Road West<br>R. S. Puram Post<br>Coimbatore - 641002<br>Tamil Nadu, India
                            </p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h5>Phone</h5>
                            <p>9092200699<br>9629979406<br>9994744562</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5>Email</h5>
                            <p>infogtipl2024@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-user-tie"></i>
                        <div>
                            <h5>CEO</h5>
                            <p>Mr. Chinnasamy Gunasekaran</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-box" data-aos="fade-left">
                    <h3>Send Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Your Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">
                            <i class="fab fa-whatsapp"></i> Send via WhatsApp
                        </button>
                    </form>
                </div>
            </div>
            <div class="map-container" data-aos="fade-up">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.515896676165!2d76.95395431480097!3d11.002621992165896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85906a9562477%3A0x2d26b3f6b3e7f4a4!2sR.%20S.%20Puram%2C%20Coimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1234567890"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="zoom-in">
                <h2><i class="fas fa-envelope-open-text"></i> Subscribe to Our Newsletter</h2>
                <p>Stay updated with our latest products, offers, and food industry insights</p>
                <form class="newsletter-form" id="newsletterForm">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">
                        <i class="fas fa-paper-plane"></i> Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>