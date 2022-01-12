<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name', 'phone', 'email', 'photo', 'curriculum', 'specialization_id', 'diagnosis_availability',
        'dashboard_availability', 'online_check_ups', 'online_chat'
    ];
}
