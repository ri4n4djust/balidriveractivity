<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Facility;
use App\Models\Transport;
use App\Models\Destination;
use App\Models\TourPackage;
use App\Models\Package;
use App\Models\Artikel;
use App\Models\Gallery;
use App\Models\Rate;
use App\Models\Review;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Http;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\DB;

class bookingController extends Controller
{
    //
    public function transport(){
        $defaultLocale = config('app.locale');
        $kamar = Booking::where('bookings.lang', $defaultLocale)->get();
        $transport = Transport::where('transports.lang', $defaultLocale)->get();
        return view('pages.transport',['transport' => $transport] );
    }

    public function tour(){
        $defaultLocale = config('app.locale');
        $tur = TourPackage::join('tour_fotos', 'tour_fotos.code', 'tour_packages.code')
                    ->where('tour_packages.lang', $defaultLocale)
                    ->select('tour_packages.*', 'tour_fotos.foto')
                    ->get();
        return view('pages.tour',['tour' => $tur] );
    }

    public function hotel(){
        $defaultLocale = config('app.locale');
        $hotel = Booking::join('room_fotos', 'room_fotos.code', 'bookings.code')
                        ->where('bookings.lang', $defaultLocale)
                        ->select('bookings.*', 'room_fotos.foto')
                        ->get();
        $date = Carbon::now()->format('Y-m-d');
        $rate = DB::table('rates')->where('tgl', $date)->get();
        $fasilitas = Facility::all();
        return view('pages.hotel',['hotels' => $hotel, 'rate' => $rate, 'fasilitas' => $fasilitas] );
    }

    public function service(){
        

        $defaultLocale = config('app.locale');
        $kamar = Booking::where('bookings.lang', $defaultLocale)->get();
        $transport = Transport::where('transports.lang', $defaultLocale)->get();
        $detinasi = Destination::where('destinations.lang', $defaultLocale)->get();
        $tur = TourPackage::where('tour_packages.lang', $defaultLocale)
                            // ->join('destinations', 'tour_packages.destination', 'like', 'destinations.code_dst' )
                            ->get();
        $paket = Package::where('lang', $defaultLocale)->get();

        $date = Carbon::now()->format('Y-m-d');
        $fasilitas = Facility::all();
        $rate = DB::table('rates')->where('tgl', $date)->get();
        $artikel = Artikel::where('lang', $defaultLocale)->get();

        return view('pages.service',[
            'kamar' => $kamar, 
            'transport' => $transport,
            'destination' => $detinasi,
            'tour' => $tur,
            'paket' => $paket,
            'fasilitas' => $fasilitas,
            'rate' => $rate,
            'artikel' => $artikel,
            ] );
    }

    public function home(){

        $defaultLocale = config('app.locale');
        $kamar = Booking::join('room_fotos', 'room_fotos.code', 'bookings.code')
                        ->where('bookings.lang', $defaultLocale)
                        ->select('bookings.*', 'room_fotos.foto')
                        ->get();
        $date = Carbon::now()->format('Y-m-d');
        $fasilitas = Facility::all();
        $rate = DB::table('rates')->where('tgl', $date)->get();
        $transport = Transport::where('transports.lang', $defaultLocale)->get();
        $detinasi = Destination::where('destinations.lang', $defaultLocale)
                        ->join('destination_fotos', 'destination_fotos.code', 'destinations.code')
                        ->select('destinations.*', 'destination_fotos.foto')
                        ->get();
        $tur = TourPackage::join('tour_fotos', 'tour_fotos.code', 'tour_packages.code')
                        ->where('tour_packages.lang', $defaultLocale)
                        ->select('tour_packages.*', 'tour_fotos.foto')
                        ->get();
        $paket = Package::where('lang', $defaultLocale)->get();
        $artikel = Artikel::where('lang', $defaultLocale)->get();
        $galeri = Gallery::where('lang', $defaultLocale)->take(3)->get();

        // var_dump($kamar[0]->foto);

        return view('pages.home',[
            'kamar' => $kamar, 
            'transport' => $transport,
            'destination' => $detinasi,
            'tour' => $tur,
            'paket' => $paket,
            'artikel' => $artikel,
            'galeri'  => $galeri,
            'fasilitas' => $fasilitas,
            'rate' => $rate,
            ] );
    }

    public function getLoc(Request $request){
        $ip = $request->ip(); // Dynamic IP address */
        // $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        // return view('pages.service', compact('currentUserInfo'));
        return $currentUserInfo;
    }

    public function destination()
    {
        $defaultLocale = config('app.locale');
        $destinasi = DB::table('destinations')->where('lang', $defaultLocale)
                        ->join('destination_fotos', 'destination_fotos.code', 'destinations.code')
                        ->select('destinations.*', 'destination_fotos.foto')
                        ->get();
        return view('pages.destinations', compact('destinasi'));
    }

    public function destinationDetail($slug){
        $destinationDetail = DB::table('destinations')->where('destinations.slug', $slug)
                        ->join('destination_fotos', 'destination_fotos.code', 'destinations.code')
                        ->select('destinations.*', 'destination_fotos.foto')
                        ->get();
                        // dd($destinationDetail);
        return view('pages.destination-detail', ['destinationDetail' => $destinationDetail]);
    }

    public function activity()
    {
        $defaultLocale = config('app.locale');
        $activity = DB::table('activities')->where('lang', $defaultLocale)
                    ->join('activity_fotos', 'activity_fotos.code', 'activities.code')
                    ->select('activities.*', 'activity_fotos.foto')
                    ->get();
        return view('pages.activity', compact('activity'));
    }

    public function activityDetail($slug){
        $activityDetail = DB::table('activities')->where('slug', $slug)
                    ->join('activity_fotos', 'activity_fotos.code', 'activities.code')
                    ->select('activities.*', 'activity_fotos.foto')
                    ->get();
        $product = DB::table('products')->get();
        $country = DB::table('countries')->get();
        return view('pages.activity-detail', ['activityDetail' => $activityDetail, 'products' => $product, 'country' => $country,]);
    }

    public function tourDetail($slug){

        $defaultLocale = config('app.locale');
        $tur = DB::table('tour_packages')->where('tour_packages.slug', $slug)
                        ->join('tour_fotos', 'tour_fotos.code', 'tour_packages.code')
                        ->select('tour_packages.*', 'tour_fotos.foto')
                        ->get();
        $destinasi = DB::table('destinations')->join('destination_fotos', 'destination_fotos.code', 'destinations.code')
                        ->where('lang', $defaultLocale)
                        ->select('destinations.*', 'destination_fotos.foto')
                        ->get();
        $activity = DB::table('activities')->where('lang', $defaultLocale)
                        ->join('activity_fotos', 'activity_fotos.code', 'activities.code')
                        ->select('activities.*', 'activity_fotos.foto')
                        ->get();
                        // dd($tur);
        return view('pages.tour-detail',[
            'tourDetail' => $tur,
            'destinasi' => $destinasi,
            'activities' => $activity
            ] );
    }

    public function hotelDetail($slug){

        $defaultLocale = config('app.locale');
        $code = Booking::where('slug', $slug)->first();
        $hotel = Booking::where('bookings.code', $code->code)->where('bookings.lang', $defaultLocale)
                    ->join('room_fotos', 'room_fotos.code', 'bookings.code')
                    ->select('bookings.*', 'room_fotos.foto')
                    ->get();
        $review = DB::table('review_ratings')->where('product_code', $code->code)->get(); // Review::where('product_code', $code->code)->get();
        $country = DB::table('countries')->get();
        $fasilitas = Facility::all();
        $destinasi = DB::table('destinations')->where('lang', $defaultLocale)
                    ->join('destination_fotos', 'destination_fotos.code', 'destinations.code')
                    ->select('destinations.*', 'destination_fotos.foto')
                    ->inRandomOrder()->limit(6)->get();
        $activities = DB::table('activities')->where('lang', $defaultLocale)
                    ->join('activity_fotos', 'activity_fotos.code', 'activities.code')
                    ->select('activities.*', 'activity_fotos.foto')
                    ->inRandomOrder()->limit(6)->get();
        return view('pages.hotel-detail',[
            'hotelDetail' => $hotel,
            'country' => $country,
            'fasilitas' => $fasilitas,
            'destinasi' => $destinasi,
            'activities' => $activities,
            'review' => $review
            ] );
    }

    public function paketDetail($slug){


    }

    public function galeri(){
        $defaultLocale = config('app.locale');
        $hotel = Booking::where('bookings.lang', $defaultLocale)->get();
        $galeri = Gallery::where('lang', $defaultLocale)->get();

        return view('pages.galeri',[
            'hotelDetail' => $hotel,
            'galeri' => $galeri
            ] );

    }

    public function event(){
        $defaultLocale = config('app.locale');
        // $code = Gallery::where('slug', $slug)->first();
        $artikel = Artikel::where('lang', $defaultLocale)->get();

        return view('pages.event',[
            'artikel' => $artikel
            ] );
        
    }

    public function exchange(){

        $response = Http::get('https://v6.exchangerate-api.com/v6/bcb99ccd6a1020a3868d3632/latest/USD');
        $posts = $response->json();
        return response()->json($posts);

    }

    public function rate(Request $request){
        // $defaultLocale = config('app.locale');
        // $code = Gallery::where('slug', $slug)->first();
        $cekin = $request->start;
        $cekout = $request->end ;
        $dateRange = CarbonPeriod::create($cekin, $cekout);

        $rate = Rate::where('tgl', $request->date)->where('kode_kamar', $request->code)->get();

        // $users = DB::select("SELECT *
        // FROM room_nomors
        // WHERE room_no NOT IN
        //     (SELECT no_room
        //      FROM reservation_room_detail WHERE status !='cekout' AND tgl BETWEEN '$request->start' AND '$request->end')
        // AND unit_code='$request->code';");
        $stok = $rate['0']->stok;

        $users = DB::table("room_nomors")->select('*')
        ->whereNOTIn('room_no',function($query) use ($request){
            $query->select('no_room')
                    ->from('reservation_room_detail')
                    ->where('tgl', $request->date)
                    // ->where('status', '!=', 'cekin')
                    ->where('status', '!=', 'cekout');
                    
        })
        ->where('unit_code', $request->code)
        ->get();
        $no_kamar = $users['0']->room_no ;

        $kamar = count($users);
        if($stok == $kamar){
            // echo "stok : ".$stok ;
        }else{
            // echo "kamar : ".$kamar ;
        }


        return response()->json([$rate, $users]);
        
    }

    // public function cekAllotment(Request $request){
    //     // $defaultLocale = config('app.locale');
    //     // $code = Gallery::where('slug', $slug)->first();
    //     $stok = Rate::where('tgl', $request->date)->where('kode_kamar', $request->code)->get();

    //     // return view('pages.event',[
    //     //     'artikel' => $rate
    //     //     ] );
    //     return response()->json($stok);
        
    // }

    public function bookDetail($id){

        $detail = DB::table('reservations')->where('id', $id)->get();
        return view('pages.det_res',[
            'detail' => $detail
            ] );
    }

    public function reviewstore(Request $request){

        $post = Review::create([
            'booking_id' => $request->booking_id,
            'product_code' => $request->product_code,
            'comments' => $request->comment,
            'user_rating' => $request->rating,
            'guest_name' => $request->name,
            'guest_email' => $request->email,
            'star_rating' => $request->rating,
            'status' => 'active',
        ]);

        return redirect()->back()->with('flash_msg_success','Thank You, Your review has been submitted Successfully,');
    }

    public function getProduct(Request $request){
        $code = $request->code;
        $data = DB::table('products')->where('product_code', $code)->first();
        
        return response()->json(['data' => $data ]);
    }

}
