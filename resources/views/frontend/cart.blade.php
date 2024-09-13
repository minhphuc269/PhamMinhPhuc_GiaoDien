@extends('layouts.site')
@section('title','Tất cả sản phẩm')
@section('header')
<link rel="stylesheet" href="product.css">
@endsection
@section('content')

<div class="container">
    <h1>GIỎ HÀNG CỦA TÔI</h1>
    <form action="{{ route('site.cart.update') }}" method="post">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width: 30px">Mã</th>
                    <th class="text-center" style="width: 90px">Hình</th>
                    <th class="text-center">Tên sản phẩm</th>
                    <th class="text-center">Giá</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Thành tiền</th>
                    <th class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalMoney=0;
                @endphp
                @foreach ($list_cart as $row_cart)
                <tr>
                    <td class="text-center">{{ $row_cart['id']}}</td>
                    <td>
                        <img class="img-fluid w-100" src="{{ asset('images/products/'.$row_cart['image'])}}" alt="{{$row_cart['image']}}">
                    </td>
                    <td class="text-center">{{$row_cart['name']}}</td>
                    <td class="text-center">{{number_format($row_cart['price'])}}</td>
                    <td class="text-center"><input style="width: 90px;" type="number" min="0" value="{{$row_cart['qty']}}" name="qty[{{ $row_cart['id'] }}]"></td>
                    <td class="text-center">{{number_format($row_cart['price']*$row_cart['qty'])}}</td>
                    <td class="text-center">
                        <a href="{{ route('site.cart.delete',['id'=>$row_cart['id']]) }}" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
                    @php
                        $totalMoney +=$row_cart['price']*$row_cart['qty'];
                    @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <a class="btn btn-success px-3" href="{{ route('site.home') }}">Mua thêm</a>
                        <button type="submit" class="btn btn-primary px-3">Cập nhật</button>
                        <a class="btn btn-info px-3" href="{{ route('site.cart.checkout') }}">Thanh toán</a>
                    </th>
                    <th colspan="3" class="text-end">
                        <strong>Tổng tiền:{{number_format($totalMoney)}}</strong>
                    </th>
    
                </tr>
            </tfoot>
        </table>
    </form>
</div>

@endsection
