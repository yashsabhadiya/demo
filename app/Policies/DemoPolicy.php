<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DemoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function demo($data)
    {
        if($data->id == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
