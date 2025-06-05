<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'DendrIA - Desarrollo de software potenciado por IA y Laravel. Soluciones inteligentes para empresas de todos los tamaños en Chile y Latinoamérica.')">
    <meta name="keywords" content="@yield('meta_keywords', 'desarrollo software, inteligencia artificial, IA, machine learning, laravel, aplicaciones web, Chile, desarrollo web, consultora tecnológica')">
    <meta name="author" content="DendrIA">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="DendrIA - @yield('title', 'Desarrollo de Software Potenciado por IA')">
    <meta property="og:description" content="@yield('meta_description', 'DendrIA - Desarrollo de software potenciado por IA y Laravel. Soluciones inteligentes para empresas de todos los tamaños en Chile y Latinoamérica.')">
    <meta property="og:image" content="@yield('og_image', asset('images/dendria-og.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="DendrIA - @yield('title', 'Desarrollo de Software Potenciado por IA')">
    <meta property="twitter:description" content="@yield('meta_description', 'DendrIA - Desarrollo de software potenciado por IA y Laravel. Soluciones inteligentes para empresas de todos los tamaños en Chile y Latinoamérica.')">
    <meta property="twitter:image" content="@yield('og_image', asset('images/dendria-og.png'))">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <title>DendrIA - @yield('title', 'Desarrollo de Software Potenciado por IA')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}" type="image/png">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    @yield('styles')
    <style>
        .gradient-bg {
            background: linear-gradient(90deg, #1a202c 0%, #2d3748 100%);
        }
        .accent-gradient {
            background: linear-gradient(90deg, #0ea5e9 0%, #3b82f6 100%);
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .pulse {
            animation: pulse 3s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(14, 165, 233, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(14, 165, 233, 0); }
            100% { box-shadow: 0 0 0 0 rgba(14, 165, 233, 0); }
        }

        .compact-header {
            padding-top: 2rem;
            padding-bottom: 2rem;
            min-height: auto !important;
        }

        /* En tu archivo CSS (o sección de estilos) */
    .hero-image-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    border-radius: 8px;
    }

    .hero-image {
    width: 100%;
    display: block;
    transition: all 0.5s ease;
    }

    /* Efecto de capa transparente superpuesta */
    .hero-image-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(0deg, rgba(23, 32, 48, 0.7), rgba(23, 32, 48, 0));
    z-index: 1;
    }

    /* Efecto de mezcla para integrar la imagen con el fondo */
    .hero-image {
    mix-blend-mode: screen; /* Esta propiedad hace que los negros sean transparentes */
    }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    @yield('scripts')
    <script>
        // Script para efecto smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Script para menú móvil mejorado
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
        const menuIcon = document.getElementById('menu-icon');
        
        function openMobileMenu() {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            menuIcon.className = 'fas fa-times text-2xl';
        }
        
        function closeMobileMenu() {
            mobileMenu.classList.add('hidden');
            document.body.style.overflow = 'auto';
            menuIcon.className = 'fas fa-bars text-2xl';
        }
        
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                if (mobileMenu.classList.contains('hidden')) {
                    openMobileMenu();
                } else {
                    closeMobileMenu();
                }
            });
        }
        
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', closeMobileMenu);
        }
        
        if (mobileMenuBackdrop) {
            mobileMenuBackdrop.addEventListener('click', closeMobileMenu);
        }
        
        // Cerrar menú al hacer clic en enlaces
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });
        
        // Cerrar menú al presionar ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                closeMobileMenu();
            }
        });
    </script>
</body>
</html>