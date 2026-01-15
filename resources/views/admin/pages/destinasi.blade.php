@extends('layouts.app', ['page' => __('Destination'), 'pageSlug' => 'destinasi'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Bali Destinations</h4>
        <a href="/destinasi-add" class="btn btn-fill btn-primary">Add</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">

        <div class="row">
          <div class="form-group col-lg-3">
              <input type="text" name="code" class="form-control" placeholder="Judul" >
          </div>
          <div class="form-group col-lg-2">
           
            <button type="submit" class="btn btn-fill btn-primary">Cari</button>
          </div>
        </div>

          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>code</th>
                <th>name</th>
                <th class="text-center">desct</th>
                <th class="text-center">Type</th>
                <th class="text-center">Language</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($destinasi as $rm)
              <tr>
                <td>{{$rm->code}}</td>
                <td>{{$rm->name}}</td>
                <td>{!! substr($rm->deskripsi, 0, 60) !!}</td>
                <td>{{$rm->type}}</td>
                <td>{{$rm->lang}}</td>
                <td>
                  <a href="{!! route('destinasi.edit', ['type'=>'copy', 'id' => $rm->id]) !!}">Copy</a>
                  <a href="{!! route('destinasi.edit', ['type'=>'edit', 'id' => $rm->id]) !!}"><i class="tim-icons icon-pencil"></i></a>
                  <i class="tim-icons icon-trash-simple"></i>
                </td>
              </tr>
            @endforeach  
            </tbody>
          </table>
          
          <a href="{{ $destinasi->previousPageUrl()}}">Prev</a> | <a href="{{ $destinasi->nextPageUrl()}}">Next</a>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection
