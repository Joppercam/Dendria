@extends('layouts.app')

@section('title', 'Contacto - DendrIA')

@section('meta_description', 'Contáctanos para discutir tu proyecto de desarrollo web o IA. Nuestro equipo en Chile está listo para ayudarte con soluciones tecnológicas innovadoras para tu empresa.')

@section('meta_keywords', 'contacto DendrIA, teléfono, email contacto, desarrollo web Chile, proyectos tecnológicos, consultoría Laravel, servicios IA, oficina Santiago, asistencia tecnológica, formulario contacto')

@section('styles')
<style>
    /* Animación para el gradiente del fondo */
    .contact-hero {
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
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

    /* Efecto para iconos de contacto */
    .contact-icon {
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
    }

    .contact-item:hover .contact-icon {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(59, 130, 246, 0.25);
    }

    /* Animación para tarjetas */
    .contact-card {
        transition: all 0.4s ease;
        position: relative;
        z-index: 1;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .contact-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.03), transparent);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.4s ease;
        border-radius: inherit;
    }

    .contact-card:hover::before {
        opacity: 1;
    }

    /* Animación para el botón */
    .submit-button {
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        z-index: 1;
    }

    .submit-button::before {
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

    .submit-button:hover::before {
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

    /* Animación para los inputs */
    .form-input {
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .form-input:focus {
        transform: translateY(-2px);
    }

    /* Onda decorativa */
    .wave-divider {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .wave-divider svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 56px;
    }

    /* Animación de entrada */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }

    .reveal-on-scroll.revealed {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endsection

@section('content')
<!-- Hero de contacto mejorado -->
<div class="contact-hero gradient-bg py-32 relative">
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>
    <div class="absolute -left-64 top-1/3 w-96 h-96 bg-blue-600/5 rounded-full blur-3xl"></div>
    <div class="absolute -right-64 bottom-1/4 w-96 h-96 bg-blue-900/5 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
            <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-blue-200 mx-auto mb-6 rounded-full"></div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">Contacto Directo</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">Estamos listos para ayudarte a crear soluciones tecnológicas innovadoras para transformar tu negocio</p>

            <div class="inline-flex items-center space-x-2 bg-gray-800/30 backdrop-blur-sm py-2 px-4 rounded-full border border-blue-500/20 text-blue-200 text-sm">
                <i class="fas fa-headset"></i>
                <span>Respondemos en menos de 24 horas</span>
            </div>
        </div>
    </div>

    <div class="wave-divider">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="fill-gray-900"></path>
        </svg>
    </div>
</div>

<!-- Sección principal -->
<section class="py-20 bg-gray-900 relative">
    <div class="absolute inset-0 bg-pattern-grid opacity-5"></div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Tarjetas de información de contacto -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20 reveal-on-scroll" data-delay="100">
            <!-- Email -->
            <div class="contact-card bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-8 shadow-xl border border-blue-500/20 text-center">
                <div class="contact-icon w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full mx-auto flex items-center justify-center mb-6">
                    <i class="fas fa-envelope text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-blue-300">Email</h3>
                <p class="text-gray-300 mb-4">Nuestro equipo te responderá en breve</p>
                <a href="mailto:contacto@dendria.cl" class="text-blue-400 hover:text-blue-300 transition flex items-center justify-center">
                    <span>contacto@dendria.cl</span>
                    <i class="fas fa-chevron-right ml-2 text-xs"></i>
                </a>
            </div>

            <!-- Teléfono -->
            <div class="contact-card bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-8 shadow-xl border border-blue-500/20 text-center">
                <div class="contact-icon w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full mx-auto flex items-center justify-center mb-6">
                    <i class="fas fa-phone-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-blue-300">Teléfono</h3>
                <p class="text-gray-300 mb-4">Disponibles de lunes a viernes, 9AM - 6PM</p>
                <a href="tel:+56954083474" class="text-blue-400 hover:text-blue-300 transition flex items-center justify-center">
                    <span>+56 9 5408 3474</span>
                    <i class="fas fa-chevron-right ml-2 text-xs"></i>
                </a>
            </div>

            <!-- Redes sociales -->
            <div class="contact-card bg-gradient-to-br from-gray-800/90 to-gray-900/90 backdrop-blur-sm rounded-xl p-8 shadow-xl border border-blue-500/20 text-center">
                <div class="contact-icon w-16 h-16 bg-gradient-to-r from-blue-600 to-blue-400 rounded-full mx-auto flex items-center justify-center mb-6">
                    <i class="fas fa-share-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-blue-300">Redes Sociales</h3>
                <p class="text-gray-300 mb-4">Mantente al día con nuestras novedades</p>
                <div class="flex justify-center space-x-4 mt-6">
                    <a href="javascript:void(0)" class="w-10 h-10 bg-gray-800 border border-blue-500/30 rounded-full flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white hover:border-blue-400 transition-all duration-300 shadow-lg" onclick="window.open('https://linkedin.com/company/dendria', '_blank')">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="javascript:void(0)" class="w-10 h-10 bg-gray-800 border border-blue-500/30 rounded-full flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white hover:border-blue-400 transition-all duration-300 shadow-lg" onclick="window.open('https://twitter.com/dendria_cl', '_blank')">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="w-10 h-10 bg-gray-800 border border-blue-500/30 rounded-full flex items-center justify-center text-blue-400 hover:bg-blue-600 hover:text-white hover:border-blue-400 transition-all duration-300 shadow-lg" onclick="window.open('https://github.com/dendria', '_blank')">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Formulario y FAQ -->
        <div class="flex flex-col lg:flex-row gap-10 items-stretch">
            <!-- Formulario de contacto -->
            <div class="lg:w-3/5 reveal-on-scroll" data-delay="200">
                <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/95 backdrop-blur-sm rounded-xl p-8 shadow-xl border border-blue-500/20 h-full">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-paper-plane text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white">Envíanos un mensaje</h3>
                            <p class="text-blue-300 text-sm">Cuéntanos sobre tu proyecto</p>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="bg-gradient-to-r from-green-500 to-emerald-500 text-white p-4 rounded-lg mb-6 shadow-lg flex items-center">
                            <i class="fas fa-check-circle mr-3 text-xl"></i>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-300 mb-2 font-medium">Nombre</label>
                                <div class="relative">
                                    <div class="absolute left-3 top-3 text-gray-400">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <input type="text" id="name" name="name" class="form-input w-full p-3 pl-10 bg-gray-800 border border-blue-900/50 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror" value="{{ old('name') }}" placeholder="Tu nombre completo">
                                </div>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-300 mb-2 font-medium">Email</label>
                                <div class="relative">
                                    <div class="absolute left-3 top-3 text-gray-400">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="email" id="email" name="email" class="form-input w-full p-3 pl-10 bg-gray-800 border border-blue-900/50 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror" value="{{ old('email') }}" placeholder="tu@email.com">
                                </div>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="subject" class="block text-gray-300 mb-2 font-medium">Asunto</label>
                            <div class="relative">
                                <div class="absolute left-3 top-3 text-gray-400">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <input type="text" id="subject" name="subject" class="form-input w-full p-3 pl-10 bg-gray-800 border border-blue-900/50 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('subject') border-red-500 @enderror" value="{{ old('subject') }}" placeholder="Motivo de tu contacto">
                            </div>
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-8">
                            <label for="message" class="block text-gray-300 mb-2 font-medium">Mensaje</label>
                            <div class="relative">
                                <textarea id="message" name="message" rows="5" class="form-input w-full p-3 bg-gray-800 border border-blue-900/50 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('message') border-red-500 @enderror" placeholder="Describe tu proyecto o consulta...">{{ old('message') }}</textarea>
                            </div>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="submit-button w-full text-white font-bold py-4 px-6 rounded-lg shadow-lg transition-all duration-300 hover:shadow-blue-600/30 hover:transform hover:-translate-y-1 text-center relative overflow-hidden">
                            <span class="relative z-10 flex items-center justify-center">
                                <span>Enviar mensaje</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- FAQ y más información -->
            <div class="lg:w-2/5 reveal-on-scroll" data-delay="300">
                <div class="bg-gradient-to-br from-gray-800/90 to-gray-900/95 backdrop-blur-sm rounded-xl p-8 shadow-xl border border-blue-500/20 h-full">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-question text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-white">Preguntas frecuentes</h3>
                            <p class="text-blue-300 text-sm">Respuestas rápidas a tus dudas</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="border-b border-blue-900/30 pb-4">
                            <h4 class="font-semibold text-blue-300 mb-2">¿Cuáles son los tiempos de respuesta?</h4>
                            <p class="text-gray-400 text-sm">Respondemos a todas las consultas en un plazo máximo de 24 horas durante días laborables.</p>
                        </div>

                        <div class="border-b border-blue-900/30 pb-4">
                            <h4 class="font-semibold text-blue-300 mb-2">¿Ofrecen consultas gratuitas?</h4>
                            <p class="text-gray-400 text-sm">Sí, ofrecemos una primera consulta gratuita para entender tus necesidades y evaluar cómo podemos ayudarte.</p>
                        </div>

                        <div class="border-b border-blue-900/30 pb-4">
                            <h4 class="font-semibold text-blue-300 mb-2">¿Trabajan con clientes internacionales?</h4>
                            <p class="text-gray-400 text-sm">Absolutamente. Tenemos experiencia trabajando con clientes de todo el mundo, con flujos de trabajo adaptados a diferentes zonas horarias.</p>
                        </div>

                        <div class="border-b border-blue-900/30 pb-4">
                            <h4 class="font-semibold text-blue-300 mb-2">¿Cuál es el proceso de inicio de un proyecto?</h4>
                            <p class="text-gray-400 text-sm">Comenzamos con una reunión para entender tus necesidades, seguida de una propuesta detallada y un plan de proyecto con plazos específicos.</p>
                        </div>
                    </div>

                    <!-- Horario de atención -->
                    <div class="mt-10 p-4 bg-blue-900/20 rounded-lg border border-blue-500/20">
                        <h4 class="font-semibold text-blue-300 mb-2 flex items-center">
                            <i class="far fa-clock mr-2"></i> Horario de atención
                        </h4>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <div class="text-gray-300">Lunes - Viernes:</div>
                            <div class="text-gray-400">9:00 - 18:00</div>
                            <div class="text-gray-300">Sábado:</div>
                            <div class="text-gray-400">10:00 - 14:00</div>
                            <div class="text-gray-300">Domingo:</div>
                            <div class="text-gray-400">Cerrado</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-gray-800 relative overflow-hidden">
    <div class="absolute inset-0 bg-pattern-grid opacity-5"></div>
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-blue-500/30 to-transparent"></div>

    <div class="container mx-auto px-6 relative z-10 text-center reveal-on-scroll" data-delay="400">
        <div class="inline-block mb-4 px-4 py-1 bg-blue-900/50 rounded-full border border-blue-500/20 text-blue-300 text-xs font-medium">
            ¿LISTO PARA COMENZAR?
        </div>
        <h2 class="text-3xl md:text-4xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
            Comienza tu transformación digital hoy
        </h2>
        <p class="text-gray-300 max-w-2xl mx-auto mb-10">
            Nuestro equipo está listo para ayudarte a desarrollar soluciones tecnológicas innovadoras que impulsen tu negocio al siguiente nivel
        </p>

        <div class="flex flex-wrap justify-center gap-6">
            <a href="{{ route('project.start') }}" class="submit-button py-4 px-8 rounded-lg shadow-lg text-white font-bold transition-all duration-300 hover:shadow-blue-600/30 hover:transform hover:-translate-y-1 relative overflow-hidden">
                <span class="relative z-10 flex items-center">
                    <i class="fas fa-rocket mr-2"></i>
                    <span>Iniciar un proyecto</span>
                </span>
            </a>
            <a href="{{ route('projects') }}" class="bg-transparent border-2 border-blue-500/40 text-blue-300 font-bold py-4 px-8 rounded-lg shadow-lg transition-all duration-300 hover:border-blue-500/70 hover:bg-blue-800/10 hover:shadow-blue-900/20">
                Ver proyectos
            </a>
        </div>
    </div>
</section>
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

        // Efecto hover para elementos de contacto
        const contactItems = document.querySelectorAll('.contact-item');
        contactItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.querySelector('.contact-icon')?.classList.add('hover');
            });

            item.addEventListener('mouseleave', function() {
                this.querySelector('.contact-icon')?.classList.remove('hover');
            });
        });
    });
</script>
@endsection