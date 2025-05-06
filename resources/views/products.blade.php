@extends('layouts.app')

@section('title', 'Productos - DendrIA')

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
                    <div class="product-visual shadow-lg">
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
                    <div class="product-visual shadow-lg">
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
                    <div class="product-visual shadow-lg">
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
@endsection