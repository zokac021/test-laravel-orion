<?php

namespace App\Http\Controllers\api;

use App\Models\Contest;

use Orion\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class ContestController extends Controller
{
    use DisablePagination;
    use DisableAuthorization;
    
    protected $model = Contest::class; 
}
