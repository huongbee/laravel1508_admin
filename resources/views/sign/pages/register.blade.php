@extends('sign.layout')
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
        <form>
            <div class="form-group">
                <label for="un">Username:</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="un">Họ tên:</label>
                <input type="text" class="form-control" id="fullname">
            </div>

            <div class="form-group">
                <label for="un">Ngày sinh:</label>
                <input type="date" class="form-control" id="d=birthdate">
            </div>

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>

            <div class="form-group">
                <label for="un">Giới tính:</label>
                <label class="radio-inline">
                    <input type="radio" name="gender"> Nữ
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender"> Nam
                </label>
            </div>
            <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Điện thoại:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <button type="submit" class="btn btn-success">Đăng kí</button>
            </form>
    </div><!-- /card-container -->
@endsection