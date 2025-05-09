<header class="relative">
    <div class="gradient-bg compact-header">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">
                    DendrIA
                </a>
            </div>
            <div class="hidden md:flex space-x-10 items-center">
                <a href="{{ route('services') }}" class="hover:text-blue-400 transition">Servicios</a>
                <a href="{{ route('products') }}" class="hover:text-blue-400 transition">Productos</a>
                <a href="{{ route('case-studies') }}" class="hover:text-blue-400 transition">Casos de Éxito</a>
                <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition">Contacto</a>
            </div>
            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>

        @yield('hero')
    </div>
</header>