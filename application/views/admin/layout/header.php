<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo PAGE_NAME ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/<?php echo PAGE_CSS ?>.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/dist/css/bootstrap-theme.min.css">
</head>
<body>
<?php 
if ($this->session->flashdata('result') != ''): 
  echo '<p id="mr">';
    echo $this->session->flashdata('result'); 
    echo '</p>';
endif;
 ?>
