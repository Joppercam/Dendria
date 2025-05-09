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
                <!-- Imagen del Proyecto -->
                <div class="md:w-1/2 h-80 md:h-auto relative overflow-hidden">
                    <div class="absolute inset-0 bg-blue-500 opacity-10"></div>
                    <img 
                        src="{{ asset('images/conocia-case-study.jpg') }}" 
                        alt="ConocIA Portal" 
                        class="w-full h-full object-cover"
                        onerror="this.onerror=null; this.src='https://www.conocia.cl/wp-content/uploads/2023/03/logo.png';"
                    >
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
        
        <!-- Características Destacadas -->
        <div class="mb-16">
            <h3 class="text-2xl font-bold mb-10 text-center">Características Destacadas</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900 p-6 rounded-xl">
                    <div class="w-14 h-14 bg-blue-900/40 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-robot text-2xl text-blue-400"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Podcast por IA</h4>
                    <p class="text-gray-400">
                        Sistema de generación automatizada de podcasts a partir de artículos escritos, con voces naturales y controles de reproducción avanzados.
                    </p>
                </div>
                
                <div class="bg-gray-900 p-6 rounded-xl">
                    <div class="w-14 h-14 bg-blue-900/40 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-newspaper text-2xl text-blue-400"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">CMS Especializado</h4>
                    <p class="text-gray-400">
                        Sistema de gestión de contenido personalizado para diferentes formatos, con categorización avanzada y opciones de personalización.
                    </p>
                </div>
                
                <div class="bg-gray-900 p-6 rounded-xl">
                    <div class="w-14 h-14 bg-blue-900/40 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-envelope text-2xl text-blue-400"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Newsletter Personalizable</h4>
                    <p class="text-gray-400">
                        Sistema de suscripción con segmentación por categorías, permitiendo a los lectores recibir solo el contenido que les interesa.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Resultados -->
        <div class="bg-gray-900 p-8 md:p-10 rounded-xl">
            <h3 class="text-2xl font-bold mb-8 text-center">Resultados</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-400 mb-2">+25K</div>
                    <p class="text-gray-400">Lectores mensuales</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-400 mb-2">15min</div>
                    <p class="text-gray-400">Tiempo promedio de lectura</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-400 mb-2">+5K</div>
                    <p class="text-gray-400">Suscriptores al newsletter</p>
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