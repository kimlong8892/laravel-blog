@extends('base')
    <title>Chuyên mục - {{ $myCategory->name }}</title>
@section('head')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p>{!! "Tìm thấy <span class='text-success'>".$listItem->total()."</span> kết quả cho chuyên mục [<span class='text-success'>".$myCategory->name."</span>]" !!}</p>
        </div>
        <div class="col-md-12 p-3">
            {{ $listItem->render() }}
        </div>
        <div class="col-md-12">
            <div class="row">
                @include('include.list-item');
            </div>
        </div>
        <div class="col-md-12 p-3">
            {{ $listItem->render() }}
        </div>
    </div>
@endsection