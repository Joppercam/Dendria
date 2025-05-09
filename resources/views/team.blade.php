@extends('layouts.app')

@section('title', 'Equipo - DendrIA')

@section('styles')
<style>
    /* Animaciones específicas para roles de equipo */
    .code-animation div {
        opacity: 0;
        animation: fadeIn 2.5s ease-in-out forwards;
    }

    .code-animation div:nth-child(2) {
        animation-delay: 0.5s;
    }

    .code-animation div:nth-child(3) {
        animation-delay: 1s;
    }

    .network-animation div {
        opacity: 0;
        animation: fadeIn 2s ease-in-out infinite;
    }

    .network-animation div:nth-child(2) {
        animation-delay: 0.5s;
    }

    .network-animation div:nth-child(3) {
        animation-delay: 1s;
    }

    .pulse-animation {
        animation: pulse 2s infinite;
    }

    .flow-animation path {
        stroke-dasharray: 10;
        stroke-dashoffset: 100;
        animation: flow 3s linear infinite;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 0.8; }
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.8; }
        100% { transform: scale(1); opacity: 1; }
    }

    @keyframes flow {
        to { stroke-dashoffset: 0; }
    }

    .role-icon {
        transition: all 0.3s ease;
    }

    .group:hover .role-icon {
        transform: translateY(-5px);
    }

    .card-overlay {
        opacity: 0;
        transition: all 0.3s ease;
    }

    .group:hover .card-overlay {
        opacity: 0.8;
    }

    /* Adicionales para las visualizaciones de roles */
    .mobile-screen {
        position: relative;
        width: 30px;
        height: 50px;
        border: 2px solid rgba(255, 255, 255, 0.8);
        border-radius: 5px;
        overflow: hidden;
        margin: 0 auto;
    }

    .mobile-dot {
        width: 6px;
        height: 6px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        margin: 3px auto;
    }

    .mobile-screen .bar {
        height: 3px;
        margin: 5px 3px;
        background: rgba(255, 255, 255, 0.8);
        animation: loadBar 1.5s ease-in-out infinite;
    }

    .mobile-screen .bar:nth-child(2) {
        animation-delay: 0.2s;
    }

    .mobile-screen .bar:nth-child(3) {
        animation-delay: 0.4s;
    }

    @keyframes loadBar {
        0% { width: 0%; }
        50% { width: 80%; }
        100% { width: 0%; }
    }

    .design-elements .element {
        position: absolute;
        animation: float 3s ease-in-out infinite;
    }

    .design-elements .square {
        width: 10px;
        height: 10px;
        background-color: rgba(255, 255, 255, 0.8);
        top: 25%;
        left: 30%;
    }

    .design-elements .circle {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        top: 55%;
        right: 30%;
    }

    .design-elements .triangle {
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 14px solid rgba(255, 255, 255, 0.8);
        bottom: 20%;
        left: 45%;
    }

    @keyframes float {
        0% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
        100% { transform: translateY(0); }
    }

    .design-elements .circle {
        animation-delay: 0.5s;
    }

    .design-elements .triangle {
        animation-delay: 1s;
    }

    /* Animación de pulso para los nodos de la red */
    .pulse-dot {
        animation: pulseDot 2.5s infinite ease-in-out;
    }

    @keyframes pulseDot {
        0% { transform: scale(1); opacity: 0.8; }
        50% { transform: scale(1.3); opacity: 1; }
        100% { transform: scale(1); opacity: 0.8; }
    }

    /* Fix for card alignment */
    .grid-cols-1 > div,
    .grid-cols-2 > div,
    .grid-cols-3 > div {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .grid {
        display: grid;
        grid-auto-rows: 1fr;
    }
</style>
@endsection

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Nuestro Equipo</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Un grupo diverso de profesionales expertos en desarrollo de software, IA y diseño, trabajando juntos para crear soluciones innovadoras</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 auto-rows-fr">
            @foreach($team as $member)
            <div class="bg-gray-800 rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:shadow-xl flex flex-col h-full">
                <div class="relative h-64">
                    @if($member->photo)
                        <img src="{{ Storage::url($member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                    @else
                        @php
                            $role = strtolower($member->position);
                            $bgClass = 'from-blue-600 to-cyan-500';
                            $iconClass = 'fas fa-user-tie';

                            if (strpos($role, 'ceo') !== false || strpos($role, 'fundador') !== false) {
                                $bgClass = 'from-purple-600 to-indigo-600';
                                $iconClass = 'fas fa-chess-king';
                            } elseif (strpos($role, 'cto') !== false) {
                                $bgClass = 'from-blue-600 to-cyan-500';
                                $iconClass = 'fas fa-microchip';
                            } elseif (strpos($role, 'coo') !== false) {
                                $bgClass = 'from-green-600 to-teal-500';
                                $iconClass = 'fas fa-cogs';
                            } elseif (strpos($role, 'front') !== false) {
                                $bgClass = 'from-pink-500 to-red-500';
                                $iconClass = 'fas fa-laptop-code';
                            } elseif (strpos($role, 'back') !== false) {
                                $bgClass = 'from-indigo-600 to-blue-500';
                                $iconClass = 'fas fa-server';
                            } elseif (strpos($role, 'ai') !== false || strpos($role, 'ml') !== false) {
                                $bgClass = 'from-purple-500 to-indigo-500';
                                $iconClass = 'fas fa-brain';
                            } elseif (strpos($role, 'mobile') !== false) {
                                $bgClass = 'from-orange-500 to-red-500';
                                $iconClass = 'fas fa-mobile-alt';
                            } elseif (strpos($role, 'design') !== false || strpos($role, 'ux') !== false || strpos($role, 'ui') !== false) {
                                $bgClass = 'from-pink-500 to-red-500';
                                $iconClass = 'fas fa-pencil-ruler';
                            } elseif (strpos($role, 'manager') !== false) {
                                $bgClass = 'from-yellow-500 to-orange-500';
                                $iconClass = 'fas fa-tasks';
                            } elseif (strpos($role, 'project') !== false) {
                                $bgClass = 'from-amber-500 to-yellow-500';
                                $iconClass = 'fas fa-project-diagram';
                            } elseif (strpos($role, 'scrum') !== false) {
                                $bgClass = 'from-green-500 to-teal-500';
                                $iconClass = 'fas fa-clipboard-list';
                            } elseif (strpos($role, 'product') !== false || strpos($role, 'owner') !== false) {
                                $bgClass = 'from-blue-500 to-cyan-500';
                                $iconClass = 'fas fa-bullseye';
                            }
                        @endphp

                        <div class="w-full h-full bg-gradient-to-br {{ $bgClass }} flex items-center justify-center relative overflow-hidden">
                            <div class="absolute w-40 h-40 bg-white opacity-10 rounded-full -top-10 -left-10"></div>
                            <div class="absolute w-40 h-40 bg-white opacity-10 rounded-full -bottom-10 -right-10"></div>

                            <div class="z-10 text-center">
                                <div class="mb-4">
                                    <i class="{{ $iconClass }} text-6xl text-white opacity-80"></i>
                                </div>

                                <div class="w-full h-20 relative">
                                    @if(strpos($role, 'front') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="code-animation">
                                            <div class="text-xs font-mono text-left text-white opacity-80">
                                                <div>&lt;div class="flex"&gt;</div>
                                                <div>&nbsp;&nbsp;&lt;h1&gt;Hello&lt;/h1&gt;</div>
                                                <div>&lt;/div&gt;</div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'back') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="code-animation">
                                            <div class="text-xs font-mono text-left text-white opacity-80">
                                                <div>function api() {</div>
                                                <div>&nbsp;&nbsp;return data;</div>
                                                <div>}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'ai') !== false || strpos($role, 'ml') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="network-animation">
                                            <div class="flex space-x-1">
                                                <div class="w-2 h-2 bg-white rounded-full opacity-80"></div>
                                                <div class="w-2 h-2 bg-white rounded-full opacity-80"></div>
                                                <div class="w-2 h-2 bg-white rounded-full opacity-80"></div>
                                            </div>
                                            <div class="flex space-x-1 mt-2">
                                                <div class="w-2 h-2 bg-white rounded-full opacity-80"></div>
                                                <div class="w-2 h-2 bg-white rounded-full opacity-80"></div>
                                            </div>
                                            <div class="flex space-x-1 mt-2">
                                                <div class="w-2 h-2 bg-white rounded-full opacity-80"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'mobile') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="mobile-screen">
                                            <div class="mobile-dot"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'design') !== false || strpos($role, 'ux') !== false || strpos($role, 'ui') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="design-elements w-full h-full relative">
                                            <div class="element square"></div>
                                            <div class="element circle"></div>
                                            <div class="element triangle"></div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'ceo') !== false || strpos($role, 'fundador') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg width="50" height="50" viewBox="0 0 24 24" class="pulse-animation">
                                            <circle cx="12" cy="12" r="5" fill="none" stroke="rgba(255,255,255,0.8)" stroke-width="1"></circle>
                                            <circle cx="12" cy="12" r="10" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1"></circle>
                                            <circle cx="12" cy="12" r="15" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="1"></circle>
                                        </svg>
                                    </div>
                                    @elseif(strpos($role, 'cto') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <svg width="50" height="30" viewBox="0 0 50 30" class="flow-animation">
                                            <path d="M5,15 L15,5 L25,15 L35,5 L45,15" stroke="rgba(255,255,255,0.8)" stroke-width="1.5" fill="none"></path>
                                            <path d="M5,25 L15,15 L25,25 L35,15 L45,25" stroke="rgba(255,255,255,0.5)" stroke-width="1.5" fill="none"></path>
                                        </svg>
                                    </div>
                                    @elseif(strpos($role, 'project') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="flex flex-col space-y-1">
                                            <div class="flex space-x-1">
                                                <div class="w-6 h-3 bg-white bg-opacity-80 rounded-sm"></div>
                                                <div class="w-12 h-3 bg-white bg-opacity-40 rounded-sm"></div>
                                            </div>
                                            <div class="flex space-x-1">
                                                <div class="w-10 h-3 bg-white bg-opacity-60 rounded-sm"></div>
                                                <div class="w-8 h-3 bg-white bg-opacity-20 rounded-sm"></div>
                                            </div>
                                            <div class="flex space-x-1">
                                                <div class="w-14 h-3 bg-white bg-opacity-50 rounded-sm"></div>
                                                <div class="w-4 h-3 bg-white bg-opacity-30 rounded-sm"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'manager') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="grid grid-cols-2 gap-1">
                                            <div class="w-6 h-6 bg-white bg-opacity-80 rounded-sm"></div>
                                            <div class="w-6 h-6 bg-white bg-opacity-40 rounded-sm"></div>
                                            <div class="w-6 h-6 bg-white bg-opacity-20 rounded-sm"></div>
                                            <div class="w-6 h-6 bg-white bg-opacity-60 rounded-sm"></div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'scrum') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-22 h-20 flex flex-col items-center">
                                            <div class="w-full h-4 bg-white bg-opacity-70 rounded-sm mb-1"></div>
                                            <div class="w-full h-4 bg-white bg-opacity-50 rounded-sm mb-1"></div>
                                            <div class="w-full h-4 bg-white bg-opacity-30 rounded-sm"></div>
                                        </div>
                                    </div>
                                    @elseif(strpos($role, 'product') !== false || strpos($role, 'owner') !== false)
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="relative">
                                            <div class="w-12 h-12 rounded-full border-2 border-white border-opacity-70"></div>
                                            <div class="absolute inset-0 flex items-center justify-center">
                                                <div class="w-5 h-5 bg-white bg-opacity-90 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <span class="inline-block px-3 py-1 bg-blue-600 text-white text-xs rounded-full shadow-lg">{{ $member->position }}</span>
                    </div>

                    <!-- Hover overlay effect -->
                    <div class="absolute inset-0 card-overlay bg-gradient-to-br {{ $bgClass }} flex items-center justify-center">
                        <div class="text-white text-center px-4">
                            <i class="{{ $iconClass }} text-4xl mb-2"></i>
                            <p class="font-bold">{{ $member->position }}</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="font-bold text-xl mb-3">{{ $member->name }}</h3>
                    <p class="text-gray-400 text-sm mb-4">{{ Str::limit($member->bio, 120) }}</p>

                    @if($member->social_media)
                    <div class="flex space-x-3 mt-auto self-start">
                        @foreach($member->social_media as $platform => $url)
                        <a href="{{ $url }}" target="_blank" class="text-gray-400 hover:text-blue-400 transition">
                            @if($platform == 'linkedin')
                            <i class="fab fa-linkedin"></i>
                            @elseif($platform == 'twitter')
                            <i class="fab fa-twitter"></i>
                            @elseif($platform == 'github')
                            <i class="fab fa-github"></i>
                            @elseif($platform == 'instagram')
                            <i class="fab fa-instagram"></i>
                            @else
                            <i class="fas fa-link"></i>
                            @endif
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Nuestra Cultura</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">En DendrIA creemos que el éxito viene de la colaboración, la innovación y el compromiso con la excelencia</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-900 p-8 rounded-xl h-full flex flex-col">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-lightbulb text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Innovación</h3>
                <p class="text-gray-400">Buscamos constantemente nuevas formas de resolver problemas complejos, combinando creatividad y tecnología de vanguardia.</p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl h-full flex flex-col">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Colaboración</h3>
                <p class="text-gray-400">Trabajamos juntos, compartiendo conocimientos y habilidades para lograr resultados excepcionales para nuestros clientes.</p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl h-full flex flex-col">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-trophy text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Excelencia</h3>
                <p class="text-gray-400">Nos comprometemos a entregar soluciones de la más alta calidad, sin comprometer nunca los estándares técnicos ni la experiencia del usuario.</p>
            </div>
        </div>
    </div>
</section>

<!-- Join Us -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row gap-12 items-center">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-6">Únete a Nuestro Equipo</h2>
                <p class="text-gray-300 mb-6">Estamos siempre en busca de talentos apasionados por la tecnología y la innovación que quieran formar parte de nuestra misión de transformar el mundo digital.</p>
                
                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="fas fa-check-circle text-blue-400"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-300">Ambiente de trabajo colaborativo y flexible</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="fas fa-check-circle text-blue-400"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-300">Oportunidades de crecimiento y desarrollo profesional</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <i class="fas fa-check-circle text-blue-400"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-300">Proyectos desafiantes con tecnologías de vanguardia</p>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('contact') }}?subject=Oportunidades%20laborales" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition">
                    Ver oportunidades
                </a>
            </div>
            <div class="md:w-1/2">
                <div class="bg-gray-800 rounded-xl shadow-lg p-8 h-full relative overflow-hidden">
                    <!-- Elementos decorativos de fondo -->
                    <div class="absolute w-64 h-64 rounded-full bg-blue-600 opacity-10 -top-32 -right-32"></div>
                    <div class="absolute w-64 h-64 rounded-full bg-purple-600 opacity-10 -bottom-32 -left-32"></div>

                    <!-- Visualización dinámica de equipo -->
                    <div class="relative z-10 h-full flex flex-col items-center justify-center">
                        <!-- Red neuronal visual -->
                        <div class="grid grid-cols-4 gap-4 mb-12 relative">
                            @for ($i = 1; $i <= 8; $i++)
                                <div class="w-6 h-6 bg-gradient-to-br
                                    @if($i % 4 == 1) from-blue-500 to-blue-700
                                    @elseif($i % 4 == 2) from-purple-500 to-purple-700
                                    @elseif($i % 4 == 3) from-green-500 to-green-700
                                    @else from-pink-500 to-pink-700
                                    @endif
                                rounded-full shadow pulse-dot" style="animation-delay: {{ 0.2 * $i }}s"></div>
                            @endfor

                            <!-- Líneas de conexión (SVG) -->
                            <svg class="absolute inset-0 w-full h-full" style="z-index: -1">
                                <line x1="15%" y1="30%" x2="40%" y2="60%" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                                <line x1="40%" y1="30%" x2="65%" y2="60%" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                                <line x1="65%" y1="30%" x2="90%" y2="60%" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                                <line x1="40%" y1="60%" x2="15%" y2="90%" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                                <line x1="65%" y1="60%" x2="40%" y2="90%" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                                <line x1="90%" y1="60%" x2="65%" y2="90%" stroke="rgba(59, 130, 246, 0.5)" stroke-width="1.5" />
                            </svg>
                        </div>

                        <div class="text-center">
                            <span class="inline-block py-2 px-4 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold text-lg mb-4">¡Únete a nosotros!</span>
                            <p class="text-gray-300">Forma parte de un equipo innovador y colaborativo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection