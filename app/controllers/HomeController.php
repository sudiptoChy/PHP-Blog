<?php

class HomeController extends Controller
{
	public function index()
	{
		return $this->app->loadView('home');
	}
}
