@extends('layouts.master')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area" style="height: 50px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Giỏ hàng</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">giỏ hàng</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="cart-page-title">Giỏ hàng của bạn</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table class="table table-bordered table-striped table-hover">

                        <thead class="cart-table">
                            <tr>
                                <th>STT</th>
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Màu</th>
                                <th>Size</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $id => $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <input type="hidden" value="" />
                                <td class="product-thumbnail">
                                    @if(isset($item['img']))
                                    <img src="{{ Storage::url($item['img']) }}" alt="Product" style="height: 100px" />
                                @else
                                    <img src="{{ asset('path_to_default_image') }}" alt="Default Image" />
                                @endif                                    {{-- <a href=""><img class="img-responsive"
                                            src="" alt="" /></a> --}}
                                </td>
                                <td class="product-name"><a
                                        href="">{{ $item['name'] }}</a></td>
                                <td class="product-price-cart">{{ $item['price'] }}<span
                                        class="amount"></span></td>
                                <td class="color"></td>
                                <td class="size"></td>
                                <td class="product-quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box quantity-change" required type="text" maxlength="1"
                                            onblur="validateInput(this);" name="qtybutton" value="1" />
                                    </div>
                                </td>
                                <td class="product-subtotal">{{ $item['price'] }}</td>
                                <td class="product-remove">
                                    <a href="" onclick="showConfirmationDialog(this.href, event)"><i
                                            class="icon-close"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>


                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="index.php">Tiếp tục mua sắm</a>
                                </div>
                                <div class="cart-shiping-update">
                                    <a href="index.php?act=xoahet_cart"
                                        onclick="showConfirmationDialog(this.href, event)">Xóa giỏ hàng</a>
                                </div>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-lg-end">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-clear">
                                        <a href="index.php?act=thanhtoan">Tiến hành thanh toán</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
@endsection
