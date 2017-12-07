<?php $__env->startSection('title','Đăng kí tài khoản'); ?>

<?php $__env->startSection('content'); ?>

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
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php echo e($err); ?>

                    <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('adminRegister')); ?>">
            <?php echo e(csrf_field()); ?>

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
            <div class="form-group">
                <label for="pwd">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password">
            </div>
            <button type="submit" class="btn btn-success">Đăng kí</button>
            </form>
    </div><!-- /card-container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sign.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>