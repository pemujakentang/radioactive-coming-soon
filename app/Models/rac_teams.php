<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rac_teams extends Model
{
    use HasFactory;
    // protected $guarded = []; //possible security issue?
    protected $fillable = ['tim1_penyiar1', 'tim1_penyiar2', 'tim1_operator', 'tim1_institusi', 'tim1_nims1', 'tim1_nims2', 'tim1_nimop', 'tim1_contact_wa', 'tim1_contact_line', 'payment_proof', 'status','tim2_penyiar1', 'tim2_penyiar2', 'tim2_operator', 'tim2_institusi', 'tim2_nims1', 'tim2_nims2', 'tim2_nimop', 'tim2_contact_wa', 'tim2_contact_line'];
}