<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'synopsis',
        'year',
        'director',
        'poster',
        'rented',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
