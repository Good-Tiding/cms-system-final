<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function replies()
    {
     return $this->hasMany(CommentReply::class);

    }

    public function post()
    {
     return $this->belongsTo(Post::class);

    }

    
    public function photo()
    {
     return $this->belongsTo(Photo::class);
   
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
    
}
