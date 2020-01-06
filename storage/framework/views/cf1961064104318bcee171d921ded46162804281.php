<?php $__env->startComponent('mail::message'); ?>
# อัพเดท

The body of your message.

<?php echo e($user->mail); ?>


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
