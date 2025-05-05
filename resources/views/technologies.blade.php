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