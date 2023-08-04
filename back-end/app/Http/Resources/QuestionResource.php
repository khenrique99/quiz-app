<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'level' => $this->level,
      'title' => $this->title,
      'imageOne' => $this->imageOne,
      'imageTwo' => $this->imageTwo,
      'describe' => $this->describe,
      'question' => $this->question,
      'optionOne' => $this->optionOne,
      'optionTwo' => $this->optionTwo,
    ];
  }
}
