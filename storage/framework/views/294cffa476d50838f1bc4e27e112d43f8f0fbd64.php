<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

         
         
        <div class="flex-center position-ref full-height">
            <div class="content">

                   <div class="container">
            <h2 class="text-center">ข้อมูลสมาชิก</h2>
            
            <div class="col-md-8">
                  
            </div>

               <div class="col-md-2">
                   <a href="<?php echo e(url('admin/analyze')); ?>" class="btn btn-success">วิเคราะห์</a>
            </div>

             
            <div class="col-md-2">
              
                      <a href="<?php echo e(url('admin/add_customer')); ?>" class="btn btn-success">เพิ่มบัญชีลูกค้า</a>
            </div>
           <div class="col-md-12">
            </div>
            <hr>
            <table class="table table-bordered">
                <tr>
                     <th>รหัส</th>
                    <th>ชื่อจริง</th>
                    <th>นามสกุล</th>
                   <!--  <th>เบอร์โทร</th>
                    <th>อืเมล์</th>
                    <th>ที่อยู่</th> -->
                   
                   
                    <th>ข้อมูล</th>
                    <th>เพิ่มข้อมูลเงินฝาก</th>
                    <th></th>
                    <th></th> 
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>

              
                   <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                <tr>
                    <td><?php echo e($t->id); ?></td>
                    <td><?php echo e($t->firstname); ?></td>
                    <td><?php echo e($t->lastname); ?></td>
                    <td><?php echo e($t->phone); ?></td>
                    <td><?php echo e($t->email); ?></td>
                    <td><?php echo e($t->address); ?></td>
                    <!-- <td><a :href="'/informations/'+user.id+'/edit'" class="btn btn-success">Add</a></td> -->
                  
          
                     <td>
                      
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal<?php echo e($t->id); ?>">show  
                      </button>


                     

                   


                     </td> 

                     



                 


                  
                      


                   <!--    <td><a :href="'/customers/create'" class="btn btn-success">Add</a></td> -->
                    <!-- <td><a href="#" class="btn btn-primary">คลิก</a></td> -->
                    <!--  <td><a :href="'/members/'+member.id+'/edit'" class="btn btn-primary">Edit</a></td> -->
                    <td><a href="<?php echo e(URL::to('customers/' . $t->id . '/edit')); ?>" class="btn btn-primary">Edit</a></td>
                   
                    <td>
                    
                     <form action="<?php echo e(route('customers.destroy', $t->id)); ?>" method="post" enctype="multipart/form-data">

                
                 <?php echo e(csrf_field()); ?>

                      
                        <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>


                    </td>



                </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>




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
            อีเมล์ <br> 
            <?php echo e($t->email); ?>

          </div>

          
          <div class="modal-body">
            สถานที่ทำงาน <br> 
            <?php echo e($t->workplace); ?>

          </div>
          <div class="modal-body">
            เบอร์ติดต่อ <br> 
            <?php echo e($t->i_phone); ?>

          </div>
          <div class="modal-body">
            ที่อยู่ <br> 
            <?php echo e($t->address); ?>

          </div>
           <div class="modal-body">
            เงินเดือน <br> 
            <?php echo e($t->salary); ?>

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