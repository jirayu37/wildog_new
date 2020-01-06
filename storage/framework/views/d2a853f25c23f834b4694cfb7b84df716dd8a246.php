<?php $__env->startComponent('mail::message'); ?>
# อัพเดทรายกานลูกค้า

รห้ส : <?php echo e($user->id); ?>


ชื่อ : <?php echo e($user->firstname); ?>  <?php echo e($user->lastname); ?>


เบอร์ติดต่อ : <?php echo e($user->phone); ?>



<?php $__env->startComponent('mail::button', ['url' => 'http://localhost:8000/admin/dashboard']); ?>
คลิก
<?php echo $__env->renderComponent(); ?>


<?php echo $__env->renderComponent(); ?>
