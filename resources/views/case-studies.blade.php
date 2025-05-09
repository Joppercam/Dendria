@extends('layouts.app')

@section('title', 'Casos de Éxito - Proyectos de Desarrollo de Software')

@section('hero')
<!-- Hero Section -->
<div class="container mx-auto px-6 py-16">
    <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Casos de Éxito</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Proyectos transformadores que han ayudado a nuestros clientes a crecer y destacarse en su industria.
        </p>
    </div>
</div>
@endsection

@section('content')
<!-- Caso de Éxito Principal: ConocIA -->
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl">
            <div class="md:flex">
                <!-- Imagen del Proyecto - Visualización Dinámica -->
                <div class="md:w-1/2 h-80 md:h-auto relative overflow-hidden">
                    <!-- Imagen de fondo dinámica específica para ConocIA -->
                    <div class="absolute inset-0">
                        <div class="w-full h-full relative overflow-hidden">
                            <!-- Imagen de fondo dinámica de IA/Neural Network -->
                            <img
                                src="{{ asset('images/neural-network.jpg') }}"
                                alt="Red neural IA"
                                class="w-full h-full object-cover opacity-80 mix-blend-screen"
                            >

                            <!-- Capa de color para mejorar contraste -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/50 via-blue-800/30 to-blue-900/50"></div>

                            <!-- Efecto de brillo central -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-blue-500 opacity-30 rounded-full blur-3xl animate-pulse"></div>
                        </div>
                    </div>

                    <!-- Logo generado con CSS con efecto de iluminación -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 p-8">
                        <div class="relative mb-4">
                            <div class="absolute inset-0 -m-4 bg-blue-500 opacity-20 blur-3xl rounded-full animate-pulse"></div>

                            <!-- Logo text de ConocIA -->
                            <div class="relative z-10 floating">
                                <h2 class="text-3xl md:text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-cyan-200 tracking-tight">
                                    Conoc<span class="text-white">IA</span>
                                </h2>
                            </div>
                        </div>

                        <!-- Texto descriptivo con efecto de brillo -->
                        <div class="text-center relative mt-4">
                            <div class="text-lg md:text-xl font-medium text-white mb-2 glass-effect px-4 py-2 rounded-lg bg-blue-900/30 backdrop-blur-sm border border-blue-500/20">
                                Portal IA de Noticias
                            </div>
                            <div class="text-sm text-blue-100/80 max-w-xs">
                                "El futuro del conocimiento es artificialmente inteligente"
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Información del Proyecto -->
                <div class="md:w-1/2 p-8 md:p-10">
                    <div class="mb-6">
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-900 last:mr-0 mr-1">
                            Portal de Noticias
                        </span>
                        <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-400 bg-green-900 last:mr-0 mr-1">
                            Inteligencia Artificial
                        </span>
                    </div>
                    <h2 class="text-3xl font-bold mb-4">ConocIA</h2>
                    <p class="text-gray-300 mb-6">
                        Portal especializado en noticias, investigaciones y análisis sobre inteligencia artificial, tecnología e innovación.
                    </p>
                    <a href="https://www.conocia.cl" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition mr-4">
                        Visitar sitio
                    </a>
                    <a href="#conocia-details" class="inline-block text-blue-400 hover:text-blue-300 font-bold py-2 transition">
                        Ver detalles
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detalles del Caso ConocIA -->
<section id="conocia-details" class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold mb-4">ConocIA - Portal de Noticias de IA</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Una plataforma completa de contenido especializado en inteligencia artificial
            </p>
        </div>
        
        <!-- Desafío y Solución -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <div>
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-blue-900 flex items-center justify-center mr-4">
                        <i class="fas fa-mountain text-blue-400"></i>
                    </div>
                    El Desafío
                </h3>
                <div class="space-y-4 text-gray-300">
                    <p>
                        El cliente necesitaba una plataforma especializada para difundir contenido de alta calidad sobre inteligencia artificial, capaz de presentar diversos formatos (texto, audio, video) y ofrecer una experiencia única a los lectores.
                    </p>
                    <p>
                        El desafío principal era crear un portal de noticias con alto rendimiento que integrara tecnologías de IA no solo como tema, sino como parte de la generación de contenido, especialmente para la producción de podcasts diarios.
                    </p>
                    <p>
                        Adicionalmente, se requería un sistema de categorización inteligente y un diseño que reflejara la naturaleza tecnológica e innovadora del contenido.
                    </p>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold mb-6 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-green-900 flex items-center justify-center mr-4">
                        <i class="fas fa-lightbulb text-green-400"></i>
                    </div>
                    La Solución
                </h3>
                <div class="space-y-4 text-gray-300">
                    <p>
                        Desarrollamos un portal completo utilizando tecnologías modernas que permitió la gestión eficiente de contenidos en múltiples formatos, con un enfoque especial en la experiencia del usuario.
                    </p>
                    <p>
                        Implementamos un sistema de generación automatizada de podcasts utilizando tecnologías de IA para transformar artículos escritos en audio de alta calidad, con un reproductor personalizado que ofrece controles avanzados.
                    </p>
                    <p>
                        Creamos un diseño responsivo con una paleta de colores azules y gradientes que refleja la identidad de la marca, optimizado para diferentes dispositivos y velocidades de conexión.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Características Destacadas con Fondo de Gradiente -->
        <div class="mb-16 relative">
            <!-- Fondo de gradiente en lugar de imagen -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/10 via-transparent to-blue-800/10"></div>

            <div class="relative z-10">
                <h3 class="text-2xl font-bold mb-10 text-center">Características Destacadas</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-900/90 backdrop-blur-sm p-6 rounded-xl hover:shadow-lg hover:shadow-blue-900/20 transition transform hover:-translate-y-1 border border-blue-500/10">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-blue-900 rounded-xl flex items-center justify-center mb-6 relative overflow-hidden">
                            <div class="absolute inset-0 bg-blue-500 opacity-20 animate-pulse"></div>
                            <i class="fas fa-robot text-2xl text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Podcast por IA</h4>
                        <p class="text-gray-400">
                            Sistema de generación automatizada de podcasts a partir de artículos escritos, con voces naturales y controles de reproducción avanzados.
                        </p>
                    </div>

                    <div class="bg-gray-900/90 backdrop-blur-sm p-6 rounded-xl hover:shadow-lg hover:shadow-blue-900/20 transition transform hover:-translate-y-1 border border-blue-500/10">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 relative overflow-hidden">
                            <div class="absolute inset-0 bg-blue-500 opacity-20 animate-pulse" style="animation-delay: 0.5s"></div>
                            <i class="fas fa-newspaper text-2xl text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">CMS Especializado</h4>
                        <p class="text-gray-400">
                            Sistema de gestión de contenido personalizado para diferentes formatos, con categorización avanzada y opciones de personalización.
                        </p>
                    </div>

                    <div class="bg-gray-900/90 backdrop-blur-sm p-6 rounded-xl hover:shadow-lg hover:shadow-blue-900/20 transition transform hover:-translate-y-1 border border-blue-500/10">
                        <div class="w-14 h-14 bg-gradient-to-br from-cyan-600 to-blue-600 rounded-xl flex items-center justify-center mb-6 relative overflow-hidden">
                            <div class="absolute inset-0 bg-blue-500 opacity-20 animate-pulse" style="animation-delay: 1s"></div>
                            <i class="fas fa-envelope text-2xl text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Newsletter Personalizable</h4>
                        <p class="text-gray-400">
                            Sistema de suscripción con segmentación por categorías, permitiendo a los lectores recibir solo el contenido que les interesa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Resultados -->
        <div class="bg-gray-900 p-8 md:p-10 rounded-xl">
            <h3 class="text-2xl font-bold mb-8 text-center">Resultados</h3>
            
            <!-- Visualización dinámica de resultados -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="text-center relative">
                    <div class="absolute inset-0 bg-blue-500 opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 0s"></div>
                    <div class="text-4xl font-bold text-blue-400 mb-2 relative z-10">+25K</div>
                    <p class="text-gray-400 relative z-10">Lectores mensuales</p>
                </div>
                <div class="text-center relative">
                    <div class="absolute inset-0 bg-blue-500 opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s"></div>
                    <div class="text-4xl font-bold text-blue-400 mb-2 relative z-10">15min</div>
                    <p class="text-gray-400 relative z-10">Tiempo promedio de lectura</p>
                </div>
                <div class="text-center relative">
                    <div class="absolute inset-0 bg-blue-500 opacity-5 rounded-full blur-2xl animate-pulse" style="animation-delay: 2s"></div>
                    <div class="text-4xl font-bold text-blue-400 mb-2 relative z-10">+5K</div>
                    <p class="text-gray-400 relative z-10">Suscriptores al newsletter</p>
                </div>
            </div>
            <div class="text-gray-300">
                <p class="text-center mb-6">
                    ConocIA se ha posicionado como un referente en el ámbito de la información sobre inteligencia artificial en español, atrayendo a un público profesional y especializado.
                </p>
                <div class="flex justify-center">
                    <a href="https://www.conocia.cl" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                        Visitar ConocIA
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA para más proyectos -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-blue-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">¿Listo para crear tu propio caso de éxito?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
            Nuestro equipo está preparado para ayudarte a convertir tu idea en una solución tecnológica innovadora.
        </p>
        <div class="flex justify-center">
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                Iniciar proyecto
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Simple animation for floating elements
    document.addEventListener('DOMContentLoaded', function() {
        // Already handled via CSS animations
    });
</script>
@endsection