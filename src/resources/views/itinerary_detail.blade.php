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
                    <form action="/itinerary_edit" name="itinerary_edit" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="itinerary_detail_title" placeholder="詳細タイトル">    
                        </td>
                        {{-- 備考 --}}
                        <td>
                            <input type="text" class="form-control" name="itinerary_detail_notes" placeholder="備考">    
                        </td>
                        {{-- 費用 --}}
                        <td>
                            <input type="number" class="form-control" name="itinerary_detail_cost" placeholder="費用">    
                        </td>
                        {{-- 画像 --}}
                        <td>
                            <input type="file" class="form-control" name="itinerary_detail_picture"> 
                        </td>
                        <td>
                            <a href="javascript:itinerary_edit.submit()">
                                <span class="material-symbols-outlined">
                                    add
                                </span>
                            </a>
                        </td>
                    </form>
                </tr>

                {{-- 詳細一覧の場合 --}}
                @if ($view_flg == 0)
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
                            {{-- 詳細リンク --}}
                            <td>
                                {{-- view_flg: 0_detaillist 1_detailedit --}}
                                <a href="{{ route('itinerary_detail', ['itinerary_no'=>$tolavel_itinerary->itinerary_no,'itinerary_detail_no'=>$tolavel_itinerary_detail->itinerary_detail_no,'view_flg'=>1]) }}">
                                    <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>      
    </div>

    {{-- 詳細編集の場合 --}}
    @if ($view_flg == 1)
    
        <div class="card">
            {{-- <img src="storage/{{$tolavel_itinerary_details->itinerary_detail_picture}}" class="card-img-top" alt="..."> --}}
            <div class="card-body">
                {{-- <h5 class="card-title">{{$tolavel_itinerary_details->itinerary_detail_title}}</h5> --}}
                {{-- <p class="card-text">{{$tolavel_itinerary_details->itinerary_detail_title}}</p> --}}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$tolavel_itinerary_details->itinerary_detail_phonenumber}}</li>
                <li class="list-group-item">{{$tolavel_itinerary_details->itinerary_detail_address}}</li>
                <li class="list-group-item">{{$tolavel_itinerary_details->itinerary_detail_url}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

    @endif

@endsection