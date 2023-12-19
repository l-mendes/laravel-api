<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use App\Services\SportScore\Endpoints\HasTeams;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class SportScoreService
{
    use HasSports, HasTeams;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'X-RapidAPI-Key' => config('services.rapid_api.key'),
            'X-RapidAPI-Host' => config('services.rapid_api.host'),
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}
