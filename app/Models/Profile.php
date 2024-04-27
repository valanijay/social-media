<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table='profiles';
    protected $primarykey = "id";
    protected $filltable=[
        'user_id ',
        'bio',
        'profile_image',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
