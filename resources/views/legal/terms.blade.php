@extends('layouts.app')

@section('title', 'Términos y Condiciones - DendrIA')

@section('content')
<div class="container mx-auto px-6 py-16 max-w-4xl">
    <div class="mb-12">
        <h1 class="text-3xl md:text-4xl font-bold mb-6">Términos y Condiciones</h1>
        <p class="text-gray-400">Última actualización: {{ date('d/m/Y') }}</p>
    </div>

    <div class="prose prose-invert prose-lg max-w-none">
        <p>
            Bienvenido a DendrIA. Los siguientes términos y condiciones rigen su acceso y uso de nuestros servicios 
            de desarrollo de software, aplicaciones web, soluciones de IA y servicios relacionados.
        </p>

        <h2>1. Aceptación de los Términos</h2>
        <p>
            Al utilizar nuestros servicios, usted acepta quedar vinculado por estos Términos y Condiciones. 
            Si no está de acuerdo con alguno de estos términos, no podrá utilizar nuestros servicios.
        </p>

        <h2>2. Descripción de Servicios</h2>
        <p>
            DendrIA ofrece servicios de desarrollo de software personalizados, incluyendo pero no limitado a:
        </p>
        <ul>
            <li>Desarrollo de aplicaciones web y móviles</li>
            <li>Implementación de soluciones de inteligencia artificial</li>
            <li>Consultoría tecnológica</li>
            <li>Hosting y mantenimiento de aplicaciones</li>
            <li>Integración de sistemas y APIs</li>
        </ul>

        <h2>3. Propuestas y Cotizaciones</h2>
        <p>
            Todas las propuestas y cotizaciones tienen una validez de 30 días, a menos que se especifique lo contrario. 
            Los precios están sujetos a cambios sin previo aviso antes de la aceptación formal de una propuesta.
        </p>

        <h2>4. Acuerdos de Desarrollo</h2>
        <p>
            Todo proyecto de desarrollo requiere un acuerdo por escrito que detalle el alcance del trabajo, plazos, 
            entregables, costos y otros términos específicos. Este acuerdo, una vez firmado, será considerado un 
            anexo a estos Términos y Condiciones.
        </p>

        <h2>5. Propiedad Intelectual</h2>
        <p>
            Una vez que el cliente haya pagado en su totalidad los servicios contratados, se le otorgará la propiedad 
            del código fuente y otros entregables desarrollados específicamente para el proyecto, salvo que se 
            especifique lo contrario en el acuerdo del proyecto.
        </p>
        <p>
            DendrIA conserva la propiedad de todas las metodologías, herramientas, frameworks, componentes y otros 
            elementos preexistentes utilizados en el desarrollo.
        </p>

        <h2>6. Confidencialidad</h2>
        <p>
            Nos comprometemos a mantener la confidencialidad de toda la información proporcionada por el cliente. 
            Esta obligación permanecerá en vigor incluso después de la finalización del proyecto.
        </p>

        <h2>7. Garantía y Soporte</h2>
        <p>
            Proporcionamos una garantía de 90 días para corregir defectos en el software desarrollado, contados a 
            partir de la entrega final. Esta garantía no cubre modificaciones realizadas por terceros, mal uso del 
            software o cambios en los requisitos no contemplados en el alcance original.
        </p>

        <h2>8. Limitación de Responsabilidad</h2>
        <p>
            En ningún caso DendrIA será responsable por daños indirectos, consecuentes, incidentales, especiales, 
            punitivos o ejemplares, incluida la pérdida de beneficios, ingresos, datos o uso comercial, 
            independientemente de la teoría legal bajo la cual se reclame dicha responsabilidad.
        </p>

        <h2>9. Facturación y Pagos</h2>
        <p>
            Nuestros términos de pago estándar requieren un pago inicial antes de comenzar el trabajo y pagos 
            posteriores según los hitos acordados. El cronograma de pagos específico se detallará en el acuerdo 
            del proyecto.
        </p>

        <h2>10. Terminación</h2>
        <p>
            Cualquiera de las partes puede terminar un proyecto con un aviso por escrito de 30 días. En caso de 
            terminación, el cliente deberá pagar por todo el trabajo completado hasta la fecha de terminación.
        </p>

        <h2>11. Modificaciones</h2>
        <p>
            Nos reservamos el derecho de modificar estos términos en cualquier momento. Las modificaciones entrarán 
            en vigor inmediatamente después de su publicación en nuestro sitio web. Su uso continuado de nuestros 
            servicios después de tales cambios constituirá su aceptación de los nuevos términos.
        </p>

        <h2>12. Ley Aplicable</h2>
        <p>
            Estos términos se regirán e interpretarán de acuerdo con las leyes de Chile, sin tener en cuenta 
            sus principios de conflicto de leyes.
        </p>

        <h2>13. Contacto</h2>
        <p>
            Si tiene alguna pregunta sobre estos Términos y Condiciones, por favor contáctenos en 
            <a href="mailto:legal@dendria.com">legal@dendria.com</a>.
        </p>
    </div>
</div>
@endsection