<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <?php echo e(Auth::user()->firstname); ?></div>

                  

         
               
               
                       <h2 class="text-center">ข้อมูลสมาชิก</h2>
            <table class="table table-bordered">
                <tr>
                    
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                    <th>เบอร์โทร</th>
                    <th>อืเมล์</th>
                    <th>ที่อยู่</th>
                   
                  
                </tr>
                <tr>
                    <td><?php echo e($costomer->firstname); ?></td>
                    <td><?php echo e($costomer->lastname); ?></td>
                    <td><?php echo e($costomer->phone); ?></td>
                    <td><?php echo e($costomer->email); ?></td>
                    <td><?php echo e($costomer->address); ?></td>
                   
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal<?php echo e($costomer->id); ?>">show  
                      </button></td>
                      <td>
                         <?php if($check == null): ?>
                        <a :href="'/informations/create/<?php echo e($costomer->id); ?>'" class="btn btn-success">แจ้งข้อมูล</a></td> 

                          <?php else: ?>
                      
                        ไม่สามารถแก้ไขได้
                      <?php endif; ?> 
                 <!--    <td><a href="#" class="btn btn-primary">คลิก</a></td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-warning">Delete</a></td> -->
                </tr>
            </table>
              



<?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <div class="modal fade" id="yourModal<?php echo e($t->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><?php echo e($t->i_phone); ?></h4>
          </div>
            <center>
               <div class="modal-body">
           
            <img src="<?php echo e(asset("storage/$t->image")); ?>" alt="Example" width="250" height="250">
          
            <br>
           
          </div>


            <div class="modal-body">
            ชื่อ <br>
            <?php echo e($t->firstname); ?>   <?php echo e($t->lastname); ?>

          </div>
           <div class="modal-body">
            อีเมล์ <br> <?php echo e($t->email); ?>

          </div>

          
          <div class="modal-body">
            สถานที่ทำงาน <br> <?php echo e($t->workplace); ?>

          </div>
          <div class="modal-body">
            เบอร์ติดต่อ <br> <?php echo e($t->i_phone); ?>

          </div>
          <div class="modal-body">
            ที่อยู่ <br> <?php echo e($t->address); ?>

          </div>
           <div class="modal-body">
            เงินเดือน <br> <?php echo e($t->salary); ?>

          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          </div>

        </center>

        </div>
      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>