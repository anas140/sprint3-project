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
		.header-nav {
			height: 52px;
		}
		form {
			margin-top: 13px;
		}
	</style>
</head>
		<body>
		<div class="container">
			<div class="row header-nav">
					<div class="col-md-offset-3 col-xs-offset-3 col-md-3">
						<img src="<?php echo base_url().'images/fblogo.png'?>">
					</div>
					<div class="container">
					<form method="POST" class="form-vertical" id="regform" onload="return validation()" action="<?php echo base_url().'/index.php/Signup/signup_val'?>" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="firstname" placeholder="First name" class="form-control fir-last form-firt" id="first-name" data-toggle="tooltip">
				<br><span style="color: red;"><?php if(isset($fname_error)) echo  $fname_error; ?></span>
				<label id="" ></label>
			</div>
			<div class="form-group">
				<input type="text" name="secondname" placeholder="Last name" class="form-control fir-last
				 form-firt" id="second-name" data-toggle="tooltip" title="Invalid Second name">
				 <br><span style="color: red;"><?php if(isset($sname_error)) echo  $sname_error; ?></span>
			</div>	
			<div class="form-group">	 
				<input type="text" name="email" class="form-control input-form" placeholder="Email address" id="mob-email">
				<span style="color: red;"><?php if(isset($email_error)) echo  $email_error; ?></span>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control input-form" placeholder="New password" id="password">
				<span style="color: red;"><?php if(isset($password_error)) echo $password_error; ?></span>

			</div>
			<div class="form-group">
				<input type="file" name="profpic" class="form-control input-form" placeholder="Browse File">
				<!-- <img src="<?php //echo $prof_pic; ?>"> -->
			</div>	
			<div class="form-group">
				<label>Birthday</label><br>
				<div class="row">
					<div class="col-md-12">
					<select class="form" name="dob-day">
						<script>
							var i;
							for(i=1;i<=31;i++) {
								document.write("<option value='"+i+"'>"+i+"</option>");
							}
						</script>
					</select>
					<select class="" name="dob-month">
						<option selected>Month</option>
						<option value='1'>Jan</option>
						<option value='2'>Feb</option>
						<option value='3'>March</option>
						<option value='4'>April</option>
						<option value='5'>May</option>
						<option value='6'>June</option>
						<option value='7'>July</option>
						<option value='8'>Aug</option>
						<option value='9'>Sep</option>
						<option value='10'>Oct</option>
						<option value='11'>Nov</option>
						<option value='12'>DEC</option>
					</select>
					<select name="dob-year">
						<option selected>Year</option>
						<script>
						    
						    var d = new Date(); 
						    var y = d.getFullYear() - 100;
						    var c = d.getFullYear();
						    var e = c - 13;
							for(y;y<=e;y++) {
								document.write("<option value='"+y+"'>"+y+"</option"+"<br>")
							}
						</script>
					</select><br>
					</div>
				</div>
				<span style="color: red;"><?php if(isset($dob_error)) echo $dob_error; ?></span>

			</div>
			<div class="form-group">
				<input type="radio" name="gender" class="" value="male" id="gm">Male
				<input type="radio" name="gender" class="" value="female" id="gf">Female<br>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-success" value="Create an account" id="bt-up">
			<!-- </div>	 -->
			</div>
		</form>
		</div>
		</div>
		</body>
</html>