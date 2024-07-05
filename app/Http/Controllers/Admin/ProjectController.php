<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectGalleryImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    // Admin Project Index Page Function

    public function index()
    {
        try {
            return view('admin.project.index');
        } catch (Exception $e) {
            Log::error('Admin Project Index Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Project List Page Function

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
            $query = Project::orderBy('id', 'DESC');

            if (!empty($request->input('search')['value'])) {
                $search = $request->input('search')['value'];
                $query->whereHas('getCategory', function ($query) use ($search) {
                    $query->where('title', 'Like', '%' . $search . '%');
                });
                $query->orWhere('title', 'like', "%" . $search . "%");
                $query->orWhere('project_date', 'like', "%" . $search . "%");
                $query->orWhere('energy_generation', 'like', "%" . $search . "%");
                $query->orWhere('client_company', 'like', "%" . $search . "%");
                $query->orWhere('location', 'like', "%" . $search . "%");
                $query->orWhere('description', 'like', "%" . $search . "%");
            }

            $orderByName = 'id';
            switch ($orderColumnIndex) {
                case '0':
                    $orderByName = 'title';
                    break;
                case '1':
                    $orderByName = 'project_date';
                    break;
                case '2':
                    $orderByName = 'energy_generation';
                    break;
                case '3':
                    $orderByName = 'category';
                    break;
                case '4':
                    $orderByName = 'client_company';
                    break;
                case '5':
                    $orderByName = 'location';
                    break;
                case '6':
                    $orderByName = 'description';
                    break;
                default:
                    $orderByName = 'id';
                    break;
            }

            $query = $query->orderBy($orderByName, $orderBy);
            $recordsFiltered = $recordsTotal = $query->count();
            $users = $query->skip($skip)->take($pageLength)->with('getCategory')->get();

            return response()->json(["draw" => $request->draw, "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $users], 200);
        } catch (Exception $e) {
            Log::error('Admin Project Index Page Error : ' . $e->getMessage());
        }
    }


    // Admin Project Create Page Function

    public function create()
    {
        try {
            $getCategory = Category::orderBy('id', 'DESC')->get();
            return view('admin.project.create', compact('getCategory'));
        } catch (Exception $e) {
            Log::error('Admin Project Create Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Project Edit Page Function

    public function edit($id)
    {
        try {
            $getCategory = Category::orderBy('id', 'DESC')->get();
            $projectEdit = Project::where('id', base64_decode($id))->first();
            $projectGalleryImages = ProjectGalleryImage::where('project_id', $projectEdit->id)->get();
            return view('admin.project.edit', compact('projectEdit', 'projectGalleryImages', 'getCategory'));
        } catch (Exception $e) {
            Log::error('Admin Project Edit Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Project Store Page Function

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg',
                'gallery_images.*' => 'sometimes|image|mimes:jpeg,png,jpg,svg'
            ]);

            $project = new Project();
            $project->title = $request->title;
            $project->project_date = $request->project_date;
            $project->energy_generation = $request->energy_generation;
            $project->category = $request->category;
            $project->client_company = $request->client_company;
            $project->location = $request->location;
            $project->description = $request->description;
            $project->scope_of_project = $request->scope_of_project;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('Project/Image', $filename);
                $project->image = $filename;
            }
            $project->save();

            if ($request->hasFile('gallery_images')) {
                foreach ($request->file('gallery_images') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = uniqid() . '.' . $extension;
                    $file->move('Project/GalleryImage', $filename);

                    $projectGalleryImages = new ProjectGalleryImage();
                    $projectGalleryImages->project_id = $project->id;
                    $projectGalleryImages->gallery_images = $filename;
                    $projectGalleryImages->save();
                }
            }

            return redirect()->route('admin.project.index')->with('success', "Project added successfully!");
        } catch (Exception $e) {
            Log::error('Admin Project Store Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Project Update Function

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,svg',
                'gallery_images.*' => 'sometimes|image|mimes:jpeg,png,jpg,svg'
            ]);

            $projectUpdate = Project::where('id', $id)->first();
            $projectUpdate->title = $request->title;
            $projectUpdate->project_date = $request->project_date;
            $projectUpdate->energy_generation = $request->energy_generation;
            $projectUpdate->category = $request->category;
            $projectUpdate->client_company = $request->client_company;
            $projectUpdate->location = $request->location;
            $projectUpdate->description = $request->description;
            $projectUpdate->scope_of_project = $request->scope_of_project;


            if ($request->hasFile('image')) {
                if (File::exists(public_path('Project/Image/' . $projectUpdate->image))) {
                    unlink(public_path('Project/Image/' . $projectUpdate->image));
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('Project/Image', $filename);
                $projectUpdate->image = $filename;
            }
            $projectUpdate->update();

            if ($request->hasFile('gallery_images')) {
                foreach ($request->file('gallery_images') as $file) {
                    $extension = $file->getClientOriginalExtension();
                    $filename = uniqid() . '.' . $extension;
                    $file->move('Project/GalleryImage', $filename);

                    $projectGalleryImages = new ProjectGalleryImage();
                    $projectGalleryImages->project_id = $projectUpdate->id;
                    $projectGalleryImages->gallery_images = $filename;
                    $projectGalleryImages->save();
                }
            }

            return redirect()->route('admin.project.index')->with('success', "Project updated successfully!");
        } catch (Exception $e) {
            Log::error('Admin Project Update Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }


    // Admin Project Delete Page Function

    public function delete(Request $request, $id)
    {
        try {
            $projectDelete = Project::where('id', base64_decode($request->id))->first();

            if (File::exists(public_path('Project/Image/' . $projectDelete->image))) {
                unlink(public_path('Project/Image/' . $projectDelete->image));
            }

            $projectGalleryImagesDelete = ProjectGalleryImage::where('project_id', $projectDelete->id)->get();
            foreach ($projectGalleryImagesDelete as $delete) {
                if (File::exists(public_path('Project/GalleryImage/' . $delete->gallery_images))) {
                    unlink(public_path('Project/GalleryImage/' . $delete->gallery_images));
                }
                $delete->delete();
            }

            $projectDelete->delete();

            return redirect()->route('admin.project.index')->with('success', "Project deleted successfully!");
        } catch (Exception $e) {
            Log::error('Admin Project Delete Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }


    // Admin Project Gallery Images Delete Function

    public function galleryImagesDelete(Request $request, $id)
    {
        try {
            $galleryImagesDelete = ProjectGalleryImage::findOrFail($id);
            if (File::exists(public_path('Project/GalleryImage/' . $galleryImagesDelete->gallery_images))) {
                unlink(public_path('Project/GalleryImage/' . $galleryImagesDelete->gallery_images));
            }
            $galleryImagesDelete->delete();

            return response()->json(['success' => true, 'message' => 'Gallery Image deleted successfully']);
        } catch (Exception $e) {
            Log::error('Admin Project Gallery Images Delete Error : ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Failed to delete gallery image']);
        }
    }
}
