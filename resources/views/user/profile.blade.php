@extends('base')
@section('head')
    <title>Thông tin - {{ $user->first_name." ".$user->last_name }}</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <div><img src="{{ url('images/github.png')}}" alt="" class="img-fluid"></div>
                    <h3 class="text-info">{{ $user->first_name." ".$user->last_name }}</h3>
                </div>
                <div class="col-md-8">
                   <div class="row">
                        <div class="col-md-4">
                            <span class="text-size-90 text-gray-600">Tham gia ngày:</span>
                            <span class="text-size-90">{{date('d/m/Y', strtotime($user -> created_at))}}</span>
                        </div>
                        <div class="col-md-4">
                            <span class="text-size-90 text-gray-600">Bài viết:</span>
                            <span class="text-size-90">{{$user -> Item -> count()}}</span>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection