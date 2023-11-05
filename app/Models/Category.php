<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function subCategory(){
        return $this->hasMany(subCategory::class);
    }
    public function book(){
        return $this->hasMany(Book::class,"category_id");
    }
    protected $fillable = ["name"];
}
