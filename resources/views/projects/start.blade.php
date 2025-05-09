@extends('layouts.app')

@section('title', 'Iniciar Proyecto - DendrIA')

@section('styles')
<style>
    .form-step {
        display: none;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
    .form-step.active {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }
    .progress-bar {
        height: 0.5rem;
        background-color: rgba(229, 231, 235, 0.2);
        border-radius: 9999px;
        overflow: hidden;
        backdrop-filter: blur(8px);
    }
    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #0ea5e9 0%, #3b82f6 100%);
        transition: width 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }
    .project-type-card {
        border: 2px solid transparent;
        transition: all 0.3s ease;
        cursor: pointer;
        background: rgba(31, 41, 55, 0.5);
        backdrop-filter: blur(8px);
        overflow: hidden;
        position: relative;
    }
    .project-type-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }
    .project-type-card.selected {
        border-color: #3b82f6;
        background: rgba(59, 130, 246, 0.15);
    }
    .project-type-card.selected::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 30px;
        height: 30px;
        background-color: #3b82f6;
        clip-path: polygon(0 0, 100% 0, 100% 100%);
    }
    .project-type-card.selected::after {
        content: '✓';
        position: absolute;
        top: 2px;
        right: 8px;
        color: white;
        font-size: 12px;
        font-weight: bold;
    }
    .project-type-icon {
        width: 64px;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 auto 1rem auto;
        transition: all 0.3s ease;
    }
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
    }
    .rating input {
        display: none;
    }
    .rating label {
        cursor: pointer;
        width: 40px;
        height: 40px;
        margin-right: 5px;
        background-color: rgba(31, 41, 55, 0.8);
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
        position: relative;
    }
    .rating label i {
        color: #4B5563;
        font-size: 1.25rem;
        transition: all 0.3s ease;
    }
    .rating input:checked ~ label {
        background-color: rgba(59, 130, 246, 0.8);
    }
    .rating input:checked ~ label i {
        color: white;
    }
    .rating label:hover ~ label,
    .rating label:hover {
        background-color: rgba(59, 130, 246, 0.5);
    }
    .rating label:hover ~ label i,
    .rating label:hover i {
        color: white;
    }
    .tech-chip {
        display: inline-block;
        padding: 8px 16px;
        margin: 6px;
        border-radius: 30px;
        background-color: rgba(31, 41, 55, 0.8);
        color: #E5E7EB;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .tech-chip:hover {
        background-color: rgba(59, 130, 246, 0.3);
    }
    .tech-chip.selected {
        background-color: rgba(59, 130, 246, 0.8);
        color: white;
    }
    .input-group {
        position: relative;
        margin-bottom: 24px;
    }
    .input-group label {
        position: absolute;
        top: 16px;
        left: 16px;
        color: #9CA3AF;
        pointer-events: none;
        transition: all 0.3s ease;
    }
    .input-group input:focus ~ label,
    .input-group input:not(:placeholder-shown) ~ label,
    .input-group textarea:focus ~ label,
    .input-group textarea:not(:placeholder-shown) ~ label {
        top: -10px;
        left: 10px;
        font-size: 12px;
        padding: 0 4px;
        background-color: #1F2937;
        color: #3b82f6;
    }
    /* Animación del encabezado igual que productos y servicios */
    .project-header {
        position: relative;
        overflow: hidden;
    }

    .project-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, rgba(0, 0, 0, 0) 60%);
        animation: rotate 20s linear infinite;
        z-index: 0;
    }
    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endsection

@section('content')
<div class="gradient-bg py-12 project-header">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <div class="inline-block mb-6 relative">
                <div class="absolute inset-0 bg-blue-500 opacity-20 blur-xl rounded-full"></div>
                <span class="relative z-10 inline-block bg-blue-600 text-white text-sm font-semibold py-2 px-4 rounded-full"><i class="fas fa-rocket mr-2"></i>¡Hagamos realidad tu proyecto!</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 relative z-10">Iniciar un Nuevo Proyecto</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto relative z-10 mb-8">Cuéntanos sobre tu idea y juntos transformaremos tu visión en una solución tecnológica innovadora</p>
        </div>
    </div>
</div>

<section class="py-20 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl p-8 shadow-2xl relative overflow-hidden animated-bg">
            <!-- Background pattern elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600 rounded-full opacity-10 blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-indigo-600 rounded-full opacity-10 blur-3xl -ml-32 -mb-32"></div>

            <div class="relative z-10 mb-8">
                <div class="flex justify-between mb-3">
                    <span class="text-sm font-medium text-blue-400">Tu proyecto en 3 simples pasos</span>
                    <span class="text-sm font-medium text-blue-400" id="progress-text">Paso 1 de 3</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-bar-fill" style="width: 33%;"></div>
                </div>
            </div>

            <form method="POST" action="{{ route('project.submit') }}" id="project-form">
                @csrf
                
                <!-- Step 1: Contact Information -->
                <div class="form-step active" id="step-1">
                    <div class="flex items-center mb-8">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold">Información de contacto</h3>
                            <p class="text-gray-400">Cuéntanos un poco sobre ti para poder contactarte</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="input-group">
                            <input type="text" id="name" name="name" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 @error('name') border-red-500 @enderror" placeholder=" " value="{{ old('name') }}" required>
                            <label for="name">Nombre completo *</label>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="input-group">
                            <input type="email" id="email" name="email" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 @error('email') border-red-500 @enderror" placeholder=" " value="{{ old('email') }}" required>
                            <label for="email">Email *</label>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="input-group">
                            <input type="text" id="company" name="company" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50" placeholder=" " value="{{ old('company') }}">
                            <label for="company">Empresa (opcional)</label>
                        </div>

                        <div class="input-group">
                            <input type="tel" id="phone" name="phone" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50" placeholder=" " value="{{ old('phone') }}">
                            <label for="phone">Teléfono (opcional)</label>
                        </div>
                    </div>

                    <div class="mt-10 mb-4 border-t border-gray-700 pt-6">
                        <p class="text-sm text-gray-400 mb-6"><i class="fas fa-shield-alt text-blue-400 mr-2"></i> Tus datos están seguros y nunca serán compartidos con terceros sin tu consentimiento.</p>

                        <div class="flex justify-end">
                            <button type="button" class="next-step bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-bold py-4 px-10 rounded-xl transition shadow-lg hover:shadow-blue-500/20">
                                Siguiente <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Step 2: Project Basic Information -->
                <div class="form-step" id="step-2">
                    <div class="flex items-center mb-8">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold">Información del proyecto</h3>
                            <p class="text-gray-400">Cuéntanos qué tipo de proyecto estás buscando desarrollar</p>
                        </div>
                    </div>

                    <!-- Project Type Selection Cards -->
                    <div class="mb-8">
                        <p class="text-gray-300 mb-4 font-medium">Tipo de proyecto <span class="text-red-400">*</span></p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                            <div class="project-type-card rounded-xl p-5 text-center" data-value="web">
                                <div class="project-type-icon bg-blue-600/20">
                                    <i class="fas fa-globe text-3xl text-blue-400"></i>
                                </div>
                                <h4 class="text-lg font-semibold mb-2">Desarrollo Web</h4>
                                <p class="text-sm text-gray-400">Sitios web, aplicaciones web, portales, e-commerce</p>
                            </div>

                            <div class="project-type-card rounded-xl p-5 text-center" data-value="mobile">
                                <div class="project-type-icon bg-green-600/20">
                                    <i class="fas fa-mobile-alt text-3xl text-green-400"></i>
                                </div>
                                <h4 class="text-lg font-semibold mb-2">Aplicación Móvil</h4>
                                <p class="text-sm text-gray-400">Apps para iOS, Android o multiplataforma</p>
                            </div>

                            <div class="project-type-card rounded-xl p-5 text-center" data-value="ai">
                                <div class="project-type-icon bg-purple-600/20">
                                    <i class="fas fa-brain text-3xl text-purple-400"></i>
                                </div>
                                <h4 class="text-lg font-semibold mb-2">Solución de IA</h4>
                                <p class="text-sm text-gray-400">Chatbots, análisis predictivo, ML, automatización</p>
                            </div>

                            <div class="project-type-card rounded-xl p-5 text-center" data-value="ecommerce">
                                <div class="project-type-icon bg-red-600/20">
                                    <i class="fas fa-shopping-cart text-3xl text-red-400"></i>
                                </div>
                                <h4 class="text-lg font-semibold mb-2">E-Commerce</h4>
                                <p class="text-sm text-gray-400">Tiendas online, sistemas de pago, inventario</p>
                            </div>

                            <div class="project-type-card rounded-xl p-5 text-center" data-value="consulting">
                                <div class="project-type-icon bg-yellow-600/20">
                                    <i class="fas fa-chart-line text-3xl text-yellow-400"></i>
                                </div>
                                <h4 class="text-lg font-semibold mb-2">Consultoría</h4>
                                <p class="text-sm text-gray-400">Asesoría tecnológica, transformación digital</p>
                            </div>

                            <div class="project-type-card rounded-xl p-5 text-center" data-value="other">
                                <div class="project-type-icon bg-gray-600/20">
                                    <i class="fas fa-ellipsis-h text-3xl text-gray-400"></i>
                                </div>
                                <h4 class="text-lg font-semibold mb-2">Otro</h4>
                                <p class="text-sm text-gray-400">Otro tipo de solución digital</p>
                            </div>
                        </div>

                        <!-- Hidden select for form submission -->
                        <select id="project_type" name="project_type" class="hidden" required>
                            <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Selecciona una opción</option>
                            <option value="web" {{ old('project_type') == 'web' ? 'selected' : '' }}>Desarrollo Web</option>
                            <option value="mobile" {{ old('project_type') == 'mobile' ? 'selected' : '' }}>Aplicación Móvil</option>
                            <option value="ai" {{ old('project_type') == 'ai' ? 'selected' : '' }}>Solución de IA</option>
                            <option value="ecommerce" {{ old('project_type') == 'ecommerce' ? 'selected' : '' }}>E-Commerce</option>
                            <option value="consulting" {{ old('project_type') == 'consulting' ? 'selected' : '' }}>Consultoría Tecnológica</option>
                            <option value="other" {{ old('project_type') == 'other' ? 'selected' : '' }}>Otro</option>
                        </select>

                        @error('project_type')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Budget Range -->
                    <div class="mb-8">
                        <p class="text-gray-300 mb-4 font-medium">Rango de presupuesto <span class="text-red-400">*</span></p>

                        <div class="grid grid-cols-2 md:grid-cols-5 gap-3">
                            <div class="budget-option p-3 bg-gray-700/50 rounded-lg text-center cursor-pointer border-2 border-transparent hover:border-blue-500 transition" data-value="less_than_5k">
                                <span class="text-sm font-semibold block mb-1">Básico</span>
                                <span class="text-xs text-gray-400">< $5,000 USD</span>
                            </div>
                            <div class="budget-option p-3 bg-gray-700/50 rounded-lg text-center cursor-pointer border-2 border-transparent hover:border-blue-500 transition" data-value="5k_15k">
                                <span class="text-sm font-semibold block mb-1">Estándar</span>
                                <span class="text-xs text-gray-400">$5K - $15K USD</span>
                            </div>
                            <div class="budget-option p-3 bg-gray-700/50 rounded-lg text-center cursor-pointer border-2 border-transparent hover:border-blue-500 transition" data-value="15k_30k">
                                <span class="text-sm font-semibold block mb-1">Profesional</span>
                                <span class="text-xs text-gray-400">$15K - $30K USD</span>
                            </div>
                            <div class="budget-option p-3 bg-gray-700/50 rounded-lg text-center cursor-pointer border-2 border-transparent hover:border-blue-500 transition" data-value="30k_plus">
                                <span class="text-sm font-semibold block mb-1">Empresarial</span>
                                <span class="text-xs text-gray-400">$30K+ USD</span>
                            </div>
                            <div class="budget-option p-3 bg-gray-700/50 rounded-lg text-center cursor-pointer border-2 border-transparent hover:border-blue-500 transition" data-value="not_sure">
                                <span class="text-sm font-semibold block mb-1">No definido</span>
                                <span class="text-xs text-gray-400">A consultar</span>
                            </div>
                        </div>

                        <!-- Hidden select for form submission -->
                        <select id="budget_range" name="budget_range" class="hidden" required>
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

                    <!-- Timeline with priority rating -->
                    <div class="mb-8">
                        <p class="text-gray-300 mb-4 font-medium">Urgencia del proyecto <span class="text-red-400">*</span></p>

                        <div class="rating mb-4" id="timeline-rating">
                            <input type="radio" id="star5" name="timeline" value="urgent" {{ old('timeline') == 'urgent' ? 'checked' : '' }}/>
                            <label for="star5" title="Urgente - menos de 1 mes">
                                <i class="fas fa-bolt"></i>
                                <span class="text-xs absolute -bottom-6 left-1/2 transform -translate-x-1/2 whitespace-nowrap">Urgente</span>
                            </label>

                            <input type="radio" id="star4" name="timeline" value="1_3_months" {{ old('timeline') == '1_3_months' ? 'checked' : '' }}/>
                            <label for="star4" title="Prioridad alta - 1-3 meses">
                                <i class="fas fa-fire"></i>
                                <span class="text-xs absolute -bottom-6 left-1/2 transform -translate-x-1/2 whitespace-nowrap">Alta</span>
                            </label>

                            <input type="radio" id="star3" name="timeline" value="3_6_months" {{ old('timeline') == '3_6_months' ? 'checked' : '' }}/>
                            <label for="star3" title="Prioridad media - 3-6 meses">
                                <i class="fas fa-clock"></i>
                                <span class="text-xs absolute -bottom-6 left-1/2 transform -translate-x-1/2 whitespace-nowrap">Media</span>
                            </label>

                            <input type="radio" id="star2" name="timeline" value="6_plus_months" {{ old('timeline') == '6_plus_months' ? 'checked' : '' }}/>
                            <label for="star2" title="Prioridad baja - más de 6 meses">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="text-xs absolute -bottom-6 left-1/2 transform -translate-x-1/2 whitespace-nowrap">Baja</span>
                            </label>

                            <input type="radio" id="star1" name="timeline" value="flexible" {{ old('timeline') == 'flexible' ? 'checked' : '' }}/>
                            <label for="star1" title="Flexible - sin plazo definido">
                                <i class="fas fa-hourglass-half"></i>
                                <span class="text-xs absolute -bottom-6 left-1/2 transform -translate-x-1/2 whitespace-nowrap">Flexible</span>
                            </label>
                        </div>

                        <div class="h-6 mb-3"></div> <!-- Spacer for the labels -->

                        @error('timeline')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-10 mb-4 border-t border-gray-700 pt-6">
                        <div class="flex justify-between">
                            <button type="button" class="prev-step bg-gray-700 hover:bg-gray-600 text-white font-bold py-4 px-10 rounded-xl transition shadow-lg">
                                <i class="fas fa-arrow-left mr-2"></i> Anterior
                            </button>
                            <button type="button" class="next-step bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-bold py-4 px-10 rounded-xl transition shadow-lg hover:shadow-blue-500/20">
                                Siguiente <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3: Project Details -->
                <div class="form-step" id="step-3">
                    <div class="flex items-center mb-8">
                        <div class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold">Detalles del proyecto</h3>
                            <p class="text-gray-400">Cuéntanos sobre las funcionalidades y tecnologías para tu proyecto</p>
                        </div>
                    </div>

                    <!-- Technologies Section -->
                    <div class="mb-8">
                        <p class="text-gray-300 mb-4 font-medium">Tecnologías preferidas (opcional)</p>
                        <p class="text-sm text-gray-400 mb-4">Selecciona las tecnologías que te gustaría utilizar en tu proyecto. Puedes seleccionar varias opciones.</p>

                        <div class="tech-container mb-6">
                            <div class="tech-chip" data-value="laravel">Laravel</div>
                            <div class="tech-chip" data-value="vue">Vue.js</div>
                            <div class="tech-chip" data-value="react">React</div>
                            <div class="tech-chip" data-value="angular">Angular</div>
                            <div class="tech-chip" data-value="python">Python</div>
                            <div class="tech-chip" data-value="django">Django</div>
                            <div class="tech-chip" data-value="node">Node.js</div>
                            <div class="tech-chip" data-value="express">Express</div>
                            <div class="tech-chip" data-value="mysql">MySQL</div>
                            <div class="tech-chip" data-value="postgresql">PostgreSQL</div>
                            <div class="tech-chip" data-value="mongodb">MongoDB</div>
                            <div class="tech-chip" data-value="aws">AWS</div>
                            <div class="tech-chip" data-value="azure">Azure</div>
                            <div class="tech-chip" data-value="openai">OpenAI</div>
                            <div class="tech-chip" data-value="tailwind">TailwindCSS</div>
                            <div class="tech-chip" data-value="docker">Docker</div>
                            <div class="tech-chip" data-value="flutter">Flutter</div>
                            <div class="tech-chip" data-value="swift">Swift (iOS)</div>
                            <div class="tech-chip" data-value="kotlin">Kotlin (Android)</div>
                            <div class="tech-chip" data-value="wordpress">WordPress</div>
                            <div class="tech-chip" data-value="shopify">Shopify</div>
                        </div>

                        <!-- Hidden input for technologies -->
                        <input type="hidden" id="technologies" name="technologies" value="{{ old('technologies') }}">
                    </div>

                    <!-- Project Description -->
                    <div class="mb-8">
                        <div class="input-group">
                            <textarea id="description" name="description" rows="5" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50 @error('description') border-red-500 @enderror" placeholder=" " required>{{ old('description') }}</textarea>
                            <label for="description">Descripción del proyecto *</label>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="text-sm text-gray-400 mt-2"><i class="fas fa-info-circle mr-1"></i> Describe brevemente tu idea, objetivos y funcionalidades clave que necesita tu proyecto.</p>
                    </div>

                    <!-- Technical Requirements -->
                    <div class="mb-8">
                        <div class="input-group">
                            <textarea id="requirements" name="requirements" rows="3" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50" placeholder=" ">{{ old('requirements') }}</textarea>
                            <label for="requirements">Requerimientos técnicos (opcional)</label>
                        </div>
                        <p class="text-sm text-gray-400 mt-2"><i class="fas fa-info-circle mr-1"></i> Menciona cualquier requerimiento específico, integraciones con otros sistemas o funcionalidades especiales que necesites.</p>
                    </div>

                    <!-- References -->
                    <div class="mb-8">
                        <div class="input-group">
                            <textarea id="references" name="references" rows="3" class="w-full p-4 bg-gray-700/50 rounded-lg border border-gray-600 focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/50" placeholder=" ">{{ old('references') }}</textarea>
                            <label for="references">Referencias (opcional)</label>
                        </div>
                        <p class="text-sm text-gray-400 mt-2"><i class="fas fa-info-circle mr-1"></i> Enlaces a proyectos similares, ejemplos de diseño o referencias que te gusten.</p>
                    </div>

                    <div class="bg-blue-900/20 p-6 rounded-xl border border-blue-800/30 mb-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-blue-600/30 flex items-center justify-center">
                                    <i class="fas fa-lock text-blue-400"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-blue-300">Confidencialidad garantizada</h4>
                                <p class="mt-1 text-sm text-gray-300">Tu información será tratada con absoluta confidencialidad. Podemos firmar un acuerdo de confidencialidad (NDA) antes de comenzar si lo necesitas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 mb-4 border-t border-gray-700 pt-6">
                        <div class="flex justify-between">
                            <button type="button" class="prev-step bg-gray-700 hover:bg-gray-600 text-white font-bold py-4 px-10 rounded-xl transition shadow-lg">
                                <i class="fas fa-arrow-left mr-2"></i> Anterior
                            </button>
                            <button type="submit" class="bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-bold py-4 px-10 rounded-xl transition shadow-lg hover:shadow-blue-500/20">
                                <i class="fas fa-paper-plane mr-2"></i> Enviar proyecto
                            </button>
                        </div>
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