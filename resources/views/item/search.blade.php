@extends('base')
@section('head')
    <title>Tìm kiếm - {{ $txtSearch }}</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="text-success">Tìm thấy {{ $listItem->total() }} kết quả với từ khóa <span class="text-primary">{{ $txtSearch }}</span></p>
        </div>
        <div class="col-md-12 p-3">
            {{ $listItem->render() }}
        </div>
        <div class="col-md-12">
            <div class="row">
                @include('include.list-item')
            </div>
        </div>
        <div class="col-md-12 p-3">
            {{ $listItem->render() }}
        </div>
    </div>
@endsection