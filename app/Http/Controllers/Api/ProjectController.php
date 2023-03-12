<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();

        return response()->json([
            'success' => true,
            'projects'=> $projects,
        ]);
    }

    public function show($slug){
        $project = Project::with('type')->where('slug', $slug)->first();

        if($project){
            return response()->json([
                'success' => true,
                'project'=> $project,
            ]);
        }
        else{
            return response()->json([
                'success' => flase,
                'error'=> 'Nessun progetto trovato',
            ]);
        }
    }

}
