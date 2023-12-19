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
            'X-RapidAPI-Key' => '696b5fe411msh6d038cba5865edap199fdbjsn15702536e0f3',
            'X-RapidAPI-Host' => 'sportscore1.p.rapidapi.com',
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}
