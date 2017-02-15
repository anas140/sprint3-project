<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?php echo base_url().'js/jquery.min.js'?>"></script>
	<!--<script type="text/javascript" src="<?php //echo base_url().'js/bootstrap.js'?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php //echo base_url().'css/bootstrap.css'?>"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'?>">
	<style type="text/css">
		.container-fluid {
			padding: 0;
		}
		.sheader {
			width: 100%;
			height: 40px;
			background-color: #4867aa;
			margin: 0;
		}
		.input-box {
			margin-top: 3px;
		}
		.pad {
			padding: 0;
		}
		.sbody {
			width: 100%;
		}
		.mgn-non {
			margin-bottom: 0;
		}
		.fbbody {
			background-color: #e9eaed;
			height: 1000px;
			margin-right: 0;
		}
		.col3 {
			margin-top: 10px;
		}
		.mgtp {
			margin-top: 4px;
		}
		.cbody {
			background-color: white;
			padding-left: 2%;
			border: 1px solid #CCD1D1;
    		border-radius: 7px;
		}
		.brdr-r {
			border-right: 1px solid #CCD1D1;
			padding-left: 10%;
		}
		.brdr-b {
			border-bottom: 1px solid #CCD1D1;
			padding: 2% 0;
		}
		.pbody {
			padding: 2% 0;
		}
		.wym {
			display: inline;
    		width: 91%;
    		padding: 4% 1%;
    		border: none;
    		box-shadow: none;
		}
		.cbody2 {
			margin-top: 5px;
			margin-bottom: 5px;
			/*width: 100%;*/
			height: 350px;
		}
		.lcol {
			background-color: white;
    		height: 482px;
    		/*width: 32.33%;*/
    		margin-left: 9px;
    		/*padding-right: 31%;*/
		}
	</style>
</head>
<body>
	

		<?php //echo [$data][0]['chr_first_name'];
			// print_r($data[0][0]['pk_int_user_id']); ?>
	<div class="container-fluid">
		<div class="row sheader">
			<div class="col-md-4 col-md-offset-2 input-box">
				<form class="form-horizontal" role="form">
					<div class="form-group mgn-non">
						<!-- <i class="glyphicon glyphicon-search"></i> -->
						<input type="text" name="" class="form-control" placeholder="Search Facebook">
						<i class="glyphicon glyphicon-search form-control-feedback"></i>
					</div>
				</form>
			</div>
			<div class="col-md-4 col-md-offset-2" style="    margin-top: 8px;color: white;">
				<img src="<?php echo $data[0][0]['prof_pic']; ?>" style="width: 6%; height: 20px;">
				<span><?php echo $data[0][0]['chr_firstname']; ?></span>
			</div>
		</div>
		<!-- <div class="container-fluid"> -->
		<div class="row fbbody">
			<div class="col-md-2 col3">
				<div class="row">
					<div class="col-md-offset-2 col-md-10">
						<a href="#" style="color: black;"><img src="<?php echo $data[0][0]['prof_pic'] ?>" style=" height: 20px;">
						<spn><?php  echo $data[0][0]['chr_firstname']; ?></spn></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-2 col-md-10">
						<a href="#"><i class="glyphicon glyphicon-edit mgtp"></i>
						Edit Profile</a>

					</div>
				</div>
			</div>
			<div class="col-md-6 col3">
				<div class="row cbody ">
					<div class="col-md-12">
						<div class="row brdr-b">
							<div class="col-md-4">
								<a href="#"><i class="glyphicon glyphicon-edit"></i> Update Status</a>
								<span class="brdr-r"></span>
							</div>
							
							<div class="col-md-4">
								<a href="#"><span class="glyphicon glyphicon-picture text-warning"></span> Add photos/video
								</a>
								<span class="brdr-r"></span>
							</div>
							<div class="col-md-4">
								<a href="#"><i class="glyphicon glyphicon-list-alt text-success"></i> Write note</a>
							</div>
						</div>
						<div class="row pbody">
							<div col-md-offset-1 col-md-11>
								<span style><img src="<?php echo $data[0][0]['prof_pic']; ?>" style="width: 50px; height: 50px;"></span>
								<input type="textarea" name="" class="form-control wym" placeholder="Whats on your mind">
							</div>
						</div>
					</div>
				</div>
				<div class="row cbody cbody2">
					<div class="col-md-12"></div>
				</div>
			</div>	
			

			<div class="col-md-2 col3 lcol cbody">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<span>YOUR ADS<span></span><span class="glyphicon glyphicon-chevron-down form-control-feedback"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
		
	</div>
	<?php // } ?>
</body>
</html>