<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        return view('projects.index', [

            'projects' => Project::latest()->paginate()
        ]);
    }

   
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request)
    {

        Project::create($request->validated() );

        return redirect()->route('projects.index');
        
    }

    public function edit(Project $project)
    {
         return view('projects.edit', [
            'project' => $project
        ]);
    }
    
}

