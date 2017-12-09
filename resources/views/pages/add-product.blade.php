@extends('layout')
@section('title','Thêm sản phẩm')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><b>Thêm sản phẩm</b>
        </div>
        <div class="panel-body">
            <form action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Tên sản phẩm:</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên sp">
            </div>
            <div class="form-group">
                <label for="pwd">Chọn loại:</label>
                <select name="loai" class="form-control">
                    @foreach($types as $loai)
                    <option value="{{$loai->id}}">{{$loai->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Giá sản phẩm:</label>
                <input type="text" class="form-control" name="price" placeholder="Nhập giá sp">
            </div>
            <div class="form-group">
                <label for="">Giá khuyến mãi:</label>
                <input type="text" class="form-control" name="promotion_price" placeholder="Nhập giá khuyến mãi">
            </div>
            <div class="form-group">
                <label for="">SP khuyến mãi:</label>
                <input type="text" class="form-control" name="promotion" placeholder="Nhập sp khuyen mai">
            </div>
            <div class="form-group">
                <label for="">Đơn vị tính:</label>
                <input type="text" class="form-control" name="unit" placeholder="Nhập đơn vị tính">
            </div>
            <div class="form-group">
                <label for="">summary:</label>
                <textarea name="summary" rows="3" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Detail:</label>
                <textarea name="detail" rows="8" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <label for="">Hinh sp:</label>
                <input type="file" name="hinh">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="today" value="1"> Hôm nay</label>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>

@endsection