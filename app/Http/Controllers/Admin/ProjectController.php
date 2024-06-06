<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('technologies')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $technologies = Technology::all();
        return view('admin.projects.create', compact('technologies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $form_data = $request->all();
        $newProject = Project::create($form_data);

        if ($request->has('technologies')) {
            $newProject->technologies()->sync($request->input('technologies'));
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'technologies'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $form_data = $request->all();
        $project->update($form_data);

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->input('technologies'));
        }

        return redirect()->route('admin.projects.show', $project->id);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', $project->name . ' è stato eliminato');
    }
    
}
