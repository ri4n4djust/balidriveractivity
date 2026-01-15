@extends('layouts.app', ['page' => __('Aktifitas'), 'pageSlug' => 'activity'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Bali Activity</h4>
        <a href="/activity-add" class="btn btn-fill btn-primary">Add</a>
      </div>
      <div class="card-body">
        <script>
            function submitForm() {
                document.getElementById('aktivitySearch').submit();
            }
        </script>
        <form id="aktivitySearch" method="GET" action="{{ route('pages.activity', 'cari') }}" class="form-inline">
          <div class="form-group">
            <input type="text" name="q" class="form-control" placeholder="Search by code, name, or area" value="{{ request('q') }}">
            <button type="submit" class="btn btn-primary ml-2">Search</button>
            <a href="{{ route('pages.activity', 'all') }}" class="btn btn-secondary ml-2">Clear</a>
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
                <th>code</th>
                <th>name</th>
                <th>area</th>
                <th>type</th>
                <th class="text-center">desct</th>
                <th class="text-center">Language</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($activity as $rm)
              <tr>
                <td>{{$rm->code}}</td>
                <td>{{$rm->name}}</td>
                <td>{{$rm->area}}</td>
                <td>{{$rm->type}}</td>
                <td>{!! substr($rm->deskripsi, 0, 60) !!}</td>
                <td>{{$rm->lang}}</td>
                <td>
                  <a href="{{ route('activity.edit',['activity_code' => $rm->id]) }}"><i class="tim-icons icon-pencil"></i></a>
                  <i class="tim-icons icon-trash-simple"></i>
                </td>
              </tr>
            @endforeach  
            
            </tbody>
          
          </table>
          
                    
                    <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                        Showing {{ $activity->firstItem() }} to {{ $activity->lastItem() }} of {{ $activity->total() }} entries
                    </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection
