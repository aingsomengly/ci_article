<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <style type="text/css">
    	.pd-b-5{
    		padding-bottom: 5px;
    	}
        .error{
            color: red;
        }
    </style>
	
</head>
<body>
    <!-- header -->
    <div class="container-fluid head">
        <div class="row">
            <div class="col-xs-12">
                    <h2>Well Come Article Manegement</h2>
            </div>
        </div>
    </div>
    <br/>

        <div class='container-fluid'>
                <div class='row'>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" >
                        <div class="panel panel-primary">
                          <div class="panel-heading ">menu</div>
                          <div class="panel-body">
                                <ul class="nav  bg-info">
                                    <li><a href="<?= base_url();  ?>article">Article</a></li>
                                    <li><a href="<?= base_url();  ?>category">Category</a></li>
                                    <li><a href="<?= base_url();  ?>user">User</a></li>
                                    <li><a href="#">Log Out</a></li>
                                 </ul>
                          </div> 
                           
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                        <div >
                        <div class='row' >
                            
                            <div class="panel panel-primary">
                              <div class="panel-heading ">Edit User</div>
                              <div class="panel-body">
                                    <div class="box-body">
                                    
                                        <form action="<?= base_url()?>user/update" id="formstudent" method="POST" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >

                                                 <div class="form-group">
                                                  <label for="inputPassword" class="col-sm-2 control-label">ID</label>
                                                  <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $index['u_id']; ?>"  required="required" />
                                                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $index['u_id']; ?>"  required="required" disabled />
                                                  </div>
                                                </div>


                                            <!-- Input name -->
                                            <div class="form-group <?php if(form_error('username')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">User Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $index['u_user']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('username'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group <?php if(form_error('password')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">PassWord</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $index['u_password']; ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('password'); ?></span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group" >
                                                <label for="input-text" class="col-sm-2 control-label">User Role</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" id="roles" name="roles" value="<?php echo $index['u_type']; ?>">
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                      </select>
                                                     <span class="error"><?php echo form_error('roles'); ?></span>
                                                </div>
                                            </div>
                                            
                                            <!-- submit button-->
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-5">
                                                        <input type="hidden" name="" value="" id="TOKEN"/>
                                                        <input type="submit" value="Update"  class="btn btn-success">
                                                        <button id="clear"  class="btn btn-success">Back</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                 
                            
                                    </div>  
                            </div>
                        </div>
                        </div> 
                      
                    </div>
                        
                </div>
                    
                    
            </div>
        </div>
        
    <!-- footer -->
    <div class="container-fluid foot">
        <div class="row">
            <div class="col-xs-12">
                    <h4>Copy Right@2015</h4>
                    
            </div>
        </div>
    </div>
    
    <!-- alert veiw -->
    <div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Profile</h4>
        </div>
        <div class='modal-body'>
          <h2>This is all detail</h2>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
    
    <!-- script references -->
    
    <script src="<?= base_url(); ?>asset/js/jquery.js"></script>
     <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
      <script src="<?= base_url(); ?>asset/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
</body>
</html>