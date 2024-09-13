<!-- Start Sale Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Sản phẩm khuyến mãi</h1>
                <p>
                    Chúng tôi đang có chương trình giảm giá đặc biệt cho sản phẩm này, giúp bạn tiết kiệm hơn mà vẫn sở hữu được chất lượng tuyệt vời. Đừng bỏ lỡ cơ hội này để mua sắm thông minh và tiết kiệm!
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($product_sale as $product_item)
            <div class="col-12 col-md-4 mb-4">
                <x-product-card :productitem="$product_item"/>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Sale Product -->