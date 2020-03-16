<?php

namespace App\Policies;

use App\Chamado;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChamadoPolicy
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

    public function before($user, $ability)
    {
        if($user->isSuperAdmin()) {
            return true;
        }
    }

    public function delete(User $user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }

    public function update(User $user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }

    public function view(User $user, Chamado $chamado)
    {
        return $user->id == $chamado->user_id;
    }

    public function create(User $user)
    {
        return true;
    }
}
