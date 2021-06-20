<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAnswerRequest;
use App\Models\Question;
use App\Models\User;
use App\Models\UserQuestion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        return view('education');
    }


    public function getQuestions(Question $question, UserQuestion $userQuestion): array
    {
        $arrayQuestions = [];
        if ($userQuestion->hasQuestions(\Auth::user())) {
            $arrayQuestions = $userQuestion->getQuestions(\Auth::user(), 1);
        } else {
            $arrayQuestions = $question->getRandomQuestions(40, 1, 'summ');
            $userQuestion->create($arrayQuestions, \Auth::user());
        }

        return $arrayQuestions;
    }

    public function setAnswer(UserQuestion $userQuestion, UserAnswerRequest $request)
    {
        return $userQuestion->setAnswer(
            $request->post('number'),
            $request->post('question_id'),
            $request->post('answer')
        );
    }
}
