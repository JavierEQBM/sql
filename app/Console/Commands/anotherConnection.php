<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class anotherConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:anotherConnection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //dd('AnotherConnection =)', DB::connection('travel_log')->select("SELECT * FROM users"));
        dd('AnotherConnection =)', DB::connection('sqlsrv')->select("SELECT * FROM art"));
    }
}
