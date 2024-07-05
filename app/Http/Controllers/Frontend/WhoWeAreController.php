<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WhoWeAreController extends Controller
{
    // About the Company Index Function

    public function aboutTheCompany()
    {
        try {
            return view('frontend.who_we_are.about_the_company');
        } catch (Exception $e) {
            Log::error('About the Company Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }

    // Leadership Index Function

    public function leadership()
    {
        try {
            return view('frontend.who_we_are.leadership');
        } catch (Exception $e) {
            Log::error('Leadership Index Page Error : ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
