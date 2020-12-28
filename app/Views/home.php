<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<!-- Bootstrap 5 -->
	<link rel="stylesheet" type="text/css" href="public/bootstrap.min.css" />
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<h5 class="card-header">All Data <a href="./add" class="btn btn-sm btn-success float-end">Add Data</a></h5>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>#</th>
						<th>Full Name</th>
						<th>Mobile</th>
						<th>Department</th>
						<th>Action</th>
					</tr>
					<?php
						foreach($employees as $emp){
							?>
							<tr>
								<td><?php echo $emp['id']; ?></td>
								<td><?php echo $emp['full_name']; ?></td>
								<td><?php echo $emp['mobile']; ?></td>
								<td><?php echo $emp['department']; ?></td>
								<td>
									<a href="<?php echo site_url('update/'.$emp['id']); ?>" class="btn btn-sm btn-primary">Modify</a>
									<a onclick="return confirm('Are you sure to delete this data?')" href="<?php echo site_url('delete/'.$emp['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
								</td>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>