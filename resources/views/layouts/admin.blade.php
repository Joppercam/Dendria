<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - DendrIA | @yield('title', 'Dashboard')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800">
                <div class="flex items-center justify-center h-16 bg-gray-900">
                    <span class="text-xl font-bold text-white">DendrIA Admin</span>
                </div>
                <div class="flex flex-col flex-grow overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-1">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ Request::routeIs('admin.dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            Dashboard
                        </a>
                        <a href="{{ route('admin.contacts') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ Request::routeIs('admin.contacts') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md">
                            <i class="fas fa-envelope mr-3"></i>
                            Contactos
                        </a>
                        <a href="{{ route('admin.projects') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ Request::routeIs('admin.projects*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md">
                            <i class="fas fa-project-diagram mr-3"></i>
                            Proyectos
                        </a>
                        <a href="{{ route('admin.testimonials') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ Request::routeIs('admin.testimonials*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md">
                            <i class="fas fa-comment-dots mr-3"></i>
                            Testimonios
                        </a>
                        <a href="{{ route('admin.team') }}" class="flex items-center px-4 py-2 text-sm font-medium {{ Request::routeIs('admin.team*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md">
                            <i class="fas fa-users mr-3"></i>
                            Equipo
                        </a>
                        <div class="pt-4 mt-4 border-t border-gray-700">
                            <a href="{{ route('home') }}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md" target="_blank">
                                <i class="fas fa-globe mr-3"></i>
                                Ver sitio
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center px-4 py-2 mt-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md w-full text-left">
                                    <i class="fas fa-sign-out-alt mr-3"></i>
                                    Cerrar sesión
                                </button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- Content area -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <header class="bg-white shadow-sm">
                <div class="px-4 py-4 sm:px-6 flex justify-between items-center">
                    <h1 class="text-lg font-semibold text-gray-900">@yield('header', 'Dashboard')</h1>
                    <button class="md:hidden text-gray-600 focus:outline-none" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </header>
            
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                @if(session('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded" role="alert">
                        <p>{{ session('error') }}</p>
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
    
    <script>
        // Mobile sidebar toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.md\\:flex-shrink-0').classList.toggle('hidden');
        });
    </script>
    
    @yield('scripts')
</body>
</html>