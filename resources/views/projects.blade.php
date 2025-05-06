@extends('layouts.app')

@section('title', 'Proyectos - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Nuestros Proyectos</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Conoce algunas de nuestras soluciones más innovadoras</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="group bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <div class="relative overflow-hidden">
                    @if($project->image)
                    <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full h-64 object-cover transition transform group-hover:scale-110">
                    @else
                    <div class="w-full h-64 bg-gray-700 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-4xl text-gray-500"></i>
                    </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-70 transition"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-400 mb-4">{{ Str::limit($project->description, 120) }}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->technologies as $tech)
                        <span class="text-xs bg-blue-900/40 text-blue-300 rounded-full px-3 py-1">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <a href="{{ route('projects.show', $project) }}" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Ver detalles <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12">
            {{ $projects->links() }}
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-blue-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-2/3 lg:pr-10 mb-10 lg:mb-0">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">¿Tienes un proyecto en mente?</h2>
                <p class="text-xl text-blue-100">Contáctanos para discutir cómo podemos ayudarte a hacerlo realidad.</p>
            </div>
            <div>
                <a href="{{ route('project.start') }}" class="inline-block bg-white text-blue-600 font-bold py-4 px-8 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    Iniciar proyecto
                </a>
            </div>
        </div>
    </div>
</section>
@endsection