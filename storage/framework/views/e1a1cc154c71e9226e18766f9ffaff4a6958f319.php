<?php $__env->startSection('title','Trang chủ'); ?>
<?php $__env->startSection('content'); ?>
    <div class="panel panel-default">
        <div class="panel-heading"><b>Trang chủ</b>
        </div>
        <div class="panel-body">
            Chào bạn, Admin
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>