<?php $this->loadView('header'); ?>

<div class="page-header"><h2 style="text-align: center; color: red">Welcome to Admin Panel</h2></div>

<div class="col-md-6 col-md-offset-10">
	<form method="POST" action="<?php echo $this->url('user/create'); ?>">
		<div class="form-group">
			<input type="submit" name="submit" value="Create New User" class="btn btn-primary">
		</div>
	</form>
</div>

<table class="table">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?php echo $user['first_name']; ?></td>
				<td><?php echo $user['last_name']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td>

				<div class="col-md-2">
	              <form method="POST" action="<?php echo $this->url('user/show', $user['id']); ?>">
	                  <input type="submit" value="View" role="button" class="btn btn-info btn-xs">
	              </form>
	          	</div>

	          	<div class="col-md-2">
	              <form method="POST" action="<?php echo $this->url('user/update', $user['id']); ?>">
	                  <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
	              </form>
	          	</div>

	         	 <div class="col-md-2">
	              <form method="POST" action="<?php echo $this->url('user/delete', $user['id']); ?>">
	                  <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
	              </form>
	          	</div>

	          	<div class="col-md-2">
	              <form method="POST" action="<?php echo $this->url('post/create', $user['id']); ?>">
	                  <input type="submit" value="Create Post" role="button" class="btn btn-primary btn-xs">
	              </form>
	         	</div>
	         	
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<?php $this->loadView('footer'); ?>
