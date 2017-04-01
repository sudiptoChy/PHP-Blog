<?php $this->loadView('header'); ?>

	<div class="row">
	    <div class="col-md-8">
	      <h1> <?php echo $post['post_title']; ?> </h1>
	      <p class="lead"> <?php echo $post['post_description']; ?> </p>
	    </div>

	    <div class="col-md-4">
	      <div class="well">

	       <dl class="horizontal">
	          <dt>Posted By:</dt>
	          <dd> <a href="<?php echo $this->url('/user/show', $post['user_id']); ?>"> <?php echo $user['first_name']." ".$user['last_name']; ?> </a> </dd>
	       </dl>

	       <dl class="horizontal">
	          <dt>Created at:</dt>
	          <dd> <?php echo date('M j, Y h:i a', strtotime($post['created_at'])); ?> </dd>
	       </dl>

	        <dl class="horizontal">
	          <dt>Last Updated:</dt>
	          <dd> <?php echo date('M j, Y h:i a', strtotime($post['updated_at'])); ?> </dd>
	        </dl>
	        <hr>

	        <div class="row">
	          <div class="col-sm-6">
	            <a href="<?php echo $this->url('/post/updatepost', $post['id']."/".$post['user_id']); ?>" class="btn btn-primary btn-block">Edit</a>
	          </div>

	          <div class="col-sm-6">
	              <form method="POST" action="<?php echo $this->url('/post/deletepost', $post['id']) ?>">
	                  <input type="submit" value="Delete" class="btn btn-danger btn-block">
	              </form>
	          </div>
	        </div>

	        <div class="row">
	          <div class="col-sm-12">
	            <br>
	            <a href="<?php echo $this->url('/post') ?>" class="btn btn-default btn-block"> << See all Posts</a>
	          </div>
	        </div>

	      </div>
	    </div>
  </div>

<?php $this->loadView('footer'); ?>


