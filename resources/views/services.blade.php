@extends('layouts.app')

@section('title', 'Servicios - DendrIA')

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
        background: radial-gradient(circle, rgba(16, 185, 129, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .mobile-glow {
        background: radial-gradient(circle, rgba(236, 72, 153, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .consulting-glow {
        background: radial-gradient(circle, rgba(245, 158, 11, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
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
<div class="gradient-bg py-32 services-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 relative z-10">Nuestros Servicios</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10">Soluciones tecnológicas a medida que integran Laravel e Inteligencia Artificial para resolver problemas complejos.</p>
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
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Aplicaciones SPA y MPA</h3>
                        <p class="text-gray-400">Desarrollo de aplicaciones de una sola página (SPA) con Vue.js o React, o aplicaciones multipágina (MPA) con Blade, según los requerimientos de tu proyecto.</p>
                    </div>
                    
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">APIs RESTful</h3>
                        <p class="text-gray-400">Diseño e implementación de APIs seguras, eficientes y bien documentadas para la comunicación entre sistemas y aplicaciones móviles.</p>
                    </div>
                    
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Integraciones con servicios externos</h3>
                        <p class="text-gray-400">Conectamos tu aplicación con servicios de terceros como pasarelas de pago, CRMs, herramientas de marketing y APIs públicas.</p>
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
                        <div class="floating-element" style="width: 15px; height: 15px; background-color: rgba(16, 185, 129, 0.4); top: 25%; left: 35%; animation-delay: 0.5s;"></div>
                        <div class="floating-element" style="width: 25px; height: 25px; background-color: rgba(5, 150, 105, 0.4); top: 65%; left: 25%; animation-delay: 1.5s;"></div>
                        <div class="floating-element" style="width: 35px; height: 35px; background-color: rgba(4, 120, 87, 0.4); top: 45%; left: 75%; animation-delay: 2.5s;"></div>
                    </div>
                    
                    <!-- Red neuronal simplificada -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-green-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-brain text-6xl text-green-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-6">Soluciones de IA</h2>
                <p class="text-gray-300 mb-8">Implementamos sistemas inteligentes que potencian tu negocio con análisis de datos, automatización y predicción.</p>
                
                <div class="space-y-4">
                    <div class="bg-gray-900 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Chatbots inteligentes</h3>
                        <p class="text-gray-400">Desarrollo de asistentes virtuales capaces de mantener conversaciones naturales y resolver consultas de usuarios automáticamente.</p>
                    </div>
                    
                    <div class="bg-gray-900 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Análisis predictivo</h3>
                        <p class="text-gray-400">Implementación de modelos de aprendizaje automático para predecir comportamientos, detectar patrones y optimizar procesos de negocio.</p>
                    </div>
                    
                    <div class="bg-gray-900 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Procesamiento de lenguaje natural</h3>
                        <p class="text-gray-400">Análisis de textos, clasificación automática de contenidos y extracción de información relevante de grandes volúmenes de datos no estructurados.</p>
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
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Apps nativas e híbridas</h3>
                        <p class="text-gray-400">Desarrollo de aplicaciones nativas para iOS y Android, o aplicaciones híbridas con tecnologías como React Native o Flutter.</p>
                    </div>
                    
                    <div class="bg-gray-800 p-4 rounded-lg">
                    <h3 class="font-bold mb-2">Integración con backend en Laravel</h3>
                        <p class="text-gray-400">Conexión perfecta entre tu aplicación móvil y una potente API desarrollada con Laravel, asegurando sincronización en tiempo real y alta seguridad.</p>
                    </div>
                    
                    <div class="bg-gray-800 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Diseño UX/UI optimizado</h3>
                        <p class="text-gray-400">Interfaces intuitivas y atractivas diseñadas siguiendo las últimas tendencias y mejores prácticas para maximizar la satisfacción del usuario.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="service-visual rounded-xl shadow-lg overflow-hidden">
                    <!-- Efecto de resplandor -->
                    <div class="service-glow mobile-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="floating-elements">
                        <div class="floating-element" style="width: 20px; height: 20px; background-color: rgba(236, 72, 153, 0.4); top: 30%; left: 40%; animation-delay: 0.7s;"></div>
                        <div class="floating-element" style="width: 30px; height: 30px; background-color: rgba(219, 39, 119, 0.4); top: 70%; left: 30%; animation-delay: 1.7s;"></div>
                        <div class="floating-element" style="width: 25px; height: 25px; background-color: rgba(190, 24, 93, 0.4); top: 50%; left: 80%; animation-delay: 2.7s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-pink-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-6xl text-pink-400"></i>
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
                        <div class="floating-element" style="width: 18px; height: 18px; background-color: rgba(245, 158, 11, 0.4); top: 35%; left: 25%; animation-delay: 0.3s;"></div>
                        <div class="floating-element" style="width: 28px; height: 28px; background-color: rgba(217, 119, 6, 0.4); top: 55%; left: 15%; animation-delay: 1.3s;"></div>
                        <div class="floating-element" style="width: 22px; height: 22px; background-color: rgba(180, 83, 9, 0.4); top: 25%; left: 65%; animation-delay: 2.3s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="floating-icon">
                            <div class="w-32 h-32 bg-yellow-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-lightbulb text-6xl text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-6">Consultoría Tecnológica</h2>
                <p class="text-gray-300 mb-8">Asesoramiento estratégico para transformar digitalmente tu negocio y maximizar el valor de tus inversiones tecnológicas.</p>
                
                <div class="space-y-4">
                    <div class="bg-gray-900 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Auditoría de sistemas</h3>
                        <p class="text-gray-400">Evaluamos tus sistemas actuales para identificar oportunidades de mejora en rendimiento, seguridad y arquitectura.</p>
                    </div>
                    
                    <div class="bg-gray-900 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Estrategia de transformación digital</h3>
                        <p class="text-gray-400">Diseñamos hojas de ruta personalizadas para implementar tecnologías avanzadas que impulsen tu competitividad en el mercado.</p>
                    </div>
                    
                    <div class="bg-gray-900 p-4 rounded-lg">
                        <h3 class="font-bold mb-2">Capacitación y transferencia de conocimiento</h3>
                        <p class="text-gray-400">Formamos a tu equipo en las mejores prácticas y tecnologías para maximizar la autonomía y el desarrollo continuo.</p>
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
    // Si deseas agregar alguna funcionalidad JavaScript adicional para los servicios
    document.addEventListener('DOMContentLoaded', function() {
        // Puedes agregar aquí alguna animación o interacción adicional si lo necesitas
        console.log('Página de servicios cargada');
    });
</script>
@endsection