<?php

namespace App\Services\SportScore\Facades;

use App\Services\SportScore\Endpoints\Sports;
use App\Services\SportScore\Endpoints\Teams;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Facades\Facade;

class SportScore extends Facade
{
    /**
     * @method static Sports sports()
     * @method static Teams teams()
     */
    protected static function getFacadeAccessor()
    {
        return SportScoreService::class;
    }
}
