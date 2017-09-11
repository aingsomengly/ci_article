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
                          <div class="panel-heading ">Edit Category</div>
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
                              <div class="panel-heading ">Form</div>
                              <div class="panel-body">
                                    <div class="box-body">
                                    
                                        <form action="<?= base_url()?>category/update" method="POST" id="formstudent" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >
                                            <!-- Input name -->
                                            <div class="form-group <?php if(form_error('category')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-10">
                                                     <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $index['cat_id'];  ?>"  required="required" />
                                                    <input type="text" class="form-control" id="category" name="category" value="<?php echo $index['cat_name'];  ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('category'); ?></span>
                                                </div>
                                            </div>
                                            
                                            <!-- submit button-->
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-5">
                                                        <input type="hidden" name="" value="" id="TOKEN"/>
                                                        <input type="submit" value="Save"  class="btn btn-success">
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
    
    
    
    
    <!-- script references -->
    
    <script src="<?= base_url(); ?>asset/js/jquery.js"></script>
     <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
</body>
</html>