<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReplay extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = ["comment_id","user_id","comment"];
}
