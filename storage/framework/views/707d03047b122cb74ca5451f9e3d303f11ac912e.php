<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>registration form</b></div>

                <div class="card-body">

            
 <form action="<?php echo e(url('/storereg')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

  <div class="container">
    <h1>Register </h1>

    <p>Please fill in this form to create an account</p>
    
    <table>
        <tr>
        <td>
     <label for="first name"><b>first name</b></label>
     <td>
     <input type="text" placeholder="enter your first name" name="first_name" required>
    </td>
      </td>
  </tr>
  <tr>
      <td>
     <label for="last name"><b>last name</b></label>
     <td><input type="text" placeholder="enter your last name" name="last_name" required></td>
</td>
</tr>
    <tr>
    <td>
    <label for="email"><b>Email</b></label>
    <td><input type="text" placeholder="Enter Email" name="email" required></td>
</td>
</tr>
    <tr>
    <td>
    <label for="psw"><b>Password</b></label>
    <td><input type="password" placeholder="Enter Password" name="password" required></td>

    </td>
    </tr>
        <tr>
   <td>
    <button type="submit" class="registerbtn">Register</button>

  </td>
</tr>
</div>
   <?php echo e(csrf_field()); ?>

  
</form>
</table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>