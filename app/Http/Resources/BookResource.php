<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'cover' => $this->cover,
            'author' => $this->author,
            'publisher' => $this->publisher,
            'rating' => $this->rating,
            'price' => $this->unit_price,
            'genres'=> $this->whenLoaded('genres',function(){
                return $this->genres->pluck('name');
            }),       
            'discount' => $this->whenLoaded('discount',function(){
            //   return $this->discount->amount; 
              return floatval($this->discount->amount);
            }), 
            
        ];
    }
}
