@extends('layouts.app')

@section('title', 'Política de Cookies - DendrIA')

@section('styles')
<style>
    .legal-header {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%);
        position: relative;
        overflow: hidden;
    }
    
    .legal-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(0, 0, 0, 0) 70%);
        animation: rotate 20s linear infinite;
        z-index: 0;
    }
    
    .legal-content {
        background: linear-gradient(to bottom, #374151, #1f2937);
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
    }
    
    .section-card {
        background: rgba(55, 65, 81, 0.5);
        border: 1px solid rgba(59, 130, 246, 0.2);
        border-radius: 0.75rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .section-card:hover {
        border-color: rgba(59, 130, 246, 0.4);
        background: rgba(55, 65, 81, 0.7);
        transform: translateY(-2px);
    }
    
    .section-number {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.875rem;
        float: left;
        margin-right: 1rem;
        margin-top: 0.25rem;
    }
    
    .cookie-type {
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.3);
        border-radius: 0.5rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    
    .cookie-type h4 {
        color: #10b981;
        font-weight: 600;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }
    
    .cookie-type h4 i {
        margin-right: 0.5rem;
    }
    
    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endsection

@section('content')
<!-- Header con gradiente -->
<div class="legal-header py-16 relative">
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Política de Cookies</h1>
            <p class="text-xl text-blue-100 mb-6">Información sobre el uso de cookies en nuestro sitio web</p>
            <div class="flex items-center justify-center space-x-4 text-blue-200">
                <i class="fas fa-calendar-alt"></i>
                <span>Última actualización: {{ date('d/m/Y') }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Contenido principal -->
<div class="bg-gray-900 py-16">
    <div class="container mx-auto px-6 max-w-5xl">
        <div class="legal-content p-8 md:p-12">
            <!-- Introducción -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-yellow-600 rounded-full mb-4">
                    <i class="fas fa-cookie-bite text-white text-2xl"></i>
                </div>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    Esta Política de Cookies explica qué son las cookies, cómo las utilizamos en nuestro sitio web 
                    DendrIA y sus derechos para controlar nuestro uso de cookies.
                </p>
            </div>

            <!-- Secciones -->
            <div class="space-y-6">
                <!-- Sección 1 -->
                <div class="section-card">
                    <div class="section-number">1</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">¿Qué son las Cookies?</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Las cookies son pequeños archivos de texto que se almacenan en su dispositivo (ordenador, tablet o móvil) 
                        cuando visita un sitio web. Contienen información que permite al sitio web recordar sus preferencias y 
                        mejorar su experiencia de navegación en visitas posteriores.
                    </p>
                </div>

                <!-- Sección 2 -->
                <div class="section-card">
                    <div class="section-number">2</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">¿Cómo Utilizamos las Cookies?</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Utilizamos cookies para varios propósitos:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-cog text-blue-400 mr-2 mt-1"></i>Garantizar el funcionamiento básico del sitio web</li>
                        <li class="flex items-start"><i class="fas fa-user-cog text-blue-400 mr-2 mt-1"></i>Recordar sus preferencias y configuraciones</li>
                        <li class="flex items-start"><i class="fas fa-chart-line text-blue-400 mr-2 mt-1"></i>Analizar el tráfico y el uso del sitio web</li>
                        <li class="flex items-start"><i class="fas fa-shield-alt text-blue-400 mr-2 mt-1"></i>Proporcionar funciones de seguridad</li>
                        <li class="flex items-start"><i class="fas fa-bullhorn text-blue-400 mr-2 mt-1"></i>Mostrar contenido y publicidad relevante</li>
                    </ul>
                </div>

                <!-- Sección 3 -->
                <div class="section-card">
                    <div class="section-number">3</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Tipos de Cookies que Utilizamos</h3>
                    
                    <div class="cookie-type">
                        <h4><i class="fas fa-tools"></i>Cookies Estrictamente Necesarias</h4>
                        <p class="text-gray-300">
                            Estas cookies son esenciales para el funcionamiento del sitio web. Incluyen cookies de sesión 
                            que permiten navegar por el sitio y utilizar sus funciones básicas.
                        </p>
                    </div>

                    <div class="cookie-type">
                        <h4><i class="fas fa-sliders-h"></i>Cookies de Preferencias</h4>
                        <p class="text-gray-300">
                            Estas cookies permiten al sitio web recordar sus elecciones y preferencias, como el idioma, 
                            la región o el tema visual, para proporcionar una experiencia más personalizada.
                        </p>
                    </div>

                    <div class="cookie-type">
                        <h4><i class="fas fa-analytics"></i>Cookies de Análisis</h4>
                        <p class="text-gray-300">
                            Utilizamos Google Analytics para entender cómo los visitantes interactúan con nuestro sitio web. 
                            Estas cookies nos ayudan a mejorar el rendimiento y el diseño del sitio.
                        </p>
                    </div>

                    <div class="cookie-type">
                        <h4><i class="fas fa-ad"></i>Cookies de Marketing</h4>
                        <p class="text-gray-300">
                            Estas cookies se utilizan para mostrar anuncios más relevantes para usted y sus intereses. 
                            También pueden limitar el número de veces que ve un anuncio.
                        </p>
                    </div>
                </div>

                <!-- Sección 4 -->
                <div class="section-card">
                    <div class="section-number">4</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Cookies de Terceros</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Algunos servicios de terceros que utilizamos pueden establecer sus propias cookies:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-chart-bar text-purple-400 mr-2 mt-1"></i><strong class="text-purple-400">Google Analytics:</strong> Para análisis del sitio web</li>
                        <li class="flex items-start"><i class="fas fa-map-marker-alt text-purple-400 mr-2 mt-1"></i><strong class="text-purple-400">Google Maps:</strong> Para mostrar mapas e información de ubicación</li>
                        <li class="flex items-start"><i class="fas fa-share-alt text-purple-400 mr-2 mt-1"></i><strong class="text-purple-400">Redes Sociales:</strong> Para botones de compartir en redes sociales</li>
                    </ul>
                </div>

                <!-- Sección 5 -->
                <div class="section-card">
                    <div class="section-number">5</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Duración de las Cookies</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Las cookies tienen diferentes duraciones según su propósito:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-clock text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Cookies de Sesión:</strong> Se eliminan cuando cierra el navegador</li>
                        <li class="flex items-start"><i class="fas fa-calendar text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Cookies Persistentes:</strong> Permanecen hasta su fecha de expiración o eliminación manual</li>
                        <li class="flex items-start"><i class="fas fa-hourglass-half text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Duración típica:</strong> Entre 30 días y 2 años, dependiendo del propósito</li>
                    </ul>
                </div>

                <!-- Sección 6 -->
                <div class="section-card">
                    <div class="section-number">6</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Control de Cookies</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Tiene varias opciones para controlar o eliminar cookies:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-cogs text-blue-400 mr-2 mt-1"></i>Configurar su navegador para rechazar cookies</li>
                        <li class="flex items-start"><i class="fas fa-bell text-blue-400 mr-2 mt-1"></i>Recibir notificaciones cuando se establecen cookies</li>
                        <li class="flex items-start"><i class="fas fa-trash text-blue-400 mr-2 mt-1"></i>Eliminar cookies existentes de su dispositivo</li>
                        <li class="flex items-start"><i class="fas fa-filter text-blue-400 mr-2 mt-1"></i>Bloquear cookies de sitios específicos</li>
                    </ul>
                    <p class="text-gray-300 leading-relaxed mt-4">
                        <span class="text-yellow-400 font-semibold">Nota:</span> Deshabilitar ciertas cookies puede afectar la funcionalidad del sitio web 
                        y su experiencia de navegación.
                    </p>
                </div>

                <!-- Sección 7 -->
                <div class="section-card">
                    <div class="section-number">7</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Cómo Gestionar Cookies en su Navegador</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Cada navegador tiene diferentes formas de gestionar cookies:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fab fa-chrome text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Chrome:</strong> Configuración > Privacidad y seguridad > Cookies</li>
                        <li class="flex items-start"><i class="fab fa-firefox text-orange-400 mr-2 mt-1"></i><strong class="text-orange-400">Firefox:</strong> Opciones > Privacidad y seguridad > Cookies</li>
                        <li class="flex items-start"><i class="fab fa-safari text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Safari:</strong> Preferencias > Privacidad > Cookies</li>
                        <li class="flex items-start"><i class="fab fa-edge text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Edge:</strong> Configuración > Privacidad > Cookies</li>
                    </ul>
                </div>

                <!-- Sección 8 -->
                <div class="section-card">
                    <div class="section-number">8</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Cambios en esta Política</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Podemos actualizar esta Política de Cookies ocasionalmente para reflejar cambios en las cookies que utilizamos 
                        o por razones operativas, legales o reglamentarias. Le notificaremos de cualquier cambio material 
                        actualizando la fecha en la parte superior de esta página.
                    </p>
                </div>

                <!-- Sección 9 -->
                <div class="section-card">
                    <div class="section-number">9</div>
                    <h3 class="text-xl font-bold text-yellow-300 mb-3">Contacto</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Si tiene alguna pregunta sobre nuestra Política de Cookies, por favor contáctenos en 
                        <a href="mailto:contacto@dendria.cl" class="text-yellow-400 hover:text-yellow-300 transition underline">contacto@dendria.cl</a>.
                    </p>
                </div>
            </div>

            <!-- Footer de la página legal -->
            <div class="mt-12 pt-8 border-t border-gray-600 text-center">
                <div class="inline-flex items-center justify-center space-x-4 text-gray-400">
                    <i class="fas fa-cookie-bite text-yellow-500"></i>
                    <span>Gestione sus preferencias de cookies para una mejor experiencia</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection