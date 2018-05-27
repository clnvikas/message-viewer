<?php $__env->startSection; ?>('content'
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>simple calculator</b></div>

                <div class="card-body">

            <form method="post" action="<?php echo e(url('/menu')); ?>">

               <?php echo e(csrf_field()); ?>

<tr><td>
    <br>
        <div class="container">
      <h4>please click on the operation to be performed..</h4>
      </div>

       <table>
  <br>
<a href="/add"><button name="add" value="add" type="submit" >add</button></a>
</td>  </tr>
  <tr>
<td>
<a href="/subtract"><button type="submit" >subtract</button></a>
</td>
  </tr>
  <tr><td>
<a href="/multiply"><button type="submit" >multiply</button></a>
</td>  </tr>
  <tr>
<td>
<a href="/divide"><button type="submit" >divide</button></a>
</td></tr>
 </table>
</form> 
 <?php echo e(csrf_field()); ?>

 </div>
      </div>
 </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>