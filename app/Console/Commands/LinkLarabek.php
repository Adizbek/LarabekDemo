<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LinkLarabek extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabek:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates link to Larabek assets (for dev only)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //

        if(!file_exists(public_path('vendor'))) {
            mkdir(public_path('vendor'));
        }


        if (file_exists(public_path('vendor/larabek'))) {
            return $this->error('The "public/storage" directory already exists.');
        }

        $this->laravel->make('files')->link(
            base_path('packages/Adizbek/Larabek/public/larabek'), public_path('./vendor/larabek')
        );

        $this->info('Directory has been linked.');

    }
}
