<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voc extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'usia', 'no_telp', 'email', 'nim', 'institusi', 'uname', 'link'];
}
