<?php $__env->startSection('title','Đăng nhập admin'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card-container">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($err); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
        <?php endif; ?>
        <form class="form-signin" method="post" action="<?php echo e(route('adminLogin')); ?>">
            <?php echo e(csrf_field()); ?>

            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
            
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sign.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>