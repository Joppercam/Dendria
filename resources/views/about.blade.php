@extends('layouts.app')

@section('title', 'Sobre Nosotros - DendrIA')

@section('content')
<div class="gradient-bg py-16">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Sobre Nosotros</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Innovación, excelencia y visión de futuro definen nuestra trayectoria
            </p>
        </div>
    </div>
</div>

<!-- Historia y Visión -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">Nuestra Historia</h2>
                <div class="space-y-6 text-gray-300">
                    <p>
                        DendrIA nació en 2020 con una visión clara: transformar la forma en que las empresas utilizan la tecnología y la inteligencia artificial para resolver problemas reales. Fundada por un equipo de desarrolladores y científicos de datos apasionados, nuestra empresa comenzó como un proyecto para hacer que la IA fuera más accesible para negocios de todos los tamaños.
                    </p>
                    <p>
                        Lo que comenzó como un pequeño equipo de tres personas se ha convertido en una organización dinámica con más de 25 profesionales especializados en diversas áreas de la tecnología, desde desarrollo web y móvil hasta machine learning e inteligencia artificial avanzada.
                    </p>
                    <p>
                        A lo largo de nuestra trayectoria, hemos completado más de 120 proyectos exitosos para clientes de diversos sectores, siempre manteniendo nuestro compromiso con la excelencia técnica y la entrega de valor real.
                    </p>
                </div>
            </div>
            <div>
                <div class="bg-gray-800 p-8 rounded-xl shadow-lg relative">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center shadow-lg">
                        <i class="fas fa-rocket text-white text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 mt-2">Nuestra Misión</h3>
                    <p class="text-gray-300 mb-8">
                        Democratizar el acceso a tecnologías avanzadas, permitiendo que empresas de cualquier tamaño aprovechen el poder de la inteligencia artificial para transformar sus operaciones, crear mejores experiencias para sus clientes y competir efectivamente en la era digital.
                    </p>
                    
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center shadow-lg">
                        <i class="fas fa-eye text-white text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Nuestra Visión</h3>
                    <p class="text-gray-300">
                        Ser reconocidos como líderes globales en el desarrollo de soluciones de software impulsadas por IA que resuelvan desafíos complejos de manera elegante y efectiva, contribuyendo a un futuro donde la tecnología potencia el potencial humano.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Valores -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Nuestros Valores</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">
                Los principios que guían nuestras decisiones y definen nuestra cultura
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg relative overflow-hidden transform transition hover:-translate-y-2">
                <div class="absolute right-0 bottom-0 w-24 h-24 bg-blue-500 opacity-10 rounded-full -mr-10 -mb-10"></div>
                <div class="mb-6">
                    <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-4">Innovación Constante</h3>
                <p class="text-gray-400">
                    Nos desafiamos a nosotros mismos para pensar más allá de lo convencional y encontrar soluciones creativas a problemas complejos. La innovación está en nuestro ADN.
                </p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg relative overflow-hidden transform transition hover:-translate-y-2">
                <div class="absolute right-0 bottom-0 w-24 h-24 bg-green-500 opacity-10 rounded-full -mr-10 -mb-10"></div>
                <div class="mb-6">
                    <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-4">Compromiso con el Cliente</h3>
                <p class="text-gray-400">
                    El éxito de nuestros clientes es nuestro éxito. Nos comprometemos a entender sus necesidades, superar sus expectativas y construir relaciones duraderas.
                </p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg relative overflow-hidden transform transition hover:-translate-y-2">
                <div class="absolute right-0 bottom-0 w-24 h-24 bg-purple-500 opacity-10 rounded-full -mr-10 -mb-10"></div>
                <div class="mb-6">
                    <div class="w-16 h-16 bg-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-4">Excelencia Técnica</h3>
                <p class="text-gray-400">
                    Nos enorgullecemos de nuestro trabajo y nos esforzamos por la excelencia en cada línea de código. Mantenemos los más altos estándares de calidad en todo lo que hacemos.
                </p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg relative overflow-hidden transform transition hover:-translate-y-2">
                <div class="absolute right-0 bottom-0 w-24 h-24 bg-yellow-500 opacity-10 rounded-full -mr-10 -mb-10"></div>
                <div class="mb-6">
                    <div class="w-16 h-16 bg-yellow-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-4">Colaboración</h3>
                <p class="text-gray-400">
                    Creemos en el poder del trabajo en equipo. Fomentamos un ambiente colaborativo donde diversas perspectivas se combinan para crear soluciones extraordinarias.
                </p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg relative overflow-hidden transform transition hover:-translate-y-2">
                <div class="absolute right-0 bottom-0 w-24 h-24 bg-red-500 opacity-10 rounded-full -mr-10 -mb-10"></div>
                <div class="mb-6">
                    <div class="w-16 h-16 bg-red-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-4">Integridad</h3>
                <p class="text-gray-400">
                    Actuamos con transparencia, honestidad y ética en todas nuestras interacciones. Construimos confianza a través de nuestras acciones y decisiones.
                </p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg relative overflow-hidden transform transition hover:-translate-y-2">
                <div class="absolute right-0 bottom-0 w-24 h-24 bg-pink-500 opacity-10 rounded-full -mr-10 -mb-10"></div>
                <div class="mb-6">
                    <div class="w-16 h-16 bg-pink-600 rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-book-open text-white text-2xl"></i>
                    </div>
                </div>
                <h3 class="text-xl font-bold mb-4">Aprendizaje Continuo</h3>
                <p class="text-gray-400">
                    La tecnología evoluciona rápidamente, y nosotros también. Nos comprometemos con el aprendizaje constante para mantenernos a la vanguardia y ofrecer las mejores soluciones.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Por qué elegirnos -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Por qué Elegirnos?</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">
                Lo que nos distingue y hace de DendrIA el socio tecnológico ideal para tu empresa
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            <i class="fas fa-brain"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Experiencia en IA</h4>
                        <p class="mt-2 text-gray-400">
                            Nuestro equipo incluye expertos en machine learning e IA que convierten conceptos complejos en soluciones prácticas y efectivas para empresas.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Enfoque Personalizado</h4>
                        <p class="mt-2 text-gray-400">
                            No creemos en soluciones de talla única. Trabajamos estrechamente con cada cliente para desarrollar soluciones a medida que se alineen con sus necesidades y objetivos específicos.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            <i class="fas fa-code"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Excelencia Técnica</h4>
                        <p class="mt-2 text-gray-400">
                            Nuestro equipo está formado por desarrolladores y ingenieros de elite, apasionados por la tecnología y comprometidos con la entrega de código de alta calidad.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            <i class="fas fa-comments"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Comunicación Transparente</h4>
                        <p class="mt-2 text-gray-400">
                            Mantenemos una comunicación clara y constante a lo largo de todo el proyecto. Nuestros clientes siempre saben en qué estado se encuentra su proyecto y qué esperar a continuación.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Orientados a Resultados</h4>
                        <p class="mt-2 text-gray-400">
                            Nos enfocamos en crear soluciones que generen un impacto real en el negocio de nuestros clientes, con métricas claras que demuestran el valor de nuestra colaboración.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl p-6 shadow-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
                            <i class="fas fa-life-ring"></i>
                        </div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-medium text-white">Soporte Continuo</h4>
                        <p class="mt-2 text-gray-400">
                            Nuestro compromiso no termina con la entrega. Ofrecemos soporte continuo y mantenimiento para asegurar que nuestras soluciones sigan generando valor a largo plazo.
                        </p>
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
                <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para trabajar con nosotros?</h2>
                <p class="text-xl text-blue-100">Conviértete en nuestro próximo caso de éxito. Contáctanos hoy para discutir cómo podemos impulsar tu negocio con soluciones tecnológicas a medida.</p>
            </div>
            <div>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    Contactar ahora
                </a>
            </div>
        </div>
    </div>
</section>
@endsection