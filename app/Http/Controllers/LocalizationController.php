<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class LocalizationController extends Controller
{
    //
    public function lang(Request $request)
    {
        $locale = $request->lang ;
        $tabel = $request->tabel ;
        $slug = $request->slug ;
        App::setLocale($locale);
        session()->put('locale', $locale);

        if($slug == '' ){
            return redirect()->back();
        }else{


            $kode = DB::table($tabel)->where('slug', $slug)->first();
            $data = DB::table($tabel)->where('code', $kode->code)->where('lang', $locale)->first();
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
                $url = "https://";   
            }else{  
                $url = "http://";   
            }
            // Append the host(domain name, ip) to the URL.   
            $url.= $_SERVER['HTTP_HOST'];
            $url.= '/'.$tabel.'/'.$data->slug ;
            // echo $url ;
            return redirect()->to($url);
        }
    }
}
