@extends('layouts.app')

@section('title', 'Equipo - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Nuestro Equipo</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Profesionales apasionados por la tecnología y la innovación</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($team as $member)
            <div class="bg-gray-800 rounded-xl overflow-hidden group">
                <div class="relative">
                    @if($member->photo)
                    <img src="{{ Storage::url($member->photo) }}" alt="{{ $member->name }}" class="w-full h-80 object-cover">
                    @else
                    <div class="w-full h-80 bg-gray-700 flex items-center justify-center">
                        <i class="fas fa-user text-4xl text-gray-500"></i>
                    </div>
                    @endif
                    <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-30 transition"></div>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl mb-1">{{ $member->name }}</h3>
                    <p class="text-blue-400 mb-3">{{ $member->position }}</p>
                    <p class="text-gray-400 text-sm mb-4">{{ Str::limit($member->bio, 120) }}</p>
                    
                    @if($member->social_media)
                    <div class="flex space-x-3">
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
            <div class="bg-gray-900 p-8 rounded-xl">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-lightbulb text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Innovación</h3>
                <p class="text-gray-400">Buscamos constantemente nuevas formas de resolver problemas complejos, combinando creatividad y tecnología de vanguardia.</p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl">
                <div class="w-16 h-16 bg-blue-600 rounded-lg mb-6 flex items-center justify-center">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Colaboración</h3>
                <p class="text-gray-400">Trabajamos juntos, compartiendo conocimientos y habilidades para lograr resultados excepcionales para nuestros clientes.</p>
            </div>
            
            <div class="bg-gray-900 p-8 rounded-xl">
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
                <img src="{{ asset('images/team-culture.jpg') }}" alt="Cultura de equipo" class="rounded-xl shadow-lg">
            </div>
        </div>
    </div>
</section>
@endsection