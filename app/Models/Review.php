<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review_ratings';

    protected $fillable = [
        'booking_id', 'guest_name', 'guest_email' ,'comments', 'product_code' ,'star_rating', 'status'
    ];
}
