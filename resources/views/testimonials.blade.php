@extends('layouts.app')

@section('title', 'Testimonios - DendrIA')

@section('meta_description', 'Descubre lo que nuestros clientes dicen sobre DendrIA. Testimonios reales de empresas que han transformado su negocio con nuestras soluciones de desarrollo web e IA.')

@section('meta_keywords', 'testimonios, opiniones clientes, casos de éxito, desarrollo web, inteligencia artificial, satisfacción del cliente, proyectos tecnológicos, empresas Chile, Laravel, soluciones digitales')

@section('styles')
<style>
    /* Animación del encabezado igual que productos y servicios */
    .testimonials-header {
        position: relative;
        overflow: hidden;
    }

    .testimonials-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, rgba(0, 0, 0, 0) 60%);
        animation: rotate 20s linear infinite;
        z-index: 0;
    }

    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    /* Estilos para el carrusel */
    .testimonial-carousel {
        position: relative;
        overflow: hidden;
        padding-bottom: 60px;
    }

    .testimonial-slide {
        opacity: 0;
        transition: all 0.5s ease;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        transform: translateX(100%);
    }

    .testimonial-slide.active {
        opacity: 1;
        transform: translateX(0);
        position: relative;
    }

    .testimonial-slide.previous {
        transform: translateX(-100%);
    }

    .carousel-indicators {
        display: flex;
        justify-content: center;
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
    }

    .carousel-indicator {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        margin: 0 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .carousel-indicator.active {
        background-color: rgba(59, 130, 246, 0.8);
    }

    .carousel-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 44px;
        height: 44px;
        background-color: rgba(59, 130, 246, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s;
    }

    .carousel-arrow:hover {
        background-color: rgba(59, 130, 246, 0.4);
    }

    .carousel-arrow.prev {
        left: 20px;
    }

    .carousel-arrow.next {
        right: 20px;
    }

    /* Estilos para las animaciones de scroll y hover */
    .industry-filter {
        transition: all 0.3s ease;
    }

    .industry-filter:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.2);
    }

    .industry-filter.active {
        position: relative;
    }

    .industry-filter.active::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 25%;
        width: 50%;
        height: 2px;
        background: linear-gradient(to right, transparent, #3b82f6, transparent);
        border-radius: 2px;
    }

    /* Animación para "Ver más" */
    .show-more {
        position: relative;
        transition: all 0.3s ease;
    }

    .show-more::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 1px;
        background-color: #3b82f6;
        transition: width 0.3s ease;
    }

    .show-more:hover::after {
        width: 100%;
    }

    /* Animación de carga */
    @keyframes shimmer {
        0% {
            background-position: -1000px 0;
        }
        100% {
            background-position: 1000px 0;
        }
    }

    .loading::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to right, rgba(59, 130, 246, 0), rgba(59, 130, 246, 0.2), rgba(59, 130, 246, 0));
        background-size: 1000px 100%;
        animation: shimmer 2s infinite linear;
        z-index: -1;
    }
</style>
@endsection

@section('content')
<div class="gradient-bg py-12 testimonials-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 relative z-10">Testimonios</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10 mb-8">
                Lo que nuestros clientes dicen sobre trabajar con DendrIA
            </p>
        </div>
    </div>
</div>

<!-- Carrusel de Testimonios Destacados -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-gray-900/80 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute top-0 left-0 right-0 h-40 bg-gradient-to-b from-blue-600/5 to-transparent"></div>
    <div class="absolute -left-32 top-1/4 w-64 h-64 bg-blue-600/10 rounded-full filter blur-3xl"></div>
    <div class="absolute -right-32 top-2/3 w-64 h-64 bg-blue-900/10 rounded-full filter blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white relative inline-block">
                Lo Que Dicen Nuestros Clientes
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Descubre por qué las empresas confían en DendrIA para transformar su negocio con tecnología inteligente
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="testimonial-carousel" id="testimonialCarousel">
                <!-- Flechas de navegación mejoradas -->
                <div class="carousel-arrow prev" id="prevButton">
                    <i class="fas fa-chevron-left text-white"></i>
                </div>
                <div class="carousel-arrow next" id="nextButton">
                    <i class="fas fa-chevron-right text-white"></i>
                </div>

                @forelse($featuredTestimonials as $index => $testimonial)
                <div class="testimonial-slide {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
                    <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-10 shadow-xl relative border border-blue-500/20">
                        <!-- Elemento decorativo superior -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

                        <!-- Comillas decorativas con mejor estilo -->
                        <div class="absolute -top-6 -left-6 text-7xl text-blue-500 opacity-20 transform -rotate-12">"</div>
                        <div class="absolute -bottom-6 -right-6 text-7xl text-blue-500 opacity-20 transform rotate-12">"</div>

                        <!-- Badge de "Testimonio Destacado" -->
                        <div class="absolute -top-3 right-10">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                                <i class="fas fa-star mr-1 text-yellow-300"></i> DESTACADO
                            </span>
                        </div>

                        <div class="relative z-10">
                            <!-- Logo de la empresa si está disponible -->
                            @if(isset($testimonial->company_logo))
                            <div class="mb-8 flex justify-center">
                                <img src="{{ Storage::url($testimonial->company_logo) }}" alt="{{ $testimonial->company }}" class="h-10 opacity-80">
                            </div>
                            @endif

                            <!-- Contenido del testimonio con mejor formato -->
                            <p class="text-xl md:text-2xl text-gray-100 mb-10 italic leading-relaxed">
                                "{{ $testimonial->content }}"
                            </p>

                            <!-- Información del cliente y calificación -->
                            <div class="flex flex-col md:flex-row justify-between items-center">
                                <div class="flex items-center mb-6 md:mb-0">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-5 overflow-hidden border-2 border-blue-500/30 shadow-lg p-0.5">
                                        @if($testimonial->avatar)
                                            <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-full h-full object-cover rounded-full">
                                        @else
                                            <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                                <i class="fas fa-user text-blue-400 text-2xl"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-blue-300">{{ $testimonial->client_name }}</h4>
                                        <p class="text-gray-300">{{ $testimonial->client_position }}</p>
                                        <p class="text-blue-400 font-medium">{{ $testimonial->company }}</p>
                                    </div>
                                </div>

                                <div class="flex bg-gray-900/50 px-4 py-2 rounded-full border border-blue-500/20">
                                    @for($i = 0; $i < $testimonial->rating; $i++)
                                        <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    @endfor
                                    @for($i = $testimonial->rating; $i < 5; $i++)
                                        <i class="fas fa-star text-gray-600 mx-0.5"></i>
                                    @endfor
                                </div>
                            </div>

                            <!-- Indicador de resultados si está disponible -->
                            @if(isset($testimonial->results))
                            <div class="mt-6 bg-blue-900/20 rounded-lg p-4 border border-blue-500/20">
                                <h5 class="text-blue-300 text-sm uppercase font-bold mb-2 flex items-center">
                                    <i class="fas fa-chart-line mr-2"></i> Resultados obtenidos
                                </h5>
                                <p class="text-gray-300">{{ $testimonial->results }}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <!-- Testimoniales predeterminados mejorados -->
                <!-- Testimonial predeterminado 1 -->
                <div class="testimonial-slide active" data-index="0">
                    <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-10 shadow-xl relative border border-blue-500/20">
                        <!-- Elemento decorativo superior -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

                        <!-- Comillas decorativas -->
                        <div class="absolute -top-6 -left-6 text-7xl text-blue-500 opacity-20 transform -rotate-12">"</div>
                        <div class="absolute -bottom-6 -right-6 text-7xl text-blue-500 opacity-20 transform rotate-12">"</div>

                        <!-- Badge de "Testimonio Destacado" -->
                        <div class="absolute -top-3 right-10">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                                <i class="fas fa-star mr-1 text-yellow-300"></i> DESTACADO
                            </span>
                        </div>

                        <div class="relative z-10">
                            <!-- Logo representativo -->
                            <div class="mb-8 flex justify-center">
                                <div class="h-10 bg-blue-900/30 px-4 py-2 rounded-lg flex items-center text-blue-300 font-bold">
                                    <i class="fas fa-chart-bar mr-2"></i> InsightMind
                                </div>
                            </div>

                            <p class="text-xl md:text-2xl text-gray-100 mb-10 italic leading-relaxed">
                                "La implementación del sistema de análisis predictivo desarrollado por DendrIA transformó por completo nuestra capacidad para entender el comportamiento de nuestros clientes. Desde que lanzamos la plataforma, hemos visto un aumento del 45% en la retención de clientes y un 32% en las ventas cruzadas."
                            </p>

                            <div class="flex flex-col md:flex-row justify-between items-center">
                                <div class="flex items-center mb-6 md:mb-0">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-5 overflow-hidden border-2 border-blue-500/30 shadow-lg p-0.5">
                                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                            <i class="fas fa-user text-blue-400 text-2xl"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-blue-300">Roberto González</h4>
                                        <p class="text-gray-300">CEO</p>
                                        <p class="text-blue-400 font-medium">InsightMind</p>
                                    </div>
                                </div>

                                <div class="flex bg-gray-900/50 px-4 py-2 rounded-full border border-blue-500/20">
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                </div>
                            </div>

                            <!-- Resultados destacados -->
                            <div class="mt-6 bg-blue-900/20 rounded-lg p-4 border border-blue-500/20">
                                <h5 class="text-blue-300 text-sm uppercase font-bold mb-2 flex items-center">
                                    <i class="fas fa-chart-line mr-2"></i> Resultados obtenidos
                                </h5>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">+45%</div>
                                        <div class="text-xs text-gray-400">Retención de clientes</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">+32%</div>
                                        <div class="text-xs text-gray-400">Ventas cruzadas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial predeterminado 2 -->
                <div class="testimonial-slide" data-index="1">
                    <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-10 shadow-xl relative border border-blue-500/20">
                        <!-- Elemento decorativo superior -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

                        <!-- Comillas decorativas -->
                        <div class="absolute -top-6 -left-6 text-7xl text-blue-500 opacity-20 transform -rotate-12">"</div>
                        <div class="absolute -bottom-6 -right-6 text-7xl text-blue-500 opacity-20 transform rotate-12">"</div>

                        <!-- Badge de "Testimonio Destacado" -->
                        <div class="absolute -top-3 right-10">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                                <i class="fas fa-star mr-1 text-yellow-300"></i> DESTACADO
                            </span>
                        </div>

                        <div class="relative z-10">
                            <!-- Logo representativo -->
                            <div class="mb-8 flex justify-center">
                                <div class="h-10 bg-blue-900/30 px-4 py-2 rounded-lg flex items-center text-blue-300 font-bold">
                                    <i class="fas fa-shopping-cart mr-2"></i> PymeCommerce
                                </div>
                            </div>

                            <p class="text-xl md:text-2xl text-gray-100 mb-10 italic leading-relaxed">
                                "Después de trabajar con varios proveedores de tecnología, finalmente encontramos en DendrIA un socio que realmente entiende las necesidades de las pequeñas y medianas empresas. Su plataforma de comercio electrónico con IA integrada nos permitió competir con grandes marcas, ofreciendo una experiencia personalizada a cada cliente."
                            </p>

                            <div class="flex flex-col md:flex-row justify-between items-center">
                                <div class="flex items-center mb-6 md:mb-0">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-5 overflow-hidden border-2 border-blue-500/30 shadow-lg p-0.5">
                                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                            <i class="fas fa-user text-blue-400 text-2xl"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-blue-300">María Jiménez</h4>
                                        <p class="text-gray-300">COO</p>
                                        <p class="text-blue-400 font-medium">PymeCommerce</p>
                                    </div>
                                </div>

                                <div class="flex bg-gray-900/50 px-4 py-2 rounded-full border border-blue-500/20">
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                </div>
                            </div>

                            <!-- Resultados destacados -->
                            <div class="mt-6 bg-blue-900/20 rounded-lg p-4 border border-blue-500/20">
                                <h5 class="text-blue-300 text-sm uppercase font-bold mb-2 flex items-center">
                                    <i class="fas fa-chart-line mr-2"></i> Resultados obtenidos
                                </h5>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">6 meses</div>
                                        <div class="text-xs text-gray-400">ROI</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">+200%</div>
                                        <div class="text-xs text-gray-400">Engagement</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial predeterminado 3 -->
                <div class="testimonial-slide" data-index="2">
                    <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-10 shadow-xl relative border border-blue-500/20">
                        <!-- Elemento decorativo superior -->
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

                        <!-- Comillas decorativas -->
                        <div class="absolute -top-6 -left-6 text-7xl text-blue-500 opacity-20 transform -rotate-12">"</div>
                        <div class="absolute -bottom-6 -right-6 text-7xl text-blue-500 opacity-20 transform rotate-12">"</div>

                        <!-- Badge de "Testimonio Destacado" -->
                        <div class="absolute -top-3 right-10">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                                <i class="fas fa-star mr-1 text-yellow-300"></i> DESTACADO
                            </span>
                        </div>

                        <div class="relative z-10">
                            <!-- Logo representativo -->
                            <div class="mb-8 flex justify-center">
                                <div class="h-10 bg-blue-900/30 px-4 py-2 rounded-lg flex items-center text-blue-300 font-bold">
                                    <i class="fas fa-headset mr-2"></i> TechSupport Inc.
                                </div>
                            </div>

                            <p class="text-xl md:text-2xl text-gray-100 mb-10 italic leading-relaxed">
                                "El chatbot impulsado por IA que implementaron en nuestro sitio ha reducido la carga de nuestro equipo de soporte en un 65%, mientras mejora la satisfacción del cliente. La capacidad de respuesta y personalización ha superado todas nuestras expectativas, y el ROI ha sido extraordinario."
                            </p>

                            <div class="flex flex-col md:flex-row justify-between items-center">
                                <div class="flex items-center mb-6 md:mb-0">
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-5 overflow-hidden border-2 border-blue-500/30 shadow-lg p-0.5">
                                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                            <i class="fas fa-user text-blue-400 text-2xl"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-blue-300">Carlos Vargas</h4>
                                        <p class="text-gray-300">Director de Atención al Cliente</p>
                                        <p class="text-blue-400 font-medium">TechSupport Inc.</p>
                                    </div>
                                </div>

                                <div class="flex bg-gray-900/50 px-4 py-2 rounded-full border border-blue-500/20">
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                                    <i class="fas fa-star-half-alt text-yellow-400 mx-0.5"></i>
                                </div>
                            </div>

                            <!-- Resultados destacados -->
                            <div class="mt-6 bg-blue-900/20 rounded-lg p-4 border border-blue-500/20">
                                <h5 class="text-blue-300 text-sm uppercase font-bold mb-2 flex items-center">
                                    <i class="fas fa-chart-line mr-2"></i> Resultados obtenidos
                                </h5>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">-65%</div>
                                        <div class="text-xs text-gray-400">Carga de soporte</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-blue-400">+40%</div>
                                        <div class="text-xs text-gray-400">Satisfacción cliente</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse

                <!-- Indicadores mejorados -->
                <div class="carousel-indicators mt-8">
                    @forelse($featuredTestimonials as $index => $testimonial)
                        <div class="carousel-indicator {{ $index === 0 ? 'active' : '' }} mx-1" data-slide-to="{{ $index }}"></div>
                    @empty
                        <div class="carousel-indicator active mx-1" data-slide-to="0"></div>
                        <div class="carousel-indicator mx-1" data-slide-to="1"></div>
                        <div class="carousel-indicator mx-1" data-slide-to="2"></div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de testimonios por industria -->
<section class="py-20 bg-gray-900 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute -right-64 top-20 w-96 h-96 bg-blue-600/5 rounded-full blur-3xl"></div>
    <div class="absolute -left-64 bottom-20 w-96 h-96 bg-blue-900/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto mb-6 rounded-full"></div>
            <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white">Impacto por Industria</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">
                Descubre cómo nuestras soluciones han impactado a empresas de diversos sectores
            </p>
        </div>

        <!-- Filtros por industria -->
        <div class="flex flex-wrap justify-center gap-3 mb-12" id="industryFilters">
            <button class="industry-filter active px-4 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition border border-blue-500/50 text-sm font-medium" data-industry="all">
                Todos
            </button>
            <button class="industry-filter px-4 py-2 rounded-full bg-blue-900/50 text-blue-300 hover:bg-blue-800/50 transition border border-blue-500/30 text-sm font-medium" data-industry="analytics">
                <i class="fas fa-chart-line mr-1"></i> Análisis de Datos
            </button>
            <button class="industry-filter px-4 py-2 rounded-full bg-blue-900/50 text-blue-300 hover:bg-blue-800/50 transition border border-blue-500/30 text-sm font-medium" data-industry="ecommerce">
                <i class="fas fa-shopping-cart mr-1"></i> E-commerce
            </button>
            <button class="industry-filter px-4 py-2 rounded-full bg-blue-900/50 text-blue-300 hover:bg-blue-800/50 transition border border-blue-500/30 text-sm font-medium" data-industry="customer">
                <i class="fas fa-headset mr-1"></i> Atención al Cliente
            </button>
        </div>
        <div id="filterResults" class="text-xs text-gray-400 mt-2 text-center mb-6">
            <span class="bg-blue-900/30 px-2 py-1 rounded-full text-blue-300 text-xs">
                Mostrando todos los testimonios
            </span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            @forelse($featuredTestimonials as $testimonial)
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-8 shadow-xl relative border border-blue-500/20 transform transition-all duration-300 hover:border-blue-500/40 hover:shadow-blue-900/5">
                <!-- Elemento decorativo superior -->
                <div class="absolute -top-2 -right-2 w-24 h-24 bg-blue-600/10 rounded-full blur-xl"></div>

                <!-- Comilla decorativa con mejor estilo -->
                <div class="absolute -top-4 -left-2 text-6xl text-blue-500 opacity-20 transform -rotate-12">"</div>

                <div class="relative z-10">
                    <!-- Información del cliente en un diseño más elegante -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-4 overflow-hidden border-2 border-blue-500/30 shadow-md p-0.5">
                                @if($testimonial->avatar)
                                    <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-full h-full object-cover rounded-full">
                                @else
                                    <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                        <i class="fas fa-user text-blue-400 text-xl"></i>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-blue-300">{{ $testimonial->client_name }}</h4>
                                <p class="text-gray-300 text-sm">{{ $testimonial->client_position }}</p>
                                <p class="text-blue-400 font-medium">{{ $testimonial->company }}</p>
                            </div>
                        </div>

                        <!-- Categoría/Industria tag -->
                        <div class="bg-blue-900/30 px-3 py-1 rounded-full border border-blue-500/30 text-xs text-blue-300 font-medium">
                            <i class="fas fa-tag mr-1"></i>
                            {{ $testimonial->industry ?? 'Tecnología' }}
                        </div>
                    </div>

                    <!-- Contenido del testimonio con mejor formato -->
                    <div class="relative mb-6">
                        <p class="text-gray-200 leading-relaxed italic">
                            "{{ $testimonial->content }}"
                        </p>
                    </div>

                    <!-- Footer con calificación y resultados -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pt-4 border-t border-blue-900/30">
                        <div class="flex mb-3 sm:mb-0">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                                <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            @endfor

                            @for($i = $testimonial->rating; $i < 5; $i++)
                                <i class="fas fa-star text-gray-600 mx-0.5"></i>
                            @endfor
                        </div>

                        @if(isset($testimonial->project_year))
                        <div class="text-sm text-blue-300">
                            <i class="far fa-calendar-alt mr-1"></i> {{ $testimonial->project_year ?? date('Y') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-8 shadow-xl relative border border-blue-500/20 transform transition-all duration-300 hover:border-blue-500/40 hover:shadow-blue-900/5">
                <!-- Elemento decorativo superior -->
                <div class="absolute -top-2 -right-2 w-24 h-24 bg-blue-600/10 rounded-full blur-xl"></div>

                <!-- Comilla decorativa con mejor estilo -->
                <div class="absolute -top-4 -left-2 text-6xl text-blue-500 opacity-20 transform -rotate-12">"</div>

                <div class="relative z-10">
                    <!-- Información del cliente en un diseño más elegante -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-4 overflow-hidden border-2 border-blue-500/30 shadow-md p-0.5">
                                <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                    <i class="fas fa-user text-blue-400 text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-blue-300">Roberto González</h4>
                                <p class="text-gray-300 text-sm">CEO</p>
                                <p class="text-blue-400 font-medium">InsightMind</p>
                            </div>
                        </div>

                        <!-- Categoría/Industria tag -->
                        <div class="bg-blue-900/30 px-3 py-1 rounded-full border border-blue-500/30 text-xs text-blue-300 font-medium">
                            <i class="fas fa-chart-line mr-1"></i> Análisis de Datos
                        </div>
                    </div>

                    <!-- Contenido del testimonio con mejor formato -->
                    <div class="relative mb-6">
                        <p class="text-gray-200 leading-relaxed italic">
                            "La implementación del sistema de análisis predictivo desarrollado por DendrIA transformó por completo nuestra capacidad para entender el comportamiento de nuestros clientes. Desde que lanzamos la plataforma, hemos visto un aumento del 45% en la retención de clientes y un 32% en las ventas cruzadas. El equipo de DendrIA no solo entendió nuestras necesidades técnicas, sino también los objetivos de negocio."
                        </p>
                    </div>

                    <!-- Footer con calificación y resultados -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pt-4 border-t border-blue-900/30">
                        <div class="flex mb-3 sm:mb-0">
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                        </div>

                        <div class="text-sm text-blue-300">
                            <i class="far fa-calendar-alt mr-1"></i> 2023
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl p-8 shadow-xl relative border border-blue-500/20 transform transition-all duration-300 hover:border-blue-500/40 hover:shadow-blue-900/5">
                <!-- Elemento decorativo superior -->
                <div class="absolute -top-2 -right-2 w-24 h-24 bg-blue-600/10 rounded-full blur-xl"></div>

                <!-- Comilla decorativa con mejor estilo -->
                <div class="absolute -top-4 -left-2 text-6xl text-blue-500 opacity-20 transform -rotate-12">"</div>

                <div class="relative z-10">
                    <!-- Información del cliente en un diseño más elegante -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-4 overflow-hidden border-2 border-blue-500/30 shadow-md p-0.5">
                                <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                    <i class="fas fa-user text-blue-400 text-xl"></i>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-blue-300">María Jiménez</h4>
                                <p class="text-gray-300 text-sm">COO</p>
                                <p class="text-blue-400 font-medium">PymeCommerce</p>
                            </div>
                        </div>

                        <!-- Categoría/Industria tag -->
                        <div class="bg-blue-900/30 px-3 py-1 rounded-full border border-blue-500/30 text-xs text-blue-300 font-medium">
                            <i class="fas fa-shopping-cart mr-1"></i> E-commerce
                        </div>
                    </div>

                    <!-- Contenido del testimonio con mejor formato -->
                    <div class="relative mb-6">
                        <p class="text-gray-200 leading-relaxed italic">
                            "Después de trabajar con varios proveedores de tecnología, finalmente encontramos en DendrIA un socio que realmente entiende las necesidades de las pequeñas y medianas empresas. Su plataforma de comercio electrónico con IA integrada nos permitió competir con grandes marcas, ofreciendo una experiencia personalizada a cada cliente. El ROI superó nuestras expectativas en menos de 6 meses."
                        </p>
                    </div>

                    <!-- Footer con calificación y resultados -->
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center pt-4 border-t border-blue-900/30">
                        <div class="flex mb-3 sm:mb-0">
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                        </div>

                        <div class="text-sm text-blue-300">
                            <i class="far fa-calendar-alt mr-1"></i> 2023
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimonios adicionales con diseño de mosaico -->
<section class="py-20 bg-gray-800 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute -left-20 top-1/4 w-40 h-40 bg-blue-600/5 rounded-full blur-3xl"></div>
    <div class="absolute top-1/3 right-1/4 w-60 h-60 bg-blue-600/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-blue-900/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-cyan-400 mx-auto mb-6 rounded-full"></div>
            <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white">Más Opiniones de Clientes</h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Descubre la experiencia de nuestros clientes con nuestros servicios y productos
            </p>
        </div>

        <!-- Mosaico de testimonios con diseño mejorado -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($testimonials->where('featured', false) as $testimonial)
            <div class="bg-gradient-to-br from-gray-900/80 to-gray-900/95 backdrop-blur-sm rounded-xl p-6 border border-blue-500/10 shadow-md transition-all duration-300 hover:border-blue-500/20 hover:shadow-blue-500/5 transform hover:-translate-y-1 group">
                <!-- Cabecera con estrellas y borde decorativo -->
                <div class="mb-4 pb-3 border-b border-blue-900/30">
                    <div class="flex justify-between items-center">
                        <div class="flex">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                                <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            @endfor

                            @for($i = $testimonial->rating; $i < 5; $i++)
                                @if($i == $testimonial->rating && $testimonial->rating - floor($testimonial->rating) >= 0.5)
                                    <i class="fas fa-star-half-alt text-yellow-400 mx-0.5"></i>
                                @else
                                    <i class="fas fa-star text-gray-600 mx-0.5"></i>
                                @endif
                            @endfor
                        </div>

                        <!-- Badge de sector o tecnología (si está disponible) -->
                        @if(isset($testimonial->sector))
                        <div class="bg-blue-900/20 px-2 py-1 rounded text-xs text-blue-300 border border-blue-500/20">
                            {{ $testimonial->sector }}
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Contenido del testimonio -->
                <div class="relative mb-8" data-full-content="{{ substr($testimonial->content, 180) }}">
                    <div class="absolute -top-3 -left-1 text-4xl text-blue-500/20 transform -rotate-12">"</div>
                    <p class="text-gray-200 mb-1 italic leading-relaxed text-sm min-h-[80px]">
                        "{{ Str::limit($testimonial->content, 180) }}"
                    </p>
                    @if(strlen($testimonial->content) > 180)
                    <button class="text-xs text-blue-400 hover:text-blue-300 mt-2 show-more">Ver más</button>
                    @endif
                </div>

                <!-- Pie con información del cliente -->
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-3 overflow-hidden border border-blue-500/30 p-0.5 shadow-md group-hover:border-blue-500/50 transition-all duration-300">
                        @if($testimonial->avatar)
                            <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-full h-full object-cover rounded-full">
                        @else
                            <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                <i class="fas fa-user text-blue-400"></i>
                            </div>
                        @endif
                    </div>
                    <div>
                        <h5 class="font-bold text-blue-300">{{ $testimonial->client_name }}</h5>
                        <p class="text-xs text-gray-400">{{ $testimonial->client_position }}, {{ $testimonial->company }}</p>
                    </div>
                </div>
            </div>
            @empty
            <!-- Testimonios predeterminados -->
            <div class="bg-gradient-to-br from-gray-900/80 to-gray-900/95 backdrop-blur-sm rounded-xl p-6 border border-blue-500/10 shadow-md transition-all duration-300 hover:border-blue-500/20 hover:shadow-blue-500/5 transform hover:-translate-y-1 group">
                <div class="mb-4 pb-3 border-b border-blue-900/30">
                    <div class="flex justify-between items-center">
                        <div class="flex">
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                        </div>
                        <div class="bg-blue-900/20 px-2 py-1 rounded text-xs text-blue-300 border border-blue-500/20">
                            Chatbot
                        </div>
                    </div>
                </div>
                <div class="relative mb-8" data-full-content=" La tecnología integra machine learning para mejorar continuamente las respuestas, y los análisis que proporciona nos han permitido identificar áreas de mejora en nuestros procesos internos. El ROI ha superado enormemente nuestras expectativas iniciales.">
                    <div class="absolute -top-3 -left-1 text-4xl text-blue-500/20 transform -rotate-12">"</div>
                    <p class="text-gray-200 mb-1 italic leading-relaxed text-sm min-h-[80px]">
                        "El chatbot impulsado por IA que implementaron en nuestro sitio ha reducido la carga de nuestro equipo de soporte en un 65%, mientras mejora la satisfacción del cliente."
                    </p>
                    <button class="text-xs text-blue-400 hover:text-blue-300 mt-2 show-more">Ver más</button>
                </div>
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-3 overflow-hidden border border-blue-500/30 p-0.5 shadow-md group-hover:border-blue-500/50 transition-all duration-300">
                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                            <i class="fas fa-user text-blue-400"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="font-bold text-blue-300">Carlos Vargas</h5>
                        <p class="text-xs text-gray-400">Director de Atención al Cliente, TechSupport Inc.</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-900/80 to-gray-900/95 backdrop-blur-sm rounded-xl p-6 border border-blue-500/10 shadow-md transition-all duration-300 hover:border-blue-500/20 hover:shadow-blue-500/5 transform hover:-translate-y-1 group">
                <div class="mb-4 pb-3 border-b border-blue-900/30">
                    <div class="flex justify-between items-center">
                        <div class="flex">
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                        </div>
                        <div class="bg-blue-900/20 px-2 py-1 rounded text-xs text-blue-300 border border-blue-500/20">
                            App Móvil
                        </div>
                    </div>
                </div>
                <div class="relative mb-8" data-full-content=" El enfoque orientado al usuario y la integración de algoritmos de personalización han permitido crear experiencias únicas para cada cliente. Lo más impresionante ha sido la rapidez con la que pudimos implementar cambios basados en el feedback, gracias a la arquitectura modular del sistema.">
                    <div class="absolute -top-3 -left-1 text-4xl text-blue-500/20 transform -rotate-12">"</div>
                    <p class="text-gray-200 mb-1 italic leading-relaxed text-sm min-h-[80px]">
                        "La aplicación móvil desarrollada por DendrIA no solo mejoró nuestra presencia digital, sino que también aumentó nuestras ventas en un 40% en el primer trimestre desde su lanzamiento."
                    </p>
                    <button class="text-xs text-blue-400 hover:text-blue-300 mt-2 show-more">Ver más</button>
                </div>
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-3 overflow-hidden border border-blue-500/30 p-0.5 shadow-md group-hover:border-blue-500/50 transition-all duration-300">
                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                            <i class="fas fa-user text-blue-400"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="font-bold text-blue-300">Ana Muñoz</h5>
                        <p class="text-xs text-gray-400">Gerente de Marketing, Retail Solutions</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-gray-900/80 to-gray-900/95 backdrop-blur-sm rounded-xl p-6 border border-blue-500/10 shadow-md transition-all duration-300 hover:border-blue-500/20 hover:shadow-blue-500/5 transform hover:-translate-y-1 group">
                <div class="mb-4 pb-3 border-b border-blue-900/30">
                    <div class="flex justify-between items-center">
                        <div class="flex">
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star text-yellow-400 mx-0.5"></i>
                            <i class="fas fa-star-half-alt text-yellow-400 mx-0.5"></i>
                        </div>
                        <div class="bg-blue-900/20 px-2 py-1 rounded text-xs text-blue-300 border border-blue-500/20">
                            Consultoría
                        </div>
                    </div>
                </div>
                <div class="relative mb-8" data-full-content=" Su metodología de trabajo se basa en comprender profundamente nuestros objetivos y desafíos. Nos impresionó especialmente su capacidad para traducir problemas complejos de negocio en soluciones técnicas elegantes que generan resultados medibles. Sin duda, se han convertido en un socio estratégico para nuestra transformación digital.">
                    <div class="absolute -top-3 -left-1 text-4xl text-blue-500/20 transform -rotate-12">"</div>
                    <p class="text-gray-200 mb-1 italic leading-relaxed text-sm min-h-[80px]">
                        "Lo que más valoramos de DendrIA es su enfoque en entender nuestro negocio antes de proponer soluciones tecnológicas. No venden tecnología por vender, sino que aportan valor real."
                    </p>
                    <button class="text-xs text-blue-400 hover:text-blue-300 mt-2 show-more">Ver más</button>
                </div>
                <div class="flex items-center mt-auto">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-900 to-gray-800 rounded-full flex items-center justify-center mr-3 overflow-hidden border border-blue-500/30 p-0.5 shadow-md group-hover:border-blue-500/50 transition-all duration-300">
                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                            <i class="fas fa-user text-blue-400"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="font-bold text-blue-300">Fernando Rivas</h5>
                        <p class="text-xs text-gray-400">CFO, Financial Innovation Group</p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Estadísticas de Satisfacción -->
<section class="py-16 bg-gradient-to-br from-blue-900 to-gray-900 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 bg-pattern-grid opacity-5"></div>
    <div class="absolute left-1/4 top-0 w-1/2 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-900/30 backdrop-blur-sm p-8 rounded-xl border border-blue-500/20 text-center shadow-lg">
                    <div class="w-16 h-16 bg-blue-900/50 rounded-full mx-auto flex items-center justify-center mb-4 border border-blue-500/30">
                        <i class="fas fa-smile text-blue-400 text-3xl"></i>
                    </div>
                    <div class="text-4xl font-bold text-blue-300 mb-2">98%</div>
                    <div class="text-lg text-gray-300 mb-1">Satisfacción del cliente</div>
                    <p class="text-sm text-gray-400">Basado en encuestas posteriores a la entrega de proyectos</p>
                </div>

                <div class="bg-gray-900/30 backdrop-blur-sm p-8 rounded-xl border border-blue-500/20 text-center shadow-lg">
                    <div class="w-16 h-16 bg-blue-900/50 rounded-full mx-auto flex items-center justify-center mb-4 border border-blue-500/30">
                        <i class="fas fa-redo text-blue-400 text-3xl"></i>
                    </div>
                    <div class="text-4xl font-bold text-blue-300 mb-2">85%</div>
                    <div class="text-lg text-gray-300 mb-1">Tasa de retención</div>
                    <p class="text-sm text-gray-400">Clientes que vuelven para nuevos proyectos</p>
                </div>

                <div class="bg-gray-900/30 backdrop-blur-sm p-8 rounded-xl border border-blue-500/20 text-center shadow-lg">
                    <div class="w-16 h-16 bg-blue-900/50 rounded-full mx-auto flex items-center justify-center mb-4 border border-blue-500/30">
                        <i class="fas fa-award text-blue-400 text-3xl"></i>
                    </div>
                    <div class="text-4xl font-bold text-blue-300 mb-2">4.9</div>
                    <div class="text-lg text-gray-300 mb-1">Valoración media</div>
                    <p class="text-sm text-gray-400">En una escala de 5 estrellas</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Mejorado -->
<section class="py-20 bg-gradient-to-r from-blue-700 to-blue-900 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-300 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto bg-gray-900/20 backdrop-blur-sm p-10 rounded-2xl border border-blue-500/30 shadow-xl">
            <div class="text-center mb-10">
                <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-cyan-300 mx-auto mb-6 rounded-full"></div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">¿Listo para transformar tu negocio?</h2>
                <p class="text-xl text-blue-100 mb-10 max-w-3xl mx-auto">
                    Únete a nuestros clientes satisfechos y descubre cómo DendrIA puede ayudarte a impulsar tu negocio con soluciones tecnológicas avanzadas.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-6">
                <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-700 font-bold py-4 px-10 rounded-lg shadow-lg transition transform hover:-translate-y-1 hover:shadow-blue-500/30 border border-white">
                    <div class="flex items-center">
                        <i class="fas fa-paper-plane mr-2"></i>
                        <span>Contáctanos</span>
                    </div>
                </a>
                <a href="{{ route('case-studies') }}" class="inline-block bg-transparent border-2 border-white text-white font-bold py-4 px-10 rounded-lg shadow-lg transition transform hover:-translate-y-1 hover:shadow-blue-500/10 hover:bg-white/10">
                    <div class="flex items-center">
                        <i class="fas fa-briefcase mr-2"></i>
                        <span>Ver casos de éxito</span>
                    </div>
                </a>
            </div>

            <div class="mt-10 pt-6 border-t border-blue-500/20 text-center">
                <p class="text-sm text-blue-200">
                    <i class="fas fa-shield-alt mr-1"></i> Confidencialidad garantizada en todas nuestras consultas y proyectos
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('js/testimonials-filter.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inicializar el carrusel
        const carousel = document.getElementById('testimonialCarousel');
        if (carousel) {
            const slides = carousel.querySelectorAll('.testimonial-slide');
            const indicators = carousel.querySelectorAll('.carousel-indicator');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');

            let currentIndex = 0;
            const totalSlides = slides.length;
            let autoplayInterval;

            // Configurar autoplay
            function startAutoplay() {
                autoplayInterval = setInterval(() => {
                    goToSlide(currentIndex + 1);
                }, 8000); // Cambiar cada 8 segundos
            }

            function stopAutoplay() {
                clearInterval(autoplayInterval);
            }

            // Ir a una slide específica
            function goToSlide(index) {
                // Asegurarse de que el índice esté dentro del rango
                if (index < 0) index = totalSlides - 1;
                if (index >= totalSlides) index = 0;

                // Quitar clases activas
                slides.forEach(slide => {
                    slide.classList.remove('active', 'previous');
                    if (parseInt(slide.dataset.index) === currentIndex) {
                        slide.classList.add('previous');
                    }
                });

                indicators.forEach(indicator => {
                    indicator.classList.remove('active');
                });

                // Añadir clases activas a la slide actual
                slides[index].classList.add('active');
                indicators[index].classList.add('active');

                // Actualizar índice actual
                currentIndex = index;
            }

            // Manejar clics en los indicadores
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    stopAutoplay();
                    goToSlide(index);
                    startAutoplay();
                });
            });

            // Manejar clics en los botones de navegación
            if (prevButton) {
                prevButton.addEventListener('click', () => {
                    stopAutoplay();
                    goToSlide(currentIndex - 1);
                    startAutoplay();
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', () => {
                    stopAutoplay();
                    goToSlide(currentIndex + 1);
                    startAutoplay();
                });
            }

            // Pausar autoplay al pasar el ratón sobre el carrusel
            carousel.addEventListener('mouseenter', stopAutoplay);
            carousel.addEventListener('mouseleave', startAutoplay);

            // Iniciar autoplay
            startAutoplay();
        }

        // Sistema de filtrado por industria
        const industryFilters = document.querySelectorAll('.industry-filter');
        const testimonialCards = document.querySelectorAll('.grid.grid-cols-1.lg\\:grid-cols-2 > div');

        if (industryFilters.length) {
            industryFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    // Quitar la clase active de todos los filtros
                    industryFilters.forEach(f => {
                        f.classList.remove('active');
                        f.classList.remove('bg-blue-600');
                        f.classList.add('bg-blue-900/50');
                        f.classList.remove('text-white');
                        f.classList.add('text-blue-300');
                    });

                    // Añadir la clase active al filtro clicado
                    this.classList.add('active');
                    this.classList.add('bg-blue-600');
                    this.classList.remove('bg-blue-900/50');
                    this.classList.add('text-white');
                    this.classList.remove('text-blue-300');

                    const selectedIndustry = this.textContent.trim();

                    // Filtrar las tarjetas de testimonios
                    testimonialCards.forEach(card => {
                        const cardIndustry = card.querySelector('.bg-blue-900\\/30.px-3.py-1.rounded-full');

                        if (selectedIndustry === 'Todos' ||
                            (cardIndustry && cardIndustry.textContent.trim().includes(selectedIndustry))) {
                            // Mostrar con animación
                            card.classList.remove('hidden');
                            card.style.opacity = '0';
                            setTimeout(() => {
                                card.style.transition = 'opacity 0.5s ease';
                                card.style.opacity = '1';
                            }, 50);
                        } else {
                            // Ocultar con animación
                            card.style.transition = 'opacity 0.5s ease';
                            card.style.opacity = '0';
                            setTimeout(() => {
                                card.classList.add('hidden');
                            }, 500);
                        }
                    });
                });
            });
        }

        // Funcionalidad "Ver más" para testimonios truncados
        const showMoreButtons = document.querySelectorAll('.show-more');

        showMoreButtons.forEach(button => {
            button.addEventListener('click', function() {
                const testimonialContent = this.previousElementSibling;
                const fullContent = this.parentElement.dataset.fullContent || '';

                if (this.textContent === 'Ver más') {
                    // Expandir
                    const originalText = testimonialContent.textContent;
                    const fullTestimonial = originalText.replace(/\.\.\."/g, '') + fullContent + '"';
                    testimonialContent.textContent = fullTestimonial;
                    this.textContent = 'Ver menos';

                    // Animar expansión
                    testimonialContent.style.maxHeight = 'none';
                    testimonialContent.classList.remove('min-h-[80px]');
                } else {
                    // Colapsar
                    testimonialContent.textContent = '"' + testimonialContent.textContent.substring(1).slice(0, 180) + '..."';
                    this.textContent = 'Ver más';

                    // Animar colapso
                    testimonialContent.classList.add('min-h-[80px]');
                }
            });
        });

        // Efectos de aparición al hacer scroll
        const revealItems = document.querySelectorAll('.grid > div, .max-w-5xl.mx-auto > div');

        function revealOnScroll() {
            const windowHeight = window.innerHeight;

            revealItems.forEach(item => {
                const itemTop = item.getBoundingClientRect().top;

                if (itemTop < windowHeight - 50) {
                    item.classList.add('opacity-100');
                    item.classList.add('transform', 'translate-y-0');
                    item.classList.remove('opacity-0');
                    item.classList.remove('translate-y-10');
                }
            });
        }

        // Inicialmente configurar todos los elementos a invisible
        revealItems.forEach(item => {
            if (!item.classList.contains('active')) {
                item.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
            }
        });

        // Evento de scroll
        window.addEventListener('scroll', revealOnScroll);

        // Ejecutar una vez al cargar para los elementos visibles
        setTimeout(revealOnScroll, 300);
    });
</script>
@endsection