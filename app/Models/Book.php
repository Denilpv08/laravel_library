<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'id_author',
        'id_editorial',
        'id_category',
        'num_page',
        'isbn',
        'synopsis'
    ];

    public function editorial(){
        return $this->hasOne(Editorial::class, 'id', 'id_editorial');
    }

    public function author(){
        return $this->hasOne(Author::class, 'id', 'id_author');
    }

    public function category(){
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
}
