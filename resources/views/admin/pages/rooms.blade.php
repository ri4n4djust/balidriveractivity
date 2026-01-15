@extends('layouts.app', ['page' => __('Rooms'), 'pageSlug' => 'rooms'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Hotels Room</h4>
        <a href="/room-add" class="btn btn-fill btn-primary">Add</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Desc</th>
                <th class="text-center">Price</th>
                <th class="text-center">Allotment</th>
                <th class="text-center">Language</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($room as $rm)
              <tr>
                <td>{{$rm->code}}</td>
                <td>{{$rm->title}}</td>
                <td>{!! substr($rm->desc, 0, 60) !!}</td>
                <td>{{$rm->price}}</td>
                <td class="text-center">{{$rm->alotment}}</td>
                <td>{{$rm->lang}}</td>
                <td>
                  <a href="{{ route('room.edit',['room_code' => $rm->id]) }}"><i class="tim-icons icon-pencil"></i></a>
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
