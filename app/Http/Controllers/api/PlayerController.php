<?php

namespace App\Http\Controllers\api;

use App\Models\Player;

use Orion\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class PlayerController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;
    
    protected $model = Player::class; 
}
