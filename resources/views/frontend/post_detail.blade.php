@extends('layouts.site')
@section('title', $post->title)
@section('content')
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" id="{{ asset('images/posts/' . $post->image) }}">
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">Active Wear</h1>
                        <p class="h3 py-2">$25.00</p>
                        <h6>Chi tiết bài viết:</h6>
                        <p>{{ $post->detail }}</p>
                        <h6>Mô tả bài viết:</h6>
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row text-left p-2 pb-3">
            <h4>Bài viết liên quan</h4>
        </div>
        <div id="carousel-related-product">
            @foreach ($chitiet_posts as $related_post)
                <img class="card-img img-fluid"  src="{{ asset('images/posts/' . $related_post->image) }}" alt="{{ $related_post->title }}">
                    <div class="card-body">
                        <a href="shop-single.html" class="h3 text-decoration-none">{{ $related_post->title }}</a>
                        <a href="{{ route('site.post.detail', ['slug' => $related_post->slug]) }}" class="btn btn-primary">Đọc tiếp</a>
                    </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
