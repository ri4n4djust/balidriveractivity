<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class LocalizationController extends Controller
{
    //
    public function lang(Request $request)
    {
        $locale = $request->lang ;
        $tabel = $request->tabel ;
        $slug = $request->slug ;
        App::setLocale($locale);
        Session::put('locale', $locale);

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
    public function currency(Request $request)
    {
        
        $currency = $request->currency ;
        Session::put('currency', $currency);
        // Http::get(route('api.currency.update', ['mata' => $currency]));
        $response = Http::get('https://v6.exchangerate-api.com/v6/bcb99ccd6a1020a3868d3632/latest/USD');
        $posts = $response->json();
        Session::put('currency_rate', $posts['conversion_rates'][$currency]);
        // Session::put('curenncy_symbol', $posts['conversion_rates'][$currency]);
        return redirect()->back();
    }
}
