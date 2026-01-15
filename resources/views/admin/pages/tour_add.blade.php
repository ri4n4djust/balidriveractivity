@extends('layouts.app', ['page' => __('Add Tour'), 'pageSlug' => 'tour_add'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Tour</h4>
        
      </div>
      <div class="card-body">

      <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="row">
          <div class="form-group col-lg-6">
            <label>Code</label>
            <input type="hidden" name="id" class="form-control" placeholder="code" value="{{ $tourDetail->id ?? '' }}" >
            <input type="text" name="code" class="form-control" placeholder="code" value="{{ $tourDetail->code ?? '' }}" >
          </div>
          <div class="form-group col-lg-6">
              <label>Name</label>
              <input type="text" name="tour_name" class="form-control" placeholder="Title" value="{{ $tourDetail->tour_name ?? '' }}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-6">
            <label>Lang</label>
            <input type="text" name="lang" class="form-control" placeholder="Lang" value="{{ $tourDetail->lang ?? '' }}">
          </div>
          <div class="form-group col-lg-6">
              <label>Type</label>
              <input type="text" name="type" class="form-control" value="{{ $tourDetail->type ?? '' }}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-6">
            <label>slug</label>
            <input type="text" name="slug" class="form-control" placeholder="slug" value="{{ $tourDetail->slug ?? '' }}">
          </div>
          <div class="form-group col-lg-6">
            <label>area</label>
            <input type="text" name="area_tour" class="form-control" placeholder="area_tour" value="{{ $tourDetail->area_tour ?? '' }}">
          </div>
        </div>
        <div class="form-group">
            <label>Itinerary</label>
            <textarea class="form-control" id="itinerary" name="itinerary" >{{ $tourDetail->itinerary ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <textarea class="form-control" id="price" name="price" >{{ $tourDetail->price ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Pickup</label>
            <textarea class="form-control" id="pickup" name="pickup" >{{ $tourDetail->pickup ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Payment</label>
            <textarea class="form-control" id="payment" name="payment" >{{ $tourDetail->payment ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Note</label>
            <textarea class="form-control" id="note" name="note" >{{ $tourDetail->note ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Destination  </label>
            
                <label class="checkbox-inline">
                 
                @if(isset($tourDetail))
                  @php $fasi = explode(";",$tourDetail->destination) ; @endphp
                    @foreach($destinasi as $desti)
                      @if(in_array($desti->id, $fasi))
                        <input type="checkbox" id="destination" name="destination[]" value="{{ $desti->id }}" checked />{{$desti->name}} - {{$desti->lang}}
                      @else
                        <input type="checkbox" id="destination" name="destination[]" value="{{ $desti->id }}" />{{$desti->name}} - {{$desti->lang}}
                      @endif

                    @endforeach
                @else
                    @foreach($destinasi as $desti)
                        <input type="checkbox" id="destination" name="destination[]" value="{{ $desti->id }}" />{{$desti->name}} - {{$desti->lang}}
                    @endforeach
                @endif
               
                </label>

        </div>
        <div class="form-group">
            <div class="needsclick dropzone" id="document-dropzone"></div>
        </div>
        <button type="submit" class="btn btn-fill btn-primary">Simpan</button>
      </form>

      </div>
    </div>
  </div>
  
</div>
          <!-- <textarea class="my-edit form-control" id="my-edit" name="wysiwyg-editor"></textarea> -->
          
  @push('js')
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('itinerary', options);
    CKEDITOR.replace('price', options);
    CKEDITOR.replace('pickup', options);
    CKEDITOR.replace('payment', options);
    CKEDITOR.replace('note', options);


    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
      url: '{{ route('tour.storeMedia') }}',
      maxFilesize: 10, // MB
      acceptedFiles: '.png, .jpg',
      addRemoveLinks: true,
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      success: function (file, response) {
        console.log(file);
        $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
        uploadedDocumentMap[file.name] = response.name
      },
      removedfile: function (file) {
        // console.log(file.xhr);
        if(file.xhr === undefined){
          nama = file.name ;
        }else{
          var response = JSON.parse(file.xhr.response);
          nama = response.name ;
          console.log(response.name);
        }
        $.ajax({
            headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
            type:'POST',
            url:'/tour/media/delete',
            data : { "filetodelete" : nama },
            success : function (data) {
              // console.log(data)
              
            }
        }); 
        file.previewElement.remove()
        var name = ''
        if (typeof nama !== 'undefined') {
          name = nama
        } else {
          name = uploadedDocumentMap[nama]
        }
        $('form').find('input[name="document[]"][value="' + name + '"]').remove()     
      
      },
      init: function () {
        // console.log('onload dropzone');

        @if(isset($tourDetail) && $tourDetail->foto)
          var filess = {!! json_encode($tourDetail->foto) !!}
          var filesa = filess.split(';');

          const files = [];
          for (let a = 0; a < filesa.length -1; a++) {
              files.push ({
                  'file_name': filesa[a],
              });
              // console.log(filesa[a])
          }

          // console.log(files);
          for (var i in files) {
            var file = files[i]
            // console.log(this)
            // this.files.push(file);

            // this.options.addedfile.call(this, file)
            // file.previewElement.classList.add('dz-complete')

            // var principal = '@Model.Article.Image'; 
            let mockFile = { name: file.file_name, size: 12345, type: 'image/jpg', accepted: true };
            this.emit("addedfile", mockFile);
            this.emit("thumbnail", mockFile, "/assets/img/tour/" + file.file_name)
            {
                $('[data-dz-thumbnail]').css('height', '120');
                $('[data-dz-thumbnail]').css('width', '120');
                $('[data-dz-thumbnail]').css('object-fit', 'cover');
            };              
            this.emit('complete', mockFile);
            this.files.push(mockFile);

            $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
          }
        @endif
      }
    }
    
  </script>
 
  @endpush
@endsection
