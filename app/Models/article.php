<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "short_description",
        "cover",
        "content",
        "user_id",
        "category_id"
    ];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function category(){
        return $this->belongsTo(category::class,"category_id","id");
    }
}
