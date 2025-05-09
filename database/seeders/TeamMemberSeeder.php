<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMember::create([
            'name' => 'Alejandro Moreno',
            'position' => 'CEO & Fundador',
            'bio' => 'Con más de 15 años de experiencia en desarrollo de software y soluciones de IA, Alejandro lidera nuestra visión estratégica y dirección técnica.',
            'photo' => null,
            'social_media' => [
                'linkedin' => 'https://linkedin.com',
                'twitter' => 'https://twitter.com',
                'github' => 'https://github.com',
            ],
            'order' => 1,
        ]);

        TeamMember::create([
            'name' => 'Valentina Rojas',
            'position' => 'CTO',
            'bio' => 'Especialista en machine learning y arquitectura de sistemas, Valentina supervisa todas nuestras implementaciones técnicas y estándares de calidad.',
            'photo' => null,
            'social_media' => [
                'linkedin' => 'https://linkedin.com',
                'twitter' => 'https://twitter.com',
                'github' => 'https://github.com',
            ],
            'order' => 2,
        ]);

        TeamMember::create([
            'name' => 'Matías Fuentes',
            'position' => 'COO',
            'bio' => 'Con experiencia en gestión de proyectos y operaciones, Matías asegura que nuestros procesos sean eficientes y que todos los proyectos se entreguen a tiempo.',
            'photo' => null,
            'social_media' => [
                'linkedin' => 'https://linkedin.com',
                'twitter' => 'https://twitter.com',
            ],
            'order' => 3,
        ]);

        TeamMember::create([
            'name' => 'Camila Vega',
            'position' => 'Lead Front-end Developer',
            'bio' => 'Experta en React, Vue y Angular, con un ojo para UI/UX y experiencia en diseño de interfaces accesibles.',
            'photo' => null,
            'social_media' => [
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
            ],
            'order' => 4,
        ]);

        TeamMember::create([
            'name' => 'Daniel Soto',
            'position' => 'Lead Back-end Developer',
            'bio' => 'Especializado en arquitecturas escalables, APIs REST y microservicios utilizando Node.js, Laravel y Python.',
            'photo' => null,
            'social_media' => [
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
            ],
            'order' => 5,
        ]);

        TeamMember::create([
            'name' => 'Lucía Martínez',
            'position' => 'AI/ML Engineer',
            'bio' => 'PhD en Machine Learning, con amplia experiencia en NLP, visión computacional y sistemas de recomendación.',
            'photo' => null,
            'social_media' => [
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
            ],
            'order' => 6,
        ]);

        TeamMember::create([
            'name' => 'Sebastián Torres',
            'position' => 'Mobile Developer',
            'bio' => 'Especialista en desarrollo de aplicaciones nativas e híbridas para iOS y Android, experto en React Native y Flutter.',
            'photo' => null,
            'social_media' => [
                'github' => 'https://github.com',
                'linkedin' => 'https://linkedin.com',
            ],
            'order' => 7,
        ]);

        TeamMember::create([
            'name' => 'Isabel Navarro',
            'position' => 'UI/UX Lead Designer',
            'bio' => 'Con 8 años de experiencia en diseño digital, Isabel lidera nuestro equipo de diseño creando interfaces elegantes y funcionales.',
            'photo' => null,
            'social_media' => [
                'linkedin' => 'https://linkedin.com',
                'twitter' => 'https://twitter.com',
            ],
            'order' => 8,
        ]);
    }
}
