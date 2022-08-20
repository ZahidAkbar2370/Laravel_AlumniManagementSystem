<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    use HasFactory;
    
    protected $table = "forum_comments";

    protected $fillable = [
        "topic_id",
        "user_id",
        "comment",
    ];
}
