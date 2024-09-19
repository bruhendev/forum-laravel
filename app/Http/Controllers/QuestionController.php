<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateQuestionRequest;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('question.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateQuestionRequest $request)
    {
        $user = Auth::user();
        $user->questions()->create($request->validated());

        return redirect()->route('questions.create')->with('success', 'Pergunta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
