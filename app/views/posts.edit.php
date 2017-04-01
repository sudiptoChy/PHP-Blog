<?php $this->loadView('header'); ?>

  <div class="row">
    <div class="col-md-8">
      <form method="POST" action="<?php echo $this->url('/post/updatepost2', $post['id']."/".$post['user_id']); ?>">
        <div class="form-group">
          <label name="title">Title:</label>
          <input id="title" name="post_title" class="form-control" value="<?php echo $post['post_title']; ?>">
        </div>
      
        <div class="form-group">
          <label name="body">Post Body:</label>
          <textarea id="body" name="post_description" rows="10" class="form-control"> <?php echo $post['post_description']; ?> </textarea>
        </div>

    </div>

    <div class="col-md-4">
      <div class="well">

        <dl class="horizontal">
            <dt>Posted By:</dt>
            <dd> <a href="<?php echo $this->url('/user/show', $post['user_id']); ?>"> <?php echo $user['first_name']." ".$user['last_name']; ?> </a> </dd>
         </dl>

        <dl class="horizontal">
          <dt>Created at:</dt>
          <dd><?php echo date('M j, Y h:i a', strtotime($post['created_at'])); ?></dd>
        </dl>

        <dl class="horizontal">
          <dt>Last Updated:</dt>
          <dd><?php echo date('M j, Y h:i a', strtotime($post['updated_at'])); ?></dd>
        </dl>
        <hr>

        <div class="row">
          <div class="col-sm-6">
            <a href="<?php echo $this->url('/post/show', $post['id']."/".$post['user_id']);?>" class="btn btn-danger btn-block">Cancel</a>
          </div>

          <div class="col-sm-6">
            <input type="submit" value="Save Changes" class="btn btn-success  btn-block">
          </div>
        </div>

      </div>
    </div>
  </div>

<?php $this->loadView('footer'); ?>
