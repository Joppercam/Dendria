<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'company',
        'phone',
        'project_type',
        'budget_range',
        'timeline',
        'description',
        'requirements',
        'references',
        'status',
    ];

    /**
     * Get the human-readable project type.
     */
    public function getProjectTypeNameAttribute()
    {
        $types = [
            'web' => 'Desarrollo Web',
            'mobile' => 'Aplicación Móvil',
            'ai' => 'Solución de IA',
            'consulting' => 'Consultoría Tecnológica',
            'other' => 'Otro',
        ];

        return $types[$this->project_type] ?? 'Desconocido';
    }

    /**
     * Get the human-readable budget range.
     */
    public function getBudgetRangeNameAttribute()
    {
        $ranges = [
            'less_than_5k' => 'Menos de $5,000 USD',
            '5k_15k' => '$5,000 - $15,000 USD',
            '15k_30k' => '$15,000 - $30,000 USD',
            '30k_plus' => 'Más de $30,000 USD',
            'not_sure' => 'No estoy seguro',
        ];

        return $ranges[$this->budget_range] ?? 'Desconocido';
    }

    /**
     * Get the human-readable timeline.
     */
    public function getTimelineNameAttribute()
    {
        $timelines = [
            'urgent' => 'Urgente (menos de 1 mes)',
            '1_3_months' => '1-3 meses',
            '3_6_months' => '3-6 meses',
            '6_plus_months' => 'Más de 6 meses',
            'flexible' => 'Flexible',
        ];

        return $timelines[$this->timeline] ?? 'Desconocido';
    }
}