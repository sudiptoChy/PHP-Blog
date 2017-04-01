<?php

namespace app\models;

use app\models\Connection;

class User
{
	public function __construct()
	{
		$this->db = Connection::make();
	}

	public function getUsers()
	{
		$statement = $this->db->prepare('select * from users');
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	public function getUserById($id)
	{
		$statement = $this->db->prepare('select * from users where id = :id');
		$statement->bindParam('id', $id);
		$statement->execute();
		$result = $statement->fetch();
		if($result) return $result;
		throw new \Exception("Not Found!", 404);
	}

	public function createUser($first_name, $last_name, $email)
	{
		$stmt = $this->db->prepare("INSERT INTO users(first_name,last_name,email) VALUES(:fname, :lname, :email)");
		$stmt->bindparam(":fname",$first_name);
		$stmt->bindparam(":lname",$last_name);
		$stmt->bindparam(":email",$email);
		$stmt->execute();
	}

	public function updateUserByID($first_name, $last_name, $email, $id)
	{

		$statement = $this->db->prepare("UPDATE users SET first_name = :fname, last_name = :lname, email = :email WHERE id = :id");

		$statement->bindParam(':id', $id);
		$statement->bindParam(':fname', $first_name);
		$statement->bindParam(':lname', $last_name);
		$statement->bindParam(':email', $email);

		$statement->execute();
	}

	public function deleteUserByID($id)
	{
		$statement = $this->db->prepare("DELETE from users WHERE id = :id");
		$statement->bindParam(":id", $id);
		$statement->execute();
	}
}