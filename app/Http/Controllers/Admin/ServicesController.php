<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    // Admin Services Index Page Function

    public function index()
    {
        try {
            return view('admin.services.index');
        } catch (Exception $e) {
            Log::error('Admin Services Index Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Services List Function

    public function list(Request $request)
    {
        try {
            // Page Length
            $pageNumber = ($request->start / $request->length) + 1;
            $pageLength = $request->length;
            $skip       = ($pageNumber - 1) * $pageLength;

            // Page Order
            $orderColumnIndex = $request->order[0]['column'] ?? '0';
            $orderBy = $request->order[0]['dir'] ?? 'desc';


            // Build Query
            // Main
            $query = Services::orderBy('id', 'DESC');

            // Search

            if (!empty($request->input('search')['value'])) {
                $search = $request->input('search')['value'];
                $query->orWhere('title', 'like', "%" . $search . "%");
                $query->orWhere('description', 'like', "%" . $search . "%");
                $query->orWhere('why_us_description', 'like', "%" . $search . "%");
                $query->orWhere('why_us_video_link', 'like', "%" . $search . "%");
            }

            $orderByName = 'id';
            switch ($orderColumnIndex) {
                case '0':
                    $orderByName = 'title';
                    break;
                case '1':
                    $orderByName = 'description';
                    break;
                case '2':
                    $orderByName = 'why_us_description';
                    break;
                case '3':
                    $orderByName = 'why_us_video_link';
                    break;
                case '4':
                    $orderByName = 'image';
                    break;
                default:
                    $orderByName = 'id';
                    break;
            }

            $query = $query->orderBy($orderByName, $orderBy);
            $recordsFiltered = $recordsTotal = $query->count();
            $users = $query->skip($skip)->take($pageLength)->get();

            return response()->json(["draw" => $request->draw, "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $users], 200);
        } catch (Exception $e) {
            Log::error('Admin Services List Error : ' . $e->getMessage());
        }
    }

    // Admin Services Create Page Function

    public function create()
    {
        try {
            return view('admin.services.create');
        } catch (Exception $e) {
            Log::error('Admin Services Create Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Services Store Page Function

    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|sometimes|image|mimes:jpeg,png,jpg,svg',
                'why_us_description' => 'required',
                'why_us_video_link' => 'required|url',
            ]);

            $services = new Services();
            $services->title = $request->title;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('Services/Image', $filename);
                $services->image = $filename;
            }
            $services->description = $request->description;
            $services->why_us_description = $request->why_us_description;
            $services->why_us_video_link = $request->why_us_video_link;
            $services->save();
            return redirect()->route('admin.services.index')->with('success', "Services added successfully!");
        } catch (Exception $e) {
            Log::error('Admin Services Store Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Services Edit Page Function

    public function edit($id)
    {
        try {
            $servicesEdit = Services::where('id', base64_decode($id))->first();
            return view('admin.services.edit', compact('servicesEdit'));
        } catch (Exception $e) {
            Log::error('Admin Services Edit Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Services Update Page Function

    public function update(Request $request, $id)
    {
        try {

            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|sometimes|image|mimes:jpeg,png,jpg,svg',
                'why_us_description' => 'required',
                'why_us_video_link' => 'required|url',
            ]);

            $servicesUpdate = Services::where('id', $id)->first();
            $servicesUpdate->title = $request->title;
            if ($request->hasFile('image')) {

                if (File::exists(public_path('Services/Image/' . $servicesUpdate->image))) {
                    unlink(public_path('Services/Image/' . $servicesUpdate->image));
                }

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('Services/Image', $filename);
                $servicesUpdate->image = $filename;
            }
            $servicesUpdate->description = $request->description;
            $servicesUpdate->why_us_description = $request->why_us_description;
            $servicesUpdate->why_us_video_link = $request->why_us_video_link;
            $servicesUpdate->update();
            return redirect()->route('admin.services.index')->with('success', "Services updated successfully!");
        } catch (Exception $e) {
            Log::error('Admin Services Update Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Services Delete Function

    public function delete(Request $request, $id)
    {
        try {
            $servicesDelete = Services::where('id', base64_decode($request->id))->first();
            if (File::exists(public_path('Services/Image/' . $servicesDelete->image))) {
                unlink(public_path('Services/Image/' . $servicesDelete->image));
            }
            $servicesDelete->delete();
            return redirect()->route('admin.services.index')->with('success', "Services deleted successfully!");
        } catch (Exception $e) {
            Log::error('Admin Services Delete Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }
}
