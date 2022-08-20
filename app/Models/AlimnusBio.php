<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlimnusBio extends Model
{
    use HasFactory;

    protected $table = "alumnus_bio";

    protected $fillable = [
        "firstname",
        "middlename",
        "lastname",
        "gender",
        "batch",
        "cource_id",
        "email",
        "connected_to",
        "avatar",
        "status",
    ];
}
