@extends('layouts.app')

@section('title', 'Testimonios - DendrIA')

@section('content')
<div class="gradient-bg py-16">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Testimonios</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Lo que nuestros clientes dicen sobre trabajar con DendrIA
            </p>
        </div>
    </div>
</div>

<!-- Testimonios destacados -->
<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-300">Testimonios Destacados</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">
                Historias de éxito de clientes que han transformado su negocio con nuestras soluciones
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            @forelse($featuredTestimonials as $testimonial)
            <div class="bg-gray-800 rounded-xl p-8 shadow-lg relative">
                <div class="absolute -top-5 -left-5 text-6xl text-blue-600 opacity-50">"</div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mr-4 overflow-hidden">
                            @if($testimonial->avatar)
                                <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-full h-full object-cover">
                            @else
                                <i class="fas fa-user text-gray-500 text-2xl"></i>
                            @endif
                        </div>
                        <div>
                            <h4 class="text-xl font-bold">{{ $testimonial->client_name }}</h4>
                            <p class="text-blue-400">{{ $testimonial->client_position }}, {{ $testimonial->company }}</p>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-6 leading-relaxed">
                        "{{ $testimonial->content }}"
                    </p>

                    <div class="flex">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            <i class="fas fa-star text-yellow-500"></i>
                        @endfor

                        @for($i = $testimonial->rating; $i < 5; $i++)
                            <i class="fas fa-star text-gray-400"></i>
                        @endfor
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-gray-800 rounded-xl p-8 shadow-lg relative">
                <div class="absolute -top-5 -left-5 text-6xl text-blue-600 opacity-50">"</div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mr-4 overflow-hidden">
                            <i class="fas fa-user text-gray-500 text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold">Roberto González</h4>
                            <p class="text-blue-400">CEO, InsightMind</p>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-6 leading-relaxed">
                        "La implementación del sistema de análisis predictivo desarrollado por DendrIA transformó por completo nuestra capacidad para entender el comportamiento de nuestros clientes. Desde que lanzamos la plataforma, hemos visto un aumento del 45% en la retención de clientes y un 32% en las ventas cruzadas. El equipo de DendrIA no solo entendió nuestras necesidades técnicas, sino también los objetivos de negocio."
                    </p>

                    <div class="flex">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 rounded-xl p-8 shadow-lg relative">
                <div class="absolute -top-5 -left-5 text-6xl text-blue-600 opacity-50">"</div>
                <div class="relative z-10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gray-700 rounded-full flex items-center justify-center mr-4 overflow-hidden">
                            <i class="fas fa-user text-gray-500 text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold">María Jiménez</h4>
                            <p class="text-blue-400">COO, PymeCommerce</p>
                        </div>
                    </div>

                    <p class="text-gray-300 mb-6 leading-relaxed">
                        "Después de trabajar con varios proveedores de tecnología, finalmente encontramos en DendrIA un socio que realmente entiende las necesidades de las pequeñas y medianas empresas. Su plataforma de comercio electrónico con IA integrada nos permitió competir con grandes marcas, ofreciendo una experiencia personalizada a cada cliente. El ROI superó nuestras expectativas en menos de 6 meses."
                    </p>

                    <div class="flex">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Todos los testimonios -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-6">Lo Que Dicen Nuestros Clientes</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials->where('featured', false) as $testimonial)
            <div class="bg-gray-900 rounded-xl p-6 shadow-lg">
                <div class="mb-4">
                    <div class="flex">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            <i class="fas fa-star text-yellow-500"></i>
                        @endfor

                        @for($i = $testimonial->rating; $i < 5; $i++)
                            @if($i == $testimonial->rating && $testimonial->rating - floor($testimonial->rating) >= 0.5)
                                <i class="fas fa-star-half-alt text-yellow-500"></i>
                            @else
                                <i class="fas fa-star text-gray-400"></i>
                            @endif
                        @endfor
                    </div>
                </div>
                <p class="text-gray-300 mb-6 italic">
                    "{{ $testimonial->content }}"
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mr-4 overflow-hidden">
                        @if($testimonial->avatar)
                            <img src="{{ Storage::url($testimonial->avatar) }}" alt="{{ $testimonial->client_name }}" class="w-full h-full object-cover">
                        @else
                            <i class="fas fa-user text-gray-500"></i>
                        @endif
                    </div>
                    <div>
                        <h5 class="font-bold">{{ $testimonial->client_name }}</h5>
                        <p class="text-sm text-gray-400">{{ $testimonial->client_position }}, {{ $testimonial->company }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-gray-900 rounded-xl p-6 shadow-lg">
                <div class="mb-4">
                    <div class="flex">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                </div>
                <p class="text-gray-300 mb-6 italic">
                    "El chatbot impulsado por IA que implementaron en nuestro sitio ha reducido la carga de nuestro equipo de soporte en un 65%, mientras mejora la satisfacción del cliente."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-gray-500"></i>
                    </div>
                    <div>
                        <h5 class="font-bold">Carlos Vargas</h5>
                        <p class="text-sm text-gray-400">Director de Atención al Cliente, TechSupport Inc.</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900 rounded-xl p-6 shadow-lg">
                <div class="mb-4">
                    <div class="flex">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                </div>
                <p class="text-gray-300 mb-6 italic">
                    "La aplicación móvil desarrollada por DendrIA no solo mejoró nuestra presencia digital, sino que también aumentó nuestras ventas en un 40% en el primer trimestre desde su lanzamiento."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-gray-500"></i>
                    </div>
                    <div>
                        <h5 class="font-bold">Ana Muñoz</h5>
                        <p class="text-sm text-gray-400">Gerente de Marketing, Retail Solutions</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-900 rounded-xl p-6 shadow-lg">
                <div class="mb-4">
                    <div class="flex">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star-half-alt text-yellow-500"></i>
                    </div>
                </div>
                <p class="text-gray-300 mb-6 italic">
                    "Lo que más valoramos de DendrIA es su enfoque en entender nuestro negocio antes de proponer soluciones tecnológicas. No venden tecnología por vender, sino que aportan valor real."
                </p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-user text-gray-500"></i>
                    </div>
                    <div>
                        <h5 class="font-bold">Fernando Rivas</h5>
                        <p class="text-sm text-gray-400">CFO, Financial Innovation Group</p>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8">¿Listo para transformar tu negocio?</h2>
        <p class="text-xl text-blue-100 mb-10 max-w-3xl mx-auto">
            Únete a nuestros clientes satisfechos y descubre cómo DendrIA puede ayudarte a impulsar tu negocio con soluciones tecnológicas avanzadas.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                Contáctanos
            </a>
            <a href="{{ route('case-studies') }}" class="inline-block bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                Ver casos de éxito
            </a>
        </div>
    </div>
</section>
@endsection