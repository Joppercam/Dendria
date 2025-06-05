<header class="relative">
    <div class="gradient-bg compact-header">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center relative">
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
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center">
                <a href="{{ route('services') }}" class="hover:text-blue-400 transition">Servicios</a>
                <a href="{{ route('products') }}" class="hover:text-blue-400 transition">Productos</a>
                <a href="{{ route('case-studies') }}" class="hover:text-blue-400 transition">Casos de Éxito</a>
                <a href="{{ route('testimonials') }}" class="hover:text-blue-400 transition">Testimonios</a>
                <a href="{{ route('team') }}" class="hover:text-blue-400 transition">Equipo</a>
                <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition">Contacto</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none z-50 relative">
                    <i id="menu-icon" class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden fixed inset-0 z-40 md:hidden">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm" id="mobile-menu-backdrop"></div>
            
            <!-- Menu Panel -->
            <div class="fixed top-0 right-0 w-80 h-full bg-gray-900 shadow-xl transform transition-transform duration-300 ease-in-out">
                <div class="p-6">
                    <!-- Header del menú móvil -->
                    <div class="flex justify-between items-center mb-8 pt-4">
                        <div class="text-2xl font-bold">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Dendr</span><span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-amber-500">IA</span>
                        </div>
                        <button id="mobile-menu-close" class="text-gray-400 hover:text-white transition">
                            <i class="fas fa-times text-2xl"></i>
                        </button>
                    </div>
                    
                    <!-- Enlaces del menú -->
                    <nav class="space-y-4">
                        <a href="{{ route('services') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-800 transition text-lg font-medium border-b border-gray-800">
                            <i class="fas fa-cogs text-blue-400 mr-3"></i>
                            Servicios
                        </a>
                        <a href="{{ route('products') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-800 transition text-lg font-medium border-b border-gray-800">
                            <i class="fas fa-cube text-blue-400 mr-3"></i>
                            Productos
                        </a>
                        <a href="{{ route('case-studies') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-800 transition text-lg font-medium border-b border-gray-800">
                            <i class="fas fa-trophy text-blue-400 mr-3"></i>
                            Casos de Éxito
                        </a>
                        <a href="{{ route('testimonials') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-800 transition text-lg font-medium border-b border-gray-800">
                            <i class="fas fa-quote-left text-blue-400 mr-3"></i>
                            Testimonios
                        </a>
                        <a href="{{ route('team') }}" class="block py-3 px-4 rounded-lg hover:bg-gray-800 transition text-lg font-medium border-b border-gray-800">
                            <i class="fas fa-users text-blue-400 mr-3"></i>
                            Equipo
                        </a>
                        <a href="{{ route('contact') }}" class="block bg-blue-600 hover:bg-blue-700 py-4 px-6 rounded-lg transition text-lg font-medium text-center mt-6">
                            <i class="fas fa-envelope text-white mr-3"></i>
                            Contacto
                        </a>
                    </nav>
                    
                    <!-- Información adicional -->
                    <div class="mt-8 pt-6 border-t border-gray-800">
                        <div class="text-sm text-gray-400 text-center">
                            <p class="mb-2">Desarrollo de software</p>
                            <p>potenciado por IA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('hero')
    </div>
</header>