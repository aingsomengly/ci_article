<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
    <style>
            body{
                background-image: url("<?php echo base_url(); ?>asset/img/bg.jpg");
            }
            .register{
                margin-top:10%;
                padding: 0px;
                
            }
            .registerCover{
                border:1px solid black;
                outline:10px solid #;
                background:white;
                border-radius: 10px 10px 0px 0px;
                -moz-border-radius: 10px 10px 0px 0px;
                -webkit-border-radius: 10px 10px 0px 0px;
                
                
            }
            .registerBody{
                background:#999966;
                padding:15px;
            }
            .form-footer{
                padding:10px;
                background:#2E2E1F;
                
            }
            .form-footer a{
                color:#00B26B;
            }
            #idTheLogo {
                margin: 0 auto;
            }
             .error{
            color: red;
        }
        </style>
	
</head>
<body>
    <div class='container register'>
                <div class='row'>
                    <!-- start main content -->
                    <div class='col-xs-12 col-sm-5 col-md-5 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4'>
                                    
                          <div class="row registerCover">
                            <div class="title" >
                                <a href="#"><img id='idTheLogo' src='<?php echo base_url(); ?>asset/img/logohrd.png' class=' img img-responsive ' style=''></a>
                                 <?php $error = $this->session->flashdata("error"); ?>
                                 <center class="error" ><?php echo $error; ?></center>
                            </div>
                            <div class="registerBody" >
                                  <form action="<?= base_url(); ?>admin/login" method="POST">
                                
                                    <div class="form-group <?php if(form_error('username')){echo'has-error';} ?>">
                                      <input type="text" name="username" value="<?php echo  set_value('username');  ?>" class="form-control" placeholder="Username" >
                                      <span class="error"><?php echo form_error('username'); ?></span>
                                    </div>
                                    <div class="form-group <?php if(form_error('password')){echo'has-error';} ?>">
                                        <input type="password"  name="password" value="<?php echo set_value('password');  ?>" class="form-control" placeholder="Password" >
                                        <span class="error"><?php echo form_error('password'); ?></span>
                                        <input type="hidden" name="csrf" value=""/>
                                    </div>
                                
                                  <input type="submit" class="btn btn-block btn-primary " value="LogIn"/>
                               </form>
                                        
                            </div>
                             <div class="form-footer clsTextAlignCenter">
                                      <div class="row">
                                          <div class="col-xs-7">
                                              <b class='glyphicon glyphicon-warning-sign' style="color:white ;font-size: 1.2em;"></b>
                                              <a href="#" >Forgot password?</a>
                                          </div>
                                          <div class="col-xs-5">
                                                <b class='glyphicon glyphicon-ok-circle' style="color:white ;font-size: 1.2em;"></b>
                                                <a href="#" >Sign Up</a>
                                          </div>
                                      </div>
                                  </div>
                          </div>
                                                      
                    </div><!--/ end main content -->
                    
    
                </div>
            </div>
    <script src="<?php base_url(); ?>asset/js/jquery.js"></script>
    <script src="<?php base_url(); ?>asset/js/bootstrap.min.js"></script>
</body>
</html>