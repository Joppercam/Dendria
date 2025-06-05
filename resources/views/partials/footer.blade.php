<footer class="bg-gray-800 py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 mb-8 md:mb-0">
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <i class="fas fa-brain text-sm mr-2 text-blue-400"></i>
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Dendr</span><span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-amber-500">IA</span>
                </h3>
                <p class="text-gray-400 mb-6">Soluciones de software inteligentes para el mundo moderno.</p>
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/company/dendria" target="_blank" class="text-gray-400 hover:text-blue-400">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/dendria_cl" target="_blank" class="text-gray-400 hover:text-blue-400">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com/dendria.cl" target="_blank" class="text-gray-400 hover:text-blue-400">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://github.com/dendria" target="_blank" class="text-gray-400 hover:text-blue-400">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
            
            <div class="w-full md:w-1/4 mb-8 md:mb-0">
                <h4 class="font-bold mb-6">Empresa</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-blue-400">Sobre nosotros</a></li>
                    <li><a href="{{ route('case-studies') }}" class="text-gray-400 hover:text-blue-400">Casos de Éxito</a></li>
                    <li><a href="{{ route('testimonials') }}" class="text-gray-400 hover:text-blue-400">Testimonios</a></li>
                    <li><a href="{{ route('team') }}" class="text-gray-400 hover:text-blue-400">Equipo</a></li>
                </ul>
            </div>
            
            <div class="w-full md:w-1/4 mb-8 md:mb-0">
                <h4 class="font-bold mb-6">Servicios</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('services') }}#web" class="text-gray-400 hover:text-blue-400">Desarrollo Web</a></li>
                    <li><a href="{{ route('services') }}#ai" class="text-gray-400 hover:text-blue-400">Soluciones de IA</a></li>
                    <li><a href="{{ route('services') }}#mobile" class="text-gray-400 hover:text-blue-400">Desarrollo Móvil</a></li>
                    <li><a href="{{ route('services') }}#consulting" class="text-gray-400 hover:text-blue-400">Consultoría Tecnológica</a></li>
                    <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-blue-400">Productos</a></li>
                </ul>
            </div>

            
            <div class="w-full md:w-1/4">
                <h4 class="font-bold mb-6">Legal</h4>
                <ul class="space-y-3">
                    <li><a href="{{ route('terms') }}" class="text-gray-400 hover:text-blue-400">Términos y condiciones</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-gray-400 hover:text-blue-400">Política de privacidad</a></li>
                    <li><a href="{{ route('cookies') }}" class="text-gray-400 hover:text-blue-400">Política de cookies</a></li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-10 pt-8 text-center">
            <p class="text-gray-400">© {{ date('Y') }} <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Dendr</span><span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-amber-500">IA</span>. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>