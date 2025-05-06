@extends('layouts.app')

@section('title', 'Iniciar Proyecto - DendrIA')

@section('styles')
<style>
    .form-step {
        display: none;
    }
    .form-step.active {
        display: block;
    }
    .progress-bar {
        height: 0.5rem;
        background-color: #e5e7eb;
        border-radius: 9999px;
        overflow: hidden;
    }
    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #0ea5e9 0%, #3b82f6 100%);
        transition: width 0.5s ease-in-out;
    }
</style>
@endsection

@section('content')
<div class="gradient-bg py-32">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Iniciar Proyecto</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Cuéntanos sobre tu idea y comencemos a hacerla realidad</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-gray-800 rounded-xl p-8 shadow-lg">
            <div class="mb-8">
                <div class="flex justify-between mb-2">
                    <span class="text-sm text-gray-400">Progreso</span>
                    <span class="text-sm text-gray-400" id="progress-text">Paso 1 de 3</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-bar-fill" style="width: 33%;"></div>
                </div>
            </div>

            <form method="POST" action="{{ route('project.submit') }}" id="project-form">
                @csrf
                
                <!-- Step 1: Contact Information -->
                <div class="form-step active" id="step-1">
                    <h3 class="text-2xl font-bold mb-6">Información de contacto</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-gray-400 mb-2">Nombre completo *</label>
                            <input type="text" id="name" name="name" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border border-red-500 @enderror" value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="email" class="block text-gray-400 mb-2">Email *</label>
                            <input type="email" id="email" name="email" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border border-red-500 @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="company" class="block text-gray-400 mb-2">Empresa (opcional)</label>
                            <input type="text" id="company" name="company" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('company') }}">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-400 mb-2">Teléfono (opcional)</label>
                            <input type="tel" id="phone" name="phone" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('phone') }}">
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="button" class="next-step bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                            Siguiente <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Step 2: Project Basic Information -->
                <div class="form-step" id="step-2">
                    <h3 class="text-2xl font-bold mb-6">Información del proyecto</h3>
                    
                    <div class="mb-6">
                        <label for="project_type" class="block text-gray-400 mb-2">Tipo de proyecto *</label>
                        <select id="project_type" name="project_type" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('project_type') border border-red-500 @enderror" required>
                            <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Selecciona una opción</option>
                            <option value="web" {{ old('project_type') == 'web' ? 'selected' : '' }}>Desarrollo Web</option>
                            <option value="mobile" {{ old('project_type') == 'mobile' ? 'selected' : '' }}>Aplicación Móvil</option>
                            <option value="ai" {{ old('project_type') == 'ai' ? 'selected' : '' }}>Solución de IA</option>
                            <option value="consulting" {{ old('project_type') == 'consulting' ? 'selected' : '' }}>Consultoría Tecnológica</option>
                            <option value="other" {{ old('project_type') == 'other' ? 'selected' : '' }}>Otro</option>
                        </select>
                        @error('project_type')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="budget_range" class="block text-gray-400 mb-2">Rango de presupuesto *</label>
                        <select id="budget_range" name="budget_range" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('budget_range') border border-red-500 @enderror" required>
                            <option value="" disabled {{ old('budget_range') ? '' : 'selected' }}>Selecciona una opción</option>
                            <option value="less_than_5k" {{ old('budget_range') == 'less_than_5k' ? 'selected' : '' }}>Menos de $5,000 USD</option>
                            <option value="5k_15k" {{ old('budget_range') == '5k_15k' ? 'selected' : '' }}>$5,000 - $15,000 USD</option>
                            <option value="15k_30k" {{ old('budget_range') == '15k_30k' ? 'selected' : '' }}>$15,000 - $30,000 USD</option>
                            <option value="30k_plus" {{ old('budget_range') == '30k_plus' ? 'selected' : '' }}>Más de $30,000 USD</option>
                            <option value="not_sure" {{ old('budget_range') == 'not_sure' ? 'selected' : '' }}>No estoy seguro</option>
                        </select>
                        @error('budget_range')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="timeline" class="block text-gray-400 mb-2">Plazo de tiempo *</label>
                        <select id="timeline" name="timeline" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('timeline') border border-red-500 @enderror" required>
                            <option value="" disabled {{ old('timeline') ? '' : 'selected' }}>Selecciona una opción</option>
                            <option value="urgent" {{ old('timeline') == 'urgent' ? 'selected' : '' }}>Urgente (menos de 1 mes)</option>
                            <option value="1_3_months" {{ old('timeline') == '1_3_months' ? 'selected' : '' }}>1-3 meses</option>
                            <option value="3_6_months" {{ old('timeline') == '3_6_months' ? 'selected' : '' }}>3-6 meses</option>
                            <option value="6_plus_months" {{ old('timeline') == '6_plus_months' ? 'selected' : '' }}>Más de 6 meses</option>
                            <option value="flexible" {{ old('timeline') == 'flexible' ? 'selected' : '' }}>Flexible</option>
                        </select>
                        @error('timeline')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="flex justify-between">
                        <button type="button" class="prev-step bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded-lg transition">
                            <i class="fas fa-arrow-left mr-2"></i> Anterior
                        </button>
                        <button type="button" class="next-step bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg transition">
                            Siguiente <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Step 3: Project Details -->
                <div class="form-step" id="step-3">
                    <h3 class="text-2xl font-bold mb-6">Detalles del proyecto</h3>
                    
                    <div class="mb-6">
                        <label for="description" class="block text-gray-400 mb-2">Descripción del proyecto *</label>
                        <textarea id="description" name="description" rows="5" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border border-red-500 @enderror" required>{{ old('description') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Describe brevemente tu idea, objetivos y funcionalidades clave.</p>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-6">
                        <label for="requirements" class="block text-gray-400 mb-2">Requerimientos técnicos (opcional)</label>
                        <textarea id="requirements" name="requirements" rows="3" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('requirements') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Menciona cualquier tecnología específica, integraciones o requisitos técnicos.</p>
                    </div>
                    
                    <div class="mb-8">
                        <label for="references" class="block text-gray-400 mb-2">Referencias (opcional)</label>
                        <textarea id="references" name="references" rows="3" class="w-full p-3 bg-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('references') }}</textarea>
                        <p class="text-sm text-gray-500 mt-1">Enlaces a proyectos similares o referencias visuales.</p>
                    </div>
                    
                    <div class="flex justify-between">
                        <button type="button" class="prev-step bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded-lg transition">
                            <i class="fas fa-arrow-left mr-2"></i> Anterior
                        </button>
                        <button type="submit" class="accent-gradient hover:opacity-90 text-white font-bold py-3 px-8 rounded-lg transition">
                            Enviar solicitud
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('project-form');
        const steps = document.querySelectorAll('.form-step');
        const progressBar = document.querySelector('.progress-bar-fill');
        const progressText = document.getElementById('progress-text');
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');
        
        let currentStep = 1;
        const totalSteps = steps.length;
        
        // Update progress
        function updateProgress() {
            const progress = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${progress}%`;
            progressText.textContent = `Paso ${currentStep} de ${totalSteps}`;
        }
        
        // Show step
        function showStep(stepNumber) {
            steps.forEach((step, index) => {
                step.classList.remove('active');
                if (index + 1 === stepNumber) {
                    step.classList.add('active');
                }
            });
            
            currentStep = stepNumber;
            updateProgress();
            
            // Scroll to top of form
            form.scrollIntoView({ behavior: 'smooth' });
        }
        
        // Validate current step
        function validateStep(stepNumber) {
            let isValid = true;
            
            if (stepNumber === 1) {
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                
                if (!name.value.trim()) {
                    name.classList.add('border', 'border-red-500');
                    isValid = false;
                } else {
                    name.classList.remove('border', 'border-red-500');
                }
                
                if (!email.value.trim() || !email.validity.valid) {
                    email.classList.add('border', 'border-red-500');
                    isValid = false;
                } else {
                    email.classList.remove('border', 'border-red-500');
                }
            }
            
            if (stepNumber === 2) {
                const projectType = document.getElementById('project_type');
                const budgetRange = document.getElementById('budget_range');
                const timeline = document.getElementById('timeline');
                
                if (projectType.value === '' || projectType.selectedIndex === 0) {
                    projectType.classList.add('border', 'border-red-500');
                    isValid = false;
                } else {
                    projectType.classList.remove('border', 'border-red-500');
                }
                
                if (budgetRange.value === '' || budgetRange.selectedIndex === 0) {
                    budgetRange.classList.add('border', 'border-red-500');
                    isValid = false;
                } else {
                    budgetRange.classList.remove('border', 'border-red-500');
                }
                
                if (timeline.value === '' || timeline.selectedIndex === 0) {
                    timeline.classList.add('border', 'border-red-500');
                    isValid = false;
                } else {
                    timeline.classList.remove('border', 'border-red-500');
                }
            }
            
            if (stepNumber === 3) {
                const description = document.getElementById('description');
                
                if (!description.value.trim()) {
                    description.classList.add('border', 'border-red-500');
                    isValid = false;
                } else {
                    description.classList.remove('border', 'border-red-500');
                }
            }
            
            return isValid;
        }
        
        // Next button event listeners
        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (validateStep(currentStep)) {
                    showStep(currentStep + 1);
                }
            });
        });
        
        // Previous button event listeners
        prevButtons.forEach(button => {
            button.addEventListener('click', function() {
                showStep(currentStep - 1);
            });
        });
        
        // Form submission
        form.addEventListener('submit', function(e) {
            if (!validateStep(currentStep)) {
                e.preventDefault();
            }
        });
    });
</script>
@endsection