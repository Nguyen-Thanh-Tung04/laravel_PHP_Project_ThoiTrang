@extends('layouts.master')

@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area" style="height: 50px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Đăng nhập - Đăng ký</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Đăng nhập - đăng ký</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->
<!-- login area start -->
<div class="login-register-area pt-100px pb-100px">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-bs-toggle="tab" href="#lg1">
                            <h4>Đăng nhập</h4>
                        </a>
                        <a data-bs-toggle="tab" href="#lg2">
                            <h4>Đăng ký</h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email:</label>
                                                <input type="email" class="form-control" name="email">
                                                @error('email')
                                                <span class="text-danger">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Mật khẩu:</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                           
                                            @error('password')
                                            <span class="text-danger">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                            @enderror
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">ghi nhớ</a>
                                                <a href="index.php?act=quenmk">Quên mật khẩu ?</a>
                                            </div>
                                            <div class="dangky col-lg-3 my-3">
                                                <input type="submit" value="Đăng Nhập" name="dangnhap">
                                            </div>
                                        </div>
                                    </form>
                                    <p class="thongbao" style="color: red;">

                                    </p>


                                </div>
                            </div>


                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <div class="mt-16 container">
                                        <h2>Đăng ký tài khỏan</h2>
                                        <form action="{{route('register')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="" class="form-label">Tên:</label>
                                                <input type="text" class="form-control" name="name">
                                                @error('name')
                                                    <span class="text-danger">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email:</label>
                                                <input type="email" class="form-control" name="email">
                                                @error('email')
                                                <span class="text-danger">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Mật khẩu:</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nhập lại mật khẩu:</label>
                                                <input type="password" class="form-control" name="password_confirmation">
                                            </div>
                                            @error('password')
                                            <span class="text-danger">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                            @enderror
                                            <button class="btn btn-primary" type="submit">Đăng ký</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->
@endsection
