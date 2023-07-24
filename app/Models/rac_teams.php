<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rac_teams extends Model
{
    use HasFactory;
    // protected $guarded = []; //possible security issue?
    protected $fillable = ['penyiar1', 'penyiar2', 'operator', 'institusi', 'nims1', 'nims2', 'nimop', 'contact_wa', 'contact_line', 'payment_proof', 'status'];
}
