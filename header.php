    <!-- Topbar -->
    <div class="topbar">
        <div class="container d-none d-lg-block">
            <div class="topbar-content">
                <div class="d-flex gap-3 flex-wrap">
                    <a href="tel:9092200699" class="topbar-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>9092200699, 9629979406</span>
                    </a>
                    <a href="mailto:info@guswiss.com" class="topbar-item">
                        <i class="fas fa-envelope"></i>
                        <span>infogtipl2024@gmail.com</span>
                    </a>
                    <a href="#" class="topbar-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Coimbatore, Tamil Nadu</span>
                    </a>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="modern-header">
        <div class="container">
            <div class="header-container">
                <div class="logo-section">
                    <div class="logo-text">
                        <a href="index.php">
                            <img src="./assets/img/g_logo.jpeg" height="100px" width="100%" alt="">
                        </a>
                    </div>
                </div>

                <!-- Desktop Mega Menu -->
                <nav>
                    <ul class="mega-menu">
                        <li>
                            <a href="index.php" class="active"><i class="fas fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="about.php"><i class="fas fa-info-circle"></i>About</a>
                        </li>
                        <li>
                            <a>
                                <i class="fas fa-box-open"></i>
                                Products
                                <i class="fas fa-chevron-down dropdown-chevron"></i>
                            </a>

                            <div class="mega-dropdown">
                                <!-- Oils -->
                                <div class="mega-dropdown-item">
                                    <a href="#" onclick="return false;">
                                        <i class="fas fa-tint"></i> Oils
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="mega-dropdown-submenu">
                                        <a href="coconut-oil.php">Coconut Oil</a>
                                        <a href="groundnut-oil.php">Groundnut Oil</a>
                                        <a href="sesame-oil.php">Sesame Oil</a>
                                        <a href="palm-oil.php">Palm Oil</a>
                                        <a href="refined-sunflower-oil.php">Refined Sunflower Oil</a>
                                    </div>
                                </div>

                                <!-- Spices -->
                                <div class="mega-dropdown-item">
                                    <a href="#" onclick="return false;">
                                        <i class="fas fa-leaf"></i> Spices
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="mega-dropdown-submenu">
                                        <a href="cumin.php">Cumin Seeds</a>
                                        <a href="cardamom.php">Green Cardamom</a>
                                        <a href="black-pepper.php">Black Pepper</a>
                                        <a href="coriander-seeds.php">Coriander Seeds</a>
                                        <a href="dry-red-chilli.php">Dry Red Chilli</a>
                                    </div>
                                </div>

                                <!-- Grains -->
                                <div class="mega-dropdown-item">
                                    <a href="#" onclick="return false;">
                                        Grains
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="mega-dropdown-submenu">
                                        <a href="ponni-rice.php">Ponni Rice</a>
                                    </div>
                                </div>

                                <!-- Pulses -->
                                <div class="mega-dropdown-item">
                                    <a href="#" onclick="return false;">
                                        Pulses
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="mega-dropdown-submenu">
                                        <a href="yellow-moong-pulses.php">Yellow Moong Pulses</a>
                                        <a href="toor-pulses.php">Toor Pulses</a>
                                        <a href="red-masoor-pulses.php">Red Masoor Pulses</a>
                                        <a href="chana-pulses.php">Chana Pulses</a>
                                        <a href="black-masoor-pulses.php">Black Masoor Pulses</a>
                                        <a href="white-chickpeas.php">White Chickpeas</a>
                                        <a href="black-chickpeas.php">Black Chickpeas</a>
                                    </div>
                                </div>

                                <!-- Dairy -->
                                <div class="mega-dropdown-item">
                                    <a href="#" onclick="return false;">
                                        Dairy Products
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="mega-dropdown-submenu">
                                        <a href="cow-ghee.php">Cow Ghee</a>
                                    </div>
                                </div>

                                <!-- Fresh Produce -->
                                <div class="mega-dropdown-item">
                                    <a href="#" onclick="return false;">
                                        Fresh Produce
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="mega-dropdown-submenu">
                                        <a href="green-peas.php">Fresh Green Peas</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a href="services.php">Services</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>

                <!-- Mobile Toggle -->
                <button class="menu-toggle" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>


    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-end" id="mobileMenu">
        <div class="offcanvas-header">
            <h5>Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <ul class="offcanvas-menu">

                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>

                <li class="menu-item-with-dropdown">
                    <a href="#" onclick="toggleOffcanvasDropdown(event)">
                        <i class="fas fa-box-open"></i> Products
                        <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                    </a>

                    <ul class="offcanvas-submenu">

                        <!-- Oils -->
                        <li class="submenu-item-with-dropdown">
                            <a href="#" onclick="toggleOffcanvasDropdown(event)">
                                <i class="fas fa-tint"></i> Oils
                                <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="offcanvas-submenu">
                                <li><a href="coconut-oil.php"><i class="fas fa-circle"></i> Coconut Oil</a></li>
                                <li><a href="groundnut-oil.php"><i class="fas fa-circle"></i> Groundnut Oil</a></li>
                                <li><a href="sesame-oil.php"><i class="fas fa-circle"></i> Sesame Oil</a></li>
                                <li><a href="palm-oil.php"><i class="fas fa-circle"></i> Palm Oil</a></li>
                            </ul>
                        </li>

                        <!-- Spices -->
                        <li class="submenu-item-with-dropdown">
                            <a href="#" onclick="toggleOffcanvasDropdown(event)">
                                <i class="fas fa-leaf"></i> Spices
                                <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="offcanvas-submenu">
                                <li><a href="cumin.php"><i class="fas fa-seedling"></i> Cumin</a></li>
                                <li><a href="cardamom.php"><i class="fas fa-leaf"></i> Green Cardamom</a></li>
                                <li><a href="black-pepper.php"><i class="fas fa-pepper-hot"></i> Black Pepper</a></li>
                                <li><a href="dry-red-chilli.php"><i class="fas fa-pepper-hot"></i> Dry Red Chilli</a>
                                </li>
                                <li><a href="coriander-seeds.php"><i class="fas fa-seedling"></i> Coriander Seeds</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Grains -->
                        <li class="submenu-item-with-dropdown">
                            <a href="#" onclick="toggleOffcanvasDropdown(event)">
                                <i class="fas fa-dice-d6"></i> Grains
                                <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="offcanvas-submenu">
                                <li><a href="ponni-rice.php"><i class="fas fa-circle"></i> Ponni Rice</a></li>
                            </ul>
                        </li>

                        <!-- Pulses -->
                        <li class="submenu-item-with-dropdown">
                            <a href="#" onclick="toggleOffcanvasDropdown(event)">
                                <i class="fas fa-dice-d6"></i> Pulses
                                <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="offcanvas-submenu">
                                <li><a href="black-chickpeas.php"><i class="fas fa-circle"></i> Black Chickpeas</a></li>
                                <li><a href="white-chickpeas.php"><i class="fas fa-circle"></i> White Chickpeas</a></li>
                                <li><a href="black-masoor-pulses.php"><i class="fas fa-circle"></i> Black Masoor
                                        Pulses</a></li>
                                <li><a href="chana-pulses.php"><i class="fas fa-circle"></i> Chana Pulses</a></li>
                                <li><a href="red-masoor-pulses.php"><i class="fas fa-circle"></i> Red Masoor Pulses</a>
                                </li>
                                <li><a href="toor-pulses.php"><i class="fas fa-circle"></i> Toor Pulses</a></li>
                                <li><a href="yellow-moong-pulses.php"><i class="fas fa-circle"></i> Yellow Moong
                                        Pulses</a></li>
                            </ul>
                        </li>

                        <!-- Dairy -->
                        <li class="submenu-item-with-dropdown">
                            <a href="#" onclick="toggleOffcanvasDropdown(event)">
                                <i class="fas fa-dice-d6"></i> Dairy Products
                                <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="offcanvas-submenu">
                                <li><a href="cow-ghee.php"><i class="fas fa-circle"></i> Cow Ghee</a></li>
                            </ul>
                        </li>

                        <!-- Fresh Produce -->
                        <li class="submenu-item-with-dropdown">
                            <a href="#" onclick="toggleOffcanvasDropdown(event)">
                                <i class="fas fa-dice-d6"></i> Fresh Produce
                                <i class="fas fa-chevron-down dropdown-toggle-icon"></i>
                            </a>
                            <ul class="offcanvas-submenu">
                                <li><a href="green-peas.php"><i class="fas fa-circle"></i> Fresh Green Peas</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>

                <li><a href="services.php"><i class="fas fa-concierge-bell"></i> Services</a></li>
                <li><a href="gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
                <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>

            </ul>
        </div>
    </div>