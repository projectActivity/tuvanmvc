@extends('backend.layout.baseAccount')
@section('content')
<form class="validate-form" >
    <h2 class="form-signin-heading text-center">Quên mật khẩu</h2>
    <span class="error"></span>
    <div class="form-group">
        <label>Email <span class="require">*</span></label>
        <input type="text" class="form-control input100" autofocus autocomplete="off" placeholder="Email" name="email">
        <span class="has-val"></span>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Gửi</button>
</form>
@endsection
