<?php
use Illuminate\Support\Facades\DB;

$kamar = DB::table('bookings')->where('lang', 'en')->get();

// print_r($kamar);
return [ $kamar ];
