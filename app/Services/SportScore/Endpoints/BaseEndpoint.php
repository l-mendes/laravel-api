<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

abstract class BaseEndpoint
{
    protected SportScoreService $service;

    public function __construct()
    {
        $this->service = new SportScoreService();
    }

    protected function transform(array $data, string $entity): Collection
    {
        return collect($data)
            ->map(fn ($row) => new $entity($row));
    }
}
