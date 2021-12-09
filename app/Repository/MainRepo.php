<?php

namespace App\Repository;

use App\User;

class MainRepo 
{
	public function allData($data)
	{
		return User::all();
	}
}

?>