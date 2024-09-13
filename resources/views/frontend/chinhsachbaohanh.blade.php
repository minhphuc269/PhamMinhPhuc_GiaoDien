@extends('layouts.site')
@section('title','Chính sách bảo hành')
@section('header')
<link rel="stylesheet" href="product.css">
@endsection
@section('content')
<div class="container">
    <h2 id="cap">{{ $chinhsachbaohanh->title }}</h2>
    <div class="container">
        {!! $chinhsachbaohanh->detail !!}
    </div>
</div>
@endsection