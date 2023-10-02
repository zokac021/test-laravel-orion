<?php

namespace App\Http\Controllers\api;

use App\Models\Contest;

use Illuminate\Http\Request;
use Orion\Concerns\DisablePagination;

use Illuminate\Database\Eloquent\Model;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\RelationController;
use Illuminate\Database\Eloquent\Relations\Relation;

class ContestsTeamsController extends RelationController
{
    use DisablePagination;
    use DisableAuthorization;

    protected $model = Contest::class;

    protected $relation = 'team';

    // public function index(Request $request, $parentKey): Builder
    // {
    //     dd($parentKey);
    // }

    public function includes() : array
    {
        return ['player'];
    }

}
