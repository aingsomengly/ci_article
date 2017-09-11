<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Detail</title>
	<link rel="stylesheet" href="<?php base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" href="<?php base_url(); ?>asset/css/bootstrap.min.css">
    <style type="text/css">
    	.pd-b-5{
    		padding-bottom: 5px;
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

							<div class="panel panel-primary">
						  <div class="panel-heading ">Related</div>
						  <div class="panel-body">
						  		<div class="row pd-b-5">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:100px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><p>Hellow World</p></a>
			      						<a href="#" class="btn btn-primary btn-sm">Read More...</a>
		      						</div>
		      					</div>

		      					<div class="row pd-b-5">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:70px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><p>Hellow World</p></a>
			      						<a href="#" class="btn btn-primary btn-sm">Read More...</a>
		      						</div>
		      					</div>

		      					<div class="row pd-b-5">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:100px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><p>Hellow World</p></a>
			      						<a href="#" class="btn btn-primary btn-sm">Read More...</a>
		      						</div>
		      					</div>

		      					<div class="row pd-b-5">			      					
			                     	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5  ">
										<a href="#"><img class="img-responsive" style="width:100%; height:100px" src="asset/img/default.jpg"></a>
			      					</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7  ">
										<a href="#"><p>Hellow World</p></a>
			      						<a href="#" class="btn btn-primary btn-sm">Read More...</a>
		      						</div>
		      					</div>
		      					
		      					
		      					
		      				
		      					
						  </div> 
						   
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
						<div class="panel panel-primary">
						  <div class="panel-heading ">List Article</div>
						  <div class="panel-body">

								<div class="row">	
									<h3>This is header</h3>		      					
			                     	<p>
			                     		ទើប​ជាប់​ឆ្នោត​ឡើង​កាន់​តួនាទី​ថ្មី​ជា ប្រធាន​សភា​ពាណិជ្ជកម្ម​ប្រចាំ​ខេត្ត​កំពង់ស្ពឺ ​សប្ដាហ៍​កន្លង​ទៅ​នេះ​លោក ​ឡេង សុខគា បាន​បង្ហាញ​ពី​មហិច្ឆតា​សម្រេច​ការងារ​​អាទិភាព​២ ដើម្បី​រួមចំណែក​ជំរុញ​ការ​អភិវឌ្ឍន៍​សេដ្ឋកិច្ច។ ទី​មួយ ​ពង្រីក​ការ​ដាំដុះ​ ​បង្កើន​ទិន្នផល​កសិកម្ម​​ធម្មជាតិ ​និង​ទីពីរ តម្លើង​រោងចក្រ​កែច្នៃ​បង្កើត​Brand ​​ដើម្បី​នាំចេញ។
 
										ផលិតផល​ធម្មជាតិ​គ្មាន​ជាតិ​គីមី ស្រូវ ​ស្ករ​ត្នោត ផ្លែ​ស្វាយ​ស្រស់ គឺ​ជា​ដែល​មាន​ទីផ្សារ​ធំៗ​​មាន​ដូចជា សហភាព​អឺរ៉ុប​ (អង់គ្លេស/បារាំង)​ ចិន​ អាមេរិក​ និង​កូរ៉េ សុទ្ធ​តែ​ជា​ម៉ូយ​ចាំ​ទទួល​ឥវ៉ាន់​ពី​កម្ពុជា។
										 
										“យើង​ចង់​បាន​ទិន្នផល​ច្រើន​ទៀត​សម្រាប់​នាំ​ចេញ​ជា​ពិសេស ស្រូវ ​ស្ករ​ត្នោត និង​ ​ស្វាយ​…អ៊ីចឹង​យើង​ត្រូវ​ការ​អ្នក​វិនិយោគ​មក​បោះ​ទុន​ពង្រីក​ដី​ដាំដុះ​បន្ថែម …   ដាំដុះ​បាន​ហើយ ត្រូវ​មាន​រោងចក្រ​កែច្នៃ វ៉ៃ​ស្លាក​យីហោ​ខ្លួន​ឯង​សម្រាប់​នាំចេញ។ អឺរ៉ុប​គេ​សាទរ ​និង​​ត្រូវ​ការ​ឥវ៉ាន់​យើង​​​ណាស់”។
			                     	</p>
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