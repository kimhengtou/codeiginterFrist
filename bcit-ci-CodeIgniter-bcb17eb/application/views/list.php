<!DOCTYPE html>
<html>
<head>
    
    <title>Crud Application - view User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets\css\bootstrap.min.css';?>">
</head>
<body>

<div class="navber navber-dark bg-dark">
    <div class="container">
        <a href="#" class="navber-brand">CRUD application</a>
    </div>
</div>
<div>
    <div class="container" style="padding-top: 10px;">

    <div class="row">
        <div class="col-md-12"></div>
     <?php
     $success = $this->session->userdata('success');
     if ($success != ""){
      ?>
      <div class="alert alert-success"><?php echo $success; ?></div>
      <?php  
     }
     ?>

<?php
     $success = $this->session->userdata('failed');
     if ($failed = ""){
      ?>
      <div class="alert alert-success"><?php echo $failed;?></div>
      <?php  
     }
     ?>

    </div>
    <div class="row">
    <div class="col-6"></div><h3>view Users</h3>
    <div class="col-6">
    <a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">Create User</a>
</div> 
    
</div>
    <hr>
        <div class="row">
            
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th >ID</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Edit</th>
                        <th >Delete</th>
                    </tr>

                    <?php if(!empty($users))  { foreach($users as $user) {?>

                    <tr>
                        <td><?php echo $user['id']  ?></td>
                        <td><?php echo $user['name']  ?></td>
                        <td><?php echo $user['email']  ?></td>
                        <td>
                            <a>
                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['id']?> "class="btn btn-primary">Edit</a>
                    </a>
                        </td>

                        <td>
                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['id']?> "class="btn btn-danger">Delete</a>
                        </td>

                    </tr>

                    <?php   } }else{  ?>
                        <tr>
                        <td colspan="5">records not found</td>
                        </tr>

                   <?php  } ?>
                   

                </table>
            </div>

        </div>
        
</div>
    
</body>
</html>