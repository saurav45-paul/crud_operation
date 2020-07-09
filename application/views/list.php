<!DOCTYPE html>
<html>
<head>
   <title>crude application - view User</title>
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
   <div class="row">
      <div class="col-md-12">
      <?php 
      $success = $this->session->userdata('success');
      if($success != ""){
      ?>
      <div class="alert alert-success"><?php echo $success;?></div>
      <?php
      }
      ?>
      <?php 
      $failure = $this->session->userdata('failure');
      if($failure != ""){
      ?>
      <div class="alert alert-success"><?php echo $failure;?></div>
      <?php
      }
      ?>
      </div>
   </div>
 
   <div class="row">
      <div class="col-md-12">
         <div class="row">
             <div class="col-6"><h2>View User</h2></div>
                <div class="col-6 text-right" >
                  <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create New Record</a>
                </div>
             </div>
         </div>
      </div>
   
   
   <hr>
     <div class="row">
        <div class="col-md-12">
           <table class="table table-striped">
             <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email ID</th>
                <th>Mobile Number</th>
                <th>Date of Birth</th>
                <th>Pincode</th>
                <th width="70">Edit</th>
                <th width="70">Delete</th>
             </tr>

             <?php if(!empty($users)) { foreach($users as $user) {?>
             <tr>
                <td><?php echo $user['user_id']?></td>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['email_id']?></td>
                <td><?php echo $user['mobile_no']?></td>
                <td><?php echo $user['date_of_birth']?></td>
                <td><?php echo $user['pin_code']?></td>
                <td><a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary">EDIT</td>
                <td><a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">DELETE</td>
             </tr>
             <?php } }else{ ?>
             <tr>
               <tdcolspan="8">Records not found</td>
             </tr>
             <?php  } ?>
           </table>
        </div>
     </div>
<hr>

</div>
<div class="footer">
               <h3><u>Created by : Saurav Paul</u></h3>
            <h4><u><i>Email : Saurav.paul45@gmail.com</i></u></h4>
            <a href="https://github.com/saurav45-paul">GitHub : github.com/saurav45-paul</a>
</div>
</body>
</html>