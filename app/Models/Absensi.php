<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable=['employee_id','date', 'in','in_lat','in_long', 'out','out_lat','out_long'];
}
