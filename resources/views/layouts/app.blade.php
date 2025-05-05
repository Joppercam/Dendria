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