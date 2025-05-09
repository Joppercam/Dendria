@extends('layouts.app')

@section('title', 'Productos - DendrIA')

@section('meta_description', 'Productos de software inteligentes para empresas. DendrIA Chat, InsightMind y PymeCommerce: soluciones basadas en IA y Laravel desarrolladas en Chile.')

@section('meta_keywords', 'DendrIA Chat, InsightMind, PymeCommerce, chatbot personalizado, análisis de datos, e-commerce, inteligencia artificial, Chile, software empresarial, productos digitales, soluciones tecnológicas')

@section('styles')
<style>
    /* Animación del encabezado igual que servicios */
    .products-header {
        position: relative;
        overflow: hidden;
    }

    .products-header::before {
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

    /* Estilos para demos interactivas */
    .demo-interactive {
        position: relative;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .demo-interactive:hover {
        transform: translateY(-5px);
    }

    .demo-controls {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 12px;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(5px);
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: opacity 0.3s ease;
        opacity: 0;
    }

    .demo-interactive:hover .demo-controls {
        opacity: 1;
    }
    
    /* Estilos para visualizaciones de IA de productos */
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
</style>
@endsection

@section('content')
<!-- Formulario sticky de solicitud de demostración -->
<div id="demo-form" class="fixed left-0 bottom-0 w-full bg-gradient-to-r from-blue-800 to-blue-900 shadow-xl z-40 transform transition-transform duration-300" style="transform: translateY(100%);">
    <div class="container mx-auto px-4 py-4">
        <div class="flex flex-wrap items-center justify-between">
            <div class="w-full md:w-auto mb-4 md:mb-0">
                <h3 class="text-xl font-bold text-white">Solicita una demostración personalizada</h3>
                <p class="text-blue-200 text-sm">Nuestros expertos te mostrarán cómo nuestros productos pueden resolver tus desafíos específicos</p>
            </div>
            <div class="w-full md:w-auto flex-1 md:flex md:flex-wrap md:items-center md:justify-end">
                <form id="demo-sticky-form" class="flex flex-wrap md:flex-nowrap gap-2 md:gap-4">
                    <input type="text" placeholder="Nombre" class="w-full md:w-40 lg:w-48 px-4 py-2 bg-blue-900/50 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white text-sm">
                    <input type="email" placeholder="Email" class="w-full md:w-40 lg:w-48 px-4 py-2 bg-blue-900/50 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white text-sm">
                    <select class="w-full md:w-40 lg:w-48 px-4 py-2 bg-blue-900/50 border border-blue-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white text-sm appearance-none bg-no-repeat" style="background-position: right 0.5rem center; background-size: 1.5em 1.5em; background-image: url('data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 fill=%22none%22 viewBox=%220 0 20 20%22%3E%3Cpath stroke=%22%233B82F6%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22 stroke-width=%221.5%22 d=%22M6 8l4 4 4-4%22/%3E%3C/svg%3E');">
                        <option value="" selected disabled>Producto de interés</option>
                        <option value="dendria-chat">DendrIA Chat</option>
                        <option value="pymecommerce">PymeCommerce</option>
                        <option value="insightmind">InsightMind</option>
                    </select>
                    <button type="submit" class="w-full md:w-auto px-8 py-2 bg-white text-blue-700 font-bold rounded-lg hover:bg-blue-50 transition shadow-lg">Solicitar demo</button>
                </form>
            </div>
        </div>
        <button id="close-demo-form" class="absolute top-2 right-2 text-blue-300 hover:text-white transition">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<!-- Botón para mostrar formulario -->
<div id="show-demo-form" class="fixed left-0 bottom-0 w-full bg-blue-700 text-center py-2 cursor-pointer hover:bg-blue-600 transition z-40 transform">
    <span class="font-bold text-white"><i class="fas fa-chevron-up mr-2"></i> Solicitar demostración gratis</span>
</div>

<!-- Chatbot de demostración -->
<div id="demo-chatbot" class="fixed bottom-6 right-6 z-50">
    <div id="chat-widget" class="bg-gray-900 rounded-xl w-80 shadow-2xl border border-blue-600/30 transition-all duration-300 transform scale-0 opacity-0 pointer-events-none">
        <div class="bg-gradient-to-r from-blue-800 to-blue-600 p-4 rounded-t-xl flex justify-between items-center">
            <div class="flex items-center">
                <div class="h-10 w-10 rounded-full bg-white/10 flex items-center justify-center mr-3">
                    <i class="fas fa-robot text-white text-lg"></i>
                </div>
                <div>
                    <h3 class="font-bold text-white">DendrIA Chat</h3>
                    <p class="text-xs text-blue-200">Asistente de demostración</p>
                </div>
            </div>
            <button id="close-chat" class="text-white hover:text-blue-200 transition">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div id="chat-messages" class="h-96 overflow-y-auto p-4 space-y-4 bg-gray-800">
            <div class="flex items-start">
                <div class="h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center mr-2 flex-shrink-0">
                    <i class="fas fa-robot text-white text-xs"></i>
                </div>
                <div class="bg-blue-600/20 rounded-lg p-3 max-w-[80%] text-sm">
                    ¡Hola! Soy el asistente virtual de DendrIA. Esta es una demostración de nuestro producto DendrIA Chat. ¿Cómo puedo ayudarte hoy?
                </div>
            </div>
        </div>
        <div class="p-3 border-t border-gray-700 bg-gray-900 rounded-b-xl">
            <div class="relative">
                <input type="text" id="chat-input" placeholder="Escribe tu pregunta..." class="w-full bg-gray-800 border border-gray-700 rounded-lg py-2 px-4 text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 text-sm">
                <button id="send-message" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-blue-400 hover:text-blue-300 transition">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            <div class="mt-2 flex justify-between text-xs text-gray-500">
                <span>Demo - Las respuestas son simuladas</span>
                <a href="#" class="text-blue-400 hover:text-blue-300">Ver planes</a>
            </div>
        </div>
    </div>

    <button id="chat-toggle" class="h-16 w-16 rounded-full bg-gradient-to-r from-blue-700 to-blue-500 text-white shadow-lg flex items-center justify-center cursor-pointer hover:shadow-xl transition transform hover:scale-105 ml-auto">
        <i id="chat-icon-open" class="fas fa-comment-dots text-2xl"></i>
        <i id="chat-icon-close" class="fas fa-times text-2xl hidden"></i>
    </button>
</div>

<div class="gradient-bg py-12 products-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 relative z-10">Nuestros Productos</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10 mb-8">Soluciones tecnológicas listas para implementar, diseñadas para resolver necesidades específicas con el poder de la IA</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="mb-16">
            <div class="flex flex-col md:flex-row gap-12 items-center mb-24">
                <div class="md:w-1/2">
                    <div class="bg-blue-500/10 text-blue-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Asistente IA</div>
                    <h2 class="text-3xl font-bold mb-6">DendrIA Chat</h2>
                    <p class="text-gray-300 mb-8">Un asistente virtual inteligente que se integra en tu sitio web para brindar soporte 24/7 a tus clientes, responder consultas frecuentes y guiar en procesos de compra o navegación.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-brain text-blue-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Aprendizaje adaptativo</h4>
                                <p class="text-gray-400">Mejora continuamente con cada interacción, personalizando las respuestas según el comportamiento y historial de los usuarios.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-language text-blue-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Procesamiento de lenguaje natural avanzado</h4>
                                <p class="text-gray-400">Entiende consultas complejas y conversa de manera natural, incluso detectando el tono y la intención del usuario.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-code text-blue-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Integración simple</h4>
                                <p class="text-gray-400">Se implementa fácilmente en cualquier plataforma web con solo unas líneas de código, compatible con WordPress, Laravel, y otros CMS.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}?subject=Interés%20en%20DendrIA%20Chat" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition">
                        Solicitar demostración
                    </a>
                </div>
                <div class="md:w-1/2">
                    <div class="demo-interactive product-visual shadow-lg">
                        <!-- Efecto de resplandor -->
                        <div class="product-glow chat-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>

                        <!-- Animación de chat -->
                        <div class="chat-animation" id="chat-demo">
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

                            <!-- Demo interactiva del chat -->
                            <div class="chat-interactive" style="position: absolute; bottom: 0; left: 0; right: 0; height: 60px; background: rgba(0,0,0,0.7); backdrop-filter: blur(5px); display: flex; align-items: center; padding: 0 15px;">
                                <input type="text" id="chat-demo-input" placeholder="Escribe tu pregunta aquí..." class="bg-gray-800 text-white border border-gray-700 rounded-lg px-4 py-2 flex-grow mr-2" style="font-size: 14px;">
                                <button id="chat-demo-send" class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg px-4 py-2 text-sm font-bold transition">Enviar</button>
                            </div>

                            <!-- Elemento de asistente flotante -->
                            <div style="position: absolute; bottom: 70px; right: 20px; width: 60px; height: 60px; background: linear-gradient(145deg, #3B82F6, #2563EB); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(37, 99, 235, 0.4);">
                                <i class="fas fa-robot text-white text-2xl"></i>
                            </div>
                        </div>

                        <!-- Controles de demo -->
                        <div class="demo-controls">
                            <div>
                                <span class="text-white text-xs mr-2">Prueba en vivo:</span>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white text-xs px-3 py-1 rounded-full transition">Ver demo completa</button>
                            </div>
                            <div>
                                <button class="text-white text-xs bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full transition mr-2">Preguntas frecuentes</button>
                                <button class="text-white text-xs bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full transition">Soporte técnico</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row-reverse gap-12 items-center mb-24">
                <div class="md:w-1/2">
                    <div class="bg-green-500/10 text-green-400 px-3 py-1 rounded-full text-sm inline-block mb-4">E-commerce</div>
                    <h2 class="text-3xl font-bold mb-6">PymeCommerce</h2>
                    <p class="text-gray-300 mb-8">Una plataforma de comercio electrónico diseñada específicamente para las necesidades y presupuestos de pequeñas y medianas empresas chilenas, permitiéndoles competir efectivamente en el mercado digital.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-shopping-cart text-green-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Optimizado para el mercado chileno</h4>
                                <p class="text-gray-400">Integración con los principales medios de pago locales (Webpay, Khipu, Mercado Pago), sistemas de despacho chilenos y compatibilidad con facturación electrónica.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-chart-line text-green-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Análisis predictivo de ventas</h4>
                                <p class="text-gray-400">Algoritmos de IA que analizan patrones de compra para predecir tendencias, optimizar inventario y personalizar promociones.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-mobile-alt text-green-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Experiencia móvil perfecta</h4>
                                <p class="text-gray-400">Diseñado con enfoque mobile-first para la realidad del mercado chileno, donde más del 70% de las compras se realizan desde dispositivos móviles.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}?subject=Interés%20en%20PymeCommerce" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition">
                        Solicitar demostración
                    </a>
                </div>
                <div class="md:w-1/2">
                    <div class="demo-interactive product-visual shadow-lg">
                        <!-- Efecto de resplandor -->
                        <div class="product-glow commerce-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>

                        <!-- Animación de eCommerce -->
                        <div class="commerce-animation" id="commerce-demo">
                            <!-- Rejilla de fondo -->
                            <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(16, 185, 129, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(16, 185, 129, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>

                            <!-- Tarjetas de productos interactivas -->
                            <div class="product-card" style="top: 15%; left: 15%; animation-delay: 0s;" id="product-card-1">
                                <div style="height: 60%; background: radial-gradient(circle at center, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.1))"></div>
                                <div style="padding: 8px;">
                                    <div style="width: 80%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                                    <div style="width: 60%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                                </div>
                            </div>

                            <div class="product-card" style="top: 30%; left: 50%; animation-delay: 2s;" id="product-card-2">
                                <div style="height: 60%; background: radial-gradient(circle at center, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.1))"></div>
                                <div style="padding: 8px;">
                                    <div style="width: 70%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                                    <div style="width: 50%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                                </div>
                            </div>

                            <div class="product-card" style="top: 50%; left: 25%; animation-delay: 4s;" id="product-card-3">
                                <div style="height: 60%; background: radial-gradient(circle at center, rgba(16, 185, 129, 0.3), rgba(5, 150, 105, 0.1))"></div>
                                <div style="padding: 8px;">
                                    <div style="width: 75%; height: 8px; background: rgba(255, 255, 255, 0.3); border-radius: 4px; margin-bottom: 5px;"></div>
                                    <div style="width: 55%; height: 8px; background: rgba(255, 255, 255, 0.2); border-radius: 4px;"></div>
                                </div>
                            </div>

                            <!-- Demo de panel de control de tienda -->
                            <div style="position: absolute; bottom: 70px; left: 20px; right: 20px; height: 40px; background: rgba(16, 185, 129, 0.2); border: 1px solid rgba(16, 185, 129, 0.4); border-radius: 8px; padding: 0 10px; backdrop-filter: blur(5px); display: flex; justify-content: space-between; align-items: center;">
                                <div style="display: flex; align-items: center;">
                                    <div style="width: 20px; height: 20px; background: linear-gradient(145deg, #10B981, #059669); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 8px;">
                                        <i class="fas fa-chart-line text-white text-xs"></i>
                                    </div>
                                    <div style="font-size: 0.7rem; color: #10B981;">Ventas hoy: <span class="font-bold">$1,245.00</span></div>
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <div style="font-size: 0.7rem; color: #10B981; margin-right: 8px;">Productos: <span class="font-bold">24</span></div>
                                    <div style="font-size: 0.7rem; color: #10B981;">Pedidos: <span class="font-bold">8</span></div>
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

                        <!-- Controles de demo -->
                        <div class="demo-controls">
                            <div>
                                <span class="text-white text-xs mr-2">Dashboard de muestra:</span>
                                <button class="bg-green-600 hover:bg-green-700 text-white text-xs px-3 py-1 rounded-full transition">Probar tienda demo</button>
                            </div>
                            <div>
                                <button class="text-white text-xs bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full transition mr-2">Catálogo</button>
                                <button class="text-white text-xs bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full transition">Ventas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2">
                    <div class="bg-purple-500/10 text-purple-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Análisis de Datos</div>
                    <h2 class="text-3xl font-bold mb-6">InsightMind</h2>
                    <p class="text-gray-300 mb-8">Plataforma de análisis de datos impulsada por IA que transforma grandes volúmenes de información en insights accionables para la toma de decisiones estratégicas en tu negocio.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-project-diagram text-purple-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Procesamiento de datos no estructurados</h4>
                                <p class="text-gray-400">Analiza información de múltiples fuentes y formatos (documentos, imágenes, audio, redes sociales) para detectar patrones ocultos.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-robot text-purple-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Modelos predictivos personalizados</h4>
                                <p class="text-gray-400">Crea modelos específicos para tu industria que predicen comportamientos, identifican riesgos y detectan oportunidades de mercado.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-chart-pie text-purple-400 mr-3"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Visualización interactiva</h4>
                                <p class="text-gray-400">Dashboards personalizables con visualizaciones interactivas que traducen datos complejos en información comprensible para todos los niveles de la organización.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}?subject=Interés%20en%20InsightMind" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-lg transition">
                        Solicitar demostración
                    </a>
                </div>
                <div class="md:w-1/2">
                    <div class="demo-interactive product-visual shadow-lg">
                        <!-- Efecto de resplandor -->
                        <div class="product-glow insight-glow" style="width: 80%; height: 80%; top: 10%; left: 10%;"></div>

                        <!-- Animación de analítica -->
                        <div class="analytics-animation" id="analytics-demo">
                            <!-- Rejilla de fondo -->
                            <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(168, 85, 247, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(168, 85, 247, 0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>

                            <!-- Contenedor de gráfico interactivo -->
                            <div class="data-container">
                                <!-- Puntos de datos interactivos -->
                                <div class="data-point" style="top: 30%; left: 20%; animation: fadeInOut 12s ease-in-out infinite;" id="data-point-1"></div>
                                <div class="data-point" style="top: 50%; left: 40%; animation: fadeInOut 12s ease-in-out 1s infinite;" id="data-point-2"></div>
                                <div class="data-point" style="top: 20%; left: 60%; animation: fadeInOut 12s ease-in-out 2s infinite;" id="data-point-3"></div>
                                <div class="data-point" style="top: 60%; left: 80%; animation: fadeInOut 12s ease-in-out 3s infinite;" id="data-point-4"></div>

                                <!-- Líneas conectoras -->
                                <div class="data-line" style="top: 31%; left: 21%; width: 20%; transform: rotate(15deg); animation: growLine 12s ease-in-out 1s infinite;"></div>
                                <div class="data-line" style="top: 51%; left: 41%; width: 20%; transform: rotate(-30deg); animation: growLine 12s ease-in-out 2s infinite;"></div>
                                <div class="data-line" style="top: 21%; left: 61%; width: 20%; transform: rotate(50deg); animation: growLine 12s ease-in-out 3s infinite;"></div>

                                <!-- Barras de gráfico interactivas -->
                                <div class="chart-bar" style="height: 60%; left: 15%; animation-delay: 0s; background-color: rgba(168, 85, 247, 0.5);" id="chart-bar-1"></div>
                                <div class="chart-bar" style="height: 40%; left: 45%; animation-delay: 1s; background-color: rgba(168, 85, 247, 0.5);" id="chart-bar-2"></div>
                                <div class="chart-bar" style="height: 75%; left: 75%; animation-delay: 2s; background-color: rgba(168, 85, 247, 0.5);" id="chart-bar-3"></div>
                            </div>

                            <!-- Selectores de datos interactivos -->
                            <div style="position: absolute; top: 20px; left: 20px; right: 20px; background: rgba(168, 85, 247, 0.2); border: 1px solid rgba(168, 85, 247, 0.4); border-radius: 8px; padding: 8px; backdrop-filter: blur(5px); display: flex; justify-content: space-between; align-items: center;">
                                <select class="bg-gray-800 text-white border border-purple-500 rounded-lg px-2 py-1 text-xs" style="width: 45%;">
                                    <option>Ventas mensuales</option>
                                    <option>Tráfico web</option>
                                    <option>Conversiones</option>
                                </select>
                                <select class="bg-gray-800 text-white border border-purple-500 rounded-lg px-2 py-1 text-xs" style="width: 45%;">
                                    <option>Últimos 6 meses</option>
                                    <option>Último año</option>
                                    <option>Último trimestre</option>
                                </select>
                            </div>

                            <!-- Tags de insights -->
                            <div class="insight-tag" style="top: 20%; left: 50%; animation-delay: 2s;">
                                +42% Crecimiento
                            </div>
                            <div class="insight-tag" style="top: 50%; left: 20%; animation-delay: 6s;">
                                Tendencia detectada
                            </div>

                            <!-- Panel de IA interactivo -->
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

                        <!-- Controles de demo -->
                        <div class="demo-controls">
                            <div>
                                <span class="text-white text-xs mr-2">Dashboard demo:</span>
                                <button class="bg-purple-600 hover:bg-purple-700 text-white text-xs px-3 py-1 rounded-full transition">Explorar análisis</button>
                            </div>
                            <div>
                                <button class="text-white text-xs bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full transition mr-2">KPIs</button>
                                <button class="text-white text-xs bg-gray-800 hover:bg-gray-700 px-3 py-1 rounded-full transition">Predicciones</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Precios / Planes -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Planes Flexibles</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Elige el plan que mejor se adapte a las necesidades de tu negocio</p>
        </div>

        <!-- Tabla comparativa de planes -->
        <div class="mb-16 bg-gray-900 rounded-xl overflow-hidden shadow-lg">
            <div class="p-6 border-b border-gray-800">
                <h3 class="text-2xl font-bold mb-4">Comparativa de Características</h3>
                <p class="text-gray-400">Selecciona el plan con las funcionalidades que tu empresa necesita</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-800">
                            <th class="p-4 text-left">Características</th>
                            <th class="p-4 text-center border-l border-gray-700">
                                <div class="font-bold text-xl mb-1">Básico</div>
                                <div class="text-blue-400 font-bold">$299.000<span class="text-sm font-normal text-gray-400"> /mes</span></div>
                            </th>
                            <th class="p-4 text-center border-l border-gray-700 bg-blue-900/20">
                                <div class="mb-1">
                                    <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full">Recomendado</span>
                                </div>
                                <div class="font-bold text-xl mb-1">Profesional</div>
                                <div class="text-blue-400 font-bold">$499.000<span class="text-sm font-normal text-gray-400"> /mes</span></div>
                            </th>
                            <th class="p-4 text-center border-l border-gray-700">
                                <div class="font-bold text-xl mb-1">Empresarial</div>
                                <div class="text-blue-400 font-bold">Personalizado</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DendrIA Chat -->
                        <tr class="border-t border-gray-800 bg-blue-900/5">
                            <td class="p-4 font-bold" colspan="4">DendrIA Chat</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Integración en sitio web</td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-check text-blue-400"></i></td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10"><i class="fas fa-check text-blue-400"></i></td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-check text-blue-400"></i></td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Personalización visual</td>
                            <td class="p-4 text-center border-l border-gray-700">Básica</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Completa</td>
                            <td class="p-4 text-center border-l border-gray-700">A medida</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Base de conocimiento personalizada</td>
                            <td class="p-4 text-center border-l border-gray-700">Hasta 50 páginas</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Hasta 200 páginas</td>
                            <td class="p-4 text-center border-l border-gray-700">Ilimitada</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Mensajes mensuales</td>
                            <td class="p-4 text-center border-l border-gray-700">1.000</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">5.000</td>
                            <td class="p-4 text-center border-l border-gray-700">Ilimitados</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Integración con CRM/ERP</td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-times text-gray-500"></i></td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10"><i class="fas fa-check text-blue-400"></i></td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-check text-blue-400"></i></td>
                        </tr>

                        <!-- PymeCommerce -->
                        <tr class="border-t border-gray-800 bg-green-900/5">
                            <td class="p-4 font-bold" colspan="4">PymeCommerce</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Productos en catálogo</td>
                            <td class="p-4 text-center border-l border-gray-700">Hasta 100</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Hasta 1.000</td>
                            <td class="p-4 text-center border-l border-gray-700">Ilimitados</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Medios de pago</td>
                            <td class="p-4 text-center border-l border-gray-700">2 integraciones</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">5 integraciones</td>
                            <td class="p-4 text-center border-l border-gray-700">Personalizados</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Sistema de logística</td>
                            <td class="p-4 text-center border-l border-gray-700">Básico</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Avanzado</td>
                            <td class="p-4 text-center border-l border-gray-700">A medida</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Recomendación de productos con IA</td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-times text-gray-500"></i></td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10"><i class="fas fa-check text-blue-400"></i></td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-check text-blue-400"></i></td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Personalización de plantillas</td>
                            <td class="p-4 text-center border-l border-gray-700">3 plantillas</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">10 plantillas</td>
                            <td class="p-4 text-center border-l border-gray-700">Diseño a medida</td>
                        </tr>

                        <!-- InsightMind -->
                        <tr class="border-t border-gray-800 bg-purple-900/5">
                            <td class="p-4 font-bold" colspan="4">InsightMind</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Fuentes de datos</td>
                            <td class="p-4 text-center border-l border-gray-700">Hasta 3</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Hasta 10</td>
                            <td class="p-4 text-center border-l border-gray-700">Ilimitadas</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Dashboards personalizados</td>
                            <td class="p-4 text-center border-l border-gray-700">1</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">5</td>
                            <td class="p-4 text-center border-l border-gray-700">Ilimitados</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Alertas predictivas</td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-times text-gray-500"></i></td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10"><i class="fas fa-check text-blue-400"></i></td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-check text-blue-400"></i></td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Modelos de IA personalizados</td>
                            <td class="p-4 text-center border-l border-gray-700"><i class="fas fa-times text-gray-500"></i></td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Básicos</td>
                            <td class="p-4 text-center border-l border-gray-700">Avanzados</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Exportación de informes</td>
                            <td class="p-4 text-center border-l border-gray-700">PDF, CSV</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">PDF, CSV, Excel, API</td>
                            <td class="p-4 text-center border-l border-gray-700">Todos los formatos</td>
                        </tr>

                        <!-- Servicios generales -->
                        <tr class="border-t border-gray-800 bg-gray-800">
                            <td class="p-4 font-bold" colspan="4">Servicios Generales</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Soporte técnico</td>
                            <td class="p-4 text-center border-l border-gray-700">Horario laboral</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">24/7</td>
                            <td class="p-4 text-center border-l border-gray-700">Premium con ejecutivo asignado</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">SLA (Acuerdo de nivel de servicio)</td>
                            <td class="p-4 text-center border-l border-gray-700">Respuesta en 24h</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Respuesta en 8h</td>
                            <td class="p-4 text-center border-l border-gray-700">Respuesta en 2h</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Capacitación</td>
                            <td class="p-4 text-center border-l border-gray-700">Inicial (2h)</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Avanzada (10h)</td>
                            <td class="p-4 text-center border-l border-gray-700">Programa completo</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Implementación</td>
                            <td class="p-4 text-center border-l border-gray-700">Básica (7 días)</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Personalizada (15 días)</td>
                            <td class="p-4 text-center border-l border-gray-700">A medida</td>
                        </tr>
                        <tr class="border-t border-gray-800">
                            <td class="p-4">Actualizaciones</td>
                            <td class="p-4 text-center border-l border-gray-700">Mensuales</td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">Semanales</td>
                            <td class="p-4 text-center border-l border-gray-700">Continuas</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="border-t border-gray-800 bg-gray-800">
                            <td class="p-4"></td>
                            <td class="p-4 text-center border-l border-gray-700">
                                <a href="{{ route('contact') }}?subject=Plan%20Básico" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition">
                                    Contactar
                                </a>
                            </td>
                            <td class="p-4 text-center border-l border-gray-700 bg-blue-900/10">
                                <a href="{{ route('contact') }}?subject=Plan%20Profesional" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition">
                                    Contactar
                                </a>
                            </td>
                            <td class="p-4 text-center border-l border-gray-700">
                                <a href="{{ route('contact') }}?subject=Plan%20Empresarial" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg transition">
                                    Contactar
                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Tarjetas de planes -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                <div class="p-6 bg-blue-900/20 border-b border-gray-800">
                    <h3 class="text-xl font-bold mb-2">Básico</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold">$299.000</span>
                        <span class="text-gray-400 ml-2">/ mes</span>
                    </div>
                    <p class="text-gray-400 mt-2">Ideal para pequeñas empresas que comienzan su transformación digital</p>
                </div>
                <div class="p-6">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Implementación básica del producto elegido</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Soporte técnico en horario laboral</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Actualizaciones mensuales</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Capacitación inicial</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}?subject=Plan%20Básico" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg mt-6 transition">
                        Contactar
                    </a>
                </div>
            </div>

            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-xl transform scale-105 z-10 border border-blue-500/30">
                <div class="p-6 bg-blue-900/30 border-b border-gray-800">
                    <div class="text-center mb-2">
                        <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full">Recomendado</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Profesional</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold">$499.000</span>
                        <span class="text-gray-400 ml-2">/ mes</span>
                    </div>
                    <p class="text-gray-400 mt-2">Para empresas en crecimiento que requieren soluciones más completas</p>
                </div>
                <div class="p-6">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Implementación personalizada</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Soporte técnico 24/7</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Actualizaciones semanales</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Capacitación avanzada para equipos</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Integraciones con sistemas existentes</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}?subject=Plan%20Profesional" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg mt-6 transition">
                        Contactar
                    </a>
                </div>
            </div>

            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                <div class="p-6 bg-blue-900/20 border-b border-gray-800">
                    <h3 class="text-xl font-bold mb-2">Empresarial</h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold">Personalizado</span>
                    </div>
                    <p class="text-gray-400 mt-2">Soluciones a la medida para grandes empresas con necesidades específicas</p>
                </div>
                <div class="p-6">
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Implementación completamente a medida</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Soporte técnico premium con ejecutivo dedicado</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Desarrollo de funcionalidades específicas</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Programa completo de capacitación</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-blue-400 mr-3 mt-1"></i>
                            <span>Infraestructura dedicada y optimizada</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}?subject=Plan%20Empresarial" class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg mt-6 transition">
                        Contactar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de Implementación -->
<section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Proceso de Implementación</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Conoce el camino hacia la transformación digital de tu empresa</p>
        </div>

        <div class="relative">
            <!-- Línea de tiempo vertical -->
            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-600/30"></div>

            <!-- Etapa 1: Consultoría Inicial -->
            <div class="relative mb-20">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 md:text-right">
                        <div class="bg-blue-500/10 text-blue-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Etapa 1</div>
                        <h3 class="text-2xl font-bold mb-4">Consultoría Inicial</h3>
                        <p class="text-gray-300 mb-4">Entendemos a fondo tus necesidades y objetivos de negocio para proponerte la solución más adecuada.</p>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center justify-end">
                                <span>Análisis de requerimientos</span>
                                <i class="fas fa-clipboard-check text-blue-400 ml-3"></i>
                            </li>
                            <li class="flex items-center justify-end">
                                <span>Evaluación de infraestructura actual</span>
                                <i class="fas fa-server text-blue-400 ml-3"></i>
                            </li>
                            <li class="flex items-center justify-end">
                                <span>Definición de objetivos</span>
                                <i class="fas fa-bullseye text-blue-400 ml-3"></i>
                            </li>
                        </ul>
                        <p class="text-gray-500 mt-4">Duración: 1-2 semanas</p>
                    </div>
                    <div class="md:w-1/2 md:pl-12">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-blue-500/20">
                            <div class="p-1">
                                <img src="https://via.placeholder.com/600x400/030712/3B82F6?text=Consultoria-Inicial" alt="Consultoría inicial" class="rounded-lg">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <span class="text-sm text-gray-400">Entregables:</span>
                                    </div>
                                    <div>
                                        <span class="bg-blue-600/20 text-blue-400 text-xs px-3 py-1 rounded-full">Fase Clave</span>
                                    </div>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-file-alt text-blue-400 mr-3 mt-1"></i>
                                        <span>Documento de requerimientos</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-project-diagram text-blue-400 mr-3 mt-1"></i>
                                        <span>Propuesta de solución</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-calendar-alt text-blue-400 mr-3 mt-1"></i>
                                        <span>Cronograma de implementación</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Círculo indicador de etapa -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-blue-600 border-4 border-gray-900 w-12 h-12 rounded-full items-center justify-center">
                        <span class="text-white font-bold">1</span>
                    </div>
                </div>
            </div>

            <!-- Etapa 2: Diseño y Personalización -->
            <div class="relative mb-20">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 order-2 md:order-1">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-green-500/20">
                            <div class="p-1">
                                <img src="https://via.placeholder.com/600x400/030712/10B981?text=Diseno-y-Personalizacion" alt="Diseño y personalización" class="rounded-lg">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <span class="text-sm text-gray-400">Entregables:</span>
                                    </div>
                                    <div>
                                        <span class="bg-green-600/20 text-green-400 text-xs px-3 py-1 rounded-full">Fase Creativa</span>
                                    </div>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-palette text-green-400 mr-3 mt-1"></i>
                                        <span>Maquetas de interfaz</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-sitemap text-green-400 mr-3 mt-1"></i>
                                        <span>Arquitectura de solución</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-cogs text-green-400 mr-3 mt-1"></i>
                                        <span>Plan de integraciones</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 md:text-left order-1 md:order-2">
                        <div class="bg-green-500/10 text-green-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Etapa 2</div>
                        <h3 class="text-2xl font-bold mb-4">Diseño y Personalización</h3>
                        <p class="text-gray-300 mb-4">Creamos o adaptamos el producto a tu marca, procesos y necesidades específicas.</p>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center">
                                <i class="fas fa-bezier-curve text-green-400 mr-3"></i>
                                <span>Personalización visual y funcional</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-plug text-green-400 mr-3"></i>
                                <span>Planificación de integraciones</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-database text-green-400 mr-3"></i>
                                <span>Diseño de estructura de datos</span>
                            </li>
                        </ul>
                        <p class="text-gray-500 mt-4">Duración: 2-3 semanas</p>
                    </div>
                    <!-- Círculo indicador de etapa -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-green-600 border-4 border-gray-900 w-12 h-12 rounded-full items-center justify-center">
                        <span class="text-white font-bold">2</span>
                    </div>
                </div>
            </div>

            <!-- Etapa 3: Desarrollo e Implementación -->
            <div class="relative mb-20">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 md:text-right">
                        <div class="bg-purple-500/10 text-purple-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Etapa 3</div>
                        <h3 class="text-2xl font-bold mb-4">Desarrollo e Implementación</h3>
                        <p class="text-gray-300 mb-4">Construimos y configuramos la solución en tu entorno de trabajo con todas las integraciones necesarias.</p>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center justify-end">
                                <span>Desarrollo de personalizaciones</span>
                                <i class="fas fa-code text-purple-400 ml-3"></i>
                            </li>
                            <li class="flex items-center justify-end">
                                <span>Configuración de entornos</span>
                                <i class="fas fa-terminal text-purple-400 ml-3"></i>
                            </li>
                            <li class="flex items-center justify-end">
                                <span>Integración con sistemas existentes</span>
                                <i class="fas fa-network-wired text-purple-400 ml-3"></i>
                            </li>
                        </ul>
                        <p class="text-gray-500 mt-4">Duración: 2-6 semanas (según complejidad)</p>
                    </div>
                    <div class="md:w-1/2 md:pl-12">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-purple-500/20">
                            <div class="p-1">
                                <img src="https://via.placeholder.com/600x400/030712/A855F7?text=Desarrollo-e-Implementacion" alt="Desarrollo e implementación" class="rounded-lg">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <span class="text-sm text-gray-400">Entregables:</span>
                                    </div>
                                    <div>
                                        <span class="bg-purple-600/20 text-purple-400 text-xs px-3 py-1 rounded-full">Fase Técnica</span>
                                    </div>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-laptop-code text-purple-400 mr-3 mt-1"></i>
                                        <span>Solución funcional en ambiente de pruebas</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-file-code text-purple-400 mr-3 mt-1"></i>
                                        <span>Documentación técnica</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-tasks text-purple-400 mr-3 mt-1"></i>
                                        <span>Reportes de avance semanales</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Círculo indicador de etapa -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-purple-600 border-4 border-gray-900 w-12 h-12 rounded-full items-center justify-center">
                        <span class="text-white font-bold">3</span>
                    </div>
                </div>
            </div>

            <!-- Etapa 4: Pruebas y Validación -->
            <div class="relative mb-20">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 order-2 md:order-1">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-yellow-500/20">
                            <div class="p-1">
                                <img src="https://via.placeholder.com/600x400/030712/EAB308?text=Pruebas-y-Validacion" alt="Pruebas y validación" class="rounded-lg">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <span class="text-sm text-gray-400">Entregables:</span>
                                    </div>
                                    <div>
                                        <span class="bg-yellow-600/20 text-yellow-400 text-xs px-3 py-1 rounded-full">Fase Crítica</span>
                                    </div>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-clipboard-list text-yellow-400 mr-3 mt-1"></i>
                                        <span>Reporte de pruebas realizadas</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-bug text-yellow-400 mr-3 mt-1"></i>
                                        <span>Registro de incidencias y soluciones</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-thumbs-up text-yellow-400 mr-3 mt-1"></i>
                                        <span>Certificación de calidad</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 md:text-left order-1 md:order-2">
                        <div class="bg-yellow-500/10 text-yellow-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Etapa 4</div>
                        <h3 class="text-2xl font-bold mb-4">Pruebas y Validación</h3>
                        <p class="text-gray-300 mb-4">Verificamos exhaustivamente la funcionalidad, rendimiento y seguridad de la solución implementada.</p>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center">
                                <i class="fas fa-vial text-yellow-400 mr-3"></i>
                                <span>Pruebas funcionales y de integración</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-tachometer-alt text-yellow-400 mr-3"></i>
                                <span>Evaluación de rendimiento</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-shield-alt text-yellow-400 mr-3"></i>
                                <span>Auditoría de seguridad</span>
                            </li>
                        </ul>
                        <p class="text-gray-500 mt-4">Duración: 1-2 semanas</p>
                    </div>
                    <!-- Círculo indicador de etapa -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-yellow-600 border-4 border-gray-900 w-12 h-12 rounded-full items-center justify-center">
                        <span class="text-white font-bold">4</span>
                    </div>
                </div>
            </div>

            <!-- Etapa 5: Capacitación y Lanzamiento -->
            <div class="relative mb-20">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 md:text-right">
                        <div class="bg-red-500/10 text-red-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Etapa 5</div>
                        <h3 class="text-2xl font-bold mb-4">Capacitación y Lanzamiento</h3>
                        <p class="text-gray-300 mb-4">Entrenamos a tu equipo en el uso de la solución y acompañamos el proceso de salida a producción.</p>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center justify-end">
                                <span>Capacitación a usuarios finales</span>
                                <i class="fas fa-chalkboard-teacher text-red-400 ml-3"></i>
                            </li>
                            <li class="flex items-center justify-end">
                                <span>Formación de administradores</span>
                                <i class="fas fa-user-cog text-red-400 ml-3"></i>
                            </li>
                            <li class="flex items-center justify-end">
                                <span>Migración a producción</span>
                                <i class="fas fa-rocket text-red-400 ml-3"></i>
                            </li>
                        </ul>
                        <p class="text-gray-500 mt-4">Duración: 1-2 semanas</p>
                    </div>
                    <div class="md:w-1/2 md:pl-12">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-red-500/20">
                            <div class="p-1">
                                <img src="https://via.placeholder.com/600x400/030712/EF4444?text=Capacitacion-y-Lanzamiento" alt="Capacitación y lanzamiento" class="rounded-lg">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <span class="text-sm text-gray-400">Entregables:</span>
                                    </div>
                                    <div>
                                        <span class="bg-red-600/20 text-red-400 text-xs px-3 py-1 rounded-full">Fase Final</span>
                                    </div>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-book text-red-400 mr-3 mt-1"></i>
                                        <span>Manuales de usuario y administración</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-video text-red-400 mr-3 mt-1"></i>
                                        <span>Videos tutoriales</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-certificate text-red-400 mr-3 mt-1"></i>
                                        <span>Certificación de personal capacitado</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Círculo indicador de etapa -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-red-600 border-4 border-gray-900 w-12 h-12 rounded-full items-center justify-center">
                        <span class="text-white font-bold">5</span>
                    </div>
                </div>
            </div>

            <!-- Etapa 6: Soporte Continuo -->
            <div class="relative">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12 order-2 md:order-1">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl border border-indigo-500/20">
                            <div class="p-1">
                                <img src="https://via.placeholder.com/600x400/030712/6366F1?text=Soporte-Continuo" alt="Soporte continuo" class="rounded-lg">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <div>
                                        <span class="text-sm text-gray-400">Incluye:</span>
                                    </div>
                                    <div>
                                        <span class="bg-indigo-600/20 text-indigo-400 text-xs px-3 py-1 rounded-full">Fase Permanente</span>
                                    </div>
                                </div>
                                <ul class="space-y-2">
                                    <li class="flex items-start">
                                        <i class="fas fa-headset text-indigo-400 mr-3 mt-1"></i>
                                        <span>Mesa de ayuda según plan contratado</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-sync-alt text-indigo-400 mr-3 mt-1"></i>
                                        <span>Actualizaciones y mejoras periódicas</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-chart-line text-indigo-400 mr-3 mt-1"></i>
                                        <span>Monitoreo de rendimiento</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-12 md:text-left order-1 md:order-2">
                        <div class="bg-indigo-500/10 text-indigo-400 px-3 py-1 rounded-full text-sm inline-block mb-4">Etapa 6</div>
                        <h3 class="text-2xl font-bold mb-4">Soporte Continuo</h3>
                        <p class="text-gray-300 mb-4">Te acompañamos en el día a día con soporte técnico, actualizaciones y optimizaciones constantes.</p>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center">
                                <i class="fas fa-life-ring text-indigo-400 mr-3"></i>
                                <span>Soporte técnico en varios niveles</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-tools text-indigo-400 mr-3"></i>
                                <span>Mantenimiento preventivo</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-chart-pie text-indigo-400 mr-3"></i>
                                <span>Análisis de uso y rendimiento</span>
                            </li>
                        </ul>
                        <p class="text-gray-500 mt-4">Duración: Continuo (según plan contratado)</p>
                    </div>
                    <!-- Círculo indicador de etapa -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 bg-indigo-600 border-4 border-gray-900 w-12 h-12 rounded-full items-center justify-center">
                        <span class="text-white font-bold">6</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Preguntas Frecuentes</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Resolvemos tus dudas sobre nuestros productos</p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="bg-gray-800 rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">¿Puedo personalizar los productos según las necesidades de mi negocio?</h3>
                <p class="text-gray-400">Sí, todos nuestros productos son altamente personalizables. Ofrecemos desde configuraciones básicas hasta desarrollos completamente a medida según el plan que elijas y tus requerimientos específicos.</p>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">¿Cuál es el tiempo de implementación promedio?</h3>
                <p class="text-gray-400">Los tiempos varían según el producto y nivel de personalización. Una implementación básica puede estar lista en 2-3 semanas, mientras que soluciones más complejas pueden tomar entre 1-3 meses. Durante el proceso de consultoría inicial, estableceremos un cronograma detallado para tu proyecto.</p>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">¿Ofrecen capacitación para nuestro equipo?</h3>
                <p class="text-gray-400">Absolutamente. Todos nuestros planes incluyen capacitación, desde sesiones básicas hasta programas completos para diferentes roles dentro de tu organización. Además, proporcionamos documentación detallada y acceso a videos tutoriales para consultas futuras.</p>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">¿Cómo funcionan las actualizaciones y el soporte técnico?</h3>
                <p class="text-gray-400">Dependiendo de tu plan, recibirás actualizaciones periódicas que incluyen mejoras de rendimiento, nuevas funcionalidades y parches de seguridad. Nuestro equipo de soporte está disponible mediante un sistema de tickets, chat en vivo, correo electrónico o teléfono según el nivel de servicio contratado.</p>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6">
                <h3 class="text-xl font-bold mb-3">¿Es posible integrar estos productos con mis sistemas actuales?</h3>
                <p class="text-gray-400">Sí, diseñamos nuestros productos pensando en la interoperabilidad. Ofrecemos integraciones con los sistemas y plataformas más populares del mercado, y para casos específicos, desarrollamos conectores personalizados que aseguran una comunicación fluida entre todas tus herramientas de negocio.</p>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-gray-400 mb-6">¿No encuentras respuesta a tu pregunta?</p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition">
                Contáctanos
            </a>
        </div>
    </div>
</section>

<!-- Casos de Éxito -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Casos de Éxito</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Descubre cómo nuestros productos han transformado empresas reales</p>
        </div>

        <!-- Caso de éxito para DendrIA Chat -->
        <div class="mb-16 bg-gray-800 rounded-xl overflow-hidden shadow-lg">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/5 bg-blue-900/20 p-8">
                    <div class="bg-blue-500/10 text-blue-400 px-3 py-1 rounded-full text-sm inline-block mb-4">DendrIA Chat</div>
                    <h3 class="text-2xl font-bold mb-4">CliniSalud | Sector Salud</h3>
                    <div class="flex items-center mb-6">
                        <div class="flex">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <span class="ml-2 text-gray-400">5.0</span>
                    </div>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-blue-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Reducción del 68% en tiempo de espera para atención al paciente</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-blue-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Automatización del 85% de consultas frecuentes</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-blue-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Satisfacción del cliente mejorada en un 92%</p>
                            </div>
                        </div>
                    </div>
                    <blockquote class="italic text-gray-300 border-l-4 border-blue-500 pl-4 mb-6">
                        "DendrIA Chat transformó nuestra capacidad de respuesta a pacientes. Ahora podemos brindar información precisa 24/7 y nuestro personal médico puede enfocarse en casos que realmente requieren atención especializada."
                        <footer class="mt-2 text-sm font-semibold">— Carolina Méndez, Directora de Operaciones</footer>
                    </blockquote>
                    <a href="#" class="inline-flex items-center text-blue-400 hover:text-blue-300 transition">
                        Ver caso completo
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="md:w-3/5 p-6">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/casos/clinisalud-chat.jpg') }}" alt="CliniSalud implementación de chat" class="w-full h-auto" onerror="this.src='https://via.placeholder.com/800x500/030712/3B82F6?text=CliniSalud-Chat';this.onerror='';">
                        <div class="bg-gray-900/80 p-6">
                            <h4 class="font-bold text-xl mb-2">Desafío:</h4>
                            <p class="text-gray-300 mb-4">CliniSalud enfrentaba largas esperas telefónicas y saturación de personal para resolver consultas básicas de pacientes, afectando su capacidad de atención y satisfacción.</p>

                            <h4 class="font-bold text-xl mb-2">Solución:</h4>
                            <p class="text-gray-300 mb-4">Implementamos DendrIA Chat con un entrenamiento especializado en protocolos médicos y administrativos de la clínica, integrándolo con su sistema de historia clínica y agenda de citas.</p>

                            <h4 class="font-bold text-xl mb-2">Resultados:</h4>
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="bg-blue-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-blue-400 mb-1">-68%</div>
                                    <div class="text-sm text-gray-400">Tiempo de espera</div>
                                </div>
                                <div class="bg-blue-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-blue-400 mb-1">+45%</div>
                                    <div class="text-sm text-gray-400">Citas agendadas</div>
                                </div>
                                <div class="bg-blue-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-blue-400 mb-1">$320K</div>
                                    <div class="text-sm text-gray-400">Ahorro anual</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Caso de éxito para PymeCommerce -->
        <div class="mb-16 bg-gray-800 rounded-xl overflow-hidden shadow-lg">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/5 bg-green-900/20 p-8">
                    <div class="bg-green-500/10 text-green-400 px-3 py-1 rounded-full text-sm inline-block mb-4">PymeCommerce</div>
                    <h3 class="text-2xl font-bold mb-4">Muebles Nativos | Sector Retail</h3>
                    <div class="flex items-center mb-6">
                        <div class="flex">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                        </div>
                        <span class="ml-2 text-gray-400">4.5</span>
                    </div>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Incremento de ventas online del 286% en 6 meses</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Tasa de conversión mejorada de 1.3% a 4.7%</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Expansión nacional con envíos a todo Chile</p>
                            </div>
                        </div>
                    </div>
                    <blockquote class="italic text-gray-300 border-l-4 border-green-500 pl-4 mb-6">
                        "Pasamos de tener una tienda física con ventas limitadas a convertirnos en un referente nacional del mueble artesanal. La plataforma se adaptó perfectamente a nuestras necesidades y presupuesto inicial."
                        <footer class="mt-2 text-sm font-semibold">— Manuel Arriagada, Fundador</footer>
                    </blockquote>
                    <a href="#" class="inline-flex items-center text-green-400 hover:text-green-300 transition">
                        Ver caso completo
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="md:w-3/5 p-6">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/casos/muebles-nativos.jpg') }}" alt="Muebles Nativos tienda online" class="w-full h-auto" onerror="this.src='https://via.placeholder.com/800x500/030712/10B981?text=Muebles-Nativos';this.onerror='';">
                        <div class="bg-gray-900/80 p-6">
                            <h4 class="font-bold text-xl mb-2">Desafío:</h4>
                            <p class="text-gray-300 mb-4">Esta pequeña empresa familiar de artesanos de Puerto Montt necesitaba expandir su mercado más allá de lo local, pero carecía de experiencia técnica y recursos para crear una plataforma de e-commerce.</p>

                            <h4 class="font-bold text-xl mb-2">Solución:</h4>
                            <p class="text-gray-300 mb-4">Implementamos PymeCommerce con personalización para showcasing de productos artesanales, integración con sistema de logística regional y medios de pago chilenos, más capacitación completa al equipo.</p>

                            <h4 class="font-bold text-xl mb-2">Resultados:</h4>
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="bg-green-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-green-400 mb-1">+286%</div>
                                    <div class="text-sm text-gray-400">Ventas online</div>
                                </div>
                                <div class="bg-green-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-green-400 mb-1">4.7%</div>
                                    <div class="text-sm text-gray-400">Tasa conversión</div>
                                </div>
                                <div class="bg-green-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-green-400 mb-1">32%</div>
                                    <div class="text-sm text-gray-400">Clientes recurrentes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Caso de éxito para InsightMind -->
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/5 bg-purple-900/20 p-8">
                    <div class="bg-purple-500/10 text-purple-400 px-3 py-1 rounded-full text-sm inline-block mb-4">InsightMind</div>
                    <h3 class="text-2xl font-bold mb-4">AgroTech Chile | Sector Agrícola</h3>
                    <div class="flex items-center mb-6">
                        <div class="flex">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <span class="ml-2 text-gray-400">5.0</span>
                    </div>
                    <div class="space-y-4 mb-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-purple-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Incremento del 41% en productividad de cultivos</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-purple-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Reducción del 38% en costos de insumos agrícolas</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <i class="fas fa-check-circle text-purple-400 mr-3"></i>
                            </div>
                            <div>
                                <p class="text-gray-300">Predicción de cosechas con 94% de precisión</p>
                            </div>
                        </div>
                    </div>
                    <blockquote class="italic text-gray-300 border-l-4 border-purple-500 pl-4 mb-6">
                        "Gracias a InsightMind pudimos analizar patrones climáticos, rendimiento histórico y condiciones del suelo para optimizar nuestras operaciones. Las predicciones de IA nos han permitido tomar decisiones que antes eran imposibles."
                        <footer class="mt-2 text-sm font-semibold">— Javiera Soto, Directora de Innovación</footer>
                    </blockquote>
                    <a href="#" class="inline-flex items-center text-purple-400 hover:text-purple-300 transition">
                        Ver caso completo
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="md:w-3/5 p-6">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/casos/agrotech-chile.jpg') }}" alt="AgroTech Chile análisis de datos" class="w-full h-auto" onerror="this.src='https://via.placeholder.com/800x500/030712/A855F7?text=AgroTech-Chile';this.onerror='';"
>
                        <div class="bg-gray-900/80 p-6">
                            <h4 class="font-bold text-xl mb-2">Desafío:</h4>
                            <p class="text-gray-300 mb-4">AgroTech Chile necesitaba optimizar sus operaciones agrícolas en condiciones climáticas cada vez más impredecibles, con grandes volúmenes de datos no estructurados de sensores IoT, imágenes satelitales e informes históricos.</p>

                            <h4 class="font-bold text-xl mb-2">Solución:</h4>
                            <p class="text-gray-300 mb-4">Implementamos InsightMind con módulos personalizados para la industria agrícola, desarrollando algoritmos de IA que identifican patrones en datos históricos, predicen rendimientos y optimizan el uso de recursos.</p>

                            <h4 class="font-bold text-xl mb-2">Resultados:</h4>
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="bg-purple-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-purple-400 mb-1">+41%</div>
                                    <div class="text-sm text-gray-400">Productividad</div>
                                </div>
                                <div class="bg-purple-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-purple-400 mb-1">-38%</div>
                                    <div class="text-sm text-gray-400">Costos insumos</div>
                                </div>
                                <div class="bg-purple-900/30 p-4 rounded-lg">
                                    <div class="text-3xl font-bold text-purple-400 mb-1">94%</div>
                                    <div class="text-sm text-gray-400">Precisión predicción</div>
                                </div>
                            </div>
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
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Comienza a transformar tu negocio hoy</h2>
                <p class="text-xl text-blue-100">Implementa soluciones tecnológicas avanzadas que impulsen tu crecimiento y competitividad en el mercado digital.</p>
            </div>
            <div>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    Solicitar demostración
                </a>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
    // Animación para líneas de datos en analytics
    document.addEventListener('DOMContentLoaded', function() {
        // Agregamos esta clase que animará las líneas que conectan los datos
        const dataLines = document.querySelectorAll('.data-line');
        dataLines.forEach(line => {
            // Creamos una función de animación específica para las líneas
            function animateLine() {
                line.style.transition = "transform 1.5s ease-in-out";
                line.style.transform = "scaleX(1)";

                // Después de un tiempo volvemos a ocultar la línea
                setTimeout(() => {
                    line.style.transition = "transform 1.5s ease-in-out";
                    line.style.transform = "scaleX(0)";

                    // Y luego repetimos
                    setTimeout(animateLine, 9000); // Tiempo total de animación menos duración de esta fase
                }, 3000);
            }

            // Iniciamos con un delay aleatorio
            setTimeout(animateLine, Math.random() * 2000);
        });

        // Funcionalidad del chatbot demo
        const chatInput = document.getElementById('chat-demo-input');
        const chatSendBtn = document.getElementById('chat-demo-send');

        if (chatInput && chatSendBtn) {
            chatSendBtn.addEventListener('click', function() {
                const userMessage = chatInput.value.trim();
                if (userMessage) {
                    // Crear burbuja de usuario
                    const userBubble = document.createElement('div');
                    userBubble.className = 'chat-bubble user-bubble';
                    userBubble.style.top = '20%';
                    userBubble.style.opacity = '1';
                    userBubble.style.transform = 'translateY(0)';
                    userBubble.textContent = userMessage;

                    // Agregar al chat y limpiar input
                    document.getElementById('chat-demo').appendChild(userBubble);
                    chatInput.value = '';

                    // Respuesta de IA simulada después de un breve delay
                    setTimeout(() => {
                        const aiResponses = [
                            "¡Claro! Puedo ayudarte con eso. ¿Necesitas más información?",
                            "Basado en tu consulta, te recomendaría revisar nuestra documentación en el apartado de soporte.",
                            "Entiendo tu pregunta. La solución es configurar los parámetros en el panel de administración.",
                            "Esa es una excelente pregunta. Permíteme buscar la respuesta más adecuada para ti."
                        ];

                        const randomResponse = aiResponses[Math.floor(Math.random() * aiResponses.length)];

                        const aiBubble = document.createElement('div');
                        aiBubble.className = 'chat-bubble ai-bubble';
                        aiBubble.style.top = '40%';
                        aiBubble.style.opacity = '1';
                        aiBubble.style.transform = 'translateY(0)';
                        aiBubble.textContent = randomResponse;

                        document.getElementById('chat-demo').appendChild(aiBubble);

                        // Eliminar burbujas antiguas para no sobrecargar la demo
                        setTimeout(() => {
                            userBubble.style.opacity = '0';
                            aiBubble.style.opacity = '0';
                            setTimeout(() => {
                                userBubble.remove();
                                aiBubble.remove();
                            }, 500);
                        }, 5000);
                    }, 800);
                }
            });

            // También permitir enviar con Enter
            chatInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    chatSendBtn.click();
                }
            });
        }

        // Demo interactiva de gráficos de analytics
        const chartBars = document.querySelectorAll('.chart-bar');
        chartBars.forEach(bar => {
            bar.addEventListener('mouseover', function() {
                // Mostrar tooltip con datos
                const tooltip = document.createElement('div');
                tooltip.className = 'analytics-tooltip';
                tooltip.style.position = 'absolute';
                tooltip.style.backgroundColor = 'rgba(168, 85, 247, 0.9)';
                tooltip.style.color = 'white';
                tooltip.style.padding = '8px';
                tooltip.style.borderRadius = '4px';
                tooltip.style.fontSize = '12px';
                tooltip.style.zIndex = '10';
                tooltip.style.top = '10%';
                tooltip.style.left = bar.style.left;
                tooltip.style.transform = 'translateX(-50%)';
                tooltip.innerHTML = `<b>Ventas:</b> $${Math.floor(Math.random() * 10000)}<br><b>Incremento:</b> +${Math.floor(Math.random() * 40)}%`;

                document.getElementById('analytics-demo').appendChild(tooltip);

                bar.addEventListener('mouseout', function() {
                    tooltip.remove();
                });
            });
        });

        // Demo interactiva de tarjetas de productos
        const productCards = document.querySelectorAll('.product-card');
        productCards.forEach(card => {
            card.addEventListener('click', function() {
                card.style.transform = 'scale(1.1)';
                card.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.3)';
                card.style.zIndex = '5';

                setTimeout(() => {
                    card.style.transform = '';
                    card.style.boxShadow = '';
                    card.style.zIndex = '';
                }, 1000);
            });
        });
    });

    // Función para animar líneas de datos
    function growLine(duration) {
        return {
            '0%': { transform: 'scaleX(0)' },
            '20%, 80%': { transform: 'scaleX(1)' },
            '100%': { transform: 'scaleX(0)' }
        };
    }
</script>
@endsection

<script>
    // Formulario sticky de demostración
    document.addEventListener('DOMContentLoaded', function() {
        const demoForm = document.getElementById('demo-form');
        const showDemoForm = document.getElementById('show-demo-form');
        const closeDemoForm = document.getElementById('close-demo-form');
        const demoStickyForm = document.getElementById('demo-sticky-form');

        // Mostrar formulario
        showDemoForm.addEventListener('click', function() {
            demoForm.style.transform = 'translateY(0)';
            showDemoForm.style.transform = 'translateY(100%)';
        });

        // Ocultar formulario
        closeDemoForm.addEventListener('click', function() {
            demoForm.style.transform = 'translateY(100%)';
            showDemoForm.style.transform = 'translateY(0)';
        });

        // Procesar envío de formulario
        demoStickyForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Gracias por tu interés. Hemos recibido tu solicitud y te contactaremos en breve.');
            demoForm.style.transform = 'translateY(100%)';
            showDemoForm.style.transform = 'translateY(0)';
            demoStickyForm.reset();
        });

        // Mostrar formulario automáticamente después de 20 segundos
        setTimeout(function() {
            if (demoForm.style.transform !== 'translateY(0)') {
                demoForm.style.transform = 'translateY(0)';
                showDemoForm.style.transform = 'translateY(100%)';
            }
        }, 20000);

        // Chatbot funcional de demostración
        const chatToggle = document.getElementById('chat-toggle');
        const chatWidget = document.getElementById('chat-widget');
        const closeChat = document.getElementById('close-chat');
        const chatInput = document.getElementById('chat-input');
        const sendMessage = document.getElementById('send-message');
        const chatMessages = document.getElementById('chat-messages');
        const chatIconOpen = document.getElementById('chat-icon-open');
        const chatIconClose = document.getElementById('chat-icon-close');

        // Mostrar chat después de 3 segundos automáticamente
        setTimeout(() => {
            chatWidget.classList.remove('scale-0', 'opacity-0', 'pointer-events-none');
            chatWidget.classList.add('scale-100', 'opacity-100');
            chatIconOpen.classList.add('hidden');
            chatIconClose.classList.remove('hidden');
        }, 3000);

        // Toggle del chatbot
        chatToggle.addEventListener('click', function() {
            if (chatWidget.classList.contains('scale-0')) {
                chatWidget.classList.remove('scale-0', 'opacity-0', 'pointer-events-none');
                chatWidget.classList.add('scale-100', 'opacity-100');
                chatIconOpen.classList.add('hidden');
                chatIconClose.classList.remove('hidden');
            } else {
                chatWidget.classList.add('scale-0', 'opacity-0', 'pointer-events-none');
                chatWidget.classList.remove('scale-100', 'opacity-100');
                chatIconOpen.classList.remove('hidden');
                chatIconClose.classList.add('hidden');
            }
        });

        // Cerrar chat
        closeChat.addEventListener('click', function() {
            chatWidget.classList.add('scale-0', 'opacity-0', 'pointer-events-none');
            chatWidget.classList.remove('scale-100', 'opacity-100');
            chatIconOpen.classList.remove('hidden');
            chatIconClose.classList.add('hidden');
        });

        // Enviar mensaje
        function sendChatMessage() {
            const message = chatInput.value.trim();
            if (message) {
                // Añadir mensaje del usuario
                addMessage(message, 'user');
                chatInput.value = '';

                // Simular respuesta del chatbot
                simulateBotResponse(message);
            }
        }

        // Evento para botón de enviar
        sendMessage.addEventListener('click', sendChatMessage);

        // Evento para tecla Enter
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendChatMessage();
            }
        });

        // Función para añadir mensajes al chat
        function addMessage(text, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'flex items-start';

            let iconClass, bgClass;

            if (sender === 'user') {
                messageDiv.className += ' justify-end';
                iconClass = 'fa-user';
                bgClass = 'bg-gray-700';
            } else {
                iconClass = 'fa-robot';
                bgClass = 'bg-blue-600/20';
            }

            // Solo mostramos el avatar para mensajes del bot
            if (sender !== 'user') {
                const avatar = document.createElement('div');
                avatar.className = 'h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center mr-2 flex-shrink-0';
                avatar.innerHTML = `<i class="fas ${iconClass} text-white text-xs"></i>`;
                messageDiv.appendChild(avatar);
            }

            const msgBubble = document.createElement('div');
            msgBubble.className = `${bgClass} rounded-lg p-3 max-w-[80%] text-sm`;
            msgBubble.innerText = text;

            messageDiv.appendChild(msgBubble);
            chatMessages.appendChild(messageDiv);

            // Scroll al final
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Función para simular respuesta del chatbot
        function simulateBotResponse(userMessage) {
            // Mostrar indicador de escritura
            const typingIndicator = document.createElement('div');
            typingIndicator.className = 'flex items-start typing-indicator';
            typingIndicator.innerHTML = `
                <div class="h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center mr-2 flex-shrink-0">
                    <i class="fas fa-robot text-white text-xs"></i>
                </div>
                <div class="bg-blue-600/20 rounded-lg p-3 max-w-[80%] text-sm">
                    <div class="flex space-x-1">
                        <div class="h-2 w-2 bg-blue-400 rounded-full animate-bounce"></div>
                        <div class="h-2 w-2 bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                        <div class="h-2 w-2 bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                    </div>
                </div>
            `;
            chatMessages.appendChild(typingIndicator);
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Determinar una respuesta basada en el mensaje del usuario
            setTimeout(() => {
                // Eliminar indicador de escritura
                typingIndicator.remove();

                let botResponse = '';
                // Respuestas predefinidas basadas en palabras clave
                if (userMessage.toLowerCase().includes('precio') || userMessage.toLowerCase().includes('costo') || userMessage.toLowerCase().includes('valor')) {
                    botResponse = "Tenemos planes que se adaptan a distintos presupuestos, desde $299.000 para el plan Básico, hasta soluciones personalizadas para empresas. ¿Te gustaría conocer más detalles sobre algún plan específico?";
                }
                else if (userMessage.toLowerCase().includes('demo') || userMessage.toLowerCase().includes('prueba') || userMessage.toLowerCase().includes('demostración')) {
                    botResponse = "¡Claro! Puedes solicitar una demostración personalizada usando el formulario de contacto o haciendo clic en 'Solicitar demostración'. Un especialista te contactará en menos de 24 horas para agendar una sesión.";
                }
                else if (userMessage.toLowerCase().includes('implementación') || userMessage.toLowerCase().includes('instalar') || userMessage.toLowerCase().includes('configurar')) {
                    botResponse = "El proceso de implementación típicamente toma entre 2-6 semanas dependiendo de la complejidad. Nuestro equipo te acompaña en todas las etapas: consultoría, diseño, desarrollo, pruebas, capacitación y soporte continuo.";
                }
                else if (userMessage.toLowerCase().includes('empresa') || userMessage.toLowerCase().includes('quién') || userMessage.toLowerCase().includes('dendria')) {
                    botResponse = "DendrIA es una empresa chilena especializada en soluciones de inteligencia artificial para negocios. Contamos con un equipo de ingenieros y científicos de datos con más de 10 años de experiencia en el desarrollo de tecnologías disruptivas.";
                }
                else if (userMessage.toLowerCase().includes('hola') || userMessage.toLowerCase().includes('buenos días') || userMessage.toLowerCase().includes('buenas')) {
                    botResponse = "¡Hola! Bienvenido/a a DendrIA. Soy tu asistente virtual y estoy aquí para resolver tus dudas sobre nuestros productos y servicios. ¿En qué puedo ayudarte hoy?";
                }
                else {
                    // Respuesta genérica para cualquier otra consulta
                    const genericResponses = [
                        "Gracias por tu consulta. Para información más detallada, te recomendaría contactar con nuestro equipo de ventas a través del formulario de contacto.",
                        "Interesante pregunta. Nuestro equipo de expertos puede brindarte asesoría personalizada. ¿Te gustaría que te contactemos?",
                        "Entiendo tu consulta. En DendrIA nos especializamos en soluciones adaptadas a cada negocio. ¿Hay algún aspecto específico que te interese conocer más a fondo?",
                        "Esa es una excelente pregunta. Para darte la mejor respuesta, nuestros especialistas pueden agendar una llamada contigo para entender mejor tus necesidades."
                    ];
                    botResponse = genericResponses[Math.floor(Math.random() * genericResponses.length)];
                }

                // Añadir la respuesta del bot
                addMessage(botResponse, 'bot');
            }, 1500);
        }
    });
</script>
@endsection