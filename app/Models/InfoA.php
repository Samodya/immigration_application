<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoA extends Model
{
    use HasFactory;

    protected $table= "_info_a";

    protected $fillable=[
        "passport_no",
        "surname",
        "other_surnames",
        "perm_address",
        "telephone",
    ];
}
