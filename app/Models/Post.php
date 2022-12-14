<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['category','author'];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function author() {
        return $this->belongsTo(User::class,'user_id');
    }

}
