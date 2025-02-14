<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizSubmission;
use Illuminate\Http\Request;
use Auth;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    public function show($id) {
        $quiz = Quiz::findOrFail($id);
        return view('quizzes.show', compact('quiz'));
    }

    public function submit(Request $request) {
        $quiz = Quiz::findOrFail($request->quiz_id);
        $userAnswers = $request->except(['_token', 'quiz_id']);
        $correctAnswers = [];
        $score = 0;

        // Compare answers
        foreach ($quiz->questions as $question) {
            $correctAnswers[$question['id']] = $question['correct'];
            if (isset($userAnswers[$question['id']]) && $userAnswers[$question['id']] == $question['correct']) {
                $score++;
            }
        }

        // Save Submission
        QuizSubmission::create([
            'user_id' => Auth::id(),
            'quiz_id' => $quiz->id,
            'answers' => $userAnswers,
            'score' => $score,
        ]);

        return redirect()->route('quizzes.index')->with('message', "You scored $score out of " . count($quiz->questions));
    }
}

