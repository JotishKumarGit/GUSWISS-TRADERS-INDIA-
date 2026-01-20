
// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// Hero Slider
let currentSlide = 0;
const slides = document.querySelectorAll('.hero-slide');
const dots = document.querySelectorAll('.slider-dot');

function showSlide(n) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    currentSlide = n;
    if (currentSlide >= slides.length) currentSlide = 0;
    if (currentSlide < 0) currentSlide = slides.length - 1;

    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

// Auto slide
setInterval(nextSlide, 5000);

// Dot navigation
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => showSlide(index));
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
            // Close offcanvas if open
            const offcanvas = bootstrap.Offcanvas.getInstance(document.getElementById('mobileMenu'));
            if (offcanvas) offcanvas.hide();
        }
    });
});

// Header scroll effect
const header = document.querySelector('.modern-header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Gallery modal
function openGallery(src) {
    const modal = document.getElementById('galleryModal');
    const img = document.getElementById('modalImage');
    img.src = src;
    modal.classList.add('active');
}

function closeGallery() {
    document.getElementById('galleryModal').classList.remove('active');
}

// Close modal on click outside
document.getElementById('galleryModal').addEventListener('click', function (e) {
    if (e.target === this) {
        closeGallery();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeGallery();
    }
});

// Contact Form to WhatsApp
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = this.querySelector('input[placeholder="Your Name"]').value;
    const email = this.querySelector('input[placeholder="Your Email"]').value;
    const phone = this.querySelector('input[placeholder="Your Phone"]').value;
    const subject = this.querySelector('input[placeholder="Subject"]').value;
    const message = this.querySelector('textarea').value;

    const whatsappMessage = `*Contact Form - GUSWISS TRADERS*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Phone:* ${phone}%0A*Subject:* ${subject}%0A*Message:* ${message}`;

    const whatsappURL = `https://wa.me/919092200699?text=${whatsappMessage}`;
    window.open(whatsappURL, '_blank');
    this.reset();
    alert('Thank you! Your message will be sent via WhatsApp.');
});

// Enquiry Form to WhatsApp
document.getElementById('enquiryForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('enquiryName').value;
    const email = document.getElementById('enquiryEmail').value;
    const phone = document.getElementById('enquiryPhone').value;
    const product = document.getElementById('enquiryProduct').value;
    const message = document.getElementById('enquiryMessage').value;

    const whatsappMessage = `*Product Enquiry - GUSWISS TRADERS*%0A%0A*Name:* ${name}%0A*Email:* ${email}%0A*Phone:* ${phone}%0A*Product:* ${product}%0A*Message:* ${message}`;

    const whatsappURL = `https://wa.me/919092200699?text=${whatsappMessage}`;
    window.open(whatsappURL, '_blank');

    const modal = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
    modal.hide();
    this.reset();
    alert('Thank you! Your enquiry will be sent via WhatsApp.');
});

// Newsletter Form
document.getElementById('newsletterForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const email = this.querySelector('input[type="email"]').value;

    const whatsappMessage = `*Newsletter Subscription - GUSWISS TRADERS*%0A%0A*Email:* ${email}%0A%0AI would like to subscribe to your newsletter.`;

    const whatsappURL = `https://wa.me/919092200699?text=${whatsappMessage}`;
    window.open(whatsappURL, '_blank');
    this.reset();
    alert('Thank you for subscribing!');
});

// Active menu on scroll
window.addEventListener('scroll', function () {
    let current = '';
    const sections = document.querySelectorAll('section');

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    document.querySelectorAll('.mega-menu a').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});

// Offcanvas Dropdown Toggle
function toggleOffcanvasDropdown(e) {
    e.preventDefault();
    const parentLi = e.currentTarget.parentElement;
    const submenu = parentLi.querySelector('.offcanvas-submenu');
    const icon = parentLi.querySelector('.dropdown-toggle-icon');

    // Toggle active class
    submenu.classList.toggle('active');
    icon.classList.toggle('active');
}
