<?php

use app\models\Post;
use app\models\User;

class PostController extends Controller
{
	public function index()
	{
		return $this->app->loadView('posts.index', [
			'posts' => (new Post)->getPosts()
		]);
	}

	public function show($id, $user_id)
	{
		return $this->app->loadView('posts.show', [
			'post' => (new Post)->getPostByID($id),
			'user' => (new User)->getUserById($user_id)
		]);
	}

	public function create($id)
	{
		return $this->app->loadView('posts.create', [
			'user' => (new User)->getUserByID($id)
		]);
	}

	public function createPost($id)
	{
		$post_title = $_POST['post_title'];
		$post_description = $_POST['post_description'];
		$user_id = $id;

		(new Post)->createPostByUser($post_title, $post_description, $user_id);

		$this->index();

		/// Return to single post.

	}

	public function updatepost($id, $user_id)
	{
		return $this->app->loadView('posts.edit', [
			'post' => (new Post)->getPostByID($id),
			'user' => (new User)->getUserById($user_id)
		]);
	}

	public function updatepost2($id, $userId)
	{
		$post_title = $_POST['post_title'];
		$post_description = $_POST['post_description'];
		

		(new Post)->updatePost($id, $post_title, $post_description);
		$this->show($id, $userId);
	}

	public function deletepost($id)
	{
		(new Post)->deletePost($id);
		$this->index();
	}
}