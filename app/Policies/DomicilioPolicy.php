<?php

namespace App\Policies;

use App\Models\Domicilio;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DomicilioPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Domicilio $domicilio): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Domicilio $domicilio): bool
    {
    }

    public function delete(User $user, Domicilio $domicilio): bool
    {
    }

    public function restore(User $user, Domicilio $domicilio): bool
    {
    }

    public function forceDelete(User $user, Domicilio $domicilio): bool
    {
    }
}
