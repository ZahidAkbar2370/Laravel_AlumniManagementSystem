<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    use HasFactory;

    protected $table = "forum_topics";

    protected $fillable = [
        "title",
        "user_id",
        "description",
    ];
}
