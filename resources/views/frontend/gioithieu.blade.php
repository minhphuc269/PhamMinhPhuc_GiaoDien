@extends('layouts.site')
@section('title','Tất cả sản phẩm')
@section('header')
<link rel="stylesheet" href="product.css">
@endsection
@section('content')
<div class="container">
    <h2 id="cap">{{ $gioithieu->title }}</h2>
    <div class="container">
        {!! $gioithieu->detail !!}
    </div>
</div>
@endsection