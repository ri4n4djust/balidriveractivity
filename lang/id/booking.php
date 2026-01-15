<?php
use Illuminate\Support\Facades\DB;

$kamar = DB::table('bookings')->where('lang', 'id')->get();

// print_r($kamar);
return [ $kamar ];
