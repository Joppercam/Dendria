@extends('layouts.app')

@section('title', 'Tecnologías - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Nuestras Tecnologías</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Combinamos las mejores tecnologías del mercado para crear soluciones innovadoras</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fab fa-laravel text-4xl text-red-500"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Laravel</h3>
                <p class="text-gray-400">Framework PHP robusto y elegante para desarrollo web rápido y seguro.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-brain text-4xl text-blue-400"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Inteligencia Artificial</h3>
                <p class="text-gray-400">Implementación de algoritmos avanzados de ML y procesamiento de lenguaje natural.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fab fa-vuejs text-4xl text-green-500"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Vue.js</h3>
                <p class="text-gray-400">Framework JavaScript progresivo para construir interfaces de usuario reactivas.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fab fa-react text-4xl text-blue-500"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">React</h3>
                <p class="text-gray-400">Biblioteca JavaScript para construir interfaces de usuario componetizadas y eficientes.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fab fa-python text-4xl text-yellow-300"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Python</h3>
                <p class="text-gray-400">Lenguaje versátil ideal para implementación de algoritmos de IA y procesamiento de datos.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-database text-4xl text-orange-500"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">MySQL</h3>
                <p class="text-gray-400">Sistema de gestión de bases de datos relacional, rápido, seguro y escalable.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fab fa-aws text-4xl text-yellow-400"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">AWS</h3>
                <p class="text-gray-400">Plataforma de servicios en la nube para infraestructura escalable y confiable.</p>
            </div>

            <div class="bg-gray-800 p-6 rounded-xl text-center hover:bg-gray-700 transition transform hover:-translate-y-2">
                <div class="w-20 h-20 mx-auto mb-4 bg-blue-900/20 rounded-full flex items-center justify-center">
                    <i class="fab fa-docker text-4xl text-blue-500"></i>
                </div>
                <h3 class="font-bold text-xl mb-2">Docker</h3>
                <p class="text-gray-400">Contenedores para desarrollo, despliegue y ejecución de aplicaciones consistentes.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Nuestro Stack Tecnológico</h2>
                <p class="text-gray-300 mb-8">En DendrIA, seleccionamos cuidadosamente las tecnologías más adecuadas para cada proyecto, basándonos en los requerimientos específicos y objetivos del negocio.</p>

                <div class="space-y-6">
                    <div>
                        <h3 class="font-bold text-xl mb-2">Backend</h3>
                        <p class="text-gray-400">Laravel, Python, Node.js, GraphQL, RESTful APIs</p>
                    </div>

                    <div>
                        <h3 class="font-bold text-xl mb-2">Frontend</h3>
                        <p class="text-gray-400">Vue.js, React, Tailwind CSS, Alpine.js, Livewire</p>
                    </div>

                    <div>
                        <h3 class="font-bold text-xl mb-2">Bases de Datos</h3>
                        <p class="text-gray-400">MySQL, PostgreSQL, MongoDB, Redis, Elasticsearch</p>
                    </div>

                    <div>
                        <h3 class="font-bold text-xl mb-2">DevOps</h3>
                        <p class="text-gray-400">Docker, Kubernetes, CI/CD, AWS, Google Cloud</p>
                    </div>

                    <div>
                        <h3 class="font-bold text-xl mb-2">Inteligencia Artificial</h3>
                        <p class="text-gray-400">TensorFlow, PyTorch, scikit-learn, BERT, GPT, OpenAI API</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/tech-stack.png') }}" alt="Stack Tecnológico" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Tecnologías para PyMEs con IA -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Tecnologías para PyMEs con IA</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Soluciones tecnológicas accesibles y potentes para impulsar a las pequeñas y medianas empresas</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Soluciones de IA Accesibles -->
            <div class="bg-gray-800 rounded-xl p-8 border border-blue-900/30">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-robot text-xl text-white"></i>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold mb-3">IA Accesible para PyMEs</h3>
                        <p class="text-gray-400 mb-5">Implementamos soluciones de inteligencia artificial adaptadas al presupuesto y necesidades de pequeñas y medianas empresas.</p>

                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-blue-400 mr-2"></i>
                                <span class="text-gray-300">Chatbots inteligentes con tecnología GPT</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-blue-400 mr-2"></i>
                                <span class="text-gray-300">Análisis predictivo de ventas e inventario</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-blue-400 mr-2"></i>
                                <span class="text-gray-300">Automatización de procesos con ML</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-blue-400 mr-2"></i>
                                <span class="text-gray-300">Procesamiento de lenguaje natural</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-blue-400 mr-2"></i>
                                <span class="text-gray-300">Modelos pre-entrenados adaptables</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Stack Tecnológico Optimizado -->
            <div class="bg-gray-800 rounded-xl p-8 border border-green-900/30">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-green-900 rounded-lg flex items-center justify-center">
                            <i class="fas fa-layer-group text-xl text-white"></i>
                        </div>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-xl font-bold mb-3">Stack Tecnológico Optimizado</h3>
                        <p class="text-gray-400 mb-5">Utilizamos tecnologías eficientes en costos pero potentes para maximizar el ROI de tu inversión tecnológica.</p>

                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-400 mr-2"></i>
                                <span class="text-gray-300">Laravel + MySQL para aplicaciones web</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-400 mr-2"></i>
                                <span class="text-gray-300">APIs de IA pre-construidas (OpenAI, AWS)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-400 mr-2"></i>
                                <span class="text-gray-300">Infraestructura en la nube escalable</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-400 mr-2"></i>
                                <span class="text-gray-300">Herramientas de análisis de datos optimizadas</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-400 mr-2"></i>
                                <span class="text-gray-300">Integraciones con servicios existentes</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Implementaciones para PyMEs -->
        <div class="bg-gray-800 rounded-xl p-8 mb-12 border border-purple-900/30">
            <div class="flex items-start flex-col md:flex-row">
                <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-600 to-purple-900 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-store text-2xl text-white"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">Implementaciones Reales para PyMEs</h3>
                    <p class="text-gray-300 mb-6">Nuestras soluciones tecnológicas están diseñadas para resolver problemas concretos de las PyMEs con un enfoque pragmático y orientado a resultados.</p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gray-900/50 rounded-lg p-5">
                            <h4 class="text-lg font-bold mb-3 text-purple-400">Retail</h4>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Predicción de demanda e inventario</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Recomendaciones personalizadas</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Optimización de precios</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-gray-900/50 rounded-lg p-5">
                            <h4 class="text-lg font-bold mb-3 text-purple-400">Servicios Profesionales</h4>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Automatización de documentación</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Chatbots para atención al cliente</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Análisis de satisfacción de clientes</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-gray-900/50 rounded-lg p-5">
                            <h4 class="text-lg font-bold mb-3 text-purple-400">Manufactura</h4>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Mantenimiento predictivo</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Control de calidad visual</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-angle-right text-purple-400 mt-1 mr-2"></i>
                                    <span>Optimización de cadena de suministro</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROI para PyMEs -->
        <div class="bg-gradient-to-br from-blue-900/30 to-purple-900/30 rounded-xl p-8">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold mb-4">Retorno de Inversión Tecnológica para PyMEs</h3>
                <p class="text-gray-300 max-w-3xl mx-auto">Las inversiones en tecnología e IA pueden generar resultados significativos cuando están adaptadas a las necesidades específicas</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-gray-800/50 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-blue-400 mb-2">+25%</div>
                    <p class="text-gray-300">Aumento en productividad</p>
                </div>

                <div class="bg-gray-800/50 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-blue-400 mb-2">-30%</div>
                    <p class="text-gray-300">Reducción de costos operativos</p>
                </div>

                <div class="bg-gray-800/50 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-blue-400 mb-2">+40%</div>
                    <p class="text-gray-300">Mejora en satisfacción del cliente</p>
                </div>

                <div class="bg-gray-800/50 rounded-lg p-6 text-center">
                    <div class="text-3xl font-bold text-blue-400 mb-2">6-12</div>
                    <p class="text-gray-300">Meses para recuperar inversión</p>
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
                <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Quieres saber qué tecnologías son ideales para tu proyecto?</h2>
                <p class="text-xl text-blue-100">Contáctanos para una asesoría tecnológica personalizada.</p>
            </div>
            <div>
                <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    Agendar consulta
                </a>
            </div>
        </div>
    </div>
</section>
@endsection