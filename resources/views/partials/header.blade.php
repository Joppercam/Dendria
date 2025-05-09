<header class="relative">
    <div class="gradient-bg compact-header">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-3xl font-bold group flex items-center">
                    <div class="flex items-center">
                        <div class="mr-2 text-blue-400 group-hover:text-blue-300 transition-all duration-300">
                            <i class="fas fa-brain text-sm"></i>
                        </div>
                        <div>
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300 group-hover:from-blue-300 group-hover:to-cyan-200 transition-all duration-300">Dendr</span><span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-amber-500 group-hover:from-yellow-300 group-hover:to-amber-400 transition-all duration-300">IA</span>
                            <div class="h-0.5 w-0 bg-gradient-to-r from-blue-400 to-amber-500 group-hover:w-full transition-all duration-300"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('services') }}" class="hover:text-blue-400 transition">Servicios</a>
                <a href="{{ route('products') }}" class="hover:text-blue-400 transition">Productos</a>
                <a href="{{ route('case-studies') }}" class="hover:text-blue-400 transition">Casos de Éxito</a>
                <a href="{{ route('testimonials') }}" class="hover:text-blue-400 transition">Testimonios</a>
                <a href="{{ route('team') }}" class="hover:text-blue-400 transition">Equipo</a>
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