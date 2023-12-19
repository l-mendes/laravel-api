<?php

namespace App\Console\Commands;

use App\Services\SportScore\Facades\SportScore;
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
        $this->withProgressBar(SportScore::sports()->get(), function ($sport) {
            $this->performTask($sport);
        });
    }

    private function performTask($sport)
    {
        sleep(1);
    }
}
