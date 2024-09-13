<div class="card h-100">
    <a href="{{ route('site.product.detail',['slug'=>$product->slug]) }}">
        <img src="{{ asset('images/products/'.$product->image) }}" class="card-img-top" alt="{{ $product->image }}">
    </a>
    <div class="card-body">
        <ul class="list-unstyled d-flex justify-content-between">
            @if ($product->pricesale>0 && $product->pricesale<$product->price)
            <div class="col-9">{{ number_format($product->pricesale) }} 
                <del>{{ number_format($product->price) }}</del></div>
            <div class="col-3 text-end">50%</div>
            @else
            <div class="col-12">{{ number_format($product->price) }}</div>
            @endif
            
        </ul>
        <a href="{{ route('site.product.detail',['slug'=>$product->slug]) }}" class="h2 text-decoration-none text-dark">{{ $product->name }}</a>
        <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt, consectetur adipisicing elit.
        </p>
        <p class="text-muted">
            <div class="product-action">
                <a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-heart"></i></a>
                <a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a>
                <a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a>
            </div>
        </p>
    </div>
</div>