@extends('layout')
@section('title','Sửa thông tin sản phẩm')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        <b>Sửa thông tin sản phẩm 
            <span style="color:blue">{{$food->name}}</span>
        </b>
        </div>
        <div class="panel-body">
            <form action="{{route('editProduct',$food->id)}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Tên sản phẩm:</label>
                <input type="text" value="{{$food->name}}" class="form-control" name="name" placeholder="Nhập tên sp">
            </div>
            <div class="form-group">
                <label for="pwd">Chọn loại:</label>
                <select name="loai" class="form-control">
                    @foreach($loaiSP as $loai)
                    <option value="{{$loai->id}}" @if($food->id_type==$loai->id) selected @endif >{{$loai->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Giá sản phẩm:</label>
                <input type="text" value="{{number_format($food->price)}}" class="form-control" name="price" placeholder="Nhập giá sp">
            </div>
            <div class="form-group">
                <label for="">Giá khuyến mãi:</label>
                <input type="text" value="{{$food->promotion_price}}" class="form-control" name="promotion_price" placeholder="Nhập giá khuyến mãi">
            </div>
            <div class="form-group">
                <label for="">SP khuyến mãi:</label>
                <input type="text"  value="{{$food->promotion}}" class="form-control" name="promotion" placeholder="Nhập sp khuyen mai">
            </div>
            <div class="form-group">
                <label for="">Đơn vị tính:</label>
                <input type="text"  value="{{$food->unit}}" class="form-control" name="unit" placeholder="Nhập đơn vị tính">
            </div>
            <div class="form-group">
                <label for="">summary:</label>
                <textarea name="summary"  rows="3" class="form-control" >{{$food->summary}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Detail:</label>
                <textarea name="detail" rows="8" class="form-control" >{{$food->detail}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Hinh sp:</label>
                <input type="file" name="hinh">
                <img src="admin-master/img/hinh_mon_an/{{$food->image}}" height="100px">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="today" value="1" @if($food->today ==1) checked @endif > Hôm nay</label>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>

@endsection