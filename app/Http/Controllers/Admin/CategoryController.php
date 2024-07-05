<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    // Admin Category Index Page Function

    public function index()
    {
        try {
            return view('admin.category.index');
        } catch (Exception $e) {
            Log::error('Admin Category Index Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Category List Function

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
            $query = Category::orderBy('id', 'DESC');

            if (!empty($request->input('search')['value'])) {
                $search = $request->input('search')['value'];
                $query->where('title', 'like', '%' . $search . '%');
            }

            $orderByName = 'id';
            switch ($orderColumnIndex) {
                case '0':
                    $orderByName = 'title';
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
            Log::error('Admin Category List  Error : ' . $e->getMessage());
        }
    }

    // Admin Category Create Page Function
    public function create()
    {
        try {
            return view('admin.category.create');
        } catch (Exception $e) {
            Log::error('Admin Category Create Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Category Store Function

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
            ]);

            $category = new Category();
            $category->title = $request->title;
            $category->save();
            return redirect()->route('admin.category.index')->with('success', "Category added successfully!");
        } catch (Exception $e) {
            Log::error('Admin Category Store Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Category Edit Page Function
    public function edit($id)
    {
        try {
            $editCategory = Category::where('id', base64_decode($id))->first();
            return view('admin.category.edit', compact('editCategory'));
        } catch (Exception $e) {
            Log::error('Admin Category Edit Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Category Update Function

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
            ]);

            $categoryUpdate = Category::where('id', $id)->first();
            $categoryUpdate->title = $request->title;
            $categoryUpdate->update();
            return redirect()->route('admin.category.index')->with('success', "Category updated successfully!");
        } catch (Exception $e) {
            Log::error('Admin Category Update Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Category Delete Function

    public function delete(Request $request, $id)
    {
        try {
            $categoryDelete = Category::where('id', base64_decode($request->id))->first();
            $categoryDelete->delete();
            return redirect()->route('admin.category.index')->with('success', "Category deleted successfully!");
        } catch (Exception $e) {
            Log::error('Admin Category Delete Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }
}
