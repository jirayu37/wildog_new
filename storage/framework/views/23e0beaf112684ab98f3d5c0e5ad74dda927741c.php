<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           
        <div class="flex-center position-ref full-height">
            <div class="content">
             

        <div class="container">
            <h2 class="text-center">Add sdsd   <?php echo e($id); ?></h2>
            <div class="col-md-8">
             <h2>ระบบบันทึกข้อมูล</h2>
                
            <?php if($check == null): ?>
              <form method="POST" action="<?php echo e(route('informations.store')); ?>" enctype="multipart/form-data" >

                 <?php echo e(csrf_field()); ?>

                     <div class="form-group">
                        
                        <input type="hidden" class="form-control" name="user_id" value="<?php echo e($id); ?>">
                    </div>

                    
                    <div class="form-group<?php echo e($errors->has('i_phone') ? ' has-error' : ''); ?>">
                        <label>ข้อมูลติดต่อ:</label>
                        <input type="text" class="form-control" name="i_phone"  required autofocus>

                           <?php if($errors->has('i_phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('i_phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    </div>


                   
                     <div class="form-group<?php echo e($errors->has('workplace') ? ' has-error' : ''); ?>">
                        <label>สถานที่ทำงาน:</label>
                        <input type="text" class="form-control" name="workplace"  required autofocus>

                           <?php if($errors->has('workplace')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('workplace')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    </div>

                     <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                        <label>ที่อยู่:</label>
                        <input type="text" class="form-control" name="address"  required autofocus>

                        <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group<?php echo e($errors->has('salary') ? ' has-error' : ''); ?>">
                        <label>เงินเดือน:</label>
                        <input type="number" class="form-control" name="salary"  required autofocus>

                         <?php if($errors->has('salary')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('salary')); ?></strong>
                                    </span>
                        <?php endif; ?>
                    </div>


                    <div class="form-group<?php echo e($errors->has('image') ? ' has-error' : ''); ?>">
                        <label for="image" class="col-md-4 control-label">image</label>
                       
                            <input type="file" name="image"  required autofocus>
                               <?php if($errors->has('image')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                        <?php endif; ?>
                      
                        </div>

                    <div class="form-group">
                        <button class="btn btn-primary">เพิ่มข้อมูล</button>
                    </div>
                </form>
             <?php else: ?>
                       I don't have any records!
                      <?php endif; ?> 


           
            </div>
        </div>
    

        </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>