<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class SubCategory extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }



    protected $fillable = ["name", "category_id"] ;
}
