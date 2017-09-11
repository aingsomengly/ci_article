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
                                    <li><a href="<?= base_url(); ?>admin/logout">Log Out</a></li>
                                 </ul>
                          </div> 
                           
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                        <div >
                        <div class='row' >
                            
                            <div class="panel panel-primary">
                              <div class="panel-heading ">Form</div>
                              <div class="panel-body">
                                    <div class="box-body">
                                    
                                        <form action="<?= base_url()?>user/insert" id="formstudent" method="POST" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >
                                            <!-- Input name -->
                                            <div class="form-group <?php if(form_error('username')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">User Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('username'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group <?php if(form_error('password')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">PassWord</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('password'); ?></span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group" >
                                                <label for="input-text" class="col-sm-2 control-label">User Role</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" id="roles" name="roles">
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
                                                        <input type="submit" value="Save"  class="btn btn-success">
                                                        <button id="clear" onclick="myClear()" class="btn btn-success">Clear</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                 
                            
                                    </div>  
                            </div>
                        </div>
                        </div> 
                        <!-- inser and search-->
                        <div class="row" >
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <button type="button" class="btn btn-info" >Insert Form</button>
                                
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <form action="<?= base_url()?>user/search"  method="POST">
                                    <div class="input-group <?php if(form_error('key')){echo'has-error';} ?>">
                                      <input type="text" class="form-control" id="key" name="key" value="<?php echo set_value('key'); ?>" placeholder="Search for...">
                                      <span class="input-group-btn">
                                        <input type="submit" class="btn btn-success" value="Search"/>
                                      </span>
                                    </div>
                                     <span class="error"><?php echo form_error('key'); ?></span>
                                </form>
                            </div>
                        </div>
                        <br/>
                        <!-- Table -->
                        <div class="row" >
                            <div class="panel panel-primary">
                              <div class="panel-heading ">List Article</div>
                                <div class="panel-body">
                                    <table class="table table-condensed">
                                        <thead>
                                          <tr class="success">
                                            <th width="5%">ID</th>
                                            <th width="20%">UserName</th>
                                            <th width="20%">Password</th>
                                            <th width="10%">Role</th>
                                            <th width="20%">Activity</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($userlist->result() as $u) {
                                                    echo "<tr>".
                                                            "<td>$u->u_id</td>".
                                                            "<td>$u->u_user</td>".
                                                            "<td>$u->u_password</td>".
                                                            "<td>$u->u_type</td>".
                                                            "<td>".
                                                                "<a href='#' class='btn btn-success btn-sm ' data-toggle='modal' data-target='#myModal'>View</a> &nbsp;".
                                                                "<a href='".base_url()."user/view/$u->u_id' class='btn btn-primary btn-sm'>Edite</a> &nbsp;".
                                                                "<a href='".base_url()."user/delete/$u->u_id' class='btn btn-danger btn-sm'>Delete</a> ".
                                                            "</td>".
                                                            "</tr> ";
                                                }
                                            ?>
                                              
                                        </tbody>
                                     </table>
                                      <div align="center"><?php echo $page_link; ?></div>
                                    
                                
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