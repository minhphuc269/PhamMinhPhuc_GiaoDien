@extends('layouts.site')
@section('title','Chính sách vận chuyển')
@section('header')
<link rel="stylesheet" href="product.css">
@endsection
@section('content')
<div class="container">
    <h2 id="cap">{{ $chinhsachvanchuyen->title }}</h2>
    <div class="container">
        {!! $chinhsachvanchuyen->detail !!}
    </div>
</div>
@endsection