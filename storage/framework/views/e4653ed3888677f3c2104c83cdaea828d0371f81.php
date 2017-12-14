<?php $__env->startSection('title','Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
   <div class="panel panel-default">
        <div class="panel-heading">
            <b>Danh sách sản phẩm
            <?php if(isset($type)): ?>
                thuộc loại <span style="color:blue"><?php echo e($type->name); ?></span>
            <?php endif; ?>
            </b>
        </div>
        <div class="panel-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>
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
                <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($stt); ?></td>
                        <td style="width:20%"><?php echo e($food->name); ?></td>
                        <td style="width:40%"><?php echo e($food->summary); ?></td>
                        <td><?php echo e($food->price); ?></td>
                        <td><img src="admin-master/img/hinh_mon_an/<?=$food->image?>" style="width:120px"></td>
                        <td>
                            <a href="<?php echo e(route('editProduct',$food->id)); ?>">Edit</a> |
                            <a class="btnDelete" dataId="<?=$food->id?>">Delete</a>
                        </td>
                    </tr>
                    <?php $stt++?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <button type="button" class="btn btn-success" >OK</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
    })
})
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>