@extends('base')
@section('head')
    <title>{{ $item->name }}</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>{{ $item->name }}</h1>
            <p>Được đăng bởi <a href="">{{ $item->User->first_name." ".$item->User->last_name }}</a></p>
            <div>
                <i class="far fa-calendar"></i>
                <span>{{ $item->updated_at }}</span>
            </div>
        </div>
        <div class="col-md-6 offset-3 p-3">
            @foreach($item->Categorys as $category)
                <a href="{{ url('category/'.$category->name_url."/".$category->id) }}" class="badge badge-pill badge-info">{{ $category->name }}</a>
            @endforeach
        </div>
        <div class="col-md-12 p-2 mb-2 card" style="border-radius: 0;">{!! $item->content !!}</div>
        @if($item->Links->count() > 0)
            <div class="col-md-12 mt-3">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span class="font-weight-bold">Máy chủ</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <span class="font-weight-bold">Tên file</span>
                    </div>
                    <div class="col-md-4 text-right">
                        <span class="font-weight-bold">Hành động</span>
                    </div>
                </div>
            </div>
            @foreach ($item->Links as $link)
                <div class="col-md-12 p-2 card mt-1 mb-2">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ url($link->Type->image) }}" width="64px">
                            <span class="text-info">{{ $link->Type->name }}</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <span class="font-italic">{{ $link->title }}</span>
                        </div>
                        <div class="col-md-4 text-right">
                            <a target="_blank" class="btn btn-primary link-sort" href="{{ $link->src }}">DOWNLOAD</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection