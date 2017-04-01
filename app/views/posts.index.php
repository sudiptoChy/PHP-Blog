<?php $this->loadView('header'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="jumbotron">
      <h1>Welcome to my Blog!</h1>
      <p class="lead">This is my blog. Here you can read all of the posts. Thank you.</p>
    </div>
  </div>
</div>
  

  <div class="row">
    <div class="col-md-12">

    <?php foreach($posts as $post): ?>

      <div class="post">
        <h3> <?php echo $post['post_title']; ?> </h3>
        <p>
            <?php echo substr($post['post_description'], 0, 500);

              if(strlen($post['post_description'])>500)
              {
                echo "...............";
              }else{
                echo "";
              }

            ?>
            <!--  {{ strlen($post->body) > 500 ? "..." : "" }} -->
            <br> <br>
            <a href="<?php echo $this->url('/post/show', $post['id'].'/'.$post['user_id']) ?>" class="btn btn-primary"> Read more </a>
        </p>
      </div>

      <hr>

      <?php endforeach; ?>
    
    </div>
  </div>



<?php $this->loadView('footer'); ?>
