@extends('layouts.app')

@section('title', 'Política de Privacidad - DendrIA')

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
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-white">Política de Privacidad</h1>
            <p class="text-xl text-blue-100 mb-6">Cómo protegemos y manejamos tu información personal</p>
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
                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-600 rounded-full mb-4">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    En DendrIA, valoramos su privacidad y nos comprometemos a proteger sus datos personales. Esta Política de 
                    Privacidad explica cómo recopilamos, utilizamos y protegemos la información que nos proporciona.
                </p>
            </div>

            <!-- Secciones -->
            <div class="space-y-6">
        <p>
            En DendrIA, valoramos su privacidad y nos comprometemos a proteger sus datos personales. Esta Política de 
            Privacidad explica cómo recopilamos, utilizamos y protegemos la información que nos proporciona cuando 
            utiliza nuestro sitio web y nuestros servicios.
        </p>

        <h2>1. Información que Recopilamos</h2>
        <p>
            Podemos recopilar los siguientes tipos de información:
        </p>
        <ul>
            <li><strong>Información de contacto:</strong> Nombre, dirección de correo electrónico, número de teléfono, dirección postal y otros datos similares.</li>
            <li><strong>Información de la empresa:</strong> Nombre de la empresa, cargo, sector industrial.</li>
            <li><strong>Información del proyecto:</strong> Requisitos, especificaciones, documentación y otros datos relacionados con los proyectos en los que trabajamos.</li>
            <li><strong>Información técnica:</strong> Dirección IP, tipo de navegador, proveedor de servicios de Internet, páginas de referencia/salida, archivos vistos en nuestro sitio, sistema operativo, fecha/hora y datos de navegación.</li>
        </ul>

        <h2>2. Cómo Utilizamos su Información</h2>
        <p>
            Utilizamos la información recopilada para:
        </p>
        <ul>
            <li>Proporcionar, operar y mantener nuestros servicios</li>
            <li>Mejorar, personalizar y ampliar nuestros servicios</li>
            <li>Entender y analizar cómo utiliza nuestros servicios</li>
            <li>Desarrollar nuevos productos, servicios, características y funcionalidad</li>
            <li>Comunicarnos con usted para proporcionar actualizaciones, información sobre seguridad, y servicios relacionados</li>
            <li>Prevenir y abordar problemas técnicos</li>
            <li>Cumplir con cualquier obligación legal</li>
        </ul>

        <h2>3. Almacenamiento y Seguridad de Datos</h2>
        <p>
            Implementamos medidas de seguridad técnicas, administrativas y físicas diseñadas para proteger sus datos 
            personales contra accesos no autorizados, pérdida, alteración o destrucción. Sin embargo, ningún método de 
            transmisión por Internet o método de almacenamiento electrónico es 100% seguro.
        </p>

        <h2>4. Compartir Información</h2>
        <p>
            No vendemos, comercializamos ni transferimos sus datos personales a terceros sin su consentimiento, 
            excepto cuando sea necesario para proporcionar nuestros servicios (como proveedores de hosting, 
            procesadores de pagos, etc.) o cuando estemos legalmente obligados a hacerlo.
        </p>

        <h2>5. Proveedores de Servicios</h2>
        <p>
            Podemos emplear compañías e individuos terceros por las siguientes razones:
        </p>
        <ul>
            <li>Facilitar nuestro Servicio</li>
            <li>Proporcionar el Servicio en nuestro nombre</li>
            <li>Realizar servicios relacionados con el Servicio</li>
            <li>Ayudarnos a analizar cómo se utiliza nuestro Servicio</li>
        </ul>
        <p>
            Estos terceros tienen acceso a sus datos personales solo para realizar estas tareas en nuestro nombre y están 
            obligados a no divulgarlos ni utilizarlos para ningún otro fin.
        </p>

        <h2>6. Cookies y Tecnologías de Seguimiento</h2>
        <p>
            Utilizamos cookies y tecnologías de seguimiento similares para rastrear la actividad en nuestro sitio web 
            y mantener cierta información. Las cookies son archivos con pequeñas cantidades de datos que pueden incluir 
            un identificador único anónimo.
        </p>
        <p>
            Puede instruir a su navegador para que rechace todas las cookies o para que le avise cuando se envía una cookie. 
            Sin embargo, si no acepta cookies, es posible que no pueda utilizar algunas partes de nuestro servicio.
        </p>

        <h2>7. Enlaces a Otros Sitios</h2>
        <p>
            Nuestro servicio puede contener enlaces a otros sitios que no son operados por nosotros. Si hace clic en un 
            enlace de terceros, será dirigido al sitio de ese tercero. Le recomendamos encarecidamente que revise la 
            Política de Privacidad de cada sitio que visite.
        </p>
        <p>
            No tenemos control ni asumimos ninguna responsabilidad por el contenido, las políticas de privacidad o las 
            prácticas de sitios o servicios de terceros.
        </p>

        <h2>8. Derechos de Privacidad</h2>
        <p>
            Dependiendo de su ubicación, puede tener ciertos derechos relacionados con sus datos personales, incluyendo:
        </p>
        <ul>
            <li>El derecho a acceder a los datos personales que tenemos sobre usted</li>
            <li>El derecho a solicitar la rectificación o eliminación de sus datos personales</li>
            <li>El derecho a solicitar que restrinjamos el procesamiento de sus datos personales</li>
            <li>El derecho a la portabilidad de datos</li>
            <li>El derecho a oponerse al procesamiento de sus datos personales</li>
        </ul>
        <p>
            Para ejercer estos derechos, contáctenos a través de la información proporcionada al final de esta política.
        </p>

        <h2>9. Retención de Datos</h2>
        <p>
            Retendremos sus datos personales solo durante el tiempo necesario para los fines establecidos en esta 
            Política de Privacidad. Mantendremos y utilizaremos su información en la medida necesaria para cumplir 
            con nuestras obligaciones legales, resolver disputas y hacer cumplir nuestros acuerdos.
        </p>

        <h2>10. Cambios a Esta Política de Privacidad</h2>
        <p>
            Podemos actualizar nuestra Política de Privacidad de vez en cuando. Le notificaremos cualquier cambio 
            publicando la nueva Política de Privacidad en esta página.
        </p>
        <p>
            Se le aconseja revisar esta Política de Privacidad periódicamente para cualquier cambio. Los cambios a 
            esta Política de Privacidad son efectivos cuando se publican en esta página.
        </p>

        <h2>11. Contacto</h2>
        <p>
            Si tiene alguna pregunta sobre esta Política de Privacidad, por favor contáctenos:
        </p>
        <ul>
            <li>Por correo electrónico: <a href="mailto:privacidad@dendria.com">privacidad@dendria.com</a></li>
            <li>Por teléfono: (+56) 2 2123 4567</li>
            <li>Por correo postal: Av. Providencia 1234, Of. 567, Providencia, Santiago, Chile</li>
        </ul>
    </div>
</div>
@endsection