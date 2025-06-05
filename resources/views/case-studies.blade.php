@extends('layouts.app')

@section('title', 'Casos de Éxito - Proyectos de Desarrollo de Software')

@section('styles')
<style>
    /* Animación del encabezado igual que productos y servicios */
    .cases-header {
        position: relative;
        overflow: hidden;
    }

    .cases-header::before {
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
</style>
@endsection

@section('content')
<div class="gradient-bg py-12 cases-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 relative z-10">Casos de Éxito</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10 mb-8">
                Proyectos transformadores que han ayudado a nuestros clientes a crecer y destacarse en su industria.
            </p>
        </div>
    </div>
</div>
<!-- Caso de Éxito Principal: ConocIA -->
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-blue-500/20 hover:border-blue-500/30 transition-all duration-500">
            <div class="md:flex">
                <!-- Imagen del Proyecto - Visualización Dinámica -->
                <div class="md:w-1/2 h-96 md:h-auto relative overflow-hidden">
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
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/70 via-blue-800/40 to-blue-900/70"></div>

                            <!-- Efecto de brillo central -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-500 opacity-30 rounded-full blur-3xl animate-pulse"></div>

                            <!-- Elementos decorativos -->
                            <div class="absolute top-0 left-0 w-full h-full">
                                <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400 rounded-full animate-ping" style="animation-duration: 3s;"></div>
                                <div class="absolute top-3/4 left-2/3 w-2 h-2 bg-blue-300 rounded-full animate-ping" style="animation-duration: 2.5s;"></div>
                                <div class="absolute top-1/3 left-3/4 w-2 h-2 bg-cyan-400 rounded-full animate-ping" style="animation-duration: 4s;"></div>
                                <div class="absolute top-2/3 left-1/3 w-2 h-2 bg-blue-200 rounded-full animate-ping" style="animation-duration: 3.5s;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Logo con Badge de "Caso Destacado" -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 p-8">
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                                <i class="fas fa-star mr-1"></i> CASO DESTACADO
                            </span>
                        </div>

                        <div class="relative mb-4">
                            <div class="absolute inset-0 -m-4 bg-blue-500 opacity-20 blur-3xl rounded-full animate-pulse"></div>

                            <!-- Logo text de ConocIA con efecto de neón -->
                            <div class="relative z-10 floating">
                                <h2 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-cyan-200 tracking-tight shadow-text">
                                    Conoc<span class="text-white">IA</span>
                                </h2>
                            </div>
                        </div>

                        <!-- Texto descriptivo con efecto de brillo -->
                        <div class="text-center relative mt-4">
                            <div class="text-lg md:text-xl font-medium text-white mb-2 glass-effect px-4 py-2 rounded-lg bg-blue-900/40 backdrop-blur-sm border border-blue-500/30 shadow-lg">
                                Portal IA de Noticias
                            </div>
                            <div class="text-sm text-blue-100/90 max-w-xs mt-3 bg-blue-900/20 backdrop-blur-sm p-2 rounded-lg">
                                "El futuro del conocimiento es artificialmente inteligente"
                            </div>
                        </div>

                        <!-- Decoración inferior -->
                        <div class="absolute bottom-8 left-0 right-0 flex justify-center">
                            <div class="h-1 w-32 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Información del Proyecto -->
                <div class="md:w-1/2 p-8 md:p-10 relative">
                    <!-- Fondo sutil -->
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-blue-900/5"></div>

                    <div class="relative z-10">
                        <!-- Badges en diseño coherente -->
                        <div class="mb-6 flex flex-wrap gap-2">
                            <span class="text-xs font-semibold inline-block py-1 px-3 uppercase rounded-full text-blue-300 bg-blue-900/80 border border-blue-700/50">
                                <i class="fas fa-newspaper mr-1"></i> Portal de Noticias
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-3 uppercase rounded-full text-blue-300 bg-blue-900/80 border border-blue-700/50">
                                <i class="fas fa-brain mr-1"></i> Inteligencia Artificial
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-3 uppercase rounded-full text-blue-300 bg-blue-900/80 border border-blue-700/50">
                                <i class="fas fa-podcast mr-1"></i> Podcasts Automatizados
                            </span>
                        </div>

                        <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white">ConocIA</h2>
                        <p class="text-gray-300 mb-6 text-lg">
                            Portal especializado en noticias, investigaciones y análisis sobre inteligencia artificial, tecnología e innovación con generación automática de podcasts mediante IA.
                        </p>

                        <!-- Resultados destacados -->
                        <div class="bg-gray-900/50 rounded-lg p-4 mb-6 border border-blue-500/10">
                            <h4 class="font-bold text-blue-300 mb-2 text-sm uppercase">Resultados destacados</h4>
                            <div class="grid grid-cols-3 gap-2 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-blue-400">+25K</div>
                                    <div class="text-xs text-gray-400">Lectores mensuales</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-400">15min</div>
                                    <div class="text-xs text-gray-400">Tiempo promedio</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-400">+5K</div>
                                    <div class="text-xs text-gray-400">Suscriptores</div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <a href="https://www.conocia.cl" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition transform hover:-translate-y-1 hover:shadow-lg border border-blue-500/50 flex items-center">
                                <i class="fas fa-external-link-alt mr-2"></i> Visitar sitio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Caso de Éxito: MIDD -->
<section class="py-16 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-blue-500/20 hover:border-blue-500/30 transition-all duration-500">
            <div class="md:flex">
                <!-- Imagen del Proyecto - Visualización Dinámica -->
                <div class="md:w-1/2 h-96 md:h-auto relative overflow-hidden">
                    <!-- Imagen de fondo dinámica específica para MIDD -->
                    <div class="absolute inset-0">
                        <div class="w-full h-full relative overflow-hidden bg-gradient-to-br from-blue-900 to-gray-900">
                            <!-- Patrón de grid empresarial -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="h-full w-full" style="background-image: repeating-linear-gradient(0deg, transparent, transparent 40px, rgba(59, 130, 246, 0.3) 40px, rgba(59, 130, 246, 0.3) 41px), repeating-linear-gradient(90deg, transparent, transparent 40px, rgba(59, 130, 246, 0.3) 40px, rgba(59, 130, 246, 0.3) 41px);"></div>
                            </div>

                            <!-- Capa de color para mejorar contraste -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/50 to-blue-900/80"></div>

                            <!-- Efecto de brillo central -->
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-500 opacity-30 rounded-full blur-3xl animate-pulse"></div>

                            <!-- Elementos decorativos de módulos -->
                            <div class="absolute top-0 left-0 w-full h-full">
                                <div class="absolute top-1/4 left-1/4 w-16 h-16 border-2 border-blue-400/30 rounded-lg animate-pulse" style="animation-duration: 3s;"></div>
                                <div class="absolute top-3/4 left-2/3 w-16 h-16 border-2 border-blue-300/30 rounded-lg animate-pulse" style="animation-duration: 2.5s;"></div>
                                <div class="absolute top-1/3 left-3/4 w-16 h-16 border-2 border-cyan-400/30 rounded-lg animate-pulse" style="animation-duration: 4s;"></div>
                                <div class="absolute top-2/3 left-1/3 w-16 h-16 border-2 border-blue-200/30 rounded-lg animate-pulse" style="animation-duration: 3.5s;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Logo con Badge de "Caso Destacado" -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 p-8">
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                                <i class="fas fa-star mr-1"></i> CASO DESTACADO
                            </span>
                        </div>

                        <div class="relative mb-4">
                            <div class="absolute inset-0 -m-4 bg-blue-500 opacity-20 blur-3xl rounded-full animate-pulse"></div>

                            <!-- Logo text de MIDD con efecto de neón -->
                            <div class="relative z-10 floating">
                                <h2 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-cyan-200 tracking-tight shadow-text">
                                    MIDD
                                </h2>
                            </div>
                        </div>

                        <!-- Texto descriptivo con efecto de brillo -->
                        <div class="text-center relative mt-4">
                            <div class="text-lg md:text-xl font-medium text-white mb-2 glass-effect px-4 py-2 rounded-lg bg-blue-900/40 backdrop-blur-sm border border-blue-500/30 shadow-lg">
                                Plataforma SaaS B2B
                            </div>
                            <div class="text-sm text-blue-100/90 max-w-xs mt-3 bg-blue-900/20 backdrop-blur-sm p-2 rounded-lg">
                                "La gestión empresarial inteligente para PyMEs chilenas"
                            </div>
                        </div>

                        <!-- Decoración inferior -->
                        <div class="absolute bottom-8 left-0 right-0 flex justify-center">
                            <div class="h-1 w-32 bg-gradient-to-r from-transparent via-blue-500/50 to-transparent rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Información del Proyecto -->
                <div class="md:w-1/2 p-8 md:p-10 relative">
                    <!-- Fondo sutil -->
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-blue-900/5"></div>

                    <div class="relative z-10">
                        <!-- Badges en diseño coherente -->
                        <div class="mb-6 flex flex-wrap gap-2">
                            <span class="text-xs font-semibold inline-block py-1 px-3 uppercase rounded-full text-blue-300 bg-blue-900/80 border border-blue-700/50">
                                <i class="fas fa-building mr-1"></i> ERP Empresarial
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-3 uppercase rounded-full text-blue-300 bg-blue-900/80 border border-blue-700/50">
                                <i class="fas fa-file-invoice mr-1"></i> Facturación SII
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-3 uppercase rounded-full text-blue-300 bg-blue-900/80 border border-blue-700/50">
                                <i class="fas fa-cloud mr-1"></i> SaaS Multi-tenant
                            </span>
                        </div>

                        <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white">MIDD</h2>
                        <p class="text-gray-300 mb-6 text-lg">
                            Plataforma SaaS integral para PyMEs chilenas con 8 módulos especializados, integración completa con SII y arquitectura multi-tenant escalable para miles de empresas.
                        </p>

                        <!-- Resultados destacados -->
                        <div class="bg-gray-900/50 rounded-lg p-4 mb-6 border border-blue-500/10">
                            <h4 class="font-bold text-blue-300 mb-2 text-sm uppercase">Resultados destacados</h4>
                            <div class="grid grid-cols-3 gap-2 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-blue-400">95%</div>
                                    <div class="text-xs text-gray-400">Proyecto completado</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-400">8</div>
                                    <div class="text-xs text-gray-400">Módulos funcionales</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-400"><2s</div>
                                    <div class="text-xs text-gray-400">Tiempo de carga</div>
                                </div>
                            </div>
                        </div>

                        <!-- Características clave -->
                        <div class="mb-6">
                            <div class="flex items-center text-sm text-gray-300 mb-2">
                                <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                <span>Integración completa con SII y DTEs</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-300 mb-2">
                                <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                <span>Suite empresarial completa (CRM, Inventario, RRHH)</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-300">
                                <i class="fas fa-check-circle text-green-400 mr-2"></i>
                                <span>Seguridad enterprise-grade con WAF y 2FA</span>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <a href="http://www.midd.cl" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition transform hover:-translate-y-1 hover:shadow-lg border border-blue-500/50 flex items-center">
                                <i class="fas fa-external-link-alt mr-2"></i> Visitar sitio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Más casos de éxito en formato compacto -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Más Casos de Éxito</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">Descubre otros proyectos innovadores que hemos desarrollado</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- PymeCommerce -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-blue-500/10 transform transition duration-300 hover:-translate-y-2 hover:shadow-blue-500/5 group">
                <div class="h-48 bg-gradient-to-br from-blue-900 to-gray-900 relative overflow-hidden">
                    <!-- Elementos gráficos de eCommerce -->
                    <div class="absolute inset-0 bg-pattern-grid opacity-10"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl group-hover:w-40 transition-all duration-700"></div>

                    <!-- Logo -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-white mb-2">Pyme<span class="text-blue-400">Commerce</span></h3>
                            <span class="inline-block px-3 py-1 text-sm bg-blue-600/80 text-white rounded-full">Plataforma eCommerce</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <p class="text-gray-300 mb-4">Plataforma de comercio electrónico con integración nativa a sistemas de pago chilenos, diseñada específicamente para pequeñas y medianas empresas.</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-900 mr-2">
                                Laravel
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-400 bg-green-900">
                                eCommerce
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="text-blue-400 hover:text-blue-300 font-medium case-details-btn" data-case="pymecommerce">Ver detalles <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- InsightMind -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-blue-500/10 transform transition duration-300 hover:-translate-y-2 hover:shadow-blue-500/5 group">
                <div class="h-48 bg-gradient-to-br from-blue-900 to-gray-900 relative overflow-hidden">
                    <!-- Elementos gráficos de dashboard analítico -->
                    <div class="absolute inset-0 bg-pattern-dots opacity-10"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl group-hover:w-40 transition-all duration-700"></div>

                    <!-- Logo -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-white mb-2">Insight<span class="text-blue-400">Mind</span></h3>
                            <span class="inline-block px-3 py-1 text-sm bg-blue-600/80 text-white rounded-full">Analítica Predictiva</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <p class="text-gray-300 mb-4">Plataforma de análisis de datos impulsada por IA que transforma información compleja en insights accionables para la toma de decisiones estratégicas.</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-900 mr-2">
                                IA
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-400 bg-green-900">
                                BigData
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="text-blue-400 hover:text-blue-300 font-medium case-details-btn" data-case="insightmind">Ver detalles <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- SecuriTech -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-blue-500/10 transform transition duration-300 hover:-translate-y-2 hover:shadow-blue-500/5 group">
                <div class="h-48 bg-gradient-to-br from-blue-900 to-gray-900 relative overflow-hidden">
                    <!-- Elementos gráficos de seguridad -->
                    <div class="absolute inset-0 bg-pattern-circuit opacity-10"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl group-hover:w-40 transition-all duration-700"></div>

                    <!-- Logo -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-white mb-2">Securi<span class="text-blue-400">Tech</span></h3>
                            <span class="inline-block px-3 py-1 text-sm bg-blue-600/80 text-white rounded-full">Ciberseguridad</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <p class="text-gray-300 mb-4">Sistema integral de monitoreo de seguridad para empresas que utiliza IA para detectar amenazas y vulnerabilidades en tiempo real.</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-900 mr-2">
                                Seguridad
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-400 bg-green-900">
                                API
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="text-blue-400 hover:text-blue-300 font-medium case-details-btn" data-case="securitech">Ver detalles <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Dendria Chat -->
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg border border-blue-500/10 transform transition duration-300 hover:-translate-y-2 hover:shadow-blue-500/5 group">
                <div class="h-48 bg-gradient-to-br from-blue-900 to-gray-900 relative overflow-hidden">
                    <!-- Elementos gráficos de chatbot -->
                    <div class="absolute inset-0 bg-pattern-dots opacity-10"></div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl group-hover:w-40 transition-all duration-700"></div>

                    <!-- Badge de "Caso Destacado" -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg flex items-center">
                            <i class="fas fa-star mr-1"></i> CASO DESTACADO
                        </span>
                    </div>

                    <!-- Logo -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-white mb-2">Dendria<span class="text-blue-400">Chat</span></h3>
                            <span class="inline-block px-3 py-1 text-sm bg-blue-600/80 text-white rounded-full">Chatbot IA</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <p class="text-gray-300 mb-4">Plataforma de chatbot inteligente con IA que revoluciona la atención al cliente, automatizando respuestas y mejorando la experiencia del usuario.</p>
                    <!-- Resultados destacados -->
                    <div class="bg-gray-900/50 rounded-lg p-3 mb-4 border border-blue-500/10">
                        <div class="grid grid-cols-3 gap-2 text-center">
                            <div>
                                <div class="text-lg font-bold text-blue-400">90%</div>
                                <div class="text-xs text-gray-400">Satisfacción</div>
                            </div>
                            <div>
                                <div class="text-lg font-bold text-blue-400">24/7</div>
                                <div class="text-xs text-gray-400">Disponible</div>
                            </div>
                            <div>
                                <div class="text-lg font-bold text-blue-400">-60%</div>
                                <div class="text-xs text-gray-400">Tiempo respuesta</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-400 bg-blue-900 mr-2">
                                IA
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-400 bg-green-900">
                                SaaS
                            </span>
                        </div>
                        <a href="javascript:void(0)" class="text-blue-400 hover:text-blue-300 font-medium case-details-btn" data-case="dendriachat">Ver detalles <i class="fas fa-arrow-right ml-1"></i></a>
                    </div>
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
        <div class="flex justify-center space-x-4">
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                Iniciar proyecto
            </a>
            <a href="{{ route('services') }}" class="inline-block bg-transparent border border-white text-white font-bold py-3 px-8 rounded-lg transition hover:bg-white/10">
                Ver servicios
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Añadir soporte para patrones de fondo sutiles
        const patterns = [
            'bg-pattern-grid',
            'bg-pattern-dots',
            'bg-pattern-circuit'
        ];

        // Crear los estilos CSS para los patrones
        const styleEl = document.createElement('style');
        styleEl.textContent = `
            .bg-pattern-grid {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Cpath d='M1 1h18v18H1V1z' fill='none' stroke='%233b82f6' stroke-opacity='0.05' stroke-width='0.5'/%3E%3C/svg%3E");
            }
            .bg-pattern-dots {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='1' fill='%233b82f6' fill-opacity='0.05'/%3E%3C/svg%3E");
            }
            .bg-pattern-circuit {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Cpath d='M0 20h40M20 0v40' stroke='%233b82f6' stroke-opacity='0.05' stroke-width='0.5' stroke-dasharray='2,2'/%3E%3Ccircle cx='20' cy='20' r='2' fill='none' stroke='%233b82f6' stroke-opacity='0.1' stroke-width='0.5'/%3E%3C/svg%3E");
            }
            .shadow-text {
                text-shadow: 0 0 10px rgba(59, 130, 246, 0.3);
            }
        `;
        document.head.appendChild(styleEl);

        // Efecto de scroll reveal para las secciones
        const revealElements = document.querySelectorAll('.mb-16, .mb-20, .grid > div, .rounded-xl');

        function revealOnScroll() {
            const windowHeight = window.innerHeight;
            const elementVisible = 150;

            for (let i = 0; i < revealElements.length; i++) {
                const element = revealElements[i];
                const elementTop = element.getBoundingClientRect().top;

                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('animate-fade-in');
                }
            }
        }

        // Añadir clase para animación fade-in
        const animationStyle = document.createElement('style');
        animationStyle.textContent = `
            @keyframes fadeInUp {
                0% { opacity: 0; transform: translateY(30px); }
                100% { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in {
                animation: fadeInUp 0.6s ease-out forwards;
            }
            .mb-16, .mb-20, .grid > div, .rounded-xl {
                opacity: 0;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }
            .floating {
                animation: float 6s ease-in-out infinite;
            }
        `;
        document.head.appendChild(animationStyle);

        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Ejecutar una vez al cargar la página

        // Resaltar la primera tarjeta de caso de éxito como destacada
        const mainCaseStudy = document.querySelector('.bg-gray-800.rounded-xl.overflow-hidden.shadow-xl.border');
        if (mainCaseStudy) {
            setTimeout(() => {
                mainCaseStudy.classList.add('ring', 'ring-blue-500/30', 'ring-offset-4', 'ring-offset-gray-900');
            }, 1000);
        }

        // Añadir interactividad a las tarjetas en hover
        const caseCards = document.querySelectorAll('.transform.transition');
        caseCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelectorAll('.text-blue-300, .text-blue-400').forEach(el => {
                    el.classList.add('text-blue-200');
                });
            });

            card.addEventListener('mouseleave', function() {
                this.querySelectorAll('.text-blue-200').forEach(el => {
                    if (el.classList.contains('text-blue-300')) {
                        el.classList.remove('text-blue-200');
                    } else if (el.classList.contains('text-blue-400')) {
                        el.classList.remove('text-blue-200');
                    }
                });
            });
        });

        // Smooth scroll para enlaces internos (solo para enlaces válidos con ID)
        document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Funcionalidad para botones "Ver detalles"
        document.querySelectorAll('.case-details-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const caseType = this.getAttribute('data-case');
                
                // Mostrar información adicional o modal
                showCaseDetails(caseType);
            });
        });

        function showCaseDetails(caseType) {
            const caseInfo = {
                'pymecommerce': {
                    title: 'PymeCommerce - Plataforma eCommerce',
                    description: 'Plataforma completa de comercio electrónico diseñada específicamente para PyMEs chilenas con integración nativa a Transbank, Webpay y sistemas de pago locales.',
                    features: ['Integración Transbank/Webpay', 'Gestión de inventario', 'Panel administrativo', 'Responsive design', 'SEO optimizado']
                },
                'insightmind': {
                    title: 'InsightMind - Analítica Predictiva',
                    description: 'Plataforma de análisis de datos impulsada por IA que transforma información compleja en insights accionables para la toma de decisiones estratégicas.',
                    features: ['Machine Learning', 'Dashboards interactivos', 'Predicciones en tiempo real', 'Integración APIs', 'Reportes automatizados']
                },
                'securitech': {
                    title: 'SecuriTech - Ciberseguridad',
                    description: 'Sistema integral de monitoreo de seguridad que utiliza IA para detectar amenazas y vulnerabilidades en tiempo real.',
                    features: ['Detección de amenazas IA', 'Monitoreo 24/7', 'Alertas en tiempo real', 'Análisis de vulnerabilidades', 'Reportes de seguridad']
                },
                'dendriachat': {
                    title: 'DendriaChat - Chatbot IA',
                    description: 'Plataforma de chatbot inteligente que revoluciona la atención al cliente con IA avanzada y procesamiento de lenguaje natural.',
                    features: ['NLP avanzado', 'Integración multi-canal', 'Analytics conversacional', 'Aprendizaje automático', 'API REST completa']
                }
            };

            const info = caseInfo[caseType];
            if (info) {
                alert(`${info.title}\n\n${info.description}\n\nCaracterísticas principales:\n• ${info.features.join('\n• ')}\n\n¡Contáctanos para más información!`);
            }
        }
    });
</script>
@endsection