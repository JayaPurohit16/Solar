<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QuestionsController extends Controller
{
    // Admin Questions Index Page Function

    public function index()
    {
        try {
            return view('admin.questions.index');
        } catch (Exception $e) {
            Log::error('Admin Questions Index Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Questions List Function

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
            $query = Questions::orderBy('id', 'DESC');

            // Search

            if (!empty($request->input('search')['value'])) {
                $search = $request->input('search')['value'];
                $query->orWhere('questions', 'like', "%" . $search . "%");
                $query->orWhere('answers', 'like', "%" . $search . "%");
            }

            $orderByName = 'id';
            switch ($orderColumnIndex) {
                case '0':
                    $orderByName = 'questions';
                    break;
                case '1':
                    $orderByName = 'answers';
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
            Log::error('Admin Questions List Error : ' . $e->getMessage());
        }
    }

    // Admin Questions Create Page Function

    public function create()
    {
        try {
            return view('admin.questions.create');
        } catch (Exception $e) {
            Log::error('Admin Questions Create Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }


    // Admin Questions Store Page Function

    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'questions' => 'required',
                'answers' => 'required',
            ]);

            $questions = new Questions();
            $questions->questions = $request->questions;
            $questions->answers = $request->answers;
            $questions->save();
            return redirect()->route('admin.questions.index')->with('success', "Questions added successfully!");;
        } catch (Exception $e) {
            Log::error('Admin Questions Store Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Questions Edit Page Function

    public function edit($id)
    {
        try {
            $questionsEdit = Questions::where('id', base64_decode($id))->first();
            return view('admin.questions.edit', compact('questionsEdit'));
        } catch (Exception $e) {
            Log::error('Admin Questions Edit Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Questions Update Page Function

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'questions' => 'required',
                'answers' => 'required',
            ]);

            $questionsUpdate = Questions::where('id', $id)->first();
            $questionsUpdate->questions = $request->questions;
            $questionsUpdate->answers = $request->answers;
            $questionsUpdate->update();
            return redirect()->route('admin.questions.index')->with('success', "Questions updated successfully!");;
        } catch (Exception $e) {
            Log::error('Admin Questions Update Page Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }

    // Admin Questions Delete Function

    public function delete(Request $request, $id)
    {
        try {
            $questionsDelete = Questions::where('id', base64_decode($request->id))->first();
            $questionsDelete->delete();
            return redirect()->route('admin.questions.index')->with('success', "Questions deleted successfully!");
        } catch (Exception $e) {
            Log::error('Admin Questions Delete Error : ' . $e->getMessage());
            return redirect()->back()->with('error', "Something went wrong!");
        }
    }
}
