@extends('layouts.base')

@section('content')

  <ol style="list-style: none; padding-left: 0; display: flex; flex-wrap: wrap;">
  
    <li>
      <form action="/itinerary_create" name="itinerary_create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card bg-light text-white" style="width: 18rem; margin: 1rem;">
          {{-- <a href="{{ route('itinerary_detail', ['itinerary_no'=>$tolavel_itinerary->itinerary_no]) }}"> --}}
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <input type="text" class="card-title form-control" name="itinerary_title" placeholder="しおりタイトル">
                </div>
                <div class="col-3">
                  <a href="javascript:itinerary_create.submit()">
                    <span class="material-symbols-outlined">
                        add
                    </span>
                  </a>
                </div>
              </div>
              {{-- <div class="card-text">{{$tolavel_itinerary->StartDate}} - {{$tolavel_itinerary->EndDate}}</div> --}}
              <input type="file" name="itinerary_picture" class="form-control" multiple onchange="previewImage(this);">
              <img class="card-img" id="preview" src="storage/ishigaki.JPG" width="300" height="150">
              <script>
                function previewImage(obj)
                {
                  var fileReader = new FileReader();
                  fileReader.onload = (function() {
                    document.getElementById('preview').src = fileReader.result;
                  });
                  fileReader.readAsDataURL(obj.files[0]);
                }
                </script>
            </div>
          {{-- </a> --}}
        </div>
      </form>
    </li>

    @foreach($tolavel_itinerarys as $tolavel_itinerary)
      <li>
        <div class="card bg-light text-white" style="width: 18rem; margin: 1rem;">
          {{-- view_flg: 0_detaillist 1_detailedit --}}
          <a href="{{ route('itinerary_detail', ['itinerary_no'=>$tolavel_itinerary->itinerary_no,'view_flg'=>0]) }}">
            <div class="card-body">
              <h5 class="card-title">{{$tolavel_itinerary->itinerary_title}}</h5>
              {{-- <div class="card-text">{{$tolavel_itinerary->StartDate}} - {{$tolavel_itinerary->EndDate}}</div> --}}
              <img class="card-img" src="storage/{{$tolavel_itinerary->itinerary_picture}}" width="300" height="200">
            </div>
          </a>
        </div>
      </li>
    @endforeach
    
  </ol>
  
@endsection