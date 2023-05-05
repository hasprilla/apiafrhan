<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;


class CategoryResurce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'description' => Str::upper($this->description),
            'status' =>  $this->status,
        ];
    }

    public function with(Request $request)
    {
        return [
            'res' => true,
        ];
    }
}
