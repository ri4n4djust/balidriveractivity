@extends('layouts.app', ['page' => __('Mix Tours'), 'pageSlug' => 'mix-tours'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Products</h4>
        <a href="/products-add" class="btn btn-fill btn-primary">Add</a>
      </div>
      <div class="card-body">
        <script>
            function submitForm() {
                document.getElementById('aktivitySearch').submit();
            }
        </script>
        <form id="productsSearch" method="GET" action="{{ route('pages.products', 'cari') }}" class="form-inline">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search by code, name, or area" value="{{ request('q') }}">
            <button type="submit" class="btn btn-primary ml-2">Search</button>
            <a href="{{ route('pages.products', 'all') }}" class="btn btn-secondary ml-2">Clear</a>
          </div>
        
          <div class="form-group">
            <label for="perPage">Per Page:</label>
            <select name="perPage" id="perPage" class="form-control" onchange="this.form.submit()">
              <option value="10" {{ request('perPage') == 10 ? 'selected' : '' }}>10</option>
              <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
              <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
              <option value="100" {{ request('perPage') == 100 ? 'selected' : '' }}>100</option>
            </select>
        </form>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">Code</th>
                <th>Name</th>
                <th>Aktivity</th>
                <th>Price</th>
                <th>Desc</th>
                <th>Lang</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($products as $tur)
              <tr>
                <td>{{$tur->product_code}}</td>
                <td>{{$tur->product_name}}</td>
                <td>
                  @foreach ($activities->where('lang', $tur->lang) as $activity)
                  @php $parentTypes = explode(';', $tur->parent_type); @endphp
                    @if (in_array($activity->code, $parentTypes))
                      {{ $activity->name }}<br/>
                    @endif
                  @endforeach
                </td>
                <td>{{$tur->price}}</td>
                <td>{!! substr($tur->product_des, 0, 60) !!}</td>
                <td>{{$tur->lang}}</td>
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
