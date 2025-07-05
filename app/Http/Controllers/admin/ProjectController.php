<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects', ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();
        $newProject->name = $data['name'];
        $newProject->description = $data['description'];
        $newProject->url = $data['url'];
        $newProject->save();

        // Attach categories to the project
        if (isset($data['category_ids'])) {
            $newProject->categories()->attach($data['category_ids']);
        }

        return redirect()->route('projects.show', $newProject->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $categories = Category::all();

        return view('projects.show', compact('project', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();

        return view('projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->name = $data['name'];
        $project->description = $data['description'];
        $project->url = $data['url'];
        $project->update();

        // Sync categories (this will remove old associations and add new ones)
        if (isset($data['category_ids'])) {
            $project->categories()->sync($data['category_ids']);
        }

        return redirect()->route('projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
