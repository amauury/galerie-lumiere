<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/stc/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/stc/logo.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La Galerie Lumière présente des expositions d'art contemporain à Paris. Découvrez notre collection d'œuvres uniques.">
    <meta name="keywords" content="galerie d'art, exposition, art contemporain, Paris, La Galerie Lumière">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>La Galerie Lumière - Art Contemporain</title>
</head>
<body>
    <div class="hero">
        <img class="hero-image desktop" src="{{ asset('images/stc/backgroud_header.webp') }}" alt="Tableau d'art contemporain">
        <img class="hero-image mobile" src="{{ asset('images/stc/backgroud_header_tel.webp') }}" alt="Tableau d'art contemporain pour mobile">
        <div class="hero-overlay"></div>
        <h1 class="hero-title">La Galerie Lumière</h1>
    </div>
    
    <nav class="navbar">
        <div class="logo-container">
            <img id="logo" src="{{ asset('images/stc/logo.png') }}" alt="Logo La Galerie Lumière">
        </div>
        <ul class="nav-links">
            <li><a href="#gallery">La Galerie</a></li>
            <li><a href="#exhibitions">Expositions</a></li>
            <li><a href="#artist">L'Artiste</a></li>
        </ul>
        <a href="mailto:contact@galerielumiere.fr" class="contact-btn">Nous contacter</a>
        <div class="menu-toggle">
            <i class="fa-solid fa-2x fa-bars"></i>
        </div>
    </nav>
    
    <div class="mobile-menu">
        <ul class="mobile-nav-links">
            <li><a href="#gallery">La Galerie</a></li>
            <li><a href="#exhibitions">Expositions</a></li>
            <li><a href="#artist">L'Artiste</a></li>
        </ul>
        <div class="divider"></div>
        <a href="mailto:contact@galerielumiere.fr" class="contact-btn mobile-contact">Nous contacter</a>
    </div>

    <div class="section-header" id="gallery">
        <img class="section-bg desktop" src="{{ asset('images/stc/gallery.webp') }}" alt="Fond artistique">
        <img class="section-bg mobile" src="{{ asset('images/stc/gallery_tel.png') }}" alt="Fond artistique pour mobile">
        <div class="section-overlay"></div>
        <h2>LA GALERIE LUMIÈRE</h2>
        <div class="social-links">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <section class="about" id="about">
        <div class="about-content">
            <h2>La Galerie Lumière</h2>
            <p>Fondée en 2015, La Galerie Lumière est un espace dédié à l'art contemporain au cœur de Paris. Notre mission est de promouvoir des artistes émergents et établis qui explorent les frontières de l'expression artistique moderne.</p>
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> 01 23 45 67 89</p>
                <p><i class="fas fa-map-marker-alt"></i> 9 place de la Madeleine, 75008 Paris</p>
                <div class="contact-buttons">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="mailto:contact@galerielumiere.fr"><i class="far fa-envelope"></i> Email</a>
                </div>
            </div>
        </div>
        <div class="map-container">
            <iframe title="Carte adresse La Galerie Lumière" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2853.1635129140777!2d2.571821476321738!3d44.34769207107757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b27da15f3c609d%3A0x29c23cb8a9ac35a1!2s9%20Rue%20de%20la%20Madeleine%2C%2012000%20Rodez!5e0!3m2!1sfr!2sfr!4v1716467967695!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <h2 class="gallery-title" id="exhibitions">EXPOSITIONS ACTUELLES</h2>
    
    <ul class="gallery-grid">
        @foreach($gallery as $image)
            <li class="{{ $image['class'] }}"><img src="{{asset('images/art/' . $image['src']) }}" alt="{{ $image['alt'] }}"></li>
        @endforeach
    </ul>
    
    <div id="artist"></div>
    <h2 class="artist-title">L'ARTISTE EN RÉSIDENCE</h2>
    
    <section class="artist-feature">
        <div class="artist-image">
            <img src="{{ asset('images/stc/emma.png') }}" alt="Portrait de l'artiste">
        </div>
        <div class="artist-bio">
            <h3>Emma Dubois</h3>
            <p>Artiste de renommée internationale, Emma Dubois explore les frontières entre l'abstraction et la figuration dans une quête perpétuelle de l'équilibre parfait entre couleur et forme. Son travail a été présenté dans les plus prestigieuses institutions artistiques d'Europe et d'Amérique du Nord, avec des expositions personnelles au MoMA de New York et au Centre Pompidou à Paris.</p>
            <p>« Mon art est un dialogue entre la lumière et l'ombre, une exploration des émotions humaines à travers la transcendance de la matière. » — Emma Dubois</p>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-about">
                <img src="{{ asset('images/stc/logo.png') }}" alt="Logo La Galerie Lumière">
                <p class="copyright">La Galerie Lumière © 2025</p>
            </div>
            <div class="footer-contact">
                <div class="footer-info">
                    <p><i class="fas fa-map-marker-alt"></i> 9 place de la Madeleine, 75008 Paris</p>
                    <p><i class="fas fa-phone"></i> 01 23 45 67 89</p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:contact@galerielumiere.fr">contact@galerielumiere.fr</a></p>
                </div>
            </div>
            <div class="footer-hours">
                <h4>Horaires d'ouverture</h4>
                <p>Du mardi au samedi: 11h - 19h</p>
                <p>Dimanche: 14h - 18h</p>
                <p>Fermé le lundi</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const menuIcon = document.querySelector('.menu-toggle i');
        const mobileMenu = document.querySelector('.mobile-menu');

        menuToggle.onclick = function() {
            mobileMenu.classList.toggle('open');
            menuIcon.classList.toggle('fa-bars');
            menuIcon.classList.toggle('fa-xmark');
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
                
                if (mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    menuIcon.classList.add('fa-bars');
                    menuIcon.classList.remove('fa-xmark');
                }
            });
        });
    </script>
</body>
</html>