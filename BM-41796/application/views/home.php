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
					<div class="col-md-offset-7 hidden-xs mgnz">
						<form class="form-inline lbl" method="POST" action="<?php echo base_url().'/index.php/logind/authUser'?>">
							<div class="form-group top">
								<label>Email or Phone</label><br>
								<input type="text" name="username" id="username">
								<label id="username-error"></label>
							</div>
							<div class="form-group frg">
								<label>Password</label><br>
								<input type="Password" name="password" id="password"><br>
								<a href="#" class="">forgot password?</a>
								<label id="password-error"></label>
							</div>
							<div class="form-group top">
								<input type="submit" class="btn btn-xs btn-primary login-btn" value="Login" id="bt-log">
							</div>
						</form>
					</div>
			    </div>		
			</div>
			<div class="content hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-6 left-panel">
							<h3 id="headfb">Facebook helps you connect and share with the people in your life.</h3>
							<img src="https://www.facebook.com/rsrc.php/v3/yx/r/pyNVUg5EM0j.png">
						</div>
						<div class="col-md-6 left-panel">
							<h1 id="headfb2">Create an account</h1>
							<h4 id="headfb3">Its always free and always will be.</h4>
							<form method="POST" class="form-horizontal" id="regform" onload="return validation()" action="<?php echo base_url().'/index.php/Signup/signup_val'?>" enctype="multipart/form-data">
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
				</div>
			</div>

			<!-- LOGIN FORM MOBILE DEVICES ONLY -->
			<div class="row ">
				<div class="col-xs-12 col-sm-12 hidden-md hidden-lg bck">
					<div class="container">
						<form role="form" class="form-inline form-xs" method="POST" action="<?php echo base_url().'/index.php/logind/authUser' ?>">
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="Email address or phone number">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group btn-last">
								<input type="submit" class="btn btn-primary btn-xs" style="padding: 4px 0px;" value="Login">
							</div>
						</form>
						<form role="form" class="form-inline form-xs" method="POST" action="<?php echo base_url().'/index.php/Logind/signup_res' ?>" >	
							<div class="form-group btn-last">
								<input type="submit" class="btn btn-success btn-xs-2" value="Create new account" style="padding: 4px 0px;">
							</div>
						</form>
						<div class="text-centre">
							<a href="#">forgotten password? </a>
							<a href="#" class="second"> Help centre</a>
						</div>
					</div>
				</div>
			</div>


		</div>

</body>
</html>