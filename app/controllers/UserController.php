<?php

use app\models\User;

class UserController extends Controller
{
	public function index()
	{
		return $this->app->loadView('users.index', [
			'users' => (new User)->getUsers()
		]);
	}

	public function show($id)
	{
		return $this->app->loadView('users.show', [
			'user' => (new User)->getUserById($id)
		]);
	}

	public function create()
	{
		return $this->app->loadView('users.create');
	}

	public function userCreate()
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];

		(new User)->createUser($first_name, $last_name, $email);
		$this->index();
	}

	public function update($id)
	{
		return $this->app->loadView('users.update', [
			'user' => (new User)->getUserByID($id)
		]);
	}

	public function update2($id)
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];

		(new User)->updateUserByID($first_name, $last_name, $email, $id);
		$this->index();
	}

	public function delete($id)
	{
		(new User)->deleteUserByID($id);
		$this->index();
	}
}