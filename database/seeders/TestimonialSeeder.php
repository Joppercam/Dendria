<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'client_name' => 'Roberto González',
            'client_position' => 'CEO',
            'company' => 'InsightMind',
            'content' => 'La implementación del sistema de análisis predictivo desarrollado por DendrIA transformó por completo nuestra capacidad para entender el comportamiento de nuestros clientes. Desde que lanzamos la plataforma, hemos visto un aumento del 45% en la retención de clientes y un 32% en las ventas cruzadas.',
            'avatar' => null,
            'rating' => 5,
            'featured' => true,
        ]);

        Testimonial::create([
            'client_name' => 'María Jiménez',
            'client_position' => 'COO',
            'company' => 'PymeCommerce',
            'content' => 'Después de trabajar con varios proveedores de tecnología, finalmente encontramos en DendrIA un socio que realmente entiende las necesidades de las pequeñas y medianas empresas. Su plataforma de comercio electrónico con IA integrada nos permitió competir con grandes marcas, ofreciendo una experiencia personalizada a cada cliente.',
            'avatar' => null,
            'rating' => 5,
            'featured' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Carlos Vargas',
            'client_position' => 'Director de Atención al Cliente',
            'company' => 'TechSupport Inc.',
            'content' => 'El chatbot impulsado por IA que implementaron en nuestro sitio ha reducido la carga de nuestro equipo de soporte en un 65%, mientras mejora la satisfacción del cliente.',
            'avatar' => null,
            'rating' => 5,
            'featured' => false,
        ]);

        Testimonial::create([
            'client_name' => 'Ana Muñoz',
            'client_position' => 'Gerente de Marketing',
            'company' => 'Retail Solutions',
            'content' => 'La aplicación móvil desarrollada por DendrIA no solo mejoró nuestra presencia digital, sino que también aumentó nuestras ventas en un 40% en el primer trimestre desde su lanzamiento.',
            'avatar' => null,
            'rating' => 5,
            'featured' => false,
        ]);

        Testimonial::create([
            'client_name' => 'Fernando Rivas',
            'client_position' => 'CFO',
            'company' => 'Financial Innovation Group',
            'content' => 'Lo que más valoramos de DendrIA es su enfoque en entender nuestro negocio antes de proponer soluciones tecnológicas. No venden tecnología por vender, sino que aportan valor real.',
            'avatar' => null,
            'rating' => 4,
            'featured' => false,
        ]);

        Testimonial::create([
            'client_name' => 'Lucía Morales',
            'client_position' => 'Directora de Innovación',
            'company' => 'DataCorp',
            'content' => 'El sistema de análisis de datos que implementaron nos permitió identificar patrones que no conocíamos en el comportamiento de nuestros clientes, lo que nos llevó a rediseñar nuestra estrategia comercial con excelentes resultados.',
            'avatar' => null,
            'rating' => 5,
            'featured' => false,
        ]);

        Testimonial::create([
            'client_name' => 'Javier Ortiz',
            'client_position' => 'CTO',
            'company' => 'HealthTech Solutions',
            'content' => 'Trabajar con DendrIA fue una experiencia muy positiva. Su equipo es altamente profesional y entregarón el proyecto a tiempo y dentro del presupuesto, algo poco común en el desarrollo de software.',
            'avatar' => null,
            'rating' => 4,
            'featured' => false,
        ]);

        Testimonial::create([
            'client_name' => 'Isabel Torres',
            'client_position' => 'Directora de Educación Digital',
            'company' => 'Learning Plus',
            'content' => 'La plataforma de e-learning con IA adaptativa que desarrollaron para nosotros ha revolucionado nuestra oferta educativa, permitiéndonos ofrecer cursos personalizados que se adaptan al ritmo de aprendizaje de cada estudiante.',
            'avatar' => null,
            'rating' => 5,
            'featured' => false,
        ]);
    }
}
