<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $projects = \App\Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $project = new \App\Project();

        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        
        return redirect('/projects');
    }

    public function details($id) {
        $project = \App\Project::where('id', $id)->first();
        return view('projects.details', ['project' => $project]);
    }

    public function update($id) {
        $project = \App\Project::where('id', $id)->first();
        return view('projects.update', ['project' => $project]);
    }

    public function edit($id) {
        $project = \App\Project::find($id);

        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        $url = '/projects/'.$id;
        return redirect($url);
    } 

    public function delete($id) {
        $project = \App\Project::find($id);
        $project->delete();

        return redirect('/projects');
    }
}
