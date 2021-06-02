<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        return view('education');
    }

    public function getQuestions(Question $question): array
    {
        return $question->getRandomQuestions(40, 1, 'summ');
    }
}
