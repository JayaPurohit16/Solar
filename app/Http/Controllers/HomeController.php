<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    // Admin Dashboard Function

    public function index()
    {
        try {
            $category = Category::count();
            $project = Project::count();
            $services = Services::count();
            return view('admin.dashboard', compact('category', 'project', 'services'));
        } catch (Exception $e) {
            Log::error('Admin Dashboard Error : ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
}
