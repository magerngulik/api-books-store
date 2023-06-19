<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Discount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'cover',
        'rating',
        'publish_year',
        'unit_price'
    ];
    

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'books_genres');
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }


}