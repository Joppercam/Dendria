@extends('layouts.app')

@section('title', 'Servicios - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Nuestros Servicios</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Soluciones tecnológicas a medida que integran Laravel e Inteligencia Artificial para resolver problemas complejos.</p>
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
                <img src="{{ asset('images/web-development.png') }}" alt="Desarrollo Web Personalizado" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<section id="ai" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2 order-2 md:order-1">
                <img src="{{ asset('images/ai-solutions.png') }}" alt="Soluciones de IA" class="rounded-xl shadow-lg">
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
                <img src="{{ asset('images/mobile-development.png') }}" alt="Desarrollo Móvil" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<section id="consulting" class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2 order-2 md:order-1">
                <img src="{{ asset('images/tech-consulting.png') }}" alt="Consultoría Tecnológica" class="rounded-xl shadow-lg">
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