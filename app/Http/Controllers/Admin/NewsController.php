<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    // Admin News Index Page Function

    public function index()
    {
        try {
            return view('admin.news.index');
        } catch (Exception $e) {
            Log::error('Admin News Index Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }


    // Admin News List Function

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
            $query = News::orderBy('id', 'DESC');

            // Search

            if (!empty($request->input('search')['value'])) {
                $search = $request->input('search')['value'];
                $query->orWhere('title', 'like', "%" . $search . "%");
                $query->orWhere('date', 'like', "%" . $search . "%");
                $query->orWhere('description', 'like', "%" . $search . "%");
            }

            $orderByName = 'id';
            switch ($orderColumnIndex) {
                case '0':
                    $orderByName = 'title';
                    break;
                case '1':
                    $orderByName = 'date';
                    break;
                case '2':
                    $orderByName = 'description';
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
            Log::error('Admin News List Error : ' . $e->getMessage());
        }
    }

    // Admin News Create Page Function

    public function create()
    {
        try {
            return view('admin.news.create');
        } catch (Exception $e) {
            Log::error('Admin News Create Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }


    // Admin News Store Page Function

    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|sometimes|image|mimes:jpeg,png,jpg,svg',
                'date' => 'required',
            ]);

            $news = new News();
            $news->title = $request->title;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('public/News/Image', $filename);
                $news->image = $filename;
            }
            $news->description = $request->description;
            $news->date = $request->date;
            $news->save();
            return redirect()->route('admin.news.index')->with('success', "News added successfully!");
        } catch (Exception $e) {
            Log::error('Admin News Store Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }


    // Admin News Edit Page Function

    public function edit($id)
    {
        try {
            $newsEdit = News::where('id', base64_decode($id))->first();
            return view('admin.news.edit', compact('newsEdit'));
        } catch (Exception $e) {
            Log::error('Admin News Edit Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin News Update Page Function

    public function update(Request $request, $id)
    {
        try {

            $validatedData = $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|sometimes|image|mimes:jpeg,png,jpg,svg',
                'date' => 'required',
            ]);

            $newsUpdate = News::where('id', $id)->first();
            $newsUpdate->title = $request->title;
            if ($request->hasFile('image')) {
                if (File::exists(public_path('public/News/Image/' . $newsUpdate->image))) {
                    unlink(public_path('public/News/Image/' . $newsUpdate->image));
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $file->move('public/News/Image', $filename);
                $newsUpdate->image = $filename;
            }
            $newsUpdate->description = $request->description;
            $newsUpdate->date = $request->date;
            $newsUpdate->update();
            return redirect()->route('admin.news.index')->with('success', "News updated successfully!");
        } catch (Exception $e) {
            Log::error('Admin News Update Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin News Delete Function

    public function delete(Request $request, $id)
    {
        try {
            $newsDelete = News::where('id', base64_decode($request->id))->first();
            if (File::exists(public_path('public/News/Image/' . $newsDelete->image))) {
                unlink(public_path('public/News/Image/' . $newsDelete->image));
            }
            $newsDelete->delete();
            return redirect()->route('admin.news.index')->with('success', "News deleted successfully!");
        } catch (Exception $e) {
            Log::error('Admin News Delete Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }
}
