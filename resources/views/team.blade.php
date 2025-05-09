@extends('layouts.app')

@section('title', 'Equipo - DendrIA')

@section('meta_description', 'Conoce al equipo detrás de DendrIA, profesionales apasionados por el desarrollo de software, la inteligencia artificial y la innovación tecnológica en Chile.')

@section('meta_keywords', 'equipo DendrIA, profesionales desarrollo software, especialistas Laravel, ingenieros IA, consultores tecnológicos, equipo de desarrollo, cultura empresarial, trabajos tecnología Chile, talento tech')

@section('styles')
<style>
    /* Animación del encabezado */
    .team-header {
        position: relative;
        overflow: hidden;
    }

    .team-header::before {
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

    /* Estilos para visualizaciones de roles */
    .role-visual {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .role-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        opacity: 0.6;
        z-index: 0;
        animation: pulse-glow 6s ease-in-out infinite;
        width: 80%;
        height: 80%;
        top: 10%;
        left: 10%;
    }

    /* Todos los glows ahora usan tonos de azul para mantener coherencia de color */
    .dev-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.8) 0%, rgba(0, 0, 0, 0) 70%);
    }

    .ai-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.7) 0%, rgba(0, 0, 0, 0) 70%);
    }

    .design-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.6) 0%, rgba(0, 0, 0, 0) 70%);
    }

    .management-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.9) 0%, rgba(0, 0, 0, 0) 70%);
    }

    .marketing-glow {
        background: radial-gradient(circle, rgba(59, 130, 246, 0.75) 0%, rgba(0, 0, 0, 0) 70%);
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

    .floating-icon {
        position: relative;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .floating-elements {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .floating-element {
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
            transform: translateY(-15px) translateX(10px);
        }
        50% {
            transform: translateY(5px) translateX(-10px);
        }
        75% {
            transform: translateY(10px) translateX(5px);
        }
    }

    /* Nuevos estilos para tarjetas de equipo */
    .team-card {
        transition: all 0.4s ease;
        transform-style: preserve-3d;
    }

    .team-card:hover {
        transform: translateY(-10px);
    }

    .team-card::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.3), transparent);
        border-radius: 12px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .team-card:hover::before {
        opacity: 1;
    }

    .team-card__image {
        position: relative;
        overflow: hidden;
    }

    .team-card__image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(17, 24, 39, 1), rgba(17, 24, 39, 0.2), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .team-card:hover .team-card__image::after {
        opacity: 1;
    }

    .team-card__content {
        transition: all 0.3s ease;
    }

    .team-card:hover .team-card__content {
        transform: translateY(-5px);
    }

    .team-card__social {
        transform: translateY(20px);
        opacity: 0;
        transition: all 0.3s ease;
        visibility: hidden;
    }

    .team-card:hover .team-card__social {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    /* Estilos para sección "Nuestra Cultura" */
    .culture-card {
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .culture-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.05), transparent);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
        z-index: -1;
    }

    .culture-card:hover::before {
        transform: translateX(0);
    }

    .culture-card:hover {
        transform: translateY(-5px);
    }

    .culture-icon {
        transition: all 0.3s ease;
        background: linear-gradient(to right, #3b82f6, #60a5fa);
    }

    .culture-card:hover .culture-icon {
        transform: scale(1.1) rotate(5deg);
    }

    /* Animaciones para "Únete al Equipo" */
    .careers-card {
        position: relative;
        overflow: hidden;
    }

    .careers-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.03) 0%, rgba(0, 0, 0, 0) 60%);
        animation: rotate 30s linear infinite;
        z-index: 0;
    }

    /* Animación para elementos que aparecen al hacer scroll */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }

    .reveal-on-scroll.revealed {
        opacity: 1;
        transform: translateY(0);
    }

    /* Decoración de degradado para títulos */
    .gradient-text {
        background: linear-gradient(to right, #3b82f6, #93c5fd);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* Efecto para el botón de "Ver oportunidades" */
    .cta-button {
        position: relative;
        overflow: hidden;
        z-index: 1;
        transition: all 0.3s ease;
    }

    .cta-button::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #3b82f6, #60a5fa, #3b82f6);
        background-size: 200% 200%;
        z-index: -1;
        transition: all 0.5s ease;
    }

    .cta-button:hover::before {
        animation: gradient-shift 3s ease infinite;
    }

    @keyframes gradient-shift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para animar elementos al hacer scroll
        function revealOnScroll() {
            const elements = document.querySelectorAll('.reveal-on-scroll');
            const windowHeight = window.innerHeight;

            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const delay = element.dataset.delay || 0;

                if (elementTop < windowHeight - 50) {
                    setTimeout(() => {
                        element.classList.add('revealed');
                    }, delay);
                }
            });
        }

        // Inicializar elementos
        revealOnScroll();

        // Evento de scroll
        window.addEventListener('scroll', revealOnScroll);

        // Agregar efecto de hover a las tarjetas del equipo
        const teamCards = document.querySelectorAll('.team-card');
        teamCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.team-card__social')?.classList.add('visible');
            });

            card.addEventListener('mouseleave', function() {
                this.querySelector('.team-card__social')?.classList.remove('visible');
            });
        });
    });
</script>
@endsection

@section('content')
<div class="gradient-bg py-12 team-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-blue-200 mx-auto mb-6 rounded-full"></div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 relative z-10">Nuestro Equipo</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10 mb-8">Un grupo diverso de profesionales expertos en desarrollo de software, IA y diseño, trabajando juntos para crear soluciones innovadoras</p>
        </div>
    </div>
</div>

<!-- Sección de liderazgo destacado -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-gray-800 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>
    <div class="absolute -left-64 top-40 w-96 h-96 bg-blue-600/5 rounded-full blur-3xl"></div>
    <div class="absolute -right-64 bottom-40 w-96 h-96 bg-blue-900/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-14">
            <div class="inline-block mb-3 px-3 py-1 bg-blue-900/50 rounded-full border border-blue-500/20 text-blue-300 text-xs font-medium">
                Liderazgo
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-4 gradient-text">El equipo que lidera la innovación</h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Profesionales con amplia experiencia en tecnología y negocios que guían nuestra misión de transformar el mundo digital
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                // Filtrar solo los miembros del equipo de liderazgo
                $filteredTeam = $team->filter(function($member) {
                    $role = strtolower($member->position);
                    return str_contains($role, 'ceo') ||
                           str_contains($role, 'cto') ||
                           str_contains($role, 'coo') ||
                           str_contains($role, 'director') ||
                           str_contains($role, 'gerente');
                });

                // Si no hay miembros filtrados, mostrar algunos
                if ($filteredTeam->isEmpty()) {
                    $filteredTeam = $team->take(3);
                }
            @endphp

            @foreach($filteredTeam as $member)
            <div class="team-card bg-gradient-to-br from-gray-800 to-gray-900/95 rounded-xl shadow-xl relative overflow-hidden reveal-on-scroll" data-delay="{{ $loop->index * 100 }}">
                <div class="team-card__image relative">
                    @if($member->photo)
                    <img src="{{ Storage::url($member->photo) }}" alt="{{ $member->name }}" class="w-full h-80 object-cover">
                    @else
                    <div class="w-full h-80 relative overflow-hidden">
                        <div class="role-visual">
                            @php
                                $role = strtolower($member->position);
                                $colorClass = '';
                                $icon = 'user-tie';

                                if (str_contains($role, 'desarrollador') || str_contains($role, 'programador') || str_contains($role, 'ingeniero') || str_contains($role, 'full stack') || str_contains($role, 'frontend') || str_contains($role, 'backend') || str_contains($role, 'dev')) {
                                    $colorClass = 'dev-glow';
                                    $icon = 'code';
                                }
                                elseif (str_contains($role, 'ia') || str_contains($role, 'datos') || str_contains($role, 'inteligencia artificial') || str_contains($role, 'machine learning') || str_contains($role, 'data')) {
                                    $colorClass = 'ai-glow';
                                    $icon = 'brain';
                                }
                                elseif (str_contains($role, 'diseñador') || str_contains($role, 'ui') || str_contains($role, 'ux') || str_contains($role, 'experiencia')) {
                                    $colorClass = 'design-glow';
                                    $icon = 'paint-brush';
                                }
                                elseif (str_contains($role, 'ceo') || str_contains($role, 'director') || str_contains($role, 'gerente') || str_contains($role, 'jefe') || str_contains($role, 'coordinador') || str_contains($role, 'líder')) {
                                    $colorClass = 'management-glow';
                                    $icon = 'chart-line';
                                }
                                elseif (str_contains($role, 'marketing') || str_contains($role, 'ventas') || str_contains($role, 'comercial') || str_contains($role, 'comunicación')) {
                                    $colorClass = 'marketing-glow';
                                    $icon = 'bullhorn';
                                }
                                else {
                                    $colorClass = 'management-glow';
                                }
                            @endphp

                            <!-- Efecto de resplandor -->
                            <div class="role-glow {{ $colorClass }}"></div>

                            <!-- Elementos flotantes -->
                            <div class="floating-elements">
                                <div class="floating-element" style="width: 20px; height: 20px; background-color: rgba(59, 130, 246, 0.15); top: 20%; left: 20%; animation-delay: 0s;"></div>
                                <div class="floating-element" style="width: 15px; height: 15px; background-color: rgba(59, 130, 246, 0.15); top: 50%; left: 30%; animation-delay: 1s;"></div>
                                <div class="floating-element" style="width: 25px; height: 25px; background-color: rgba(59, 130, 246, 0.15); top: 30%; left: 70%; animation-delay: 2s;"></div>
                            </div>

                            <!-- Icono central -->
                            <div class="flex items-center justify-center h-full">
                                <div class="floating-icon">
                                    <div class="w-32 h-32 bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-sm rounded-full flex items-center justify-center border border-blue-500/30 shadow-lg">
                                        <i class="fas fa-{{ $icon }} text-5xl text-blue-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Badge decorativo de categoría/rol profesional -->
                    <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-900/90 to-blue-700/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-medium text-blue-100 border border-blue-500/20 shadow-lg">
                        <i class="fas fa-{{ $icon }} mr-1"></i>
                        @php
                            $simplifiedRole = "Liderazgo";
                            if (str_contains($role, 'desarrollador') || str_contains($role, 'programador') || str_contains($role, 'full stack') || str_contains($role, 'frontend') || str_contains($role, 'backend') || str_contains($role, 'dev')) {
                                $simplifiedRole = "Desarrollo";
                            }
                            elseif (str_contains($role, 'ia') || str_contains($role, 'datos') || str_contains($role, 'machine learning') || str_contains($role, 'data')) {
                                $simplifiedRole = "IA & Datos";
                            }
                            elseif (str_contains($role, 'diseñador') || str_contains($role, 'ui') || str_contains($role, 'ux')) {
                                $simplifiedRole = "Diseño";
                            }
                            elseif (str_contains($role, 'marketing') || str_contains($role, 'ventas') || str_contains($role, 'comercial')) {
                                $simplifiedRole = "Marketing";
                            }
                        @endphp
                        {{ $simplifiedRole }}
                    </div>
                </div>

                <div class="team-card__content p-6">
                    <div class="bg-gradient-to-r from-blue-500/20 to-transparent h-px mb-5"></div>
                    <h3 class="font-bold text-xl mb-1 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300">{{ $member->name }}</h3>
                    <p class="text-blue-400 mb-3 font-medium">{{ $member->position }}</p>
                    <p class="text-gray-400 text-sm leading-relaxed mb-5">{{ Str::limit($member->bio, 120) }}</p>

                    @if($member->social_media)
                    <div class="team-card__social flex space-x-4 mt-4">
                        @foreach($member->social_media as $platform => $url)
                        <a href="{{ $url }}" target="_blank" class="w-9 h-9 bg-gray-900/70 backdrop-blur-sm rounded-full border border-blue-500/20 flex items-center justify-center text-blue-400 hover:text-white hover:bg-blue-600 hover:border-blue-400 transition-all duration-300">
                            @if($platform == 'linkedin')
                            <i class="fab fa-linkedin-in"></i>
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

<!-- Sección de equipo completo -->
<section class="py-20 bg-gray-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-pattern-grid opacity-5"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-3 px-3 py-1 bg-blue-900/50 rounded-full border border-blue-500/20 text-blue-300 text-xs font-medium">
                Nuestros expertos
            </div>
            <h2 class="text-3xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white">
                El equipo completo
            </h2>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Cada miembro aporta su experiencia única y pasión por la tecnología para crear soluciones excepcionales
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @php
                // Obtenemos los IDs de los miembros de liderazgo para excluirlos
                $leadershipIds = $filteredTeam->pluck('id');
                // Filtramos el resto del equipo
                $otherTeamMembers = $team->whereNotIn('id', $leadershipIds);
            @endphp

            @foreach($otherTeamMembers as $member)
            <div class="bg-gradient-to-br from-gray-800/60 to-gray-900/95 rounded-xl shadow-md border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300 overflow-hidden team-card reveal-on-scroll" data-delay="{{ $loop->index * 50 }}">
                <div class="team-card__image relative h-60">
                    @if($member->photo)
                    <img src="{{ Storage::url($member->photo) }}" alt="{{ $member->name }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full relative overflow-hidden">
                        <div class="role-visual">
                            @php
                                $role = strtolower($member->position);
                                $colorClass = '';
                                $icon = 'user-tie';

                                if (str_contains($role, 'desarrollador') || str_contains($role, 'programador') || str_contains($role, 'ingeniero') || str_contains($role, 'full stack') || str_contains($role, 'frontend') || str_contains($role, 'backend') || str_contains($role, 'dev')) {
                                    $colorClass = 'dev-glow';
                                    $icon = 'code';
                                }
                                elseif (str_contains($role, 'ia') || str_contains($role, 'datos') || str_contains($role, 'inteligencia artificial') || str_contains($role, 'machine learning') || str_contains($role, 'data')) {
                                    $colorClass = 'ai-glow';
                                    $icon = 'brain';
                                }
                                elseif (str_contains($role, 'diseñador') || str_contains($role, 'ui') || str_contains($role, 'ux') || str_contains($role, 'experiencia')) {
                                    $colorClass = 'design-glow';
                                    $icon = 'paint-brush';
                                }
                                elseif (str_contains($role, 'ceo') || str_contains($role, 'director') || str_contains($role, 'gerente') || str_contains($role, 'jefe') || str_contains($role, 'coordinador') || str_contains($role, 'líder')) {
                                    $colorClass = 'management-glow';
                                    $icon = 'chart-line';
                                }
                                elseif (str_contains($role, 'marketing') || str_contains($role, 'ventas') || str_contains($role, 'comercial') || str_contains($role, 'comunicación')) {
                                    $colorClass = 'marketing-glow';
                                    $icon = 'bullhorn';
                                }
                                else {
                                    $colorClass = 'management-glow';
                                }
                            @endphp

                            <!-- Efecto de resplandor -->
                            <div class="role-glow {{ $colorClass }}"></div>

                            <!-- Elementos flotantes -->
                            <div class="floating-elements">
                                <div class="floating-element" style="width: 20px; height: 20px; background-color: rgba(59, 130, 246, 0.15); top: 20%; left: 20%; animation-delay: 0s;"></div>
                                <div class="floating-element" style="width: 15px; height: 15px; background-color: rgba(59, 130, 246, 0.15); top: 50%; left: 30%; animation-delay: 1s;"></div>
                                <div class="floating-element" style="width: 25px; height: 25px; background-color: rgba(59, 130, 246, 0.15); top: 30%; left: 70%; animation-delay: 2s;"></div>
                            </div>

                            <!-- Icono central -->
                            <div class="flex items-center justify-center h-full">
                                <div class="floating-icon">
                                    <div class="w-24 h-24 bg-gradient-to-br from-gray-800/80 to-gray-900/80 backdrop-blur-sm rounded-full flex items-center justify-center border border-blue-500/30 shadow-lg">
                                        <i class="fas fa-{{ $icon }} text-3xl text-blue-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Badge decorativo de categoría/rol profesional -->
                    <div class="absolute top-3 right-3 bg-gradient-to-r from-blue-900/90 to-blue-700/90 backdrop-blur-sm px-2 py-0.5 rounded-full text-xs font-medium text-blue-100 border border-blue-500/20 shadow-lg opacity-90">
                        @php
                            $simplifiedRole = "Equipo";
                            if (str_contains($role, 'desarrollador') || str_contains($role, 'programador') || str_contains($role, 'full stack') || str_contains($role, 'frontend') || str_contains($role, 'backend') || str_contains($role, 'dev')) {
                                $simplifiedRole = "Desarrollo";
                            }
                            elseif (str_contains($role, 'ia') || str_contains($role, 'datos') || str_contains($role, 'machine learning') || str_contains($role, 'data')) {
                                $simplifiedRole = "IA & Datos";
                            }
                            elseif (str_contains($role, 'diseñador') || str_contains($role, 'ui') || str_contains($role, 'ux')) {
                                $simplifiedRole = "Diseño";
                            }
                            elseif (str_contains($role, 'marketing') || str_contains($role, 'ventas') || str_contains($role, 'comercial')) {
                                $simplifiedRole = "Marketing";
                            }
                        @endphp
                        {{ $simplifiedRole }}
                    </div>
                </div>

                <div class="p-5">
                    <h3 class="font-semibold text-lg mb-1 text-white">{{ $member->name }}</h3>
                    <p class="text-blue-400 text-sm mb-3">{{ $member->position }}</p>

                    @if($member->social_media)
                    <div class="team-card__social flex mt-3">
                        @foreach($member->social_media as $platform => $url)
                        <a href="{{ $url }}" target="_blank" class="mr-3 text-gray-400 hover:text-blue-400 transition-all duration-300">
                            @if($platform == 'linkedin')
                            <i class="fab fa-linkedin-in"></i>
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

<!-- Sección de Cultura mejorada -->
<section class="py-20 bg-gradient-to-b from-gray-800 to-gray-900 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>
    <div class="absolute -right-96 top-1/3 w-[600px] h-[600px] bg-blue-600/5 rounded-full blur-[100px] opacity-40"></div>
    <div class="absolute -left-32 bottom-1/4 w-64 h-64 bg-blue-800/10 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-block mb-3 px-3 py-1 bg-blue-900/50 rounded-full border border-blue-500/20 text-blue-300 text-xs font-medium">
                ADN DENDRIA
            </div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-300 to-white">
                Nuestra Cultura
            </h2>
            <p class="text-gray-300 max-w-3xl mx-auto">
                En DendrIA creemos que el éxito viene de la colaboración, la innovación y el compromiso con la excelencia
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="culture-card bg-gradient-to-br from-gray-900/80 to-gray-800/70 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-blue-500/10 reveal-on-scroll" data-delay="100">
                <div class="culture-icon w-16 h-16 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <i class="fas fa-lightbulb text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Innovación</h3>
                <p class="text-gray-300 leading-relaxed">Buscamos constantemente nuevas formas de resolver problemas complejos, combinando creatividad y tecnología de vanguardia para ofrecer soluciones únicas.</p>

                <!-- Indicador visual de valores -->
                <div class="mt-6 pt-4 border-t border-blue-900/30">
                    <div class="flex items-center">
                        <div class="text-xs text-blue-400 font-medium">CREATIVIDAD</div>
                        <div class="ml-auto flex space-x-1">
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="culture-card bg-gradient-to-br from-gray-900/80 to-gray-800/70 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-blue-500/10 reveal-on-scroll" data-delay="200">
                <div class="culture-icon w-16 h-16 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <i class="fas fa-users text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Colaboración</h3>
                <p class="text-gray-300 leading-relaxed">Trabajamos juntos, compartiendo conocimientos y habilidades para lograr resultados excepcionales para nuestros clientes y superar sus expectativas.</p>

                <!-- Indicador visual de valores -->
                <div class="mt-6 pt-4 border-t border-blue-900/30">
                    <div class="flex items-center">
                        <div class="text-xs text-blue-400 font-medium">TRABAJO EN EQUIPO</div>
                        <div class="ml-auto flex space-x-1">
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600/40 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="culture-card bg-gradient-to-br from-gray-900/80 to-gray-800/70 backdrop-blur-sm p-8 rounded-xl shadow-lg border border-blue-500/10 reveal-on-scroll" data-delay="300">
                <div class="culture-icon w-16 h-16 rounded-lg mb-6 flex items-center justify-center shadow-lg">
                    <i class="fas fa-trophy text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-blue-300">Excelencia</h3>
                <p class="text-gray-300 leading-relaxed">Nos comprometemos a entregar soluciones de la más alta calidad, sin comprometer nunca los estándares técnicos ni la experiencia del usuario final.</p>

                <!-- Indicador visual de valores -->
                <div class="mt-6 pt-4 border-t border-blue-900/30">
                    <div class="flex items-center">
                        <div class="text-xs text-blue-400 font-medium">CALIDAD</div>
                        <div class="ml-auto flex space-x-1">
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                            <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Valores adicionales -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="bg-blue-900/20 p-4 rounded-lg border border-blue-500/10 text-center transition-all duration-300 hover:bg-blue-900/30 hover:border-blue-500/30 reveal-on-scroll" data-delay="400">
                <div class="w-10 h-10 bg-blue-900/50 rounded-full mx-auto mb-3 flex items-center justify-center">
                    <i class="fas fa-rocket text-blue-300 text-lg"></i>
                </div>
                <h4 class="text-blue-300 font-medium">Creatividad</h4>
            </div>

            <div class="bg-blue-900/20 p-4 rounded-lg border border-blue-500/10 text-center transition-all duration-300 hover:bg-blue-900/30 hover:border-blue-500/30 reveal-on-scroll" data-delay="450">
                <div class="w-10 h-10 bg-blue-900/50 rounded-full mx-auto mb-3 flex items-center justify-center">
                    <i class="fas fa-comments text-blue-300 text-lg"></i>
                </div>
                <h4 class="text-blue-300 font-medium">Comunicación</h4>
            </div>

            <div class="bg-blue-900/20 p-4 rounded-lg border border-blue-500/10 text-center transition-all duration-300 hover:bg-blue-900/30 hover:border-blue-500/30 reveal-on-scroll" data-delay="500">
                <div class="w-10 h-10 bg-blue-900/50 rounded-full mx-auto mb-3 flex items-center justify-center">
                    <i class="fas fa-shield-alt text-blue-300 text-lg"></i>
                </div>
                <h4 class="text-blue-300 font-medium">Confianza</h4>
            </div>

            <div class="bg-blue-900/20 p-4 rounded-lg border border-blue-500/10 text-center transition-all duration-300 hover:bg-blue-900/30 hover:border-blue-500/30 reveal-on-scroll" data-delay="550">
                <div class="w-10 h-10 bg-blue-900/50 rounded-full mx-auto mb-3 flex items-center justify-center">
                    <i class="fas fa-graduation-cap text-blue-300 text-lg"></i>
                </div>
                <h4 class="text-blue-300 font-medium">Aprendizaje</h4>
            </div>

            <div class="bg-blue-900/20 p-4 rounded-lg border border-blue-500/10 text-center transition-all duration-300 hover:bg-blue-900/30 hover:border-blue-500/30 reveal-on-scroll" data-delay="600">
                <div class="w-10 h-10 bg-blue-900/50 rounded-full mx-auto mb-3 flex items-center justify-center">
                    <i class="fas fa-heart text-blue-300 text-lg"></i>
                </div>
                <h4 class="text-blue-300 font-medium">Pasión</h4>
            </div>
        </div>
    </div>
</section>

<!-- Únete a Nuestro Equipo (Mejorado) -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-gray-800 relative overflow-hidden">
    <!-- Elementos decorativos de fondo -->
    <div class="absolute inset-0 bg-pattern-grid opacity-5"></div>
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2 reveal-on-scroll" data-delay="100">
                <div class="inline-block mb-3 px-3 py-1 bg-blue-900/50 rounded-full border border-blue-500/20 text-blue-300 text-xs font-medium">
                    OPORTUNIDADES
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
                    Únete a Nuestro Equipo
                </h2>
                <p class="text-gray-300 mb-8 leading-relaxed">
                    Estamos siempre en busca de talentos apasionados por la tecnología y la innovación que quieran formar parte de nuestra misión de transformar el mundo digital.
                </p>

                <div class="space-y-6 mb-10">
                    <div class="bg-gradient-to-r from-gray-800 to-gray-900 p-4 rounded-lg border border-blue-500/10 flex items-start transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-900/5 reveal-on-scroll" data-delay="150">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-900/70 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-laptop-code text-blue-300"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-blue-300 mb-1">Ambiente de trabajo colaborativo</h4>
                            <p class="text-gray-400">Trabajo flexible y un entorno donde las ideas innovadoras son valoradas y fomentadas.</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-gray-800 to-gray-900 p-4 rounded-lg border border-blue-500/10 flex items-start transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-900/5 reveal-on-scroll" data-delay="200">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-900/70 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-chart-line text-blue-300"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-blue-300 mb-1">Crecimiento profesional</h4>
                            <p class="text-gray-400">Oportunidades para desarrollar tus habilidades y avanzar en tu carrera profesional.</p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-gray-800 to-gray-900 p-4 rounded-lg border border-blue-500/10 flex items-start transition-all duration-300 hover:border-blue-500/30 hover:shadow-lg hover:shadow-blue-900/5 reveal-on-scroll" data-delay="250">
                        <div class="flex-shrink-0 w-10 h-10 bg-blue-900/70 rounded-full flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-project-diagram text-blue-300"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-blue-300 mb-1">Proyectos desafiantes</h4>
                            <p class="text-gray-400">Trabaja con tecnologías de vanguardia en proyectos que generan impacto real.</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}?subject=Oportunidades%20laborales" class="cta-button inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transition-all duration-300 hover:shadow-blue-600/30 hover:transform hover:-translate-y-1 reveal-on-scroll" data-delay="300">
                    <div class="flex items-center">
                        <span>Ver oportunidades</span>
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                </a>
            </div>

            <div class="lg:w-1/2 reveal-on-scroll" data-delay="350">
                <div class="careers-card bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl shadow-xl p-8 border border-blue-500/20 relative overflow-hidden">
                    <!-- Elementos decorativos de fondo -->
                    <div class="absolute -top-64 -right-64 w-[500px] h-[500px] bg-blue-600/5 rounded-full blur-[100px]"></div>
                    <div class="absolute -bottom-32 -left-32 w-64 h-64 bg-blue-800/10 rounded-full blur-3xl"></div>

                    <div class="relative z-10">
                        <div class="flex justify-between items-center mb-8">
                            <div class="flex items-center">
                                <div class="w-14 h-14 bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                                    <i class="fas fa-rocket text-white text-2xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-white">Crece con nosotros</h3>
                                    <p class="text-blue-300 text-sm">Desarrolla tu carrera en tecnología</p>
                                </div>
                            </div>
                            <div class="bg-blue-900/50 py-1 px-3 rounded-full text-xs font-medium text-blue-300 border border-blue-500/20">
                                Contratando
                            </div>
                        </div>

                        <!-- Roles actuales -->
                        <div class="space-y-4 mb-8">
                            <div class="bg-gray-900/50 p-4 rounded-lg border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300">
                                <div class="flex justify-between mb-2">
                                    <h4 class="font-semibold text-blue-300">Desarrollador/a Full Stack</h4>
                                    <span class="text-xs bg-blue-600/20 text-blue-200 px-2 py-0.5 rounded-full">Remoto</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-3">Únete a nuestro equipo de desarrollo principal, creando soluciones web innovadoras.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-900/50 text-xs rounded-full px-2 py-0.5 text-blue-300 border border-blue-500/20">JavaScript</span>
                                    <span class="bg-blue-900/50 text-xs rounded-full px-2 py-0.5 text-blue-300 border border-blue-500/20">Vue.js</span>
                                    <span class="bg-blue-900/50 text-xs rounded-full px-2 py-0.5 text-blue-300 border border-blue-500/20">Laravel</span>
                                </div>
                            </div>

                            <div class="bg-gray-900/50 p-4 rounded-lg border border-blue-500/10 hover:border-blue-500/30 transition-all duration-300">
                                <div class="flex justify-between mb-2">
                                    <h4 class="font-semibold text-blue-300">Especialista en IA</h4>
                                    <span class="text-xs bg-blue-600/20 text-blue-200 px-2 py-0.5 rounded-full">Híbrido</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-3">Desarrolla soluciones avanzadas de Inteligencia Artificial para nuestros clientes.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-900/50 text-xs rounded-full px-2 py-0.5 text-blue-300 border border-blue-500/20">Python</span>
                                    <span class="bg-blue-900/50 text-xs rounded-full px-2 py-0.5 text-blue-300 border border-blue-500/20">TensorFlow</span>
                                    <span class="bg-blue-900/50 text-xs rounded-full px-2 py-0.5 text-blue-300 border border-blue-500/20">NLP</span>
                                </div>
                            </div>
                        </div>

                        <!-- Progreso y estadísticas -->
                        <div class="bg-gray-900/40 rounded-lg p-4 border border-blue-500/10">
                            <div class="flex justify-between items-center mb-2">
                                <h5 class="text-sm font-medium text-blue-300">Crecimiento del equipo</h5>
                                <span class="text-blue-400 text-xs">+40% este año</span>
                            </div>
                            <div class="w-full bg-gray-700 h-1.5 rounded-full overflow-hidden mb-4">
                                <div class="bg-gradient-to-r from-blue-500 to-blue-400 h-full rounded-full" style="width: 75%"></div>
                            </div>

                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-white mb-1">15+</div>
                                    <div class="text-xs text-gray-400">Nacionalidades</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-white mb-1">40%</div>
                                    <div class="text-xs text-gray-400">Mujeres en tech</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-white mb-1">100%</div>
                                    <div class="text-xs text-gray-400">Satisfacción</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection