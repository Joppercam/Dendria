<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogPost;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $contactsCount = Contact::count();
        $projectsCount = Project::count();
        $testimonialsCount = Testimonial::count();
        $teamCount = TeamMember::count();
        
        return view('admin.dashboard', compact('contactsCount', 'projectsCount', 'testimonialsCount', 'teamCount'));
    }
    
    public function contacts()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }
    
    // Projects methods
    public function projects()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }
    
    public function createProject()
    {
        return view('admin.projects.create');
    }
    
    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'technologies' => 'nullable|array',
            'featured' => 'boolean',
        ]);
        
        $data = $request->except('image');
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }
        
        Project::create($data);
        
        return redirect()->route('admin.projects')->with('success', 'Proyecto creado exitosamente.');
    }
    
    public function editProject(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }
    
    public function updateProject(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'technologies' => 'nullable|array',
            'featured' => 'boolean',
        ]);
        
        $data = $request->except('image');
        
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }
        
        $project->update($data);
        
        return redirect()->route('admin.projects')->with('success', 'Proyecto actualizado exitosamente.');
    }
    
    public function destroyProject(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects')->with('success', 'Proyecto eliminado exitosamente.');
    }
    
    // Testimonials methods
    public function testimonials()
    {
        $testimonials = Testimonial::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }
    
    public function createTestimonial()
    {
        return view('admin.testimonials.create');
    }
    
    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'featured' => 'boolean',
        ]);
        
        $data = $request->except('avatar');
        
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('testimonials', 'public');
            $data['avatar'] = $path;
        }
        
        Testimonial::create($data);
        
        return redirect()->route('admin.testimonials')->with('success', 'Testimonio creado exitosamente.');
    }
    
    public function editTestimonial(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    
    public function updateTestimonial(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'content' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'featured' => 'boolean',
        ]);
        
        $data = $request->except('avatar');
        
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($testimonial->avatar) {
                Storage::disk('public')->delete($testimonial->avatar);
            }
            
            $path = $request->file('avatar')->store('testimonials', 'public');
            $data['avatar'] = $path;
        }
        
        $testimonial->update($data);
        
        return redirect()->route('admin.testimonials')->with('success', 'Testimonio actualizado exitosamente.');
    }
    
    public function destroyTestimonial(Testimonial $testimonial)
    {
        if ($testimonial->avatar) {
            Storage::disk('public')->delete($testimonial->avatar);
        }
        
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials')->with('success', 'Testimonio eliminado exitosamente.');
    }
    
    // Team members methods
    public function team()
    {
        $team = TeamMember::orderBy('order')->paginate(10);
        return view('admin.team.index', compact('team'));
    }
    
    public function createTeamMember()
    {
        return view('admin.team.create');
    }
    
    public function storeTeamMember(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_media' => 'nullable|array',
            'order' => 'integer|min:0',
        ]);
        
        $data = $request->except('photo');
        
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('team', 'public');
            $data['photo'] = $path;
        }
        
        TeamMember::create($data);
        
        return redirect()->route('admin.team')->with('success', 'Miembro del equipo creado exitosamente.');
    }
    
    public function editTeamMember(TeamMember $teamMember)
    {
        return view('admin.team.edit', compact('teamMember'));
    }
    
    public function updateTeamMember(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_media' => 'nullable|array',
            'order' => 'integer|min:0',
        ]);
        
        $data = $request->except('photo');
        
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($teamMember->photo) {
                Storage::disk('public')->delete($teamMember->photo);
            }
            
            $path = $request->file('photo')->store('team', 'public');
            $data['photo'] = $path;
        }
        
        $teamMember->update($data);
        
        return redirect()->route('admin.team')->with('success', 'Miembro del equipo actualizado exitosamente.');
    }
    
    public function destroyTeamMember(TeamMember $teamMember)
    {
        if ($teamMember->photo) {
            Storage::disk('public')->delete($teamMember->photo);
        }
        
        $teamMember->delete();
        
        return redirect()->route('admin.team')->with('success', 'Miembro del equipo eliminado exitosamente.');
    }


    // Blog methods
    public function blog()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blog.index', compact('posts'));
    }

    public function createBlogPost()
    {
        return view('admin.blog.create');
    }

    public function storeBlogPost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
        ]);
        
        $data = $request->except('featured_image');
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = auth()->id();
        
        if ($request->hasFile('featured_image')) {
            $path = $request->file('featured_image')->store('blog', 'public');
            $data['featured_image'] = $path;
        }
        
        BlogPost::create($data);
        
        return redirect()->route('admin.blog')->with('success', 'Artículo creado exitosamente.');
    }

    public function editBlogPost(BlogPost $blogPost)
    {
        return view('admin.blog.edit', compact('blogPost'));
    }

    public function updateBlogPost(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'published_at' => 'nullable|date',
        ]);
        
        $data = $request->except('featured_image');
        
        if ($request->title !== $blogPost->title) {
            $data['slug'] = Str::slug($request->title);
        }
        
        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($blogPost->featured_image) {
                Storage::disk('public')->delete($blogPost->featured_image);
            }
            
            $path = $request->file('featured_image')->store('blog', 'public');
            $data['featured_image'] = $path;
        }
        
        $blogPost->update($data);
        
        return redirect()->route('admin.blog')->with('success', 'Artículo actualizado exitosamente.');
    }

    public function destroyBlogPost(BlogPost $blogPost)
    {
        if ($blogPost->featured_image) {
            Storage::disk('public')->delete($blogPost->featured_image);
        }
        
        $blogPost->delete();
        
        return redirect()->route('admin.blog')->with('success', 'Artículo eliminado exitosamente.');
    }
}