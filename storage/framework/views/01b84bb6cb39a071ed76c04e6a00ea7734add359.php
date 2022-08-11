

<?php $__env->startSection('content'); ?>
<div class="logos text-center">
    <h1>Application Form</h1>
  </div>
  <?php if(Session::has('Name')): ?>
  <div class="alert alert-warning"><?php echo e(Session::get('Name')); ?> </div>
<?php endif; ?>
<?php if(Session::has('Email')): ?>
<div class="alert alert-warning"><?php echo e(Session::get('Email')); ?> </div>
<?php endif; ?>
<?php if(Session::has('EmailAndName')): ?>
<div class="alert alert-warning"><?php echo e(Session::get('EmailAndName')); ?> </div>
<?php endif; ?>
<div class="container" style="border-radius: 5px; background-color:#f2f2f2;padding: 20px;">
<form method="POST" action="<?php echo e(route('registered')); ?>" id="register-form">
    <?php echo csrf_field(); ?>

    
    <div class="row">
        <div class="col-10">
            <label for="fname">First Name:</label>
        </div>
        <div class="col-90">
            <input type="text" id="fname" onkeydown='preventNumbers(event)' onkeyup='preventNumbers(event)' name="firstname" value="<?php echo e(old('firstname')); ?>" placeholder="Enter your first name">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="lname">Last Name:</label>
        </div>
        <div class="col-90">
            <input type="text" id="lname" name="lastname" value="<?php echo e(old('lastname')); ?>" onkeydown='preventNumbers(event)' onkeyup='preventNumbers(event)' placeholder="Enter your last name">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="mname">Middle Name:</label>
        </div>
        <div class="col-90">
            <input type="text" id='mname' name="middlename" value="<?php echo e(old('middlename')); ?>" onkeydown='preventNumbers(event)' onkeyup='preventNumbers(event)' placeholder="Enter your middle name(optional)">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="email">Email:</label>
        </div>
        <div class="col-90">
            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="it should contain @,.">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="mobile">Mobile:</label>
        </div>
        <div class="col-90">
            <input type="tel" id="mobile" name="mobile" value="<?php echo e(old('mobile')); ?>" onkeypress="return onlyNumberKey(event)" maxlength=11 placeholder="only 11 digits are allowed">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="gender" required>Gender:</label>
        </div>
        <div class="col-90">
            <input type="radio" id="male" name="gender" value="male" <?php if(old('gender')): ?>
                checked
            <?php endif; ?>/>Male
            <input type="radio" id="female" name="gender" value="female" <?php if(old('gender')): ?>
            checked
        <?php endif; ?>/>Female
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="dob">Date Of Birth:</label>
        </div>
        <div class="col-90">
            <input type="Date" class='dob' id="dob" name="dob" value="<?php echo e(old('dob')); ?>" onchange='agecalculator()'>
            <input type='hidden' id='input_age' value="<?php echo e(old('agevalue')); ?>" name="agevalue"> 
            &nbsp&nbsp&nbsp <span class='agehere'></span>
         
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="bplace">Birthplace</label>
        </div>
        <div class="col-90">
            <input type="text" id='bplace' value="<?php echo e(old('bplace')); ?>" name="bplace" placeholder="Enter your Birthplace">
        </div>
    </div>
    
    <div class="row">
        <div class="col-10">
            <label for="address">Address:</label>
        </div>
        <div class="col-90">
            <textarea name="address" id="address" cols="30" rows="10"><?php echo e(old('address')); ?></textarea>
        </div>
    </div>
    
    <div class="row">
        <div class="col-10">
            <label for="pincode">Postal Code:</label>
        </div>
        <div class="col-90">
            <input type="number" id="postal" value="<?php echo e(old('postal')); ?>" name="postal" maxlength="6">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="password">Password:</label>
        </div>
        <div class="col-90">
            <input type="password" id="password" name="password" maxlength="20" value="<?php echo e(old('password')); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="password">Re-type Password:</label>
        </div>
        <div class="col-90">
            <input type="password" id="cpassword" name="confirmpassword" maxlength="20">
        </div>
    </div>
     <div class="row">
        <div class="col-10">
            
        </div>
        <div class="col-90">
        <input type="checkbox" id="cs" name="agreement" value="1">Agreed to terms and condition
            
           </div>
    </div>
    <div class="row">
        <input type="submit" value="Registered" >
    </div>
        
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JBE\laravel-project\resources\views/layouts/register.blade.php ENDPATH**/ ?>