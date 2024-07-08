<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class CmsController extends Controller
{
    // Admin CMS Index Page Function

    public function index()
    {
        try {
            $cms = Cms::first();
            $countryCode = Country::orderBy('id', 'DESC')->get();
            return view('admin.cms.index', compact('cms', 'countryCode'));
        } catch (Exception $e) {
            Log::error('Admin CMS Index Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin CMS Store  Function

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'support_email' => 'required',
                'customer_support' => 'required',
                'our_location' => 'required',
                'facebook_link' => 'required|url',
                'twitter_link' => 'required|url',
                'linkedin_link' => 'required|url',
                'instagram_link' => 'required|url',
                'logo' => 'required|sometimes|image|mimes:jpeg,png,jpg,svg',
            ]);

            $cms = Cms::first();
            if (empty($cms)) {
                $cms = new Cms();
            }
            $cms->support_email = $request->support_email;
            $cms->country_code = $request->country_code;
            $cms->customer_support = $request->customer_support;
            $cms->our_location = $request->our_location;
            $cms->facebook_link = $request->facebook_link;
            $cms->twitter_link = $request->twitter_link;
            $cms->linkedin_link = $request->linkedin_link;
            $cms->instagram_link = $request->instagram_link;

            if ($request->hasFile('logo')) {
                if ($cms->logo != null) {
                    if (File::exists(public_path('public/Cms/Logo/' . $cms->logo))) {
                        unlink(public_path('public/Cms/Logo/' . $cms->logo));
                    }
                }
                $file = $request->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('public/Cms/Logo', $filename);
                $cms->logo = $filename;
            }

            if ($request->hasFile('footer_logo')) {
                if ($cms->footer_logo != null) {
                    if (File::exists(public_path('public/Cms/FooterLogo/' . $cms->footer_logo))) {
                        unlink(public_path('public/Cms/FooterLogo/' . $cms->footer_logo));
                    }
                }
                $file = $request->file('footer_logo');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('public/Cms/FooterLogo', $filename);
                $cms->footer_logo = $filename;
            }
            $cms->save();
            return redirect()->back()->with('success', "Cms added successfully!");
        } catch (Exception $e) {
            Log::error('Admin CMS Store Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }
}
