@extends('layouts.app')

@section('title', 'Términos y Condiciones - DendrIA')

@section('styles')
<style>
    .legal-header {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%);
        position: relative;
        overflow: hidden;
    }
    
    .legal-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(0, 0, 0, 0) 70%);
        animation: rotate 20s linear infinite;
        z-index: 0;
    }
    
    .legal-content {
        background: linear-gradient(to bottom, #374151, #1f2937);
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
    }
    
    .section-card {
        background: rgba(55, 65, 81, 0.5);
        border: 1px solid rgba(59, 130, 246, 0.2);
        border-radius: 0.75rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .section-card:hover {
        border-color: rgba(59, 130, 246, 0.4);
        background: rgba(55, 65, 81, 0.7);
        transform: translateY(-2px);
    }
    
    .section-number {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.875rem;
        float: left;
        margin-right: 1rem;
        margin-top: 0.25rem;
    }
    
    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endsection

@section('content')
<!-- Header con gradiente -->
<div class="legal-header py-16 relative">
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Términos y Condiciones</h1>
            <p class="text-xl text-blue-100 mb-6">Términos de uso para nuestros servicios de desarrollo de software</p>
            <div class="flex items-center justify-center space-x-4 text-blue-200">
                <i class="fas fa-calendar-alt"></i>
                <span>Última actualización: {{ date('d/m/Y') }}</span>
            </div>
        </div>
    </div>
</div>

<!-- Contenido principal -->
<div class="bg-gray-900 py-16">
    <div class="container mx-auto px-6 max-w-5xl">
        <div class="legal-content p-8 md:p-12">
            <!-- Introducción -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-full mb-4">
                    <i class="fas fa-file-contract text-white text-2xl"></i>
                </div>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    Bienvenido a DendrIA. Los siguientes términos y condiciones rigen su acceso y uso de nuestros servicios 
                    de desarrollo de software, aplicaciones web, soluciones de IA y servicios relacionados.
                </p>
            </div>

            <!-- Secciones -->
            <div class="space-y-6">
                <!-- Sección 1 -->
                <div class="section-card">
                    <div class="section-number">1</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Aceptación de los Términos</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Al utilizar nuestros servicios, usted acepta quedar vinculado por estos Términos y Condiciones. 
                        Si no está de acuerdo con alguno de estos términos, no podrá utilizar nuestros servicios.
                    </p>
                </div>

                <!-- Sección 2 -->
                <div class="section-card">
                    <div class="section-number">2</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Descripción de Servicios</h3>
                    <p class="text-gray-300 leading-relaxed mb-4">
                        DendrIA ofrece servicios de desarrollo de software personalizados, incluyendo pero no limitado a:
                    </p>
                    <ul class="text-gray-300 space-y-2 ml-4">
                        <li class="flex items-start"><i class="fas fa-check text-blue-400 mr-2 mt-1"></i>Desarrollo de aplicaciones web y móviles</li>
                        <li class="flex items-start"><i class="fas fa-check text-blue-400 mr-2 mt-1"></i>Implementación de soluciones de inteligencia artificial</li>
                        <li class="flex items-start"><i class="fas fa-check text-blue-400 mr-2 mt-1"></i>Consultoría tecnológica</li>
                        <li class="flex items-start"><i class="fas fa-check text-blue-400 mr-2 mt-1"></i>Hosting y mantenimiento de aplicaciones</li>
                        <li class="flex items-start"><i class="fas fa-check text-blue-400 mr-2 mt-1"></i>Integración de sistemas y APIs</li>
                    </ul>
                </div>

                <!-- Sección 3 -->
                <div class="section-card">
                    <div class="section-number">3</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Propuestas y Cotizaciones</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Todas las propuestas y cotizaciones tienen una validez de <span class="text-blue-400 font-semibold">30 días</span>, a menos que se especifique lo contrario. 
                        Los precios están sujetos a cambios sin previo aviso antes de la aceptación formal de una propuesta.
                    </p>
                </div>

                <!-- Sección 4 -->
                <div class="section-card">
                    <div class="section-number">4</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Acuerdos de Desarrollo</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Todo proyecto de desarrollo requiere un acuerdo por escrito que detalle el alcance del trabajo, plazos, 
                        entregables, costos y otros términos específicos. Este acuerdo, una vez firmado, será considerado un 
                        anexo a estos Términos y Condiciones.
                    </p>
                </div>

                <!-- Sección 5 -->
                <div class="section-card">
                    <div class="section-number">5</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Propiedad Intelectual</h3>
                    <div class="space-y-3">
                        <p class="text-gray-300 leading-relaxed">
                            Una vez que el cliente haya pagado en su totalidad los servicios contratados, se le otorgará la <span class="text-green-400 font-semibold">propiedad 
                            del código fuente</span> y otros entregables desarrollados específicamente para el proyecto, salvo que se 
                            especifique lo contrario en el acuerdo del proyecto.
                        </p>
                        <p class="text-gray-300 leading-relaxed">
                            DendrIA conserva la propiedad de todas las metodologías, herramientas, frameworks, componentes y otros 
                            elementos preexistentes utilizados en el desarrollo.
                        </p>
                    </div>
                </div>

                <!-- Sección 6 -->
                <div class="section-card">
                    <div class="section-number">6</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Confidencialidad</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Nos comprometemos a mantener la <span class="text-yellow-400 font-semibold">confidencialidad</span> de toda la información proporcionada por el cliente. 
                        Esta obligación permanecerá en vigor incluso después de la finalización del proyecto.
                    </p>
                </div>

                <!-- Sección 7 -->
                <div class="section-card">
                    <div class="section-number">7</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Garantía y Soporte</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Proporcionamos una garantía de <span class="text-green-400 font-semibold">90 días</span> para corregir defectos en el software desarrollado, contados a 
                        partir de la entrega final. Esta garantía no cubre modificaciones realizadas por terceros, mal uso del 
                        software o cambios en los requisitos no contemplados en el alcance original.
                    </p>
                </div>

                <!-- Sección 8 -->
                <div class="section-card">
                    <div class="section-number">8</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Limitación de Responsabilidad</h3>
                    <p class="text-gray-300 leading-relaxed">
                        En ningún caso DendrIA será responsable por daños indirectos, consecuentes, incidentales, especiales, 
                        punitivos o ejemplares, incluida la pérdida de beneficios, ingresos, datos o uso comercial, 
                        independientemente de la teoría legal bajo la cual se reclame dicha responsabilidad.
                    </p>
                </div>

                <!-- Sección 9 -->
                <div class="section-card">
                    <div class="section-number">9</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Facturación y Pagos</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Nuestros términos de pago estándar requieren un pago inicial antes de comenzar el trabajo y pagos 
                        posteriores según los hitos acordados. El cronograma de pagos específico se detallará en el acuerdo 
                        del proyecto.
                    </p>
                </div>

                <!-- Sección 10 -->
                <div class="section-card">
                    <div class="section-number">10</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Terminación</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Cualquiera de las partes puede terminar un proyecto con un aviso por escrito de <span class="text-yellow-400 font-semibold">30 días</span>. En caso de 
                        terminación, el cliente deberá pagar por todo el trabajo completado hasta la fecha de terminación.
                    </p>
                </div>

                <!-- Sección 11 -->
                <div class="section-card">
                    <div class="section-number">11</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Modificaciones</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Nos reservamos el derecho de modificar estos términos en cualquier momento. Las modificaciones entrarán 
                        en vigor inmediatamente después de su publicación en nuestro sitio web. Su uso continuado de nuestros 
                        servicios después de tales cambios constituirá su aceptación de los nuevos términos.
                    </p>
                </div>

                <!-- Sección 12 -->
                <div class="section-card">
                    <div class="section-number">12</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Ley Aplicable</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Estos términos se regirán e interpretarán de acuerdo con las leyes de <span class="text-blue-400 font-semibold">Chile</span>, sin tener en cuenta 
                        sus principios de conflicto de leyes.
                    </p>
                </div>

                <!-- Sección 13 -->
                <div class="section-card">
                    <div class="section-number">13</div>
                    <h3 class="text-xl font-bold text-blue-300 mb-3">Contacto</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Si tiene alguna pregunta sobre estos Términos y Condiciones, por favor contáctenos en 
                        <a href="mailto:contacto@dendria.cl" class="text-blue-400 hover:text-blue-300 transition underline">contacto@dendria.cl</a>.
                    </p>
                </div>
            </div>

            <!-- Footer de la página legal -->
            <div class="mt-12 pt-8 border-t border-gray-600 text-center">
                <div class="inline-flex items-center justify-center space-x-4 text-gray-400">
                    <i class="fas fa-shield-alt text-blue-500"></i>
                    <span>Documentos legales actualizados y revisados por profesionales</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection