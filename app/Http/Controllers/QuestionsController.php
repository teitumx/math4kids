<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function getQuestions(Question $question): array
    {
        return $question->getRandomQuestions(40, 1);
    }
}
