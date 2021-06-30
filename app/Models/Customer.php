<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['name', 'address','phone','email','kode','alamat2','fax','kota','negara','limitnominal','limitnota','proteksi','carapembayaran','transportpengiriman',
    'carapengiriman','area','sales','provinsi','tglbergabung'];
    protected $attributes = [
        'status' => 'active',
    ];
}
