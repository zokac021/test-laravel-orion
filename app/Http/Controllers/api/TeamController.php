<?php

namespace App\Http\Controllers\api;

use App\Models\Team;

use Orion\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class TeamController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;
    
    protected $model = Team::class; 
}
