<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('admin.pages.icons');
    }

    public function properti()
    {
        return view('admin.pages.properti');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('admin.pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('admin.pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('admin.pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('admin.pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('admin.pages.typography');
    }

    public function rooms()
    {
        $defaultLocale = config('app.locale');
        $room = DB::table('bookings')->get();
        return view('admin.pages.rooms', ['room' => $room]);
    }
    public function roomAdd()
    {
        // $defaultLocale = config('app.locale');
        $fasilitas = DB::table('facilities')->get();
        return view('admin.pages.room_add', compact('fasilitas'));
    }

    public function rates()
    {
        return view('admin.pages.rates');
    }

    public function tour()
    {
        $defaultLocale = config('app.locale');
        $tur = DB::table('tour_packages')->get();
        return view('admin.pages.tour', ['tour' => $tur]);
    }
    public function tourAdd()
    {
        // $defaultLocale = config('app.locale');
        $destinasi = DB::table('destinations')->get();
        $travel_area = DB::table('travel_area')->get();
        return view('admin.pages.tour_add', compact('destinasi', 'travel_area'));
    }
    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function destinasi()
    {
        $destinasi = DB::table('destinations')->paginate(10);
        return view('admin.pages.destinasi', ['destinasi' => $destinasi]);
    }
    public function destinasiAdd()
    {
        // $defaultLocale = config('app.locale');
        return view('admin.pages.destinasi_add');
    }
    public function activity(Request $request, $slug)
    {
        $search = $request->query('q');
        $area = $request->query('area');
        if($search == ''){
            $cr = 'all';
        }
        $perPage = $request->query('perPage', 12); // Default to 12 if not provided

        if ($search != null && $search != 'all') {
            $activities = DB::table('activities')->where('name', 'like', '%' . $search . '%')->orderBy('id', 'desc')->paginate($perPage);
        } elseif ($area != null) {
            // if area is numeric assume it's an ID, otherwise treat as slug
            if (is_numeric($area)) {
                $activities = DB::table('activities')->where('area_id', $area)->orderBy('id', 'desc')->paginate($perPage);
            } else {
                $cat = DB::table('travel_area')->where('code', $area)->first();
                if ($cat) {
                    $activities = DB::table('activities')->where('area_id', $cat->id)->orderBy('id', 'desc')->paginate($perPage);
                } else {
                    // fallback to all activities if area query is invalid
                    $activities = DB::table('activities')->orderBy('id', 'desc')->paginate($perPage);
                }
            }
        } elseif ($slug == 'all') {
            $activities = DB::table('activities')->orderBy('id', 'desc')->paginate($perPage);
        } elseif ($cr == 'all') {
            $activities = DB::table('activities')->orderBy('id', 'desc')->paginate($perPage);
        } else {
            $categories = DB::table('travel_area')->where('code', $category)->first();
            if($categories){
                $activities = DB::table('activities')->where('area_id', $categories->code_cat)->orderBy('id', 'desc')->paginate($perPage);
            } else {
                $activities = [];
            }
        }
        // $activities = DB::table('activities')->get();
        return view('admin.pages.activity', ['activity' => $activities]);
    }
    public function activityAdd()
    {
        // $defaultLocale = config('app.locale');
        return view('admin.pages.activity_add');
    }
    public function products(){
        $products = DB::table('products')->get();
        return view('admin.pages.products', ['products' => $products]);
    }
    public function productsAdd(){

        $activities = DB::table('activities')->get();
        return view('admin.pages.products_add', ['activities' => $activities]);
    }
}
