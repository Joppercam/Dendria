<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DendrIA - @yield('title', 'Desarrollo de Software Potenciado por IA')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        
        // Script para menú móvil
        const mobileMenuButton = document.querySelector('.md\\:hidden button');
        const mobileMenu = document.querySelector('.md\\:flex');
        
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>