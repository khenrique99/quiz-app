<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Resources\QuestionListResource;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
  public function questionListEasy()
  {
    $listEasy = (new Question)->listQuestionEasy();
    return QuestionlistResource::collection($listEasy);
  }
  public function getQuestions($id)
  {
    $questions = (new Question)->getQuestion($id);
    return QuestionResource::collection($questions);
  }
}
