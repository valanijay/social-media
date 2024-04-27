<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primarykey = "id";
    protected $filltable = [
        'user_id',
        'content ',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function like(){
        return $this->hasMany(Like::class,'post_id','id');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'post_id','id');
    }
}
