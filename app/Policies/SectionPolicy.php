<?php

namespace App\Policies;

use App\Models\Section;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Section $section): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Section $section): bool
    {
    }

    public function delete(User $user, Section $section): bool
    {
    }

    public function restore(User $user, Section $section): bool
    {
    }

    public function forceDelete(User $user, Section $section): bool
    {
    }
}
