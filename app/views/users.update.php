<?php $this->loadView('header'); ?>

<div class="col-md-6 col-md-offset-3">
  <h2>Update User</h2>
  <hr>
  <form method="POST" action="<?php echo $this->url('user/update2', $user['id']) ?>">
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" name="first_name" class="form-control" value="<?php echo $user['first_name'];?>">
    </div>

    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name'];?>">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" class="form-control" value="<?php echo $user['email'];?>">
    </div>

    <button type="submit" class="btn btn-success">Update</button>

  </form>
</div>

<?php $this->loadView('footer'); ?>
