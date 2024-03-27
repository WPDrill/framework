<?php

namespace App\Models;

use WPDrill\Model;

class User extends Model
{
	public static function getTableName(): string
	{
		return 'users';
	}
}
