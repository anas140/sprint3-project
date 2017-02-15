<!DOCTYPE html>
<html>
<head>

	<!-- <?php //$this->load->helper('url'); ?> -->
	<?php $this->load->helper(array('form', 'url')); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url().'js/jquery.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.js'?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'?>">
	  
	<!-- <script type="text/javascript" src="<?php //echo base_url().'js/script.js'?>"></script>-->
	<title></title>
	<style type="text/css">
		.mgnz {
			margin-left: 0;
		}
		.fir-last {
			max-width: 80%;
			/*margin-left: 14px;*/
		}
		.input-form {
			margin: 0;
		}
		h3 {
			margin-left: 37%;
		}
		.btn-lg {
			padding: 4px 394px;
			margin-top: 26px;
    		margin-bottom: 18px;
		}
	</style>
</head>
<body>
		<div class="container-fluid pad">
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>

			<!-- Large Devices -->
			<div class="row header-nav">
				<div class="container ">
					<div class="col-md-offset-3 col-xs-offset-3 col-md-3">
						<img src="<?php echo base_url().'images/fblogo.png'?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class=" col-md-offset-2 col-md-10">
					<div class="row">
						<div class="col-md-10">
							<h3>Verify Email</h3>

							<p>We sent an email to <?php echo $email; ?>  make sure that you own it. Plaese check
								your inbox.then follow the instructions to finish setting up your account.</p>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-10">
							<input type="submit" value="Resend Email" class="btn-info btn-lg">
						</div>
					</div>
					<div class="row">
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-4">
									<a href="#">Terms of use</a>
								</div>
								<div class="col-md-4">
									<a href="#">Privacy & Cookies</a>
								</div>
								<div class="col-md-4">
									<a href="#">Sign Out</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>					