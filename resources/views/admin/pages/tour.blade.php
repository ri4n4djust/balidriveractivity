@extends('layouts.app', ['page' => __('Tour'), 'pageSlug' => 'tours'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Tour Packages</h4>
        <a href="/tour-add" class="btn btn-fill btn-primary">Add</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">Code</th>
                <th>Name</th>
                <th>Type</th>
                <th>Desc</th>
                <th class="text-center">Language</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($tour as $tur)
              <tr>
                <td>{{$tur->code}}</td>
                <td>{{$tur->tour_name}}</td>
                <td>{{$tur->type}}</td>
                <td>{!! substr($tur->itinerary, 0, 60) !!}</td>
                <td>{{$tur->lang}}</td>
                <td>
                  <a href="{{ route('tour.edit',['tour_code' => $tur->id]) }}"><i class="tim-icons icon-pencil"></i></a>
                  <i class="tim-icons icon-trash-simple"></i>
                </td>
              </tr>
            @endforeach  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
