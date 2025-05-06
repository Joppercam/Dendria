@extends('layouts.admin')

@section('title', 'Detalle de Solicitud de Proyecto')
@section('header', 'Detalle de Solicitud de Proyecto #' . $projectRequest->id)

@section('content')
<div class="bg-white rounded-lg shadow overflow-hidden mb-6">
    <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h3 class="text-lg font-medium text-gray-900">Información de la Solicitud</h3>
        <div>
            <a href="{{ route('admin.project_requests') }}" class="text-gray-600 hover:text-gray-900">
                <i class="fas fa-arrow-left mr-1"></i> Volver
            </a>
        </div>
    </div>
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-3">Información de Contacto</h4>
                <dl>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Nombre</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $projectRequest->name }}</dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Email</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            <a href="mailto:{{ $projectRequest->email }}" class="text-indigo-600 hover:text-indigo-900">
                                {{ $projectRequest->email }}
                            </a>
                        </dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Empresa</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $projectRequest->company ?? 'No especificada' }}</dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Teléfono</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            @if($projectRequest->phone)
                                <a href="tel:{{ $projectRequest->phone }}" class="text-indigo-600 hover:text-indigo-900">
                                    {{ $projectRequest->phone }}
                                </a>
                            @else
                                No especificado
                            @endif
                        </dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Fecha de solicitud</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $projectRequest->created_at->format('d/m/Y H:i') }}</dd>
                    </div>
                </dl>
            </div>
            
            <div>
                <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-3">Detalles del Proyecto</h4>
                <dl>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Tipo de proyecto</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $projectRequest->project_type_name }}</dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Rango de presupuesto</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $projectRequest->budget_range_name }}</dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Plazo de tiempo</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $projectRequest->timeline_name }}</dd>
                    </div>
                    <div class="mb-4">
                        <dt class="text-sm font-medium text-gray-500">Estado</dt>
                        <dd class="mt-1">
                            <form action="{{ route('admin.project_requests.update_status', $projectRequest) }}" method="POST" class="flex items-center">
                                @csrf
                                @method('PUT')
                                <select name="status" class="mr-2 text-sm border-gray-300 rounded-md">
                                    <option value="pending" {{ $projectRequest->status == 'pending' ? 'selected' : '' }}>Pendiente</option>
                                    <option value="contacted" {{ $projectRequest->status == 'contacted' ? 'selected' : '' }}>Contactado</option>
                                    <option value="in_progress" {{ $projectRequest->status == 'in_progress' ? 'selected' : '' }}>En progreso</option>
                                    <option value="completed" {{ $projectRequest->status == 'completed' ? 'selected' : '' }}>Completado</option>
                                    <option value="rejected" {{ $projectRequest->status == 'rejected' ? 'selected' : '' }}>Rechazado</option>
                                </select>
                                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm py-1 px-3 rounded">
                                    Actualizar
                                </button>
                            </form>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden mb-6">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-medium text-gray-900">Descripción del Proyecto</h3>
    </div>
    <div class="p-6">
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Descripción</h4>
            <div class="mt-1 text-sm text-gray-900 whitespace-pre-line bg-gray-50 p-4 rounded-lg">{{ $projectRequest->description }}</div>
        </div>
        
        @if($projectRequest->requirements)
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Requerimientos técnicos</h4>
            <div class="mt-1 text-sm text-gray-900 whitespace-pre-line bg-gray-50 p-4 rounded-lg">{{ $projectRequest->requirements }}</div>
        </div>
        @endif
        
        @if($projectRequest->references)
        <div>
            <h4 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Referencias</h4>
            <div class="mt-1 text-sm text-gray-900 whitespace-pre-line bg-gray-50 p-4 rounded-lg">{{ $projectRequest->references }}</div>
        </div>
        @endif
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-medium text-gray-900">Acciones</h3>
    </div>
    <div class="p-6">
        <div class="flex space-x-4">
            <a href="mailto:{{ $projectRequest->email }}?subject=Respuesta a tu solicitud de proyecto en DendrIA" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded">
                <i class="fas fa-envelope mr-2"></i> Enviar Email
            </a>
            
            @if($projectRequest->phone)
            <a href="tel:{{ $projectRequest->phone }}" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">
                <i class="fas fa-phone mr-2"></i> Llamar
            </a>
            @endif
            
            <form action="{{ route('admin.project_requests.destroy', $projectRequest) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded" onclick="return confirm('¿Estás seguro de que deseas eliminar esta solicitud? Esta acción no se puede deshacer.')">
                    <i class="fas fa-trash mr-2"></i> Eliminar Solicitud
                </button>
            </form>
        </div>
    </div>
</div>
@endsection