<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;

    protected $table = "system_settings";

    protected $fillable = [
        "name",
        "email",
        "contact",
        "cover_img",
        "about_content",
    ];
}
