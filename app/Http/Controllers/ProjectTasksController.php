<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $project->addTask(
            request()->validate(['description' => 'required'])
        );

        return back();
    }
}
