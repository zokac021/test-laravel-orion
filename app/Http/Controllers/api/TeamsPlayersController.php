<?php

namespace App\Http\Controllers\api;

use App\Models\Team;

use Illuminate\Http\Request;
use Orion\Concerns\DisablePagination;

use Orion\Concerns\DisableAuthorization;
use Illuminate\Database\Eloquent\Builder;
use Orion\Http\Controllers\RelationController;



class TeamsPlayersController extends RelationController
{
    use DisablePagination;
    use DisableAuthorization;

    protected $model = Team::class;

    protected $relation = 'player';
    
}
