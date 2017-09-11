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
                                    
                                        <form action="<?= base_url()?>category/insert" method="POST" id="formstudent" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >
                                            <!-- Input name -->
                                            <div class="form-group <?php if(form_error('category')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="category" name="category" value="<?php echo set_value('category'); ?>"    />
                                                    <span class="error"><?php echo form_error('category'); ?></span>
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
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Insert Form</button>
                                
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <form action="<?= base_url()?>category/search"  method="POST">
                                    <div class="input-group">
                                      <input type="text" class="form-control" id="key" name="key" placeholder="Search for...">
                                      <span class="input-group-btn">
                                        <input type="submit" class="btn btn-success" value="Search"/>
                                      </span>
                                    </div>
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
                                            <th width="10%">ID</th>
                                            <th width="50%">Category</th>
                                            <th width="20%">Activity</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                             

                                              <?php 
                                                foreach ($cat->result() as $c) {
                                                    echo "<tr>".
                                                            "<td>$c->cat_id</td>".
                                                            "<td>$c->cat_name</td>".
                                                            "<td>".
                                                                "<a href='#' class='btn btn-success btn-sm ' data-toggle='modal' data-target='#myModal'>View</a> &nbsp;".
                                                                "<a href='".base_url()."category/view/$c->cat_id' class='btn btn-primary btn-sm'>Edite</a> &nbsp;".
                                                                "<a href='".base_url()."category/delete/$c->cat_id' class='btn btn-danger btn-sm'>Delete</a> ".
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
    
    
    
    
    <!-- script references -->
    
    <script src="<?= base_url(); ?>asset/js/jquery.js"></script>
     <script src="<?= base_url(); ?>asset/js/bootstrap.min.js"></script>
</body>
</html>