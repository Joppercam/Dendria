<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Project;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function services()
    {
        return view('services');
    }

    public function technologies()
    {
        return view('technologies');
    }

    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(9);
        return view('projects', compact('projects'));
    }

    public function team()
    {
        $team = TeamMember::orderBy('order')->get();
        return view('team', compact('team'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function testimonials()
    {
        $testimonials = Testimonial::all();
        $featuredTestimonials = Testimonial::where('featured', true)->get();
        return view('testimonials', compact('testimonials', 'featuredTestimonials'));
    }

    public function terms()
    {
        return view('legal.terms');
    }

    public function privacy()
    {
        return view('legal.privacy');
    }

    public function cookies()
    {
        return view('legal.cookies');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Enviar email al equipo de DendrIA
            \Mail::to('contacto@dendria.cl')->send(new \App\Mail\ContactFormMail($request->all()));
            
            // Guardar en base de datos para backup
            \App\Models\Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);

            return redirect()->route('contact')->with('success', 'Gracias por tu mensaje. Te contactaremos a la brevedad.');
            
        } catch (\Exception $e) {
            // Si falla el envío de email, al menos guardar en BD
            try {
                \App\Models\Contact::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                ]);
                
                \Log::error('Error enviando email de contacto: ' . $e->getMessage());
                
                return redirect()->route('contact')->with('success', 'Gracias por tu mensaje. Te contactaremos a la brevedad.');
                
            } catch (\Exception $dbError) {
                \Log::error('Error guardando contacto: ' . $dbError->getMessage());
                
                return redirect()->route('contact')->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, intenta nuevamente.');
            }
        }
    }

    public function showProject(Project $project)
    {
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
            
        return view('projects.show', compact('project', 'relatedProjects'));
    }

    public function blog()
    {
        $posts = BlogPost::published()->orderBy('published_at', 'desc')->paginate(9);
        return view('blog.index', compact('posts'));
    }


    public function showPost(BlogPost $post)
    {
        if (!$post->published_at || $post->published_at > now()) {
            abort(404);
        }
        
        $relatedPosts = BlogPost::published()
            ->where('id', '!=', $post->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
            
        return view('blog.show', compact('post', 'relatedPosts'));
    }

    public function products()
    {
        return view('products');
    }

    public function caseStudies()
    {
        return view('case-studies');
    }
}