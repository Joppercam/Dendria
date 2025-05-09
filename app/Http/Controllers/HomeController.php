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

        // Here you would typically send an email
        // For example, using Laravel's Mail facade
        // Mail::to('contacto@dendria.com')->send(new ContactFormMail($request->all()));

        // For now, let's just redirect with a success message
        return redirect()->route('contact')->with('success', 'Gracias por tu mensaje. Te contactaremos a la brevedad.');
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