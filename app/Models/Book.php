<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function bookMedia(){
        return $this->belongsTo(BookMedia::class);
    }
    public function category(){ 
        return $this->belongsTo(Category::class);
    }
    public function bookLanguage(){
        return $this->belongsTo(BookLanguage::class);
    }
    public function userDownload(){
        return $this->hasMany(UserDownload::class);
    }
    public function userWishlist() {
        return $this->hasMany(userWishlist::class);
    }
    public function userCart() {
        return $this->hasMany(userCart::class);
    }
    public function userComment() {
        return $this->hasMany(userComment::class);
    }
    protected   $fillable = [
        "user_id",
        "name",
        "ISBN10",
        "ISBN13",
        "writer",
        "publisher",
        "publish_date",
        "category_id",
        "pages",
        "book_media_id",
        "book_languages_id",
        "previose_price",
        "new_price",
        "rating",
        "description"
];
}
