@extends('layouts.app', ['page' => __('Products'), 'pageSlug' => 'products'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Products</h4>
        <a href="/products-add" class="btn btn-fill btn-primary">Add</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">Code</th>
                <th>Name</th>
                <th>Type</th>
                <th>Price</th>
                <th>Desc</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $tur)
              <tr>
                <td>{{$tur->product_code}}</td>
                <td>{{$tur->product_name}}</td>
                <td>{{$tur->parent_type}}</td>
                <td>{{$tur->price}}</td>
                <td>{!! substr($tur->product_des, 0, 60) !!}</td>
                <td>
                  <a href="{{ route('products.edit',['product_code' => $tur->id]) }}"><i class="tim-icons icon-pencil"></i></a>
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
