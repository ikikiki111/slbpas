<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Modern</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</head>
<body> 
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

/* Navbar Styles */
nav {
    position: fixed;
    width: 100%;
    padding: 20px 50px;
    background: rgba(255, 255, 255, 0.95);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.logo h1 {
    font-size: 24px;
    color: #333;
}

.nav-links {
    display: flex;
    list-style: none;
    gap: 30px;
}

.nav-links li a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-links li a:hover {
    color: #007bff;
}

.btn-kontak {
    background: #007bff;
    color: white !important;
    padding: 10px 20px;
    border-radius: 5px;
}

.hamburger {
    display: none;
    cursor: pointer;
}

.hamburger .line {
    width: 25px;
    height: 3px;
    background: #333;
    margin: 5px;
}

/* Hero Section */
.hero {
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/api/placeholder/1920/1080');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
}

.hero-content {
    max-width: 800px;
    padding: 20px;
}

.hero-content h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.hero-content p {
    font-size: 24px;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
    transition: background 0.3s ease;
}

.cta-button:hover {
    background: #0056b3;
}

/* Section Styles */
.section {
    padding: 80px 50px;
}

.section h2 {
    text-align: center;
    margin-bottom: 50px;
    font-size: 36px;
    color: #333;
}

/* Profile Section */
.profile-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.profile-card {
    text-align: center;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.profile-card:hover {
    transform: translateY(-10px);
}

.profile-card i {
    font-size: 48px;
    color: #007bff;
    margin-bottom: 20px;
}

/* Services Section */
.services-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.service-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.service-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.service-card h3 {
    padding: 20px;
    margin: 0;
}

.service-card p {
    padding: 0 20px 20px;
    color: #666;
}

/* Gallery Section */
.gallery-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    aspect-ratio: 1;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

/* Footer Styles */
footer {
    background: #333;
    color: white;
    padding: 50px 0 20px;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 50px;
}

.footer-section h3 {
    margin-bottom: 20px;
}

.footer-section p {
    margin-bottom: 10px;
}

.footer-section i {
    margin-right: 10px;
}

.social-links {
    display: flex;
    gap: 20px;
}

.social-links a {
    color: white;
    font-size: 24px;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #007bff;
}

.footer-bottom {
    text-align: center;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,0.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    nav {
        padding: 20px;
    }

    .hamburger {
        display: block;
    }

    .nav-links {
        position: fixed;
        top: 80px;
        right: -100%;
        background: white;
        width: 100%;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        transition: right 0.3s ease;
    }

    .nav-links.active {
        right: 0;
    }

    .hero-content h1 {
        font-size: 36px;
    }

    .hero-content p {
        font-size: 18px;
    }

    .section {
        padding: 60px 20px;
    }
}
</style>

    <nav>
        <div class="logo">
            <h1>SEKOLAH MODERN</h1>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#profil">Profil</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#kontak" class="btn-kontak">Kontak</a></li>
        </ul>
    </nav>

    <section id="beranda" class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di Sekolah Modern</h1>
            <p>Membentuk Generasi Unggul dan Berkarakter</p>
            <a href="#" class="cta-button">Daftar Sekarang</a>
        </div>
    </section>

    <section id="profil" class="section">
        <h2>Profil Sekolah</h2>
        <div class="profile-container">
            <div class="profile-card">
                <i class="fas fa-graduation-cap"></i>
                <h3>Visi</h3>
                <p>Menjadi lembaga pendidikan terkemuka yang menghasilkan siswa berkualitas global.</p>
            </div>
            <div class="profile-card">
                <i class="fas fa-book-reader"></i>
                <h3>Misi</h3>
                <p>Menyelenggarakan pendidikan berkualitas dengan teknologi modern.</p>
            </div>
            <div class="profile-card">
                <i class="fas fa-users"></i>
                <h3>Nilai</h3>
                <p>Integritas, Kreativitas, dan Keunggulan dalam setiap aspek.</p>
            </div>
        </div>
    </section>

    <section id="layanan" class="section">
        <h2>Layanan Kami</h2>
        <div class="services-container">
            <div class="service-card">
                <img src="/api/placeholder/300/200" alt="Akademik">
                <h3>Program Akademik</h3>
                <p>Kurikulum terstandar internasional</p>
            </div>
            <div class="service-card">
                <img src="/api/placeholder/300/200" alt="Ekstrakurikuler">
                <h3>Ekstrakurikuler</h3>
                <p>Berbagai kegiatan pengembangan bakat</p>
            </div>
            <div class="service-card">
                <img src="/api/placeholder/300/200" alt="Fasilitas">
                <h3>Fasilitas Modern</h3>
                <p>Sarana prasarana lengkap dan modern</p>
            </div>
        </div>
    </section>

    <section id="galeri" class="section">
        <h2>Galeri</h2>
        <div class="gallery-container">
            <div class="gallery-item">
                <img src="/api/placeholder/300/300" alt="Galeri 1">
            </div>
            <div class="gallery-item">
                <img src="/api/placeholder/300/300" alt="Galeri 2">
            </div>
            <div class="gallery-item">
                <img src="/api/placeholder/300/300" alt="Galeri 3">
            </div>
            <div class="gallery-item">
                <img src="/api/placeholder/300/300" alt="Galeri 4">
            </div>
            <div class="gallery-item">
                <img src="/api/placeholder/300/300" alt="Galeri 5">
            </div>
            <div class="gallery-item">
                <img src="/api/placeholder/300/300" alt="Galeri 6">
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Kontak Kami</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123</p>
                <p><i class="fas fa-phone"></i> (021) 1234-5678</p>
                <p><i class="fas fa-envelope"></i> info@sekolahmodern.com</p>
            </div>
            <div class="footer-section">
                <h3>Media Sosial</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sekolah Modern. All rights reserved.</p>
        </div>
    </footer>

    <script>
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
    </script>
</body>
</html>

