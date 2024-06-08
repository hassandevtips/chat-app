<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class UserModelScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $loggedInUserId = Auth::id();

        if ($loggedInUserId) {
            $builder->where('id', '!=', $loggedInUserId);
        }
    }
}
