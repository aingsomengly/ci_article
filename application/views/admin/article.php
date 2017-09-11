<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Article</title>
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/jasny-bootstrap/css/jasny-bootstrap.min.css">
    <style type="text/css">
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
                                    <form action="<?= base_url();  ?>article/insert" method="post" id="formstudent" enctype="multipart/form-data">
                                            <div class="form-horizontal"  >
                                            <!-- Input name -->
                                            <div class="form-group <?php if(form_error('title')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Article Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo set_value('title'); ?>"  required="required" />
                                                    <span class="error"><?php echo form_error('title'); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group <?php if(form_error('description')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="20" id="description"    name="description" required="required" ><?php echo set_value('description'); ?></textarea>
                                                    <span class="error"><?php echo form_error('description'); ?></span>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group <?php if(form_error('category')){echo'has-error';} ?>" >
                                                <label for="input-text" class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-10">
                                                     <select class="form-control" id="category" name="category">
                                                        <?php  
                                                            foreach ($category->result() as $c ) {
                                                                echo "<option value='$c->cat_id'>$c->cat_name</option>";
                                                            }
                                                        ?>
                                                      </select>

                                                </div>
                                            </div>

                                    
                                            
                                            <div class="form-group" >
                                                <label for="input-text" class="col-sm-2 control-label">Image</label>
                                                <div class="col-sm-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100px; height:100px;"></div>
                                                      <div>
                                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                        <input type="file" id="img"   name="img">
                                                        <input type="hidden" class="form-control" id="OLD_IMG"   name="OLD_IMG"  ></span>
                                                        <a href="#" id="re_image" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                      </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        
                                            <!-- submit button-->
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label"></label>
                                                    <div class="col-sm-5">
                                                        <input type="hidden" name="" value="" id="TOKEN"/>
                                                        <input type="hidden" name="user" value="" id="user"/>
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
                                <form action="<?= base_url()?>article/search"  method="POST">
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
                                            <th width="5%">ID</th>
                                            <th width="20%">Title</th>
                                            <th width="20%">Category</th>
                                            <th width="10%">Post By</th>
                                            <th width="10%">Public Date</th>
                                            <th width="5%">Image</th>
                                            <th width="20%">Activity</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                              
                                              
                                                <?php 
                                                foreach ($article->result() as $a) {

                                                    echo "<tr>".
                                                            "<td>$a->art_id</td>".
                                                            "<td>$a->title</td>".
                                                            "<td>$a->cat_name</td>".
                                                            "<td>$a->u_type</td>".
                                                            "<td>$a->public_date</td>".
                                                            "<td><img class='img-responsive img-circle' style='width:100%; height:50px' src='".base_url()."asset/img/$a->image' title='Image' ></td>".
                                                            "<td>".
                                                                "<a href='#' class='btn btn-success btn-sm ' data-toggle='modal' data-target='#myModal'>View</a> &nbsp;".
                                                                "<a href='".base_url()."article/view/$a->art_id' class='btn btn-primary btn-sm'>Edite</a> &nbsp;".
                                                                "<a href='".base_url()."article/delete/$a->art_id' class='btn btn-danger btn-sm'>Delete</a> ".
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
    <script src="<?= base_url(); ?>asset/ckeditor/ckeditor.js"></script>
    <script>
        window.onload = function() {
            CKEDITOR.replace( 'description' );
        };
    </script>
</body>
</html>