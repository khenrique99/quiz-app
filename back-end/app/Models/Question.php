<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
  public function listQuestionEasy()
  {
    return $this->from('questions')
      ->where('level', 'easy')
      ->orderBy('id')
      ->get();
  }
  public function listQuestionMedium()
  {
    return $this->from('questions')
      ->where('level', 'easy')
      ->orderBy('id')
      ->get();
  }
  public function listQuestionHard()
  {
    return $this->from('questions')
      ->where('level', 'easy')
      ->orderBy('id')
      ->get();
  }
  public function getQuestion($id)
  {
    return $this->from('questions')
    ->where('id', $id)
    ->get();
  }
}
