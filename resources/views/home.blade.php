@extends('base')
@section('head')
    <title>Trang chủ</title>
@endsection
@section('content')
    <div class="row">
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