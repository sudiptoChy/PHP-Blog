<?php

namespace app\models;

use PDO;

class Connection
{
	static $connection = null;

	public static function make()
	{
		if(is_null(static::$connection)) {
			try {
				$dsn = 'mysql:host=localhost;dbname=phpws';
				static::$connection = new PDO($dsn, 'root', 'dip123', [
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				]);
			} catch(\PDOException $e) {
				var_dump($e) && exit;
			}
		}
		return static::$connection;
	}
}
