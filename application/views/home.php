<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php base_url(); ?>asset/css/bootstrap.min.css">

	<style type="text/css">

	
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
	<!-- body -->
	<div class="container">
		<!-- search -->
		<div class="row marginLR ">
			<div class="col-xs-12 paddingLR">
			  	<form action=""  method="POST">
				    <div class="input-group">
				      <input type="text" class="form-control" id="key" name="key" placeholder="Search for...">
				      <span class="input-group-btn">
				        <button class="btn btn-success" onclick="search();" type="button">Search</button>
				      </span>
				    </div>
			    </form>
		  	</div>

		</div>
		<br/>
		<!-- show menu and article -->
		<div class="row marginLR">
			<div class='row'>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<div class="panel panel-primary">
						  <div class="panel-heading ">menu</div>
						  <div class="panel-body">
						  		<ul class="nav  " >
							        
							        <li><a href="#">News</a></li>
							        <li><a href="#">Technology</a></li>
							        <li><a href="#">Article</a></li>
							        <li><a href="#">Log In</a></li>
							     </ul>
						  </div> 
						   
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
						<div class="panel panel-primary">
						  <div class="panel-heading ">List Article</div>
						  <div class="panel-body">

								<div class="row">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:168px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><h4>Hellow World</h4></a>
										<div class="glyphicon glyphicon-calendar">Date:2015-09-22</div><br/>
										<p>Phnom Penh casino NagaWorld has signed off a $50 million deal with four different investors to operate a new gaming area, according to a May 28 announcement from its H.........
										<br/>
			      						<a href="#" class="btn btn-primary">Read More...</a>
		      						</div>
		      					</div>
		      					<hr/>
		      					<div class="row">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:168px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><h4>Hellow World</h4></a>
										<div class="glyphicon glyphicon-calendar">Date:2015-09-22</div><br/>
										<p>Phnom Penh casino NagaWorld has signed off a $50 million deal with four different investors to operate a new gaming area, according to a May 28 announcement from its H.........
										<br/>
			      						<a href="#" class="btn btn-primary">Read More...</a>
		      						</div>
		      					</div>
		      					<hr/>
		      					<div class="row">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:168px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><h4>Hellow World</h4></a>
										<div class="glyphicon glyphicon-calendar">Date:2015-09-22</div><br/>
										<p>Phnom Penh casino NagaWorld has signed off a $50 million deal with four different investors to operate a new gaming area, according to a May 28 announcement from its H.........
										<br/>
			      						<a href="#" class="btn btn-primary">Read More...</a>
		      						</div>
		      					</div>
		      					<hr/>
		      					<div class="row">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:168px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><h4>Hellow World</h4></a>
										<div class="glyphicon glyphicon-calendar">Date:2015-09-22</div><br/>
										<p>Phnom Penh casino NagaWorld has signed off a $50 million deal with four different investors to operate a new gaming area, according to a May 28 announcement from its H.........
										<br/>
			      						<a href="#" class="btn btn-primary">Read More...</a>
		      						</div>
		      					</div>
		      					<hr/>
		      					<div class="row">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:168px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><h4>Hellow World</h4></a>
										<div class="glyphicon glyphicon-calendar">Date:2015-09-22</div><br/>
										<p>Phnom Penh casino NagaWorld has signed off a $50 million deal with four different investors to operate a new gaming area, according to a May 28 announcement from its H.........
										<br/>
			      						<a href="#" class="btn btn-primary">Read More...</a>
		      						</div>
		      					</div>
		      					<br/>
		      					<div class="text-center">
			      					<ul class="pagination ">
									  <li><a href="#">1</a></li>
									  <li class="active"><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									</ul>
								</div>

						  </div>  
						</div>
					</div>
					
				</div>
		</div>
	</div>
	<br/>
	<!-- footer -->
	<div class="container-fluid foot">
		<div class="row">
			<div class="col-xs-12">
					<h4>Copy Right@2015</h4>
			</div>
		</div>
	</div>
	
	 <script src="<?php base_url(); ?>asset/js/jquery.js"></script>
	 <script src="<?php base_url(); ?>asset/js/bootstrap.min.js"></script>
</body>
</html>