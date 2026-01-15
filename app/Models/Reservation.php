<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_reservasi',
        'code_service',
        'tgl_reservasi',
        'guest_email',
        'guest_name',
        'payment_type',
        'adult',
        'total',
        'guest_paid',
        'cek_in',
        'cek_out',
        'book_status',
        'status',
        'room_no',
        'snap_token'
    ];
}
