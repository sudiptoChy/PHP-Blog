<?php

namespace app\models;

use app\models\Connection;

class Post{

	public function __construct()
	{
		$this->db = Connection::make();
	}

	public function getPosts()
	{
		$statement = $this->db->prepare('select * from posts ORDER BY id DESC;');
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	public function getPostByID($id)
	{
		$statement = $this->db->prepare('select * from posts where id = :id');
		$statement->bindParam('id', $id);
		$statement->execute();
		$result = $statement->fetch();
		if($result) return $result;
		throw new \Exception("Not Found!", 404);
	}

	public function createPostByUser($post_title, $post_description, $user_id)
	{
		$statement = $this->db->prepare('INSERT into posts(post_title, post_description, user_id, created_at, updated_at) VALUES(:title,:description,:uid,:created_at,:updated_at)');
		$statement->bindparam(":title", $post_title);
		$statement->bindparam(":description", $post_description);
		$statement->bindparam(":uid", $user_id);
		$cr = date('Y-m-d H:i:s');
		$up = date('Y-m-d H:i:s');
		$statement->bindparam(":created_at", $cr);
		$statement->bindparam(":updated_at", $up);
		$statement->execute(); 
	}

	public function updatePost($id, $post_title, $post_description)
	{
		$statement = $this->db->prepare('UPDATE posts SET post_title = :title, post_description = :description, updated_at = :updatedat WHERE id = :id');

		
		$statement->bindParam(":title", $post_title);
		$statement->bindParam(":description", $post_description);
		$cr = date('Y-m-d H:i:s');
		$statement->bindParam(":updatedat", $cr);
		$statement->bindParam(":id", $id);
		$statement->execute();
	}

	public function deletePost($id)
	{
		$statement = $this->db->prepare("DELETE from posts WHERE id = :id");
		$statement->bindParam(":id", $id);
		$statement->execute();
	}
}