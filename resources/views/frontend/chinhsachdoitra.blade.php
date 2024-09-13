@extends('layouts.site')
@section('title','Chính sách đổi trả')
@section('header')
<link rel="stylesheet" href="product.css">
@endsection
@section('content')
<div class="container">
    <h2 id="cap">{{ $chinhsachdoitra->title }}</h2>
    <div class="container">
        {!! $chinhsachdoitra->detail !!}
    </div>
</div>
@endsection