<?php $this->extend('layout'); ?>
<?php $this->section('title'); ?>
<title><?php echo $pageTitle; ?></title>
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
<div class="card">
	<h5 class="card-header">Update Data <a href="<?php echo site_url('/'); ?>" class="btn btn-sm btn-success float-end">All Data</a></h5>
	<div class="card-body">
		<?php
			$errors=\Config\Services::validation()->getErrors();
			if(!empty($errors)){
				?>
				<div class="alert alert-danger">
					<?php
					foreach($errors as $e){
						?>
						<p><?php echo $e; ?></p>
						<?php
					}
					?>
				</div>
				<?php
			}

			if(isset($status)){
				?>
				<p class="alert alert-success"><?php echo $status; ?></p>
				<?php
			}
		?>
		<form method="post" action="">
			<?php echo csrf_field(); ?>
			<table class="table table-bordered table-hover">
				<tr>
					<th>Full Name <span class="text-danger">*</span></th>
					<td>
						<input type="text" value="<?php echo $emp['full_name']; ?>" class="form-control" name="full_name" />
					</td>
				</tr>
				<tr>
					<th>Email <span class="text-danger">*</span></th>
					<td>
						<input type="email" value="<?php echo $emp['email']; ?>" class="form-control"  name="email" />
					</td>
				</tr>		
				<tr>
					<th>Mobile</th>
					<td>
						<input type="text" value="<?php echo $emp['mobile']; ?>" class="form-control"  name="mobile" />
					</td>
				</tr>	
				<tr>
					<th>Address</th>
					<td>
						<input type="text" value="<?php echo $emp['address']; ?>" class="form-control" name="address" />
					</td>
				</tr>	
				<tr>
					<th>Department</th>
					<td>
						<input type="text" value="<?php echo $emp['department']; ?>" class="form-control"  name="department" />
					</td>
				</tr>	
				<tr>
					<th>Salary</th>
					<td>
						<input type="text" value="<?php echo $emp['salary']; ?>" class="form-control" name="salary" />
					</td>
				</tr>
				<tr>
					<th>DOJ</th>
					<td>
						<input type="date" value="<?php echo $emp['doj']; ?>" class="form-control" name="doj" />
					</td>
				</tr>
				<tr>
					<th>DOR</th>
					<td>
						<input type="date" value="<?php echo $emp['dor']; ?>" class="form-control" name="dor" />
					</td>
				</tr>
				<tr>
					<th>Active Status</th>
					<td>
						<input type="text" value="<?php echo $emp['is_active']; ?>" class="form-control" name="is_active" />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" class="btn btn-primary" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php $this->endSection(); ?>