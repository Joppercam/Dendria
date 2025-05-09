@extends('layouts.app')

@section('title', 'Inicio - Desarrollo de Software Potenciado por IA')

@section('styles')
<style>
    .neural-network-animation {
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
    }

    .glass-card {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .glass-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 0.75rem;
        z-index: -1;
    }
    
    /* Efectos de iluminación ambiental */
    .gradient-bg::before {
        content: '';
        position: absolute;
        top: 15%;
        left: 5%;
        width: 30%;
        height: 30%;
        background: radial-gradient(circle, rgba(56, 189, 248, 0.15) 0%, rgba(0, 0, 0, 0) 70%);
        z-index: 0;
        filter: blur(50px);
        animation: breathe 8s ease-in-out infinite;
    }
    
    .gradient-bg::after {
        content: '';
        position: absolute;
        bottom: 10%;
        right: 5%;
        width: 35%;
        height: 35%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, rgba(0, 0, 0, 0) 70%);
        z-index: 0;
        filter: blur(50px);
        animation: breathe 8s ease-in-out infinite 4s;
    }
    
    @keyframes breathe {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.6;
            transform: scale(1.1);
        }
    }

    /* Animaciones para servicios */
    .mini-service-visual {
        position: relative;
        height: 140px;
        overflow: hidden;
        border-radius: 0.5rem;
    }
    
    .mini-service-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(40px);
        opacity: 0.6;
        z-index: 0;
        animation: pulse-glow 6s ease-in-out infinite;
        width: 80%; 
        height: 80%; 
        top: 10%; 
        left: 10%;
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
    
    .mini-floating-icon {
        position: relative;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }
    
    .mini-floating-elements {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    
    .mini-floating-element {
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
            transform: translateY(-10px) translateX(6px);
        }
        50% {
            transform: translateY(3px) translateX(-6px);
        }
        75% {
            transform: translateY(6px) translateX(3px);
        }
    }
    
    /* Estilos para visualizaciones de productos */
    .product-visual {
        position: relative;
        height: 300px;
        overflow: hidden;
        border-radius: 0.75rem;
    }
    
    .product-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.6;
        z-index: 0;
        animation: pulse-glow 6s ease-in-out infinite;
    }
    
    .chat-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .commerce-glow {
        background: radial-gradient(circle, rgba(16, 185, 129, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    .insight-glow {
        background: radial-gradient(circle, rgba(168, 85, 247, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }
    
    /* Animaciones para visualizaciones dinámicas */
    .chat-animation {
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .chat-bubble {
        position: absolute;
        padding: 8px 12px;
        border-radius: 12px;
        font-size: 0.8rem;
        opacity: 0;
        animation: fadeInOut 8s ease-in-out infinite;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 70%;
    }
    
    .user-bubble {
        background-color: rgba(59, 130, 246, 0.2);
        border: 1px solid rgba(59, 130, 246, 0.3);
        right: 10%;
        text-align: right;
    }
    
    .ai-bubble {
        background-color: rgba(59, 130, 246, 0.7);
        color: white;
        left: 10%;
    }
    
    @keyframes fadeInOut {
        0%, 100% { opacity: 0; transform: translateY(20px); }
        10%, 90% { opacity: 1; transform: translateY(0); }
    }
    
    /* Animación para eCommerce */
    .commerce-animation {
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .product-card {
        position: absolute;
        width: 120px;
        height: 160px;
        background-color: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        border: 1px solid rgba(16, 185, 129, 0.3);
        overflow: hidden;
        opacity: 0;
        animation: floatIn 10s ease-in-out infinite;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    
    .product-card::after {
        content: '';
        position: absolute;
        top: 65%;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(16, 185, 129, 0.1);
    }
    
    @keyframes floatIn {
        0%, 100% { opacity: 0; transform: scale(0.8) translateY(30px); }
        20%, 80% { opacity: 1; transform: scale(1) translateY(0); }
    }
    
    /* Animación para analytics */
    .analytics-animation {
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .data-point {
        position: absolute;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(168, 85, 247, 0.7);
        opacity: 0;
        z-index: 5;
    }
    
    .data-line {
        position: absolute;
        height: 2px;
        background-color: rgba(168, 85, 247, 0.4);
        transform-origin: left center;
        transform: scaleX(0);
        z-index: 4;
    }
    
    .chart-bar {
        position: absolute;
        width: 25px;
        border-radius: 4px 4px 0 0;
        bottom: 40px;
        background-color: rgba(168, 85, 247, 0.3);
        transform: scaleY(0);
        transform-origin: bottom;
        animation: growBar 12s ease-in-out infinite;
    }
    
    @keyframes growBar {
        0% { transform: scaleY(0); }
        20%, 80% { transform: scaleY(1); }
        100% { transform: scaleY(0); }
    }
    
    .data-container {
        position: absolute;
        width: 80%;
        height: 60%;
        top: 20%;
        left: 10%;
        border-bottom: 2px solid rgba(168, 85, 247, 0.3);
        border-left: 2px solid rgba(168, 85, 247, 0.3);
    }
    
    .insight-tag {
        position: absolute;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.7rem;
        background-color: rgba(168, 85, 247, 0.7);
        color: white;
        opacity: 0;
        animation: fadeSlideIn 12s ease-in-out infinite;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }
    
    @keyframes fadeSlideIn {
        0%, 100% { opacity: 0; transform: translateX(-20px); }
        30%, 70% { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes growLine {
        0% { transform: scaleX(0); }
        20%, 80% { transform: scaleX(1); }
        100% { transform: scaleX(0); }
    }
    
    .tech-icon {
        width: 60px;
        height: 60px;
        background: rgba(59, 130, 246, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        transition: all 0.3s ease;
    }
    
    .tech-card:hover .tech-icon {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(59, 130, 246, 0.1);
    }
</style>
@endsection

@section('hero')
<!-- Contenedor principal -->
<div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between mt-8">
    <!-- Contenido de texto -->
    <div class="md:w-1/2 text-center md:text-left z-10">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
            Desarrollo de <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Software Inteligente</span> para el mundo moderno
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8">
            Transformamos ideas en soluciones tecnológicas avanzadas, impulsadas por Inteligencia Artificial y desarrolladas con Laravel
        </p>
        <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4">
            <a href="{{ route('contact') }}" class="accent-gradient hover:opacity-90 text-white font-bold py-3 px-8 rounded-lg transition transform hover:scale-105">
                Iniciar proyecto
            </a>
            <a href="{{ route('services') }}" class="bg-gray-800 border border-gray-700 hover:bg-gray-700 text-white font-bold py-3 px-8 rounded-lg transition">
                Explorar servicios
            </a>
        </div>
    </div>
    
    <!-- Elemento visual: Animación de partículas/conexiones neuronales -->
    <div class="md:w-1/2 mt-12 md:mt-0 relative">
        <div class="neural-network-animation">
            <!-- Las partículas y conexiones se generarán con JS -->
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
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Nuestros Servicios</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Soluciones tecnológicas a medida que combinan la potencia de Laravel con la innovación de la Inteligencia Artificial</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Servicio 1: Desarrollo Web -->
            <div class="bg-gray-900 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="mini-service-visual">
                    <!-- Efecto de resplandor -->
                    <div class="mini-service-glow web-glow"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="mini-floating-elements">
                        <div class="mini-floating-element" style="width: 15px; height: 15px; background-color: rgba(59, 130, 246, 0.4); top: 20%; left: 30%; animation-delay: 0s;"></div>
                        <div class="mini-floating-element" style="width: 10px; height: 10px; background-color: rgba(96, 165, 250, 0.4); top: 60%; left: 20%; animation-delay: 1s;"></div>
                        <div class="mini-floating-element" style="width: 20px; height: 20px; background-color: rgba(37, 99, 235, 0.4); top: 40%; left: 70%; animation-delay: 2s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="mini-floating-icon">
                            <div class="w-20 h-20 bg-blue-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-code text-3xl text-blue-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Desarrollo Web Personalizado</h3>
                    <p class="text-gray-400 mb-4">Creamos aplicaciones web escalables y seguras utilizando Laravel, optimizadas para rendimiento y experiencia de usuario.</p>
                    <a href="{{ route('services') }}#web" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Servicio 2: Soluciones de IA -->
            <div class="bg-gray-900 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="mini-service-visual">
                    <!-- Efecto de resplandor -->
                    <div class="mini-service-glow ai-glow"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="mini-floating-elements">
                        <div class="mini-floating-element" style="width: 8px; height: 8px; background-color: rgba(16, 185, 129, 0.4); top: 25%; left: 35%; animation-delay: 0.5s;"></div>
                        <div class="mini-floating-element" style="width: 12px; height: 12px; background-color: rgba(5, 150, 105, 0.4); top: 65%; left: 25%; animation-delay: 1.5s;"></div>
                        <div class="mini-floating-element" style="width: 15px; height: 15px; background-color: rgba(4, 120, 87, 0.4); top: 45%; left: 75%; animation-delay: 2.5s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="mini-floating-icon">
                            <div class="w-20 h-20 bg-green-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-brain text-3xl text-green-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Soluciones de IA</h3>
                    <p class="text-gray-400 mb-4">Implementamos sistemas inteligentes que potencian tu negocio con análisis de datos, automatización y predicción.</p>
                    <a href="{{ route('services') }}#ai" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Servicio 3: Aplicaciones Móviles -->
            <div class="bg-gray-900 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="mini-service-visual">
                    <!-- Efecto de resplandor -->
                    <div class="mini-service-glow mobile-glow"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="mini-floating-elements">
                        <div class="mini-floating-element" style="width: 10px; height: 10px; background-color: rgba(236, 72, 153, 0.4); top: 30%; left: 40%; animation-delay: 0.7s;"></div>
                        <div class="mini-floating-element" style="width: 15px; height: 15px; background-color: rgba(219, 39, 119, 0.4); top: 70%; left: 30%; animation-delay: 1.7s;"></div>
                        <div class="mini-floating-element" style="width: 12px; height: 12px; background-color: rgba(190, 24, 93, 0.4); top: 50%; left: 80%; animation-delay: 2.7s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="mini-floating-icon">
                            <div class="w-20 h-20 bg-pink-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-3xl text-pink-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Aplicaciones Móviles</h3>
                    <p class="text-gray-400 mb-4">Desarrollamos aplicaciones móviles conectadas a backends en Laravel para una experiencia integral.</p>
                    <a href="{{ route('services') }}#mobile" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Servicio 4: Consultoría Tecnológica -->
            <div class="bg-gray-900 rounded-xl shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="mini-service-visual">
                    <!-- Efecto de resplandor -->
                    <div class="mini-service-glow consulting-glow"></div>
                    
                    <!-- Elementos flotantes -->
                    <div class="mini-floating-elements">
                        <div class="mini-floating-element" style="width: 9px; height: 9px; background-color: rgba(245, 158, 11, 0.4); top: 35%; left: 25%; animation-delay: 0.3s;"></div>
                        <div class="mini-floating-element" style="width: 14px; height: 14px; background-color: rgba(217, 119, 6, 0.4); top: 55%; left: 15%; animation-delay: 1.3s;"></div>
                        <div class="mini-floating-element" style="width: 11px; height: 11px; background-color: rgba(180, 83, 9, 0.4); top: 25%; left: 65%; animation-delay: 2.3s;"></div>
                    </div>
                    
                    <!-- Icono central -->
                    <div class="flex items-center justify-center h-full">
                        <div class="mini-floating-icon">
                            <div class="w-20 h-20 bg-yellow-900/30 rounded-full flex items-center justify-center">
                                <i class="fas fa-lightbulb text-3xl text-yellow-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3">Consultoría Tecnológica</h3>
                    <p class="text-gray-400 mb-4">Asesoramiento estratégico para transformar digitalmente tu negocio y maximizar el valor de tus inversiones.</p>
                    <a href="{{ route('services') }}#consulting" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Productos Destacados -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Productos Destacados</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Nuestras soluciones listas para implementar más populares</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="product-visual">
                    <!-- Efecto de resplandor -->
                    <div class="product-glow chat-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Animación de chat -->
                    <div class="chat-animation">
                        <div class="chat-bubble user-bubble" style="top: 20%; animation-delay: 0s;">
                            ¿Cómo puedo configurar mi cuenta?
                        </div>
                        <div class="chat-bubble ai-bubble" style="top: 35%; animation-delay: 1s;">
                            Puedo ayudarte con eso. Para configurar tu cuenta, ve a "Mi perfil" y luego a "Configuración".
                        </div>
                        <div class="chat-bubble user-bubble" style="top: 60%; animation-delay: 4s;">
                            ¿Cómo cambio mi método de pago?
                        </div>
                        <div class="chat-bubble ai-bubble" style="top: 75%; animation-delay: 5s;">
                            En la sección "Facturación" encontrarás las opciones de métodos de pago. ¿Necesitas instrucciones específicas?
                        </div>
                        
                        <!-- Elemento de asistente flotante -->
                        <div style="position: absolute; bottom: 20px; right: 20px; width: 60px; height: 60px; background: linear-gradient(145deg, #3B82F6, #2563EB); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(37, 99, 235, 0.4);">
                            <i class="fas fa-robot text-white text-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-center">DendrIA Chat</h3>
                    <p class="text-gray-400 mb-4">Asistente virtual que se integra en tu sitio web para brindar soporte 24/7 a tus clientes y responder consultas automáticamente.</p>
                    <a href="{{ route('products') }}" class="block text-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="product-visual">
                    <!-- Efecto de resplandor -->
                    <div class="product-glow commerce-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Animación de eCommerce -->
                    <div class="commerce-animation">
                        <!-- Rejilla de fondo -->
                        <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(16, 185, 129, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(16, 185, 129, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
                        
                        <!-- Tarjetas de productos -->
                        <div class="product-card" style="top: 15%; left: 15%; animation-delay: 0s;">
                            <div style="height: 60%; background: radial-gradient(circle at center, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.1))"></div>
                            <div style="padding: 8px;">
                                <div style="width: 80%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                                <div style="width: 60%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="product-card" style="top: 30%; left: 50%; animation-delay: 2s;">
                            <div style="height: 60%; background: radial-gradient(circle at center, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.1))"></div>
                            <div style="padding: 8px;">
                                <div style="width: 70%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                                <div style="width: 50%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="product-card" style="top: 50%; left: 25%; animation-delay: 4s;">
                            <div style="height: 60%; background: radial-gradient(circle at center, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.1))"></div>
                            <div style="padding: 8px;">
                                <div style="width: 75%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                                <div style="width: 55%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <!-- Recomendaciones de IA -->
                        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(16, 185, 129, 0.2); border: 1px solid rgba(16, 185, 129, 0.4); border-radius: 8px; padding: 10px; backdrop-filter: blur(5px);">
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div style="width: 20px; height: 20px; background: linear-gradient(145deg, #10B981, #059669); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 8px;">
                                    <i class="fas fa-robot text-white text-xs"></i>
                                </div>
                                <div style="font-size: 0.75rem; color: #10B981; font-weight: bold;">IA Recomienda</div>
                            </div>
                            <div style="width: 100%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                            <div style="width: 80%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-center">PymeCommerce</h3>
                    <p class="text-gray-400 mb-4">Plataforma de comercio electrónico diseñada específicamente para PyMEs chilenas, con todas las integraciones locales necesarias.</p>
                    <a href="{{ route('products') }}" class="block text-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2">
                <div class="product-visual">
                    <!-- Efecto de resplandor -->
                    <div class="product-glow insight-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>
                    
                    <!-- Animación de analítica -->
                    <div class="analytics-animation">
                        <!-- Rejilla de fondo -->
                        <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(168, 85, 247, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(168, 85, 247, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
                        
                        <!-- Contenedor de gráfico -->
                        <div class="data-container">
                            <!-- Puntos de datos -->
                            <div class="data-point" style="top: 30%; left: 20%; animation: fadeInOut 12s ease-in-out infinite;"></div>
                            <div class="data-point" style="top: 50%; left: 40%; animation: fadeInOut 12s ease-in-out 1s infinite;"></div>
                            <div class="data-point" style="top: 20%; left: 60%; animation: fadeInOut 12s ease-in-out 2s infinite;"></div>
                            <div class="data-point" style="top: 60%; left: 80%; animation: fadeInOut 12s ease-in-out 3s infinite;"></div>
                            
                            <!-- Líneas conectoras -->
                            <div class="data-line" style="top: 31%; left: 21%; width: 20%; transform: rotate(15deg); animation: growLine 12s ease-in-out 1s infinite;"></div>
                            <div class="data-line" style="top: 51%; left: 41%; width: 20%; transform: rotate(-30deg); animation: growLine 12s ease-in-out 2s infinite;"></div>
                            <div class="data-line" style="top: 21%; left: 61%; width: 20%; transform: rotate(50deg); animation: growLine 12s ease-in-out 3s infinite;"></div>
                            
                            <!-- Barras de gráfico -->
                            <div class="chart-bar" style="height: 60%; left: 15%; animation-delay: 0s; background-color: rgba(168, 85, 247, 0.5);"></div>
                            <div class="chart-bar" style="height: 40%; left: 45%; animation-delay: 1s; background-color: rgba(168, 85, 247, 0.5);"></div>
                            <div class="chart-bar" style="height: 75%; left: 75%; animation-delay: 2s; background-color: rgba(168, 85, 247, 0.5);"></div>
                        </div>
                        
                        <!-- Tags de insights -->
                        <div class="insight-tag" style="top: 20%; left: 50%; animation-delay: 2s;">
                            +42% Crecimiento
                        </div>
                        <div class="insight-tag" style="top: 50%; left: 20%; animation-delay: 6s;">
                            Tendencia detectada
                        </div>
                        
                        <!-- Panel de IA -->
                        <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(168, 85, 247, 0.2); border: 1px solid rgba(168, 85, 247, 0.4); border-radius: 8px; padding: 10px; backdrop-filter: blur(5px);">
                            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                                <div style="width: 20px; height: 20px; background: linear-gradient(145deg, #A855F7, #9333EA); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 8px;">
                                    <i class="fas fa-lightbulb text-white text-xs"></i>
                                </div>
                                <div style="font-size: 0.75rem; color: #A855F7; font-weight: bold;">Insight generado por IA</div>
                            </div>
                            <div style="width: 100%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                            <div style="width: 80%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-center">InsightMind</h3>
                    <p class="text-gray-400 mb-4">Plataforma de análisis de datos impulsada por IA que transforma información compleja en insights accionables para tu negocio.</p>
                    <a href="{{ route('products') }}" class="block text-center text-blue-400 hover:text-blue-300">
                        Conocer más <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('products') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                Ver todos los productos
            </a>
        </div>
    </div>
</section>



<!-- Tecnologías para desarrollo de software con IA -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Tecnologías para Desarrollo con IA</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Combinamos las mejores herramientas y frameworks para crear soluciones de software inteligentes</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="md:pr-10">
                <div class="bg-gray-800 rounded-xl p-8 shadow-lg relative overflow-hidden">
                    <!-- Efecto visual de fondo -->
                    <div class="absolute inset-0 opacity-10">
                        <img src="{{ asset('images/neural-network.jpg') }}" alt="IA Background" class="w-full h-full object-cover">
                    </div>
                    
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Stack Tecnológico Potenciado por IA</h3>
                        
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                            <div class="tech-card bg-gray-900/80 p-4 rounded-lg backdrop-blur-sm hover:shadow-lg transition hover:-translate-y-1 text-center">
                                <div class="tech-icon mx-auto">
                                    <i class="fab fa-laravel text-2xl text-red-500"></i>
                                </div>
                                <h4 class="font-bold">Laravel</h4>
                                <p class="text-xs text-gray-400 mt-1">Framework Backend</p>
                            </div>
                            
                            <div class="tech-card bg-gray-900/80 p-4 rounded-lg backdrop-blur-sm hover:shadow-lg transition hover:-translate-y-1 text-center">
                                <div class="tech-icon mx-auto">
                                    <i class="fas fa-brain text-2xl text-blue-500"></i>
                                </div>
                                <h4 class="font-bold">OpenAI</h4>
                                <p class="text-xs text-gray-400 mt-1">API de IA</p>
                            </div>
                            
                            <div class="tech-card bg-gray-900/80 p-4 rounded-lg backdrop-blur-sm hover:shadow-lg transition hover:-translate-y-1 text-center">
                                <div class="tech-icon mx-auto">
                                    <i class="fab fa-python text-2xl text-yellow-500"></i>
                                </div>
                                <h4 class="font-bold">Python</h4>
                                <p class="text-xs text-gray-400 mt-1">ML & Análisis</p>
                            </div>
                            
                            <div class="tech-card bg-gray-900/80 p-4 rounded-lg backdrop-blur-sm hover:shadow-lg transition hover:-translate-y-1 text-center">
                                <div class="tech-icon mx-auto">
                                    <i class="fab fa-vuejs text-2xl text-green-500"></i>
                                </div>
                                <h4 class="font-bold">Vue.js</h4>
                                <p class="text-xs text-gray-400 mt-1">Frontend Reactivo</p>
                            </div>
                            
                            <div class="tech-card bg-gray-900/80 p-4 rounded-lg backdrop-blur-sm hover:shadow-lg transition hover:-translate-y-1 text-center">
                                <div class="tech-icon mx-auto">
                                    <i class="fas fa-database text-2xl text-orange-500"></i>
                                </div>
                                <h4 class="font-bold">MySQL</h4>
                                <p class="text-xs text-gray-400 mt-1">Base de Datos</p>
                            </div>
                            
                            <div class="tech-card bg-gray-900/80 p-4 rounded-lg backdrop-blur-sm hover:shadow-lg transition hover:-translate-y-1 text-center">
                                <div class="tech-icon mx-auto">
                                    <i class="fab fa-aws text-2xl text-yellow-500"></i>
                                </div>
                                <h4 class="font-bold">AWS</h4>
                                <p class="text-xs text-gray-400 mt-1">Cloud Services</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <p class="mt-2 text-gray-400">Nuestras soluciones incluyen protección contra vulnerabilidades comunes y algoritmos de IA para detección de patrones anómalos.</p>
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
                            <p class="mt-2 text-gray-400">Combinamos la rapidez de Laravel con algoritmos de IA optimizados para ofrecer respuestas inteligentes en tiempo real.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Escalabilidad cloud-native</h4>
                            <p class="mt-2 text-gray-400">Arquitectura escalable diseñada para crecer con tu negocio, con APIs modulares y microservicios desplegados en la nube.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-cogs"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Integración con modelos de IA</h4>
                            <p class="mt-2 text-gray-400">Conectamos tus aplicaciones con modelos de lenguaje avanzados como GPT-4, sistemas de visión artificial, análisis predictivo y más.</p>
                        </div>
                    </div>
                    
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                                <i class="fas fa-code-branch"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium text-white">Desarrollo ágil potenciado por IA</h4>
                            <p class="mt-2 text-gray-400">Metodología que incorpora herramientas de IA para acelerar el ciclo de desarrollo, mejorar la calidad del código y reducir errores.</p>
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

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Configuración para la animación
        const config = {
            nodeCount: 30,           // Cantidad de nodos
            connectionThreshold: 150, // Distancia máxima entre conexiones
            nodeSize: [2, 5],         // Tamaño mínimo y máximo de nodos
            speed: [0.2, 0.7],        // Velocidad mínima y máxima
            colors: ['#3B82F6', '#38BDF8', '#7DD3FC'] // Colores azules para los nodos
        };

        // Obtener el contenedor
        const container = document.querySelector('.neural-network-animation');
        const width = container.offsetWidth;
        const height = container.offsetHeight;
        
        // Crear canvas
        const canvas = document.createElement('canvas');
        canvas.width = width;
        canvas.height = height;
        container.appendChild(canvas);
        
        const ctx = canvas.getContext('2d');
        
        // Crear nodos
        const nodes = [];
        for (let i = 0; i < config.nodeCount; i++) {
            nodes.push({
                x: Math.random() * width,
                y: Math.random() * height,
                size: config.nodeSize[0] + Math.random() * (config.nodeSize[1] - config.nodeSize[0]),
                speedX: (Math.random() - 0.5) * config.speed[1],
                speedY: (Math.random() - 0.5) * config.speed[1],
                color: config.colors[Math.floor(Math.random() * config.colors.length)]
            });
        }
        
        // Función de animación
        function animate() {
            // Limpiar canvas
            ctx.clearRect(0, 0, width, height);
            
            // Dibujar conexiones
            ctx.lineWidth = 0.5;
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const distance = Math.sqrt(dx * dx + dy * dy);
                    
                    if (distance < config.connectionThreshold) {
                        // Calcular opacidad basada en la distancia
                        const opacity = 1 - (distance / config.connectionThreshold);
                        ctx.strokeStyle = `rgba(59, 130, 246, ${opacity * 0.5})`;
                        
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.stroke();
                    }
                }
            }
            
            // Dibujar nodos
            for (const node of nodes) {
                ctx.fillStyle = node.color;
                ctx.beginPath();
                ctx.arc(node.x, node.y, node.size, 0, Math.PI * 2);
                ctx.fill();
                
                // Añadir brillo
                ctx.fillStyle = 'rgba(255, 255, 255, 0.7)';
                ctx.beginPath();
                ctx.arc(node.x - node.size/3, node.y - node.size/3, node.size/3, 0, Math.PI * 2);
                ctx.fill();
                
                // Actualizar posición
                node.x += node.speedX;
                node.y += node.speedY;
                
                // Rebotar en los bordes
                if (node.x < 0 || node.x > width) node.speedX *= -1;
                if (node.y < 0 || node.y > height) node.speedY *= -1;
            }
            
            // Continuar animación
            requestAnimationFrame(animate);
        }
        
        // Iniciar animación
        animate();
        
        // Ajustar tamaño del canvas cuando cambia el tamaño de la ventana
        window.addEventListener('resize', function() {
            const newWidth = container.offsetWidth;
            const newHeight = container.offsetHeight;
            
            canvas.width = newWidth;
            canvas.height = newHeight;
            
            // Ajustar posiciones de nodos si es necesario
            for (const node of nodes) {
                if (node.x > newWidth) node.x = newWidth - 10;
                if (node.y > newHeight) node.y = newHeight - 10;
            }
        });
    });
</script>
@endsection