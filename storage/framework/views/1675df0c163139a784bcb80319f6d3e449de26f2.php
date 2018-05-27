<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>registration form</b></div>

                <div class="card-body">
<div class="container">
  <h1>Register For An Account</h1>


  <p>To sign-up for a free basic account..</p>

  <form class="form" method="post" action="<?php echo e(url('/store')); ?>">
<?php echo e(csrf_field()); ?>

     
     <table>
        <tr>
        <td>
     <label for="name"><b>name</b></label>
     <td>
     <input type="text" placeholder="enter your name" name="name" required>
    </td>
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
     <label for="mobile"><b>mobile</b></label>
     <td><input type="text" placeholder="enter your mobile number " name="mobile" required></td>
</td>
</tr>
    <tr>
    <td>
    <label for="password"><b>Password</b></label>
    <td><input type="password" placeholder="Enter Password" name="password" required></td>

    </td>
    </tr>
        <tr>
   <td>
    <button type="submit" class="registerbtn">Register</button>

  </td>
</tr>
    </div>

    

  </form>
  <?php echo e(csrf_field()); ?>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>