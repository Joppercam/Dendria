@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-500 bg-opacity-10">
                <i class="fas fa-tasks text-blue-500 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-500">Solicitudes de Proyectos</p>
                <p class="text-2xl font-semibold text-gray-700">{{ $projectRequestsCount }}</p>
                <p class="text-sm text-gray-500">{{ $pendingProjectRequestsCount }} pendientes</p>
            </div>
        </div>
        <a href="{{ route('admin.project_requests') }}" class="mt-4 inline-block text-sm font-medium text-blue-500 hover:text-blue-600">
            Ver solicitudes
            <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                <i class="fas fa-envelope text-green-500 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-500">Contactos</p>
                <p class="text-2xl font-semibold text-gray-700">{{ $contactsCount }}</p>
            </div>
        </div>
        <a href="{{ route('admin.contacts') }}" class="mt-4 inline-block text-sm font-medium text-green-500 hover:text-green-600">
            Ver contactos
            <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-500 bg-opacity-10">
                <i class="fas fa-project-diagram text-green-500 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-500">Proyectos</p>
                <p class="text-2xl font-semibold text-gray-700">{{ $projectsCount }}</p>
            </div>
        </div>
        <a href="{{ route('admin.projects') }}" class="mt-4 inline-block text-sm font-medium text-green-500 hover:text-green-600">
            Ver proyectos
            <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-yellow-500 bg-opacity-10">
                <i class="fas fa-comment-dots text-yellow-500 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-500">Testimonios</p>
                <p class="text-2xl font-semibold text-gray-700">{{ $testimonialsCount }}</p>
            </div>
        </div>
        <a href="{{ route('admin.testimonials') }}" class="mt-4 inline-block text-sm font-medium text-yellow-500 hover:text-yellow-600">
            Ver testimonios
            <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-500 bg-opacity-10">
                <i class="fas fa-users text-purple-500 text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-sm font-medium text-gray-500">Equipo</p>
                <p class="text-2xl font-semibold text-gray-700">{{ $teamCount }}</p>
            </div>
        </div>
        <a href="{{ route('admin.team') }}" class="mt-4 inline-block text-sm font-medium text-purple-500 hover:text-purple-600">
            Ver equipo
            <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
</div>

<div class="mt-8 bg-white rounded-lg shadow">
    <div class="px-6 py-4 border-b border-gray-200">
        <h2 class="text-lg font-medium text-gray-800">Últimos contactos</h2>
    </div>
    <div class="px-6 py-4">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asunto</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach(App\Models\Contact::latest()->take(5)->get() as $contact)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $contact->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $contact->subject }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $contact->created_at->format('d/m/Y H:i') }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection