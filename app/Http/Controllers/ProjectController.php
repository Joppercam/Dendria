<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display the project start form.
     */
    public function showStartForm()
    {
        return view('projects.start');
    }

    /**
     * Handle the project request submission.
     */
    public function submitProjectRequest(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'project_type' => 'required|string|in:web,mobile,ai,consulting,other',
            'budget_range' => 'required|string|in:less_than_5k,5k_15k,15k_30k,30k_plus,not_sure',
            'timeline' => 'required|string|in:urgent,1_3_months,3_6_months,6_plus_months,flexible',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'references' => 'nullable|string',
        ]);

        // Store the project request in the database
        $projectRequest = ProjectRequest::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'company' => $validated['company'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'project_type' => $validated['project_type'],
            'budget_range' => $validated['budget_range'],
            'timeline' => $validated['timeline'],
            'description' => $validated['description'],
            'requirements' => $validated['requirements'] ?? null,
            'references' => $validated['references'] ?? null,
            'status' => 'pending',
        ]);

        // Also create a contact record for this inquiry
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => 'Solicitud de Proyecto: ' . $this->getProjectTypeName($validated['project_type']),
            'message' => 'Nueva solicitud de proyecto enviada a través del formulario de inicio de proyecto. ID de Solicitud: ' . $projectRequest->id,
            'is_read' => false,
        ]);

        // Send notification email to admin (commented for now)
        // Mail::to('contacto@dendria.com')->send(new NewProjectRequest($projectRequest));

        return redirect()->route('project.thanks');
    }

    /**
     * Display the thank you page after project submission.
     */
    public function showThanksPage()
    {
        return view('projects.thanks');
    }

    /**
     * Get the human-readable project type name.
     */
    private function getProjectTypeName($type)
    {
        $types = [
            'web' => 'Desarrollo Web',
            'mobile' => 'Aplicación Móvil',
            'ai' => 'Solución de IA',
            'consulting' => 'Consultoría Tecnológica',
            'other' => 'Otro',
        ];

        return $types[$type] ?? 'Desconocido';
    }
}