<!DOCTYPE html>
<html>
<head>
   <title>crude application -create User</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
</head>
<style>
.footer {
    padding: 20px;
    text-align: center;
    background:#ddd;
    margin-top: 20px;
  }
  
</style>
<body>


<div class="navbar navbar-dark bg-dark">
     <div class="container">
         <a href="#" class="navbar-brand">CRUD Operation</a>
    </div>
</div>
<div class="container" style="padding-top:10px;">
<h2>Create User</h2>
<hr>
<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
  <div class="row">
     <div class="col-md-12">
        <div class="form-group">
           <label>Name</label>
           <input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
           <?php echo form_error('name');?>
        </div>
        <div class="form-group">
           <label>Email-ID</label>
           <input type="text" name="email_id" value="<?php echo set_value('email_id');?>" class="form-control">
           <?php echo form_error('email_id');?>
        </div>
        <div class="form-group">
           <label>Mobile Number</label>
           <input type="text" name="mobile_no" value="<?php echo set_value('mobile_no');?>" class="form-control">
           <?php echo form_error('mobile_no');?>
        </div>
        <div class="form-group">
           <label>Date of Birth</label>
           <input type="date" name="date_of_birth" value="<?php echo set_value('date_of_birth');?>" class="form-control">
          
        </div>
        <div class="form-group">
           <label>Pin Code</label>
           <input type="text" name="pin_code" value="<?php echo set_value('pin_code');?>" class="form-control">
           
        </div>
        <div class="form-group">
           <button class="btn btn-primary">Create</button>
           <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>
        </div>
     </div>
  </div>
  </form>
  </div>
  <div class="footer">
               <h3><u>Created by : Saurav Paul</u></h3>
            <h4><u><i>Email : Saurav.paul45@gmail.com</i></u></h4>
            <a href="https://github.com/saurav45-paul">GitHub : github.com/saurav45-paul</a>
</div>
</body>
</html>