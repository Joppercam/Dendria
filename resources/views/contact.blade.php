@extends('layouts.app')

@section('title', 'Contacto - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Contáctanos</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Estamos listos para ayudarte a crear soluciones tecnológicas innovadoras</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/2 px-4 mb-10 lg:mb-0">
                <div class="bg-gray-800 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-6">Envíanos un mensaje</h3>
                    @if(session('success'))
                        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-gray-400 mb-2">Nombre</label>
                            <input type="text" id="name" name="name" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-400 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border border-red-500 @enderror" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-400 mb-2">Asunto</label>
                            <input type="text" id="subject" name="subject" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('subject') border border-red-500 @enderror" value="{{ old('subject') }}">
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-400 mb-2">Mensaje</label>
                            <textarea id="message" name="message" rows="5" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('message') border border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="w-full accent-gradient hover:opacity-90 text-white font-bold py-3 px-6 rounded-lg transition">Enviar mensaje</button>
                    </form>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-4">
                <div class="bg-gray-800 rounded-xl p-8 h-full">
                    <h3 class="text-2xl font-bold mb-6">Información de contacto</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 bg-blue-600/30 rounded-full flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-blue-400"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold">Ubicación</h4>
                                <p class="text-gray-400">Santiago, Chile</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 bg-blue-600/30 rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope text-blue-400"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-400">contacto@dendria.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-10 h-10 bg-blue-600/30 rounded-full flex items-center justify-center">
                                    <i class="fas fa-phone text-blue-400"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold">Teléfono</h4>
                                <p class="text-gray-400">+56 9 1234 5678</p>
                            </div>
                        </div>
                        
                        <div class="pt-6">
                            <h4 class="font-bold mb-4">Síguenos</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="py-20 bg-gray-800">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Nuestra ubicación</h2>
            <p class="text-gray-400">Visítanos en nuestras oficinas</p>
        </div>
        
        <div class="w-full h-96 rounded-xl overflow-hidden shadow-xl">
            <!-- Aquí puedes integrar Google Maps con una API key -->
            <div class="w-full h-full bg-gray-700 flex items-center justify-center">
                <p class="text-gray-400">Mapa de Google (requiere API key para producción)</p>
            </div>
        </div>
    </div>
</section>
@endsection