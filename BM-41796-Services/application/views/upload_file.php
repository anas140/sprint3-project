<html>
	<head>
		<?php $this->load->helper('form','url'); ?>
	</head>
	<body>
	 <!-- <form method="POST" action="<?php //echo base_url().'/index.php/Upload/doUpload'?>" enctype="multipart/form-data"> -->
	<?php echo form_open_multipart('Upload/doUpload');?> 
		<input type="file" name="profile_image">
		<input type="text" name="fname">
		<input type="submit">
	</form>
	</body>
</html>