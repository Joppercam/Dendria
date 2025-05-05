@extends('layouts.app')

@section('title', $post->title . ' - Blog - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <p class="text-blue-400 mb-2">{{ $post->published_at->format('d F, Y') }}</p>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $post->title }}</h1>
            <div class="flex justify-center items-center">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-xl font-bold mr-3">
                        {{ substr($post->user->name, 0, 1) }}
                    </div>
                    <span>{{ $post->user->name }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="lg:w-2/3">
                @if($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full rounded-xl shadow-lg mb-8">
                @endif
                
                <div class="prose prose-lg prose-invert max-w-none">
                    {!! $post->content !!}
                </div>
                
                <div class="mt-12 pt-8 border-t border-gray-800">
                    <div class="flex justify-between">
                        <a href="{{ route('blog') }}" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                            <i class="fas fa-arrow-left mr-2"></i> Volver al blog
                        </a>
                        
                        <div class="flex space-x-4">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post)) }}&text={{ urlencode($post->title) }}" target="_blank" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(route('blog.show', $post)) }}&title={{ urlencode($post->title) }}" target="_blank" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blog.show', $post)) }}" target="_blank" class="text-blue-400 hover:text-blue-300">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="lg:w-1/3">
                <div class="bg-gray-800 rounded-xl p-6 shadow-lg sticky top-8">
                    <h3 class="text-xl font-bold mb-4">Artículos recientes</h3>
                    <div class="space-y-4">
                        @foreach(App\Models\BlogPost::published()->where('id', '!=', $post->id)->latest('published_at')->take(5)->get() as $recentPost)
                        <div class="flex items-start">
                            @if($recentPost->featured_image)
                            <img src="{{ Storage::url($recentPost->featured_image) }}" alt="{{ $recentPost->title }}" class="w-20 h-16 object-cover rounded mr-4">
                            @else
                            <div class="w-20 h-16 bg-gray-700 flex items-center justify-center rounded mr-4">
                                <i class="fas fa-newspaper text-gray-500"></i>
                            </div>
                            @endif
                            <div>
                                <h4 class="font-bold hover:text-blue-400 transition">
                                    <a href="{{ route('blog.show', $recentPost) }}">{{ Str::limit($recentPost->title, 60) }}</a>
                                </h4>
                                <p class="text-sm text-blue-400">{{ $recentPost->published_at->format('d F, Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Artículos relacionados -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Artículos relacionados</h2>
            <p class="text-gray-400 max-w-3xl mx-auto">Continúa explorando nuestro contenido</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $relatedPost)
            <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                @if($relatedPost->featured_image)
                <img src="{{ Storage::url($relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gray-700 flex items-center justify-center">
                    <i class="fas fa-newspaper text-4xl text-gray-500"></i>
                </div>
                @endif
                <div class="p-6">
                    <p class="text-blue-400 text-sm mb-2">{{ $relatedPost->published_at->format('d F, Y') }}</p>
                    <h3 class="font-bold text-xl mb-3">{{ $relatedPost->title }}</h3>
                    <p class="text-gray-400 mb-4">{{ $relatedPost->excerpt ?? Str::limit(strip_tags($relatedPost->content), 120) }}</p>
                    <a href="{{ route('blog.show', $relatedPost) }}" class="inline-flex items-center text-blue-400 hover:text-blue-300">
                        Leer más <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection