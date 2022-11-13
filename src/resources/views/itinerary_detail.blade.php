@extends('layouts.base')

@section('content')

    <div style="display: flex; align-items:flex-end;">

        {{-- しおり画像 --}}
            <img src="storage/{{$tolavel_itinerary->itinerary_picture}}" width="300" height="200">
        
        {{-- しおりタイトル --}}
            <div class="card bg-light text-white" style="width:300px; height:180px; margin-left: 1rem;">
                <a href="{{ route('itinerary_detail', ['itinerary_no'=>$tolavel_itinerary->itinerary_no]) }}">
                <div class="card-body">
                    <h5 class="card-title">{{$tolavel_itinerary->itinerary_title}}</h5>
                    {{-- <div class="card-text">{{$tolavel_itinerary->StartDate}} - {{$tolavel_itinerary->EndDate}}</div> --}}
                </div>
                </a>
            </div>

    </div>

    <div class="table-responsive">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col"> DAY1</th>
                    <th scope="col">MM/DD/YYYY</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <form action="/itinerary_edit" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="itinerary_no" value="{{$tolavel_itinerary->itinerary_no}}">
                        {{-- 開始時間 --}}
                        <th scope="row">
                            <input type="datetime-local" class="form-control" name="itinerary_detail_start_at">
                        </th>
                        {{-- 終了時間 --}}
                        <th scope="row">
                            <input type="datetime-local" class="form-control" name="itinerary_detail_end_at">
                        </th>
                        {{-- カテゴリ(アイコン) --}}
                        <td>
                            <select class="custom-select" name="itinerary_detail_category_no">
                                <option value="1">movement</option>
                                <option value="2">meal</option>
                                <option value="3">stay</option>
                                <option value="4">shopping</option>
                            </select>
                        </td>
                        {{-- 詳細タイトル --}}
                        <td>
                            <input type="text" class="form-control" name="itinerary_detail_title">    
                        </td>
                        {{-- 備考 --}}
                        <td>
                            <input type="text" class="form-control" name="itinerary_detail_notes">    
                        </td>
                        {{-- 費用 --}}
                        <td>
                            <input type="number" class="form-control" name="itinerary_detail_cost">    
                        </td>
                        {{-- 画像 --}}
                        <td>
                            <input type="file" class="form-control" name="itinerary_detail_picture"> 
                        </td>
                        <td>
                            <button type="submit" class="btn-sm btn-primary">add</button>
                        </td>
                    </form>
                </tr>

                @foreach($tolavel_itinerary_details as $tolavel_itinerary_detail)
                    <tr>
                        {{-- 開始時間 --}}
                        <th scope="row">{{$tolavel_itinerary_detail->itinerary_detail_start_at}}</th>
                        {{-- 終了時間 --}}
                        <td scope="row">{{$tolavel_itinerary_detail->itinerary_detail_end_at}}</td>
                        {{-- カテゴリ(アイコン) --}}
                        <td>{{$tolavel_itinerary_detail->itinerary_detail_category_no}}</td>
                        {{-- 詳細タイトル --}}
                        <td>{{$tolavel_itinerary_detail->itinerary_detail_title}}</td>
                        {{-- 備考 --}}
                        <td>{{$tolavel_itinerary_detail->itinerary_detail_notes}}</td>
                        {{-- 費用 --}}
                        <td>&yen;{{$tolavel_itinerary_detail->itinerary_detail_cost}}-</td>
                        {{-- 画像 --}}
                        <td><img src="storage/{{$tolavel_itinerary_detail->itinerary_detail_picture}}" width="100" height="50"></td>
                    </tr>
                @endforeach

            </tbody>
        </table>      
    </div>

@endsection