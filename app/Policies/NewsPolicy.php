<?php

namespace App\Policies;

use App\Models\User;

class NewsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability)
{
    if ($user->role->name === 'Administrador') {
        return true; // Permite el acceso para Administradores
    }

    public function create(User $user)
{
    return $user->role->name === 'Administrador' || $user->role->name === 'Editor';
}

public function edit(User $user, News $news)
{
    return $user->role->name === 'Administrador' || ($user->role->name === 'Editor' && $news->user_id === $user->id);
}

// Otros métodos según sea necesario

}

}
