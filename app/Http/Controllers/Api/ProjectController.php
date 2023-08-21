<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    /* public function testApi() {
        return response()->json([
            'message' => 'Hello World!'
        ]);
    } */

    public function projectIndex() {

        $projects = Project::with('type', 'user') -> get();
        return response()->json([
            'projects' => $projects
        ]);
    }
}
