@extends('layouts.site')
@section('title','Chính sách mua hàng')
@section('header')
<link rel="stylesheet" href="product.css">
@endsection
@section('content')
<div class="container">
    <h2 id="cap">{{ $chinhsachmuahang->title }}</h2>
    <div class="container">
        {!! $chinhsachmuahang->detail !!}
    </div>
</div>
@endsection