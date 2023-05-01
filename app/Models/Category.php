<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function film(){

        return $this->hasMany(Film::class);
    }
}
