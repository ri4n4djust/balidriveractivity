@extends('layouts.default')
@section('meta')
    <title>{{ $hotelDetail[0]->slug }} - The Swand</title>
    <meta content="{!! $hotelDetail[0]->desc !!}" name="description">
    <meta content="{{ $hotelDetail[0]->slug }}" name="keywords">
@endsection
@section('media')
        <link rel="stylesheet" type="text/css" href="/css/store.css" />
@endsection
@section('content')
    
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Hotel Detail</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>{{ $hotelDetail[0]->title }}</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <!-- <h2>About Us</h2> -->
            <!-- <p>Learn More </p> -->
            </div>

            <div class="row gy-4">
                <div class="col-lg-7 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                    
                    <div class="position-relative mt-4">
                        
                        <h4>{{ $hotelDetail[0]->title }}</h4>
                            @php 
                                $rata2 = 0 ; 
                                $count = 0;
                            @endphp
                            @foreach($review as $rev)
                            @if($hotelDetail[0]->code == $rev->product_code)
                            @php 
                            $count += 1 ;
                            $rata2 += $rev->star_rating ;
                            @endphp
                            @endif
                            @endforeach
                            <div class="rated">
                            @php $jml = $rata2 / ($count ? $count : 1) ; @endphp
                            @for($i=1; $i<=$jml; $i++)                                                      
                                <label class="star-rating-complete" title="text">{{$i}} stars</label>
                            @endfor
                            </div>
                            ({{$count}} Reviews)
                        
                    

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">

                        @php $gmbra = explode(";",$hotelDetail[0]->foto) ; @endphp
                        @php $gmbr = array_slice($gmbra, 0, -1) ; @endphp
                        @foreach($gmbr as $value)
                    
                        <li data-target=".carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        <!-- {{ count($gmbr) }} -->

                        @endforeach
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                        
                        </ol>
                        <div class="carousel-inner">
                        
                        @foreach($gmbr as $key => $slider)
                        <!-- {{ $key }} -->
                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{ asset('assets/img/rooms/'. $slider) }}" class="d-block w-100" alt="">
                        </div>
                        @endforeach
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>

                        <!-- Thumbnails -->
                        <div class="carousel-indicators" style="margin-bottom: -20px;width:100px">
                            @foreach($gmbr as $key => $slider)
                                <button type="button" data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{$loop->first ? 'active' : ''}}" aria-current="true" aria-label="Slide 1" >
                                <img class="d-block w-100" src="{{ asset('assets/img/rooms/'. $slider) }}" class="img-fluid" />
                                </button>
                            @endforeach   
                        </div>
                        <!-- Thumbnails -->
                        
                        
                    </div>
                    
                    

                    <div style="margin-top:40px;"></div>
                    <div class="row">
                    <h5>Facility</h5>
                    <!-- {{ $hotelDetail[0]->title }} -->
                    @php $fasi = explode(";",$hotelDetail[0]->facility) ; @endphp
                    @for ($i = 1; $i < count($fasi); $i++)
                        @foreach ($fasilitas as $fas)
                        @if($fasi[$i] == $fas->id)

                        <div class="col-4 form-group">
                        <i class="bi bi-check2-all"></i> {!! $fas->icon !!} {{ $fas->fas_name }}
                        <!-- <i class="fa-sharp fa-solid fa-person-swimming"></i> -->
                        
                        
                        
                            </div>
                        @endif
                        @endforeach
                    @endfor
                    </div>
                    
                    <p>{!! $hotelDetail[0]->desc !!}</p>
                    <p>
                    <!-- <iframe src="https://www.airbnb.co.id/calendar/ical/1008390716123586176.ics?s=cf056deabfae92dc6d2000654b37a31e" height="200" width="300" title="Iframe Example"></iframe>  -->
                    <div class="container">
                        <div class="row">
                            <div class="col mt-4">
                                    <p class="font-weight-bold ">Review</p>
                                    @php 
                                        $rata2 = 0 ; 
                                        $count = 0;
                                    @endphp
                                    @foreach($review as $rev)
                                    @if($hotelDetail[0]->code == $rev->product_code)
                                    @php 
                                    $count += 1 ;
                                    $rata2 += $rev->star_rating ;
                                    @endphp
                                    <div class="form-group" style="box-shadow: 0 0 10px 0 #ddd;">
                                       
                                        <input type="hidden" name="booking_id" value="{{$rev->booking_id}}">
                                        
                                        <div class="col mt-0">
                                            <p>{{$rev->guest_name}} 
                                            <div class="rated">
                                            @for($i=1; $i<=$rev->star_rating; $i++)                                                      
                                            {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                            @endfor
                                            </div>
                                            </p>
                                            
                                        </div>
                                        
                                        <div class="form-group mt-4">
                                        <div class="col">
                                            <p>{{ $rev->comments }}</p>
                                            <small>{{$rev->created_at}}</small>
                                        </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                            </div>
                        </div>
                    </div>
                    </p>
                    </div>
                    <!-- <img src="assets/img/about.jpg" class="img-fluid" alt=""> -->
                </div>
                <div class="col-lg-5 d-flex" data-aos="fade-up" data-aos-delay="300">
                
                    <div class="content ps-0 ps-lg-5" >
                        <div class="section-header">
                            <h4>Booking Detail</h4>
                            <!-- <p>Learn More </p> -->
                        </div>
                        
                    <form id="form-configure" cautocomplete="off" >
                        <div class="row">
                            <div class="col-xl-6 form-group">
                                <input type="hidden" name="code" class="form-control" id="code" value="{{ $hotelDetail[0]->code }}">
                                <input type="hidden" name="nama_kamar" class="form-control" id="nama_kamar" value="{{ $hotelDetail[0]->title }}">
                                <input type="hidden" name="hari" class="form-control" id="hari" value="1">
                            <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Name" required>
                            </div>
                                <div class="col-xl-6 form-group">
                                <input type="email" class="form-control form-control-sm" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-6 form-group">
                                    <input type="number" class="form-control form-control-sm" name="mobile" id="mobile" placeholder="mobile" required>
                                    <p><small>Include the + symbol, country code, and area code.</small></p>  
                                </div>
                                <div class="col-xl-6 form-group">
                                <input type="hidden" name="nationality" class="form-control" id="nationality" required>
                                <select id="country_name" class="form-control form-control-sm" onchange="getComboA(this)" required>
                                    <option value="">Nationality</option>
                                    @foreach($country as $count)
                                    <option value="{{ $count->country_code }}">{{ $count->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xl-6 form-group">
                                Guest
                                <input type="number" class="form-control form-control-sm" name="adult" id="adult" value="1" placeholder="Adult" required>
                            </div>
                            <div class="col-xl-6 form-group">
                                <input type="hidden" class="form-control" name="qty" id="qty" value="1" placeholder="Adult" disabled>
                                Payment Type
                                <select name="tipe_bayar" id="tipe_bayar" class="form-control form-control-sm" onchange="getOption()">
                                    <option value="deposit">Deposit</option>
                                    <option value="full">Full Payment</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">

                            Cek In   | Cek Out 
                            <input class="form-control form-control-sm" name="datefilter" id="datefilter" required>
                            <input type="hidden" class="form-control" name="cek_in" id="cek_in" required>
                            <input type="hidden" class="form-control" name="cek_out" id="cek_out" required>
                            <input type="hidden" class="form-control" name="tgl_reservasi" id="tgl_reservasi" required>
                            <input type="hidden" name="room_no" id="room_no" >

                            <input type="hidden" name="rate_dolar" id="rate_dolar" required>

                            </div>
                        </div>
                        <div class="form-group">

                            <table style="width:100%;border:1px solid;">
                                <tbody id="listharga" >
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><div id="totalorder"></div></td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <div class="row">
                            <div class="col-4 form-group">
                                Have to Pay : 
                            </div>
                            <div class="col-8 form-group">
                                <span id="totalbayar"></span>/<span id="totalbayardolar"></span>
                                <input type="hidden" class="form-control" name="total" id="total" required>
                                <input type="hidden" class="form-control" name="total_bayar" id="total_bayar" required>
                                <input type="hidden" class="form-control" name="bayar_dolar" id="bayar_dolar" required>
                            </div>
                        </div>
                        </form>
                        <div class="row">
                            <div class="col-5 form-group">
                                <button id="pay-button" class="btn-book-a-table">Pay Now</button>
                            </div>
                            <div class="col-7 form-group">
                            <button onclick="payPal()" class="btn-book-a-table">Pay with PayPal</button>
                            </div>
                        

                        </div>
                        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
                        
                        <script type="text/javascript">
                            $('#pay-button').click(function (event) {
                            event.preventDefault();
                            
                            $.post("{{ route('donation.pay') }}", {
                                _method: 'POST',
                                _token: '{{ csrf_token() }}',
                                kode_product: $('#code').val(),
                                name: $('#name').val(),
                                email: $('#email').val(),
                                mobile: $('#mobile').val(),
                                amount: $('#total_bayar').val(),
                                cek_in: $('#cek_in').val(),
                                cek_out: $('#cek_out').val(),
                                type_bayar: $('#tipe_bayar').val(),
                                nationality: $('#nationality').val(),
                                country_name: $('#country_name').val(),
                                adult: $('#adult').val(),
                                tgl_reservasi: $('#tgl_reservasi').val(),
                                total: $('#total').val(),
                                external_id: $('#code').val() + Date.now(),
                                nama_kamar: $('#nama_kamar').val(),

                            },
                            function (data, status) {
                                // console.log(data.snap_token.snap_token)
                                var name = document.getElementById('name').value;
                                var email = document.getElementById('email').value;
                                var nationality = $("#country_name option:selected").val(); //document.getElementById('nationality').value;
                                var country_name = $("#country_name option:selected").text();
                                var mobile = document.getElementById('mobile').value;
                                var cekin = document.getElementById('cek_in').value;
                                var cekout = document.getElementById('cek_out').value;

                                if(cekin !== '' && cekout !== '' && name !== '' && email !== '' && nationality !== ''){

                                    let arrGuest = {
                                        name: name,
                                        email: email,
                                        nationality: nationality,
                                        country_name: country_name,
                                        phone: mobile
                                    }
                                    localStorage.setItem('guest', JSON.stringify(arrGuest));
                                    
                                };
                                snap.pay(data.snap_token.snap_token, {
                                    onSuccess: function (result) {
                                        location.reload();
                                    },
                                    onPending: function (result) {
                                        location.reload();
                                    },
                                    onError: function (result) {
                                        location.reload();
                                    }
                                });
                                return false;
                            });
                            });
                        </script>

                
                    <div class="row">
                        <div class="section-header">
                            <h4>Most interesting In Bali</h4>
                        </div>
                        @foreach($destinasi as $desti)
                        @php $gmbr = explode(";",$desti->foto) ; @endphp
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="chef-member">
                                    <a href="/destinations/{{$desti->slug}}">
                                        <div class="member-img">
                                            <img src="{{ asset('assets/img/destinasi/'.$gmbr[0] )}}" class="img-fluid" alt="{{ $gmbr[0] }}">
                                        </div>
                                        <div class="member-info">
                                            <small>{{$desti->name}}</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="section-header">
                            <h4>Bali Activities</h4>
                        </div>
                        @foreach($activities as $actv)
                        @php $gmbr = explode(";",$actv->foto) ; @endphp
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="chef-member">
                                    <a href="/activities/{{$actv->slug}}">
                                        <div class="member-img">
                                            <img src="{{ asset('assets/img/activity/'.$gmbr[0] )}}" class="img-fluid" alt="{{ $gmbr[0] }}">
                                        </div>
                                        <div class="member-info">
                                            <small>{{$actv->name}}</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    
                    
                    @section('scripts')
                    <script type="text/javascript">
                        document.addEventListener("DOMContentLoaded",  
                        
                        function () { 
                            $("#loading").hide();
                            // Code to be executed when the DOM is ready
                            document.getElementById('adult').max = 2;
                            document.getElementById('tgl_reservasi').value = moment().format('YYYY-MM-DD h:mm:ss'); // new Date(); 
                            const tipe = document.getElementById('tipe_bayar').value ;
                            var rate = document.getElementById('rate_dolar').value ;
                            var komisi = 0;
                            if(tipe === "deposit"){
                                const totl = document.getElementById('total').value ;
                                document.getElementById('total_bayar').value = ((totl) * 30) / 100 ;
                                var totalbayar = ((totl) * 30) / 100 ;
                                
                                // document.getElementById('bayar_dolar').value = totalbayar / rate ;
                                // var totalbayardolar = document.getElementById('bayar_dolar').value ;
                                // document.getElementById('total').value = totl;
                                document.getElementById("totalbayar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(totalbayar);
                                document.getElementById("totalbayardolar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totalbayardolar);
                            }else if(tipe === "full"){
                                // document.getElementById('total_bayar').value = subtota;
                                const tota = document.getElementById('total').value ;
                                document.getElementById("totalbayar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(tota);

                                
                                var totald = Math.ceil(tota / rate);
                                document.getElementById("totalbayardolar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totald);
                            }

                            $.ajax({
                                type: "GET",
                                url: "/api/get-exchange",
                                error: function (request, error) {
                                    console.log(error);
                                },
                                success: function (result) {
                                    // console.log(result.conversion_rates.IDR)
                                    document.getElementById('rate_dolar').value = result.conversion_rates.IDR
                                    // var rupiah = document.getElementById('total_bayar').value
                                },
                                // dataType: "json"
                            });

                            var guestData = JSON.parse(localStorage.getItem('guest'));
                            if(guestData.name !== ""){
                                document.getElementById('name').value =  guestData.name;
                                document.getElementById('email').value =  guestData.email;
                                document.getElementById('mobile').value =  guestData.phone;
                                document.querySelector('#nationality').value = guestData.nationality;
                                document.querySelector('#country_name').value = guestData.nationality;

                                var delast = document.getElementById('last_rev').value ;
                                // deta = deta.pop();
                                // console.log(deta.no_reservasi);
                                document.getElementById('booking_id').value = delast;
                                document.getElementById('email_rev').value = guestData.email;
                                document.getElementById('name_rev').value = guestData.name;

                                var formreview = document.getElementById("form_review");
                                formreview.style.display = "block";
                            }else{
                                var formreview = document.getElementById("form_review");
                                formreview.style.display = "none";
                            }
                            // heading.textContent = "DOM is ready!"; 
                            
                        }, false ); 
                        
                        function getOption() {
                            const tipe = document.getElementById('tipe_bayar').value ; 
                            const rate_dolar = document.getElementById('rate_dolar').value ;                           
                            if(tipe === "deposit"){
                                // 
                                const tota = document.getElementById('total').value ;
                                const totl = document.getElementById('total').value ;
                                document.getElementById('total_bayar').value = ((totl) * 30) / 100 ;
                                var totalbayar = ((totl) * 30) / 100 ;
                                var totaldolar = Math.ceil(totalbayar / rate_dolar)
                                // document.getElementById('total').value = totl;
                                document.getElementById('bayar_dolar').value = totaldolar ;
                                document.getElementById("totalbayar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(totalbayar);
                                document.getElementById("totalbayardolar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totaldolar);
                                document.getElementById("totalorder").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(tota);
                                // console.log('deposit ne');
                            }else if(tipe === "full"){
                                // document.getElementById('sisa').value = subtota;
                                // document.getElementById('total').value = 0;
                                const tota = document.getElementById('total').value ;
                                var totald = Math.ceil(tota / rate_dolar);
                                document.getElementById('total_bayar').value = tota ;
                                document.getElementById('bayar_dolar').value = totald;
                                document.getElementById("totalorder").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(tota);
                                document.getElementById("totalbayar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(tota);
                                document.getElementById("totalbayardolar").innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totald);
                            
                            }
                            // console.log(document.getElementById('tipe_bayar').value);
                        };

                        function FungsiHitung(start, end, difference, code){
                            $('#loading').show();
                            var hrg = 0;
                            var stok = 0;
                            // var obj = new Array;
                            

                            for(let i=0 ; i<difference ;i++){
                                var dt = moment(start).add(i, 'days').format('YYYY-M-DD');
                                var starte = moment(start).format('YYYY-M-DD');
                                var ende = moment(end).format('YYYY-M-DD');
                                $.ajax({
                                    type: "POST",
                                    url: "/api/get-rate",
                                    data: {
                                        "code": code,
                                        "date": dt,
                                        "start" : starte,
                                        "end": ende,
                                        // "code": code
                                    },
                                    error: function (request, error) {
                                        // console.log(arguments);
                                        alert("room no availabe on this date, please change date");
                                        // document.getElementById('room_no').value = "";
                                        document.getElementById('total').value = "";
                                    },
                                    success: function (result) {
                                        // stok = result[0][0].stok ;
                                        // hrg += parseInt(result[0][0].harga); //parseInt(125) ;
                                        // document.getElementById('room_no').value = result[1][0].room_no;
                                        var qty = document.getElementById('qty').value ;

                                        if( qty > (result[1]).length ){
                                            alert("stok kurang");
                                            // document.getElementById('room_no').value = "";
                                            document.getElementById('total').value = "";
                                        }else{
                                            stok = result[0][0].stok ;
                                            hrg += parseInt(result[0][0].harga); //parseInt(125) ;

                                            var room_n = "";
                                            for(let r=0 ; r<qty ;r++){
                                                room_n += result[1][r].room_no ;
                                            }
                                            console.log(room_n)
                                            document.getElementById('room_no').value = room_n;
                                            var obj = new Array;
                                            obj.push({
                                                no: i+1,
                                                harga: result[0][0].harga,
                                                tgl: result[0][0].tgl
                                            
                                            });
                                            var trHTML = '';
                                            $.each(obj, function (i, o){
                                                trHTML += '<tr style="border:1px solid;"><td>' +  o.no +
                                                            '</td><td>' + moment(o.tgl).format('Y-M-D') + '    x' + qty + 'Room' +
                                                            '</td><td>' + new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(o.harga) +
                                                            '</td></tr>';
                                            });
                                            $('#listharga').append(trHTML);

                                            document.getElementById('total').value = hrg;
                                            // document.getElementById('stok').value = stok;
                                            getOption();
                                        }
                                        
                                    },
                                    
                                    // dataType: "json"
                                });
                                
                                // document.getElementById('det_r').innerHTML = detail;
                            }


                            // var stok = document.getElementById('stok').value ;
                            if(stok < 0){
                                alert('stok kosong'+ stok);
                            }else if(stok > 0){
                                getOption();
                            }

                            // console.log(detail);
                            // console.log(moment(start).format('LL') + "Hello World!"+moment(end).format('LL') + difference);
                        }

                        
                        $(function() {
                            $('#datefilter').daterangepicker({
                                "autoApply": true,
                                "locale": {
                                    "format": "MMM DD, YYYY",
                                    "separator": " - ",
                                    "applyLabel": "Apply",
                                    "cancelLabel": "Cancel",
                                    "fromLabel": "From",
                                    "toLabel": "To",
                                    "customRangeLabel": "Custom",
                                    "weekLabel": "W",
                                    "daysOfWeek": ["Su","Mo","Tu","We","Th","Fr","Sa"],
                                    "monthNames": ["January","February","March","April","May","June","July","August","September","October","November","December"],
                                    "firstDay": 1
                                },
                                "minDate": new Date(),
                                "startDate": new Date(),//  moment().format('MM/DD/YYYY'),
                                "endDate": new Date(Date.now() + ( 3600 * 1000 * 24)), // moment().format('MM/DD/YYYY'),
                                "opens": "center",
                                "drops": "auto"
                            }, function(start, end, label) {

                                var obj = "";
                                $('#listharga').empty().append(obj);

                                // $('#cekin').val(start.format('YYYY-MM-DD'));
                                var code = document.getElementById('code').value
                                var name = document.getElementById('name').value
                                // var hrg = document.getElementById('order-items').value
                                var awal = moment(start);
                                var akhir = moment(end);
                                var difference = akhir.diff(awal, 'days')

                                // CekAlotment(start, end, difference, code);

                                document.getElementById('cek_in').value = moment(start).format('Y-M-D') ;
                                document.getElementById('cek_out').value = moment(end).format('Y-M-D') ;
                                // console.log(awal)
                                // const subtotal = hrg * difference ;
                                // document.getElementById('namebooking').innerHTML = name ;
                                FungsiHitung(start, end, difference, code);


                                // document.getElementById('totalbayar').innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(total_bayar); ;
                                // document.getElementById('totalorder').innerHTML = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'IDR' }).format(totl); ;
                                document.getElementById('hari').value = difference ;
                                // console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + difference + ')');

                                // const bayar_dolar = total_bayar / rate_usd ;
                                
                                // console.log(bayar_dolar);
                            });
                        });

                        function payPal(){
                            var formElement = document.getElementById("form-configure");
                            var formData = new URLSearchParams(new FormData(formElement)).toString()

                            var name = document.getElementById('name').value;
                            var email = document.getElementById('email').value;
                            var nationality = $("#country_name option:selected").val(); //document.getElementById('nationality').value;
                            var country_name = $("#country_name option:selected").text();
                            var mobile = document.getElementById('mobile').value;
                            var cekin = document.getElementById('cek_in').value;
                            var cekout = document.getElementById('cek_out').value;

                            if(cekin !== '' && cekout !== '' && name !== '' && email !== '' && nationality !== ''){

                                let arrGuest = {
                                    name: name,
                                    email: email,
                                    nationality: nationality,
                                    country_name: country_name,
                                    phone: mobile
                                }
                                localStorage.setItem('guest', JSON.stringify(arrGuest));
                                window.open("{{ url('/paypal/payment?')}}" + formData);
                            }else{
                                alert("Please Complete Form")
                            }

                            

                        }
                        
                        
                    </script>
                    @endsection
                    
                    
                    </div>
                </div>
            </div>

            <style>
               
            </style>
            @if(session()->has('flash_msg_success'))
                <div class="alert alert-success">
                    {{ session()->get('flash_msg_success') }}
                </div>
            @endif
            
            
            
            
            <div class="container" id="form_review">
                <div class="row">
                    <div class="col mt-4">
                        <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                            @csrf
                            <p class="font-weight-bold ">Review</p>

                            <div class="row">
                                <div class="col-xl-6 form-group">
                                <input class="form-control" type="text" name="name" id="name_rev" placeholder="Name" >
                                </div>
                                <div class="col-xl-6 form-group">
                                    <input type="hidden" name="booking_id" id="booking_id">
                                    <input type="hidden" name="product_code" value="{{ $hotelDetail[0]->code }}">
                                    <input class="form-control" type="email" name="email" id="email_rev" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <div class="rate">
                                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                            <div class="col">
                                <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                            </div>
                            </div>
                            <div class="mt-3 text-right">
                            <button class="btn btn-sm py-2 px-3 btn-info">Submit
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
               

        </div>
    </section><!-- End About Section -->
   

@stop