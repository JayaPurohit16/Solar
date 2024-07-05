<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectGalleryImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    // Project Index Function

    public function index($id)
    {
        try {
            $project = Project::where('id', base64_decode($id))->first();
            $getProjectGalleryImages = ProjectGalleryImage::where('project_id', $project->id)->get();
            return view('frontend.project.index', compact('project', 'getProjectGalleryImages'));
        } catch (Exception $e) {
            Log::error('Project Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
