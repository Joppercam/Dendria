@extends('layouts.app')

@section('title', 'Servicios - DendrIA')

@section('meta_description', 'Soluciones tecnológicas a medida que integran Laravel e Inteligencia Artificial. Desarrollo web, chatbots, aplicaciones móviles y consultoría para empresas en Chile.')

@section('meta_keywords', 'desarrollo web, Laravel, inteligencia artificial, chatbots, aplicaciones móviles, consultoría tecnológica, transformación digital, Chile, desarrollo de software, machine learning')

@section('styles')
<style>
    .service-visual {
        position: relative;
        height: 300px;
        overflow: hidden;
    }
    
    .service-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.6;
        z-index: 0;
        animation: pulse-glow 6s ease-in-out infinite;
    }
    
    .web-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .ai-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.6) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .mobile-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.6) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .consulting-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.6) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    @keyframes pulse-glow {
        0%, 100% {
            opacity: 0.6;
            transform: scale(1);
        }
        50% {
            opacity: 0.3;
            transform: scale(1.2);
        }
    }
    
    .floating-icon {
        position: relative;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-elements {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    
    .floating-element {
        position: absolute;
        border-radius: 50%;
        opacity: 0.7;
        z-index: 0;
        animation: float-random 8s ease-in-out infinite;
    }
    
    @keyframes float-random {
        0%, 100% {
            transform: translateY(0) translateX(0);
        }
        25% {
            transform: translateY(-15px) translateX(10px);
        }
        50% {
            transform: translateY(5px) translateX(-10px);
        }
        75% {
            transform: translateY(10px) translateX(5px);
        }
    }
    
    .services-header {
        position: relative;
        overflow: hidden;
    }
    
    .services-header::before {
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
<div class="gradient-bg py-12 services-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 relative z-10">Nuestros Servicios</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10 mb-8">Soluciones tecnológicas a medida que integran Laravel e Inteligencia Artificial para resolver problemas complejos.</p>
        </div>
    </div>
</div>

<section id="web" class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Desarrollo Web Personalizado</h2>
                <p class="text-gray-300 mb-8">Creamos aplicaciones web escalables y seguras utilizando Laravel, optimizadas para rendimiento y experiencia de usuario.</p>
                
                <div class="space-y-4">
                    <div class="bg-gray-800 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">1</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Aplicaciones SPA y MPA</h3>
                                <p class="text-gray-400">Desarrollo de aplicaciones de una sola página (SPA) con Vue.js o React, o aplicaciones multipágina (MPA) con Blade, según los requerimientos de tu proyecto.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">2</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">APIs RESTful</h3>
                                <p class="text-gray-400">Diseño e implementación de APIs seguras, eficientes y bien documentadas para la comunicación entre sistemas y aplicaciones móviles.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">3</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Integraciones con servicios externos</h3>
                                <p class="text-gray-400">Conectamos tu aplicación con servicios de terceros como pasarelas de pago, CRMs, herramientas de marketing y APIs públicas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="service-visual rounded-xl shadow-lg overflow-hidden">
                    <!-- Efecto de resplandor -->
                    <div class="service-glow web-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="floating-elements">
                        <div class="floating-element" style="width: 30px; height: 30px; background-color: rgba(59, 130, 246, 0.4); top: 20%; left: 30%; animation-delay: 0s;"></div>
                        <div class="floating-element" style="width: 20px; height: 20px; background-color: rgba(96, 165, 250, 0.4); top: 60%; left: 20%; animation-delay: 1s;"></div>
                        <div class="floating-element" style="width: 40px; height: 40px; background-color: rgba(37, 99, 235, 0.4); top: 40%; left: 70%; animation-delay: 2s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-blue-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-code text-6xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ai" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2 order-2 md:order-1">
                <div class="service-visual rounded-xl shadow-lg overflow-hidden">
                    <!-- Efecto de resplandor -->
                    <div class="service-glow ai-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="floating-elements">
                        <div class="floating-element" style="width: 15px; height: 15px; background-color: rgba(59, 130, 246, 0.4); top: 25%; left: 35%; animation-delay: 0.5s;"></div>
                        <div class="floating-element" style="width: 25px; height: 25px; background-color: rgba(37, 99, 235, 0.4); top: 65%; left: 25%; animation-delay: 1.5s;"></div>
                        <div class="floating-element" style="width: 35px; height: 35px; background-color: rgba(29, 78, 216, 0.4); top: 45%; left: 75%; animation-delay: 2.5s;"></div>
                    </div>
                    
                    <!-- Red neuronal simplificada -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-blue-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-brain text-6xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-6">Soluciones de IA</h2>
                <p class="text-gray-300 mb-8">Implementamos sistemas inteligentes que potencian tu negocio con análisis de datos, automatización y predicción.</p>
                
                <div class="space-y-4">
                    <div class="bg-gray-900 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">1</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Chatbots inteligentes</h3>
                                <p class="text-gray-400">Desarrollo de asistentes virtuales capaces de mantener conversaciones naturales y resolver consultas de usuarios automáticamente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">2</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Análisis predictivo</h3>
                                <p class="text-gray-400">Implementación de modelos de aprendizaje automático para predecir comportamientos, detectar patrones y optimizar procesos de negocio.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">3</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Procesamiento de lenguaje natural</h3>
                                <p class="text-gray-400">Análisis de textos, clasificación automática de contenidos y extracción de información relevante de grandes volúmenes de datos no estructurados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mobile" class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Aplicaciones Móviles</h2>
                <p class="text-gray-300 mb-8">Desarrollamos aplicaciones móviles conectadas a backends en Laravel para una experiencia integral.</p>
                
                <div class="space-y-4">
                    <div class="bg-gray-800 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">1</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Apps nativas e híbridas</h3>
                                <p class="text-gray-400">Desarrollo de aplicaciones nativas para iOS y Android, o aplicaciones híbridas con tecnologías como React Native o Flutter.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">2</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Integración con backend en Laravel</h3>
                                <p class="text-gray-400">Conexión perfecta entre tu aplicación móvil y una potente API desarrollada con Laravel, asegurando sincronización en tiempo real y alta seguridad.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-800 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">3</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Diseño UX/UI optimizado</h3>
                                <p class="text-gray-400">Interfaces intuitivas y atractivas diseñadas siguiendo las últimas tendencias y mejores prácticas para maximizar la satisfacción del usuario.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="service-visual rounded-xl shadow-lg overflow-hidden">
                    <!-- Efecto de resplandor -->
                    <div class="service-glow mobile-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="floating-elements">
                        <div class="floating-element" style="width: 20px; height: 20px; background-color: rgba(59, 130, 246, 0.4); top: 30%; left: 40%; animation-delay: 0.7s;"></div>
                        <div class="floating-element" style="width: 30px; height: 30px; background-color: rgba(37, 99, 235, 0.4); top: 70%; left: 30%; animation-delay: 1.7s;"></div>
                        <div class="floating-element" style="width: 25px; height: 25px; background-color: rgba(29, 78, 216, 0.4); top: 50%; left: 80%; animation-delay: 2.7s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-blue-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-6xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="consulting" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2 order-2 md:order-1">
                <div class="service-visual rounded-xl shadow-lg overflow-hidden">
                    <!-- Efecto de resplandor -->
                    <div class="service-glow consulting-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="floating-elements">
                        <div class="floating-element" style="width: 18px; height: 18px; background-color: rgba(59, 130, 246, 0.4); top: 35%; left: 25%; animation-delay: 0.3s;"></div>
                        <div class="floating-element" style="width: 28px; height: 28px; background-color: rgba(37, 99, 235, 0.4); top: 55%; left: 15%; animation-delay: 1.3s;"></div>
                        <div class="floating-element" style="width: 22px; height: 22px; background-color: rgba(29, 78, 216, 0.4); top: 25%; left: 65%; animation-delay: 2.3s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-blue-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-lightbulb text-6xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-6">Consultoría Tecnológica</h2>
                <p class="text-gray-300 mb-8">Asesoramiento estratégico para transformar digitalmente tu negocio y maximizar el valor de tus inversiones tecnológicas.</p>
                
                <div class="space-y-4">
                    <div class="bg-gray-900 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">1</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Auditoría de sistemas</h3>
                                <p class="text-gray-400">Evaluamos tus sistemas actuales para identificar oportunidades de mejora en rendimiento, seguridad y arquitectura.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">2</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Estrategia de transformación digital</h3>
                                <p class="text-gray-400">Diseñamos hojas de ruta personalizadas para implementar tecnologías avanzadas que impulsen tu competitividad en el mercado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-5 rounded-lg border border-blue-500/20 shadow-md hover:shadow-blue-500/5 transition-all duration-300 hover:border-blue-500/30">
                        <div class="flex items-start">
                            <div class="mr-4 bg-blue-600 text-white text-lg w-8 h-8 rounded-full flex items-center justify-center font-bold shadow-md">3</div>
                            <div>
                                <h3 class="font-bold text-lg mb-2 text-blue-300">Capacitación y transferencia de conocimiento</h3>
                                <p class="text-gray-400">Formamos a tu equipo en las mejores prácticas y tecnologías para maximizar la autonomía y el desarrollo continuo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de trabajo -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Nuestro Proceso de Trabajo</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">Seguimos una metodología probada para entregar soluciones de alta calidad que satisfacen las necesidades específicas de tu negocio.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Paso 1 -->
            <div class="bg-gray-800 rounded-xl p-6 border border-blue-500/20 shadow-lg relative z-10 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-blue-500/5">
                <div class="absolute -top-5 -left-5 w-14 h-14 rounded-full bg-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg">1</div>
                <div class="mt-4 mb-4">
                    <i class="fas fa-comments text-blue-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Consulta y Análisis</h3>
                <p class="text-gray-400">Escuchamos tus necesidades, analizamos tu situación actual y definimos los objetivos del proyecto en detalle.</p>
            </div>

            <!-- Paso 2 -->
            <div class="bg-gray-800 rounded-xl p-6 border border-blue-500/20 shadow-lg relative z-10 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-blue-500/5">
                <div class="absolute -top-5 -left-5 w-14 h-14 rounded-full bg-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg">2</div>
                <div class="mt-4 mb-4">
                    <i class="fas fa-pencil-ruler text-blue-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Diseño y Planificación</h3>
                <p class="text-gray-400">Creamos un plan detallado, definimos la arquitectura técnica y diseñamos la solución adaptada a tus requisitos.</p>
            </div>

            <!-- Paso 3 -->
            <div class="bg-gray-800 rounded-xl p-6 border border-blue-500/20 shadow-lg relative z-10 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-blue-500/5">
                <div class="absolute -top-5 -left-5 w-14 h-14 rounded-full bg-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg">3</div>
                <div class="mt-4 mb-4">
                    <i class="fas fa-code text-blue-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Desarrollo e Implementación</h3>
                <p class="text-gray-400">Nuestro equipo desarrolla la solución utilizando metodologías ágiles con iteraciones y revisiones constantes.</p>
            </div>

            <!-- Paso 4 -->
            <div class="bg-gray-800 rounded-xl p-6 border border-blue-500/20 shadow-lg relative z-10 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-blue-500/5">
                <div class="absolute -top-5 -left-5 w-14 h-14 rounded-full bg-blue-600 flex items-center justify-center text-white text-2xl font-bold shadow-lg">4</div>
                <div class="mt-4 mb-4">
                    <i class="fas fa-rocket text-blue-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Entrega y Soporte Continuo</h3>
                <p class="text-gray-400">Implementamos la solución, realizamos pruebas exhaustivas y proporcionamos soporte técnico continuo.</p>
            </div>
        </div>
    </div>
</section>

<!-- Empresas que confían en nosotros -->
<section class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Empresas que Confían en Nosotros</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Hemos ayudado a empresas de diversos sectores a transformar su negocio con soluciones tecnológicas innovadoras.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
            <div class="bg-gray-900 p-5 rounded-xl border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300 flex items-center justify-center">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center bg-blue-900/30 rounded-full">
                        <i class="fas fa-building text-blue-300 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-300">TechCorp</h3>
                </div>
            </div>

            <div class="bg-gray-900 p-5 rounded-xl border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300 flex items-center justify-center">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center bg-blue-900/30 rounded-full">
                        <i class="fas fa-shopping-cart text-blue-300 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-300">EcoShop</h3>
                </div>
            </div>

            <div class="bg-gray-900 p-5 rounded-xl border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300 flex items-center justify-center">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center bg-blue-900/30 rounded-full">
                        <i class="fas fa-chart-line text-blue-300 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-300">FinancePlus</h3>
                </div>
            </div>

            <div class="bg-gray-900 p-5 rounded-xl border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300 flex items-center justify-center">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center bg-blue-900/30 rounded-full">
                        <i class="fas fa-graduation-cap text-blue-300 text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-blue-300">EduTech</h3>
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
                <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Necesitas una solución personalizada?</h2>
                <p class="text-xl text-blue-100">Contáctanos para discutir cómo podemos ayudarte a alcanzar tus objetivos con tecnología de vanguardia.</p>
            </div>
            <div>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    Solicitar asesoría
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Efecto de revelación en scroll
        const revealElements = document.querySelectorAll('.bg-gray-800, .bg-gray-900');

        const revealOnScroll = function() {
            for (let i = 0; i < revealElements.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = revealElements[i].getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    revealElements[i].classList.add('animate-fade-in');
                }
            }
        };

        // Añadir clase para animación fade-in
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                0% { opacity: 0; transform: translateY(20px); }
                100% { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in {
                animation: fadeIn 0.6s ease-out forwards;
            }
            .bg-gray-800, .bg-gray-900 {
                opacity: 0;
            }
        `;
        document.head.appendChild(style);

        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Ejecutar una vez al cargar la página

        // Añadir interactividad a las cards de servicios
        const serviceCards = document.querySelectorAll('.border-blue-500\\/20');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 10px 25px -5px rgba(59, 130, 246, 0.1)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });
    });
</script>
@endsection