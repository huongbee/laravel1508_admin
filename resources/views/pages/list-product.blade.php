@extends('layout')
@section('title','Danh sách sản phẩm')
@section('content')
   <div class="panel panel-default">
        <div class="panel-heading">
            <b>Danh sách sản phẩm
            @if(isset($type))
                thuộc loại <span style="color:blue">{{$type->name}}</span>
            @endif
            </b>
        </div>
        <div class="panel-body">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Đơn giá</th>
                        <th>Hình</th>
                        <th>Tuỳ chọn</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Đơn giá</th>
                        <th>Hình</th>
                        <th>Tuỳ chọn</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php $stt = 1;?>
                @foreach($foods as $food)
                    <tr class="sanpham-{{$food->id}}">
                        <td>{{$stt}}</td>
                        <td style="width:20%">{{$food->name}}</td>
                        <td style="width:40%">{{$food->summary}}</td>
                        <td>{{$food->price}}</td>
                        <td><img src="admin-master/img/hinh_mon_an/<?=$food->image?>" style="width:120px"></td>
                        <td>
                            <a href="{{route('editProduct',$food->id)}}">Edit</a> |
                            <a class="btnDelete" dataId="<?=$food->id?>">Delete</a>
                        </td>
                    </tr>
                    <?php $stt++?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Bạn có chắc chắn muốn xoá hay không?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btnAccept" >OK</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>

<div id="thongbao" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p class="message"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>

  </div>
</div>
<script src="admin-master/js/jquery.js"></script>
<script>
$(document).ready(function(){
    $('.btnDelete').click(function(){
        var id = $(this).attr('dataId')
        //console.log(id)
        $('#myModal').modal("show")
        $('.btnAccept').click(function(){
            var route = "{{route('deleteProduct','id')}}"
            route = route.replace('id',id)
            var mess = "Thành công";
            $.ajax({
                url:route,
                data:{
                    id:id
                },
                type:"get",
                success:function(data){
                    if($.trim(data) == 'success'){
                        $('#myModal').modal("hide")
                        $('.sanpham-'+id).hide();
                    }
                    else{
                        mess = "Thất bại, vui lòng thử lại"
                    }
                    $('.message').text(mess)
                    $('#thongbao').modal('show')
                }
            })
        })
    })
})
</script>

@endsection