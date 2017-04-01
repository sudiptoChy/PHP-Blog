<?php $this->loadView('header'); ?>

<p class="lead">
	<table class="table">
		<tbody>
			<tr>
				<th>First Name</th><td><?php echo $user['first_name']; ?></td>
			</tr>
			<tr>
				<th>Last Name</th><td><?php echo $user['last_name']; ?></td>
			</tr>
			<tr>
				<th>Email</th><td><?php echo $user['email']; ?></td>
			</tr>
		</tbody>
	</table>
</p>

<?php $this->loadView('footer'); ?>
