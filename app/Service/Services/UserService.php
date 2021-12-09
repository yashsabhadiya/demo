<?php

namespace App\Service\Services;

use App\Service\Faces\UserInterface;
use App\User;

class UserService implements UserInterface
{
	public function userData($d)
	{
		return User::find($d);
	}
}