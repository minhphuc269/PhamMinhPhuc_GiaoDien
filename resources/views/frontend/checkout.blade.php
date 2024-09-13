@extends('layouts.site')
@section('title','Tất cả sản phẩm')
@section('content')

<div class="container">
    <h1>THANH TOÁN</h1>
    <div class="row">
        <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 30px">Mã</th>
                            <th class="text-center" style="width: 90px">Hình</th>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Thành tiền</th>
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
                            <td>
                                {{$row_cart['qty']}}
                            </td>
                            <td class="text-center">{{number_format($row_cart['price'])}}</td>
                            <td class="text-center">{{number_format($row_cart['price']*$row_cart['qty'])}}</td>
                        </tr>
                            @php
                                $totalMoney +=$row_cart['price']*$row_cart['qty'];
                            @endphp
                        @endforeach
                    {{-- </tbody>
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
                    </tfoot> --}}
                </table>
        </div>
        <div class="col-md-3">
            <strong>Tổng tiền:{{number_format($totalMoney)}}</strong>
        </div>
    </div>
    @if (!Auth::check())
        <div class="row">
            <div class="col-12">
                <h3>Hãy đăng nhập để thanh toán</h3>
                <a href="{{ route('website.getlogin') }}">Đăng nhập</a>
            </div>
        </div>
    @else
        <form action="{{ route('site.cart.docheckout') }}" method="post">
            @csrf
            <div class="row my-5">
                @php
                    $user =Auth::user();
                @endphp
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Họ tên</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Điện thoại</label>
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Địa chỉ</label>
                        <input type="text" name="address" value="{{ $user->address }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label>Chú ý</label>
                        <textarea name="note" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-end">
                    <button class="btn btn-success" type="submit">Đặt mua</button>
                </div>
            </div>
        </form>
    @endif
</div>

@endsection
