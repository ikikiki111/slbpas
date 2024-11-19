let slideIndex = 1;
let currentEffect = 'fade';
const slides = document.getElementsByClassName("slide");
const dots = document.getElementsByClassName("dot");
let autoSlideInterval;

function showSlides(n) {
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}


    for (let i = 0; i < slides.length; i++) {
        slides[i].className = slides[i].className.replace(" active", "");
        slides[i].className = "slide";
        dots[i].className = dots[i].className.replace(" active", "");
    }


    slides[slideIndex-1].className = "slide active " + currentEffect;
    dots[slideIndex-1].className += " active";
}


function changeSlide(n) {
    clearInterval(autoSlideInterval);
    showSlides(slideIndex += n);
    startAutoSlide();
}


function currentSlide(n) {
    clearInterval(autoSlideInterval);
    showSlides(slideIndex = n);
    startAutoSlide();
}


function setEffect(effect) {
    currentEffect = effect;
    showSlides(slideIndex);
}


function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        slideIndex++;
        showSlides(slideIndex);
    }, 3000); 
}

showSlides(slideIndex);
startAutoSlide();


document.querySelector('.slider-container').addEventListener('mouseenter', () => {
    clearInterval(autoSlideInterval);
});

document.querySelector('.slider-container').addEventListener('mouseleave', () => {
    startAutoSlide();
});


function sendToWhatsApp(e) {
    e.preventDefault();

    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const pesan = document.getElementById('pesan').value;
    

    if (!nama || !email || !pesan) {
        document.getElementById('errorMessage').style.display = 'block';
        document.getElementById('successMessage').style.display = 'none';
        return false;
    }


    document.getElementById('errorMessage').style.display = 'none';
    

    document.getElementById('successMessage').style.display = 'block';

  
    const pesanWhatsApp = `Halo, saya ${nama} (${email}) ingin mengirim pesan:\n\n${pesan}`;
    

    const pesanEncoded = encodeURIComponent(pesanWhatsApp);
    
 
    const nomorWhatsApp = '6287864705642'; 
    

    const whatsappURL = `https://wa.me/${nomorWhatsApp}?text=${pesanEncoded}`;
    

    window.open(whatsappURL, '_blank');
    

    document.getElementById('whatsappForm').reset();
    
    return false;
}

document.addEventListener('DOMContentLoaded', () => {
    // Hamburger Menu Toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // Smooth Scrolling for Navigation Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
                // Close mobile menu if open
                navLinks.classList.remove('active');
            }
        });
    });

    // Navbar Background Change on Scroll
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.style.background = 'rgba(255, 255, 255, 0.98)';
            nav.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        } else {
            nav.style.background = 'rgba(255, 255, 255, 0.95)';
            nav.style.boxShadow = 'none';
        }
    });

    // Animation on Scroll for Cards
    const observeElements = document.querySelectorAll('.profile-card, .service-card, .gallery-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    observeElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'all 0.6s ease';