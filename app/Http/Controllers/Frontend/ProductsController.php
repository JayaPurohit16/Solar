<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductsController extends Controller
{
    // Products Index Function

    public function index($id)
    {
        try {
            $product = Services::where('id', base64_decode($id))->first();
            $productTitle = Services::orderBy('id', 'DESC')->get();
            $getQuestion = Questions::orderBy('id', 'DESC')->get();
            return view('frontend.products.index', compact('product', 'productTitle','getQuestion'));
        } catch (Exception $e) {
            Log::error('Products Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
