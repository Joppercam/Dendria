@extends('layouts.app')

@section('title', $project->title . ' - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $project->title }}</h1>
            <div class="flex flex-wrap justify-center gap-2 mb-6">
                @foreach($project->technologies as $tech)
                <span class="text-sm bg-blue-900/40 text-blue-300 rounded-full px-4 py-1">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="lg:w-2/3">
                @if($project->image)
                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}" class="w-full rounded-xl shadow-lg mb-8">
                @endif
                
                <div class="prose prose-lg prose-invert max-w-none">
                    {!! nl2br(e($project->description)) !!}
                </div>
            </div>
            
            <div class="lg:w-1/3">
                <div class="bg-gray-800 rounded-xl p-6 shadow-lg sticky top-8">
                    <h3 class="text-xl font-bold mb-4">¿Interesado en un proyecto similar?</h3>
                    <p class="text-gray-400 mb-6">Contáctanos para discutir cómo podemos ayudarte a crear una solución adaptada a tus necesidades.</p>
                    <a href="{{ route('contact') }}?subject=Interesado%20en%20proyecto%20similar%20a%20{{ urlencode($project->title) }}" class="block w-full bg-blue-600 hover:bg-blue-700 text-center text-white font-bold py-3 px-6 rounded-lg transition">
                        Solicitar información
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proyectos relacionados -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Proyectos relacionados</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Explora otros proyectos que podrían interesarte</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedProjects as $relatedProject)
            <div class="group bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                <div class="relative overflow-hidden">
                    @if($relatedProject->image)
                    <img src="{{ Storage::url($relatedProject->image) }}" alt="{{ $relatedProject->title }}" class="w-full h-64 object-cover transition transform group-hover:scale-110">
                    @else
                    <div class="w-full h-64 bg-gray-700 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-4xl text-gray-500"></i>
                    </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-0 group-hover:opacity-70 transition"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">{{ $relatedProject->title }}</h3>
                    <p class="text-gray-400 mb-4">{{ Str::limit($relatedProject->description, 120) }}</p>
                    <a href="{{ route('projects.show', $relatedProject) }}" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Ver detalles <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection