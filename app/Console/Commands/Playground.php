<?php

namespace App\Console\Commands;

use App\Services\SportScore\SportScoreService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Playground command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /**
         * https://sportscore1.p.rapidapi.com/sports/1/teams
         * X-RapidAPI-Host: sportscore1.p.rapidapi.com
         * X-RapidAPI-Key: 696b5fe411msh6d038cba5865edap199fdbjsn15702536e0f3
         */
        $service = new SportScoreService();

        $result = $service->teams()
            ->fromSport(1)
            ->get();

        ds($result);
    }
}
