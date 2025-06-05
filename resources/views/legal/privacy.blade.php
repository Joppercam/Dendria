@extends('layouts.app')

@section('title', 'Política de Privacidad - DendrIA')

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
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Política de Privacidad</h1>
            <p class="text-xl text-blue-100 mb-6">Cómo protegemos y manejamos tu información personal</p>
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
                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-600 rounded-full mb-4">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    En DendrIA, valoramos su privacidad y nos comprometemos a proteger sus datos personales. Esta Política de 
                    Privacidad explica cómo recopilamos, utilizamos y protegemos la información que nos proporciona.
                </p>
            </div>

            <!-- Secciones -->
            <div class="space-y-6">
                <!-- Sección 1 -->
                <div class="section-card">
                    <div class="section-number">1</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Información que Recopilamos</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Podemos recopilar los siguientes tipos de información:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-user text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Información de contacto:</strong> Nombre, email, teléfono, dirección postal</li>
                        <li class="flex items-start"><i class="fas fa-building text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Información empresarial:</strong> Nombre de empresa, cargo, sector industrial</li>
                        <li class="flex items-start"><i class="fas fa-project-diagram text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Información del proyecto:</strong> Requisitos, especificaciones, documentación</li>
                        <li class="flex items-start"><i class="fas fa-desktop text-green-400 mr-2 mt-1"></i><strong class="text-green-400">Información técnica:</strong> IP, navegador, ISP, páginas visitadas, sistema operativo</li>
                    </ul>
                </div>

                <!-- Sección 2 -->
                <div class="section-card">
                    <div class="section-number">2</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Cómo Utilizamos su Información</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Utilizamos la información recopilada para:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-cogs text-blue-400 mr-2 mt-1"></i>Proporcionar, operar y mantener nuestros servicios</li>
                        <li class="flex items-start"><i class="fas fa-chart-line text-blue-400 mr-2 mt-1"></i>Mejorar, personalizar y ampliar nuestros servicios</li>
                        <li class="flex items-start"><i class="fas fa-analytics text-blue-400 mr-2 mt-1"></i>Entender y analizar cómo utiliza nuestros servicios</li>
                        <li class="flex items-start"><i class="fas fa-lightbulb text-blue-400 mr-2 mt-1"></i>Desarrollar nuevos productos y funcionalidades</li>
                        <li class="flex items-start"><i class="fas fa-envelope text-blue-400 mr-2 mt-1"></i>Comunicarnos para actualizaciones y soporte</li>
                        <li class="flex items-start"><i class="fas fa-shield-alt text-blue-400 mr-2 mt-1"></i>Prevenir y abordar problemas técnicos</li>
                        <li class="flex items-start"><i class="fas fa-gavel text-blue-400 mr-2 mt-1"></i>Cumplir con obligaciones legales</li>
                    </ul>
                </div>

                <!-- Sección 3 -->
                <div class="section-card">
                    <div class="section-number">3</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Almacenamiento y Seguridad de Datos</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Implementamos medidas de seguridad <span class="text-yellow-400 font-semibold">técnicas, administrativas y físicas</span> diseñadas para proteger sus datos 
                        personales contra accesos no autorizados, pérdida, alteración o destrucción. Sin embargo, ningún método de 
                        transmisión por Internet o método de almacenamiento electrónico es <span class="text-red-400 font-semibold">100% seguro</span>.
                    </p>
                </div>

                <!-- Sección 4 -->
                <div class="section-card">
                    <div class="section-number">4</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Compartir Información</h3>
                    <p class="text-gray-300 leading-relaxed">
                        <span class="text-green-400 font-semibold">No vendemos, comercializamos ni transferimos</span> sus datos personales a terceros sin su consentimiento, 
                        excepto cuando sea necesario para proporcionar nuestros servicios (como proveedores de hosting, 
                        procesadores de pagos, etc.) o cuando estemos legalmente obligados a hacerlo.
                    </p>
                </div>

                <!-- Sección 5 -->
                <div class="section-card">
                    <div class="section-number">5</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Proveedores de Servicios</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Podemos emplear compañías e individuos terceros por las siguientes razones:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-server text-purple-400 mr-2 mt-1"></i>Facilitar nuestros servicios técnicos</li>
                        <li class="flex items-start"><i class="fas fa-cloud text-purple-400 mr-2 mt-1"></i>Proporcionar servicios de hosting y almacenamiento</li>
                        <li class="flex items-start"><i class="fas fa-credit-card text-purple-400 mr-2 mt-1"></i>Procesar pagos de forma segura</li>
                        <li class="flex items-start"><i class="fas fa-chart-bar text-purple-400 mr-2 mt-1"></i>Analizar el uso de nuestros servicios</li>
                    </ul>
                </div>

                <!-- Sección 6 -->
                <div class="section-card">
                    <div class="section-number">6</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Sus Derechos</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Usted tiene derecho a:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-eye text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Acceder</strong> a sus datos personales</li>
                        <li class="flex items-start"><i class="fas fa-edit text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Rectificar</strong> información incorrecta</li>
                        <li class="flex items-start"><i class="fas fa-trash text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Eliminar</strong> sus datos personales</li>
                        <li class="flex items-start"><i class="fas fa-ban text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Restringir</strong> el procesamiento</li>
                        <li class="flex items-start"><i class="fas fa-download text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Portabilidad</strong> de los datos</li>
                        <li class="flex items-start"><i class="fas fa-times-circle text-blue-400 mr-2 mt-1"></i><strong class="text-blue-400">Oponerse</strong> al procesamiento</li>
                    </ul>
                </div>

                <!-- Sección 7 -->
                <div class="section-card">
                    <div class="section-number">7</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Retención de Datos</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Retenemos sus datos personales solo durante el tiempo necesario para cumplir con los propósitos para los cuales 
                        fueron recopilados, incluyendo cualquier período de retención requerido por la ley. 
                        Los datos del proyecto se mantienen por <span class="text-yellow-400 font-semibold">5 años</span> después de la finalización.
                    </p>
                </div>

                <!-- Sección 8 -->
                <div class="section-card">
                    <div class="section-number">8</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Cookies y Tecnologías de Seguimiento</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Utilizamos cookies y tecnologías similares para mejorar su experiencia en nuestro sitio web. 
                        Para más información, consulte nuestra 
                        <a href="{{ route('cookies') }}" class="text-blue-400 hover:text-blue-300 transition underline">Política de Cookies</a>.
                    </p>
                </div>

                <!-- Sección 9 -->
                <div class="section-card">
                    <div class="section-number">9</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Cambios a esta Política</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Podemos actualizar nuestra Política de Privacidad de vez en cuando. Le notificaremos cualquier cambio 
                        publicando la nueva Política de Privacidad en esta página y actualizando la fecha de "última actualización".
                    </p>
                </div>

                <!-- Sección 10 -->
                <div class="section-card">
                    <div class="section-number">10</div>
                    <h3 class="text-xl font-bold text-green-300 mb-3">Contacto</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Si tiene alguna pregunta sobre esta Política de Privacidad, por favor contáctenos en 
                        <a href="mailto:contacto@dendria.cl" class="text-green-400 hover:text-green-300 transition underline">contacto@dendria.cl</a>.
                    </p>
                </div>
            </div>

            <!-- Footer de la página legal -->
            <div class="mt-12 pt-8 border-t border-gray-600 text-center">
                <div class="inline-flex items-center justify-center space-x-4 text-gray-400">
                    <i class="fas fa-shield-alt text-green-500"></i>
                    <span>Tu privacidad está protegida según estándares internacionales</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection