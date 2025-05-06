@extends('layouts.app')

@section('title', 'Inicio - Desarrollo de Software Potenciado por IA')

@section('hero')
<!-- Hero Content -->
<div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between mt-8">
    <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
            Desarrollo de <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Software Inteligente</span> para el mundo moderno
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8">
            Transformamos ideas en soluciones tecnológicas avanzadas, impulsadas por Inteligencia Artificial y desarrolladas con Laravel
        </p>
        <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4">
            <a href="{{ route('project.start') }}" class="accent-gradient hover:opacity-90 text-white font-bold py-3 px-8 rounded-lg transition transform hover:scale-105">
                Iniciar proyecto
            </a>
            <a href="{{ route('services') }}" class="bg-gray-800 border border-gray-700 hover:bg-gray-700 text-white font-bold py-3 px-8 rounded-lg transition">
                Explorar servicios
            </a>
        </div>
    </div>
    <div class="md:w-1/2 mt-12 md:mt-0 floating">
        <div class="relative">
            <div class="absolute inset-0 bg-blue-500 opacity-20 rounded-full blur-3xl"></div>
            <img src="{{ asset('images/hero-image.png') }}" alt="DendrIA Tecnología" class="mx-auto relative z-10">
        </div>
    </div>
</div>

<!-- Stats -->
<div class="container mx-auto mt-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="glass-card rounded-xl p-6 text-center">
            <h3 class="text-4xl font-bold text-blue-400 mb-2">98%</h3>
            <p class="text-gray-300">Satisfacción de clientes</p>
        </div>
        <div class="glass-card rounded-xl p-6 text-center">
            <h3 class="text-4xl font-bold text-blue-400 mb-2">+120</h3>
            <p class="text-gray-300">Proyectos completados</p>
        </div>
        <div class="glass-card rounded-xl p-6 text-center">
            <h3 class="text-4xl font-bold text-blue-400 mb-2">+50%</h3>
            <p class="text-gray-300">Aumento en eficiencia</p>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Servicios -->
<section id="servicios" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Nuestros Servicios</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Soluciones tecnológicas a medida que combinan la potencia de Laravel con la innovación de la Inteligencia Artificial</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-900 rounded-xl p-8 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-code text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Desarrollo Web Personalizado</h3>
                <p class="text-gray-400 mb-4">Creamos aplicaciones web escalables y seguras utilizando Laravel, optimizadas para rendimiento y experiencia de usuario.</p>
                <ul class="text-gray-400 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Aplicaciones SPA y MPA</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> APIs RESTful</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Integraciones con servicios externos</li>
                </ul>
            </div>

            <div class="bg-gray-900 rounded-xl p-8 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-robot text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Soluciones de IA</h3>
                <p class="text-gray-400 mb-4">Implementamos sistemas inteligentes que potencian tu negocio con análisis de datos, automatización y predicción.</p>
                <ul class="text-gray-400 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Chatbots inteligentes</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Análisis predictivo</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Procesamiento de lenguaje natural</li>
                </ul>
            </div>

            <div class="bg-gray-900 rounded-xl p-8 shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Aplicaciones Móviles</h3>
                <p class="text-gray-400 mb-4">Desarrollamos aplicaciones móviles conectadas a backends en Laravel para una experiencia integral.</p>
                <ul class="text-gray-400 space-y-2">
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Apps nativas e híbridas</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Integración con backend en Laravel</li>
                    <li class="flex items-center"><i class="fas fa-check text-blue-400 mr-2"></i> Diseño UX/UI optimizado</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Por qué elegir Laravel -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">¿Por qué desarrollamos con Laravel?</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Laravel nos permite crear aplicaciones robustas, seguras y escalables para todo tipo de proyectos</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="md:pr-10">
                <img src="{{ asset('images/laravel-development.png') }}" alt="Desarrollo con Laravel" class="rounded-xl shadow-lg">
            </div>
            <div>
                <div class="space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Seguridad integrada</h4>
                            <p class="mt-2 text-gray-400">Laravel ofrece protección contra vulnerabilidades comunes como XSS y ataques de inyección SQL, garantizando la seguridad de tus datos.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Rendimiento optimizado</h4>
                            <p class="mt-2 text-gray-400">Desarrollo de aplicaciones y webs elegantes entregadas en alta velocidad gracias a la limpieza en el código.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Escalabilidad</h4>
                            <p class="mt-2 text-gray-400">Laravel está diseñado para soportar aplicaciones de cualquier tamaño, desde pequeños proyectos hasta grandes sistemas empresariales.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-cogs"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Integración con IA</h4>
                            <p class="mt-2 text-gray-400">Laravel, con su flexibilidad y escalabilidad, es la plataforma ideal para llevar tus proyectos al siguiente nivel con inteligencia artificial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-2/3 lg:pr-10 mb-10 lg:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para transformar tu negocio con tecnología inteligente?</h2>
                <p class="text-xl text-blue-100">Desde aplicaciones web personalizadas hasta soluciones impulsadas por IA, estamos aquí para llevar tu visión al siguiente nivel.</p>
            </div>
            <div>
                <a href="{{ route('project.start') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    Comenzar proyecto
                </a>
            </div>
        </div>
    </div>
</section>
@endsection