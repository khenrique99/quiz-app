<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Question;

class QuestionListResource extends JsonResource
{
	public function toArray($request): array
	{
		return [
			'id' => $this->id,
			'level' => $this->level,
			'title' => $this->title,
		];
	}
}
