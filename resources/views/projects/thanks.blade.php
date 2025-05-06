@extends('layouts.app')

@section('title', 'Solicitud Enviada - DendrIA')

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <div class="w-24 h-24 rounded-full bg-green-500 mx-auto flex items-center justify-center mb-8">
                <i class="fas fa-check text-4xl text-white"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">¡Gracias por tu solicitud!</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Hemos recibido la información de tu proyecto con éxito.</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-gray-800 rounded-xl p-8 shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-6">¿Qué sigue?</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                <div class="bg-gray-700 p-6 rounded-xl">
                    <div class="w-12 h-12 rounded-full bg-blue-600 mx-auto flex items-center justify-center mb-4">
                        <i class="fas fa-envelope text-white"></i>
                    </div>
                    <h3 class="font-bold mb-2">Confirmación</h3>
                    <p class="text-gray-400">Te hemos enviado un email de confirmación con los detalles de tu solicitud.</p>
                </div>
                
                <div class="bg-gray-700 p-6 rounded-xl">
                    <div class="w-12 h-12 rounded-full bg-blue-600 mx-auto flex items-center justify-center mb-4">
                        <i class="fas fa-phone-alt text-white"></i>
                    </div>
                    <h3 class="font-bold mb-2">Contacto</h3>
                    <p class="text-gray-400">Nuestro equipo te contactará en las próximas 24-48 horas para discutir tu proyecto.</p>
                </div>
                
                <div class="bg-gray-700 p-6 rounded-xl">
                    <div class="w-12 h-12 rounded-full bg-blue-600 mx-auto flex items-center justify-center mb-4">
                        <i class="fas fa-file-contract text-white"></i>
                    </div>
                    <h3 class="font-bold mb-2">Propuesta</h3>
                    <p class="text-gray-400">Prepararemos una propuesta personalizada basada en tus requerimientos.</p>
                </div>
            </div>
            
            <p class="text-gray-300 mb-8">Si tienes alguna pregunta mientras tanto, no dudes en contactarnos a <a href="mailto:contacto@dendria.com" class="text-blue-400 hover:underline">contacto@dendria.com</a> o llamarnos al <a href="tel:+56912345678" class="text-blue-400 hover:underline">+56 9 1234 5678</a>.</p>
            
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="{{ route('home') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                    Volver al inicio
                </a>
                <a href="{{ route('services') }}" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded-lg transition">
                    Explorar servicios
                </a>
            </div>
        </div>
    </div>
</section>
@endsection