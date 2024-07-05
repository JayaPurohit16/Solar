<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    // Frontend Index Function

    public function index()
    {
        try {
            $getNews = News::orderBy('id', 'DESC')->take(3)->get();
            $getProducts = Services::orderBy('id', 'DESC')->get();
            return view('frontend.dashboard', compact('getNews', 'getProducts'));
        } catch (Exception $e) {
            Log::error('Frontend Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
