<?php $this->loadView('header'); ?>


<div class="page-header text-center">
	<h2>
		Welcome <a href="<?php echo $this->url('user/show', $user['id']) ?>">  <?php echo $user['first_name']." ".$user['last_name']?>  </a>
	</h2>

	<p>Create Your Post Here</p>
</div>

<form method="POST" action="<?php echo $this->url('post/createPost', $user['id'])?>">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
		  		<div class="form-group">
						<input type="text" name="post_title" class="form-control" placeholder="Enter post title">
				</div>
				<div class="form-group">
						<textarea  class="form-control" rows="5" name="post_description" placeholder="Enter post description"></textarea>
				</div>

				<div class="form-group">
					<input type="submit" name="createpost" value="Create Post" class="btn btn-primary">
				</div>
			</div>
		</div>
	</div>

</form>

</p>
<?php $this->loadView('footer'); ?>