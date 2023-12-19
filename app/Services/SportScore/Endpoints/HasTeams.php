<?php

namespace App\Services\SportScore\Endpoints;

trait HasTeams
{
    public function teams()
    {
        return new Teams();
    }
}
