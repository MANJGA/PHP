<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display the quiz form.
     *
     * @param  int|null  $id
     * @return \Illuminate\Http\Response
     */
    public function form($id = null)
    {
        $quiz = $id ? Quiz::find($id) : new Quiz;

        return view('quiz_form', ['quiz' => $quiz]);
    }

    /**
     * Store or update the quiz.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int|null  $id
     * @return \Illuminate\Http\Response
     */
    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $quiz = $id ? Quiz::find($id) : new Quiz;
        $quiz->title = $request->input('title');
        $quiz->description = $request->input('description');
        $quiz->save();

        return redirect()->route('quiz.form', ['id' => $quiz->id])->with('success', 'Quiz saved successfully!');
    }
}
