<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    // News Index Function

    public function index()
    {
        try {
            $getNews = News::orderBy('id', 'DESC')->get();
            return view('frontend.news.index', compact('getNews'));
        } catch (Exception $e) {
            Log::error('News Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }

    // News Detail Index Function

    public function detail($id)
    {
        try {
            $newsDetail = News::where('id', base64_decode($id))->first();
            return view('frontend.news.detail', compact('newsDetail'));
        } catch (Exception $e) {
            Log::error('News Detail Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
