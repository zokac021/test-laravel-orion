<?php

namespace App\Http\Controllers\api;

use App\Models\Contest;

use Orion\Http\Controllers\RelationController;
use Illuminate\Http\Request;

use Orion\Concerns\DisablePagination;
use Orion\Concerns\DisableAuthorization;

class ContestsTeamsController extends RelationController
{
    use DisablePagination;
    use DisableAuthorization;

    protected $model = Contest::class;

    protected $relation = 'team';

   

}
