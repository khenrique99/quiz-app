<?php

namespace App\Http\Resources;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
	public function toArray($request): array
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'email' => $this->email,
			'date_birth' => Carbon::make($this->date_birth)->format("d/m/Y"),
			// 'created_account' => Carbon::make($this->created_at)->format("d-m-Y"),
		];
	}
}
