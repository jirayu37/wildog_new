<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           
        <div class="flex-center position-ref full-height">
            <div class="content">
             

        <div class="container">
            <h2 class="text-center">Add sdsd </h2>
            <div class="col-md-8">
             <h2>ระบบบันทึกข้อมูล</h2>
        
          
           
             

                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                  <form class="form-horizontal" method="POST" action="<?php echo e(route('informations.update', $user->id)); ?>">
               
             
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('PUT')); ?>


                     <div class="form-group">
                        <label>รหัส:</label>
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo e($user->id); ?>" >
                    </div>

                     <div class="form-group">
                        <label>ขื่อจริง:</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo e($user->firstname); ?>">
                    </div>

                    <div class="form-group">
                        <label>นามสกุล:</label>
                        <input type="text" class="form-control" name="lastname" value="<?php echo e($user->lastname); ?>">
                    </div>

                     <div class="form-group">
                        <label>เบอรโโทร:</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo e($user->phone); ?>">
                    </div>


                     <div class="form-group">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" name="address" value="<?php echo e($user->address); ?>">
                    </div>

                    <hr>                    


                    <div class="form-group">
                        <button class="btn btn-primary">เพิ่มข้อมูล</button>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </form>
            </div>
        </div>
    

        </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>