<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    function usertabelereletion(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
