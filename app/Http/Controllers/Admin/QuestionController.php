<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\Tag;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::latest()->get();
        return view('admin.questionPaper.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
        $tags = Tag::all();
        return view('admin.questionPaper.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $this->validate($request, [
            'title' => 'required',
            'course_code' => 'nullable',
            'term' => 'required',
            'passing_year' => 'required',  
            'image' => 'mimes:pdf,ppt,docx,doc,pptx|max:10000',
//            'image' => 'mimes:png,jpg|max:10000',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);

        $question = new Question();

        $slug = str_slug($request->title);

          if ($request->hasFile('image')) {
            $imageName = $slug . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/question/file'), $imageName);
            $question->image = $imageName;
        }

        $question->user_id = Auth::id();
        $question->title = $request->title;
        $question->slug = $slug;
        $question->course_code = $request->course_code;
        $question->term = $request->term;
        $question->passing_year = $request->passing_year;
        $question->image = $imageName;
        $question->body = $request->body;
        if (isset($request->status)) {
            $question->status = true;
        } else {
            $question->status = false;
        }
        $question->is_approved = true;
        $question->save();

        $question->categories()->attach($request->categories);
        $question->tags()->attach($request->tags);

        Toastr::success('Successfully Question Uploaded', 'Success');
        return redirect()->route('admin.question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        
        return view('admin.questionPaper.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.questionPaper.edit', compact('question', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $this->validate($request, [
            'title' => 'required',
            'course_code' => 'nullable',
            'image' => 'mimes:pdf,ppt,docx,doc,pptx|max:10000',
//            'image' => 'mimes:png,jpg|max:10000',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);

        $question = new Question();

        $slug = str_slug($request->title);

          if ($request->hasFile('image')) {
            $imageName = $slug . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/question/file'), $imageName);
            $question->image = $imageName;
        }

        $question->user_id = Auth::id();
        $question->title = $request->title;
        $question->slug = $slug;
        $question->course_code = $request->course_code;
        $question->term = $request->term;
        $question->passing_year = $request->passing_year;
//        $question->image = $imageName;
        $question->body = $request->body;
        if (isset($request->status)) {
            $question->status = true;
        } else {
            $question->status = false;
        }
        $question->is_approved = true;
        $question->save();

         $question->categories()->sync($request->categories);
        $question->tags()->sync($request->tags);

        Toastr::success('Successfully Question Uploaded', 'Success');
        return redirect()->route('admin.question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
         if (!is_null($question)) {
            $question->delete(public_path('upload/question/file' . $question->image));
        }
        $question->categories()->detach();
        $question->tags()->detach();
        $question->delete();
        Toastr::success('Question Successfully Deleted', 'Success');
        return redirect()->back();
    }
}
