@extends('sign.layout')
@section('title','Đăng kí tài khoản')

@section('content')

<style>
body{
    height:auto
}
.card-container.card {
    max-width: 550px;
    margin-bottom:100px
}
</style>
    <div class="card card-container">
        <h2>Đăng Kí Tài Khoản Admin</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $err) 
                    {{$err}}
                    <br>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{route('adminRegister')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="un">Username:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="un">Họ tên:</label>
                <input type="text" class="form-control" name="fullname">
            </div>

            <div class="form-group">
                <label for="un">Ngày sinh:</label>
                <input type="date" class="form-control" name="birthdate">
            </div>

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label for="un">Giới tính:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="nữ"> Nữ
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="nam"> Nam
                </label>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" class="form-control" name="phone">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Đăng kí</button>
            </form>
    </div><!-- /card-container -->
@endsection