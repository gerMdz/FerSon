<?php

namespace App\Policies;

use App\Models\Profiler;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilerPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Profiler $profiler): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Profiler $profiler): bool
    {
    }

    public function delete(User $user, Profiler $profiler): bool
    {
    }

    public function restore(User $user, Profiler $profiler): bool
    {
    }

    public function forceDelete(User $user, Profiler $profiler): bool
    {
    }
}
