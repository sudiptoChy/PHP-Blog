<?php $this->loadView('header'); ?>

	<div class="col-md-6 col-md-offset-3">
		<h2>User Create Form</h2>
		<hr>
		<form method="POST" action="<?php echo $this->url('user/userCreate')?>">
			<div class="form-group">
				<input type="text" name="first_name" class="form-control" placeholder="Enter the first name">
			</div>

			<div class="form-group">
				<input type="text" name="last_name" class="form-control" placeholder="Enter the last name">
			</div>

			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Enter the email">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="Create" class="btn btn-primary btn-sm">
			</div>
		</form>
	</div>

<?php $this->loadView('footer'); ?>

