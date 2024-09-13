<!-- Start New Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Sản phẩm mới nhất</h1>
                <p>Chúng tôi rất vui mừng giới thiệu sản phẩm mới nhất của cửa hàng, được thiết kế để đáp ứng mọi nhu cầu của bạn với chất lượng vượt trội và giá cả hợp lý!</p>
            </div>
        </div>
        <div class="row">
            @foreach ($product_new as $product_item)
            <div class="col-12 col-md-4 mb-4">
                <x-product-card :productitem="$product_item"/>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End New Product -->