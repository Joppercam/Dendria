@extends('layouts.app')

@section('title', 'Blog - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Blog</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Conocimientos y tendencias sobre desarrollo y tecnología</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                @if($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fas fa-newspaper text-4xl text-gray-500"></i>
                </div>
                @endif
                <div class="p-6">
                    <p class="text-blue-400 text-sm mb-2">{{ $post->published_at->format('d F, Y') }}</p>
                    <h3 class="font-bold text-xl mb-3">{{ $post->title }}</h3>
                    <p class="text-gray-400 mb-4">{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}</p>
                    <a href="{{ route('blog.show', $post) }}" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Leer más <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection