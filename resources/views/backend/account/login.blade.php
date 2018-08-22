@extends('backend.layout.baseAccount')
@section('content')
<form class="validate-form" >
    <h2 class="form-signin-heading text-center">Đăng nhập hệ thống</h2>
    <span class="error"></span>
    <div class="form-group">
        <label>Email <span class="require">*</span></label>
        <input type="text" class="form-control input100" autofocus autocomplete="off" placeholder="Email" name="email">
        <span class="has-val"></span>
    </div>
    <div class="form-group">
        <label>Mật khẩu <span class="require">*</span></label>
        <div class="input-password">
            <input type="password" class="form-control input100" autocomplete="off" placeholder="Mật khẩu" name="password">
            <span class="has-val"></span>
            <sapn class="btn-show-pass">
                <i class="far fa-eye"></i>
            </sapn>
        </div>
    </div>
    <a href="{{ asset(route('forgot-password')) }}" class="forgot-password">Quên mật khẩu?</a>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
</form>
@endsection
