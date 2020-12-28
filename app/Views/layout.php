<!DOCTYPE html>
<html>
<head>
	<?php $this->renderSection('title'); ?>
	<!-- Bootstrap 5 -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/bootstrap.min.css'); ?>" />
</head>
<body>
	<div class="container mt-5">
		<?php $this->renderSection('content'); ?>
	</div>
</body>
</html>