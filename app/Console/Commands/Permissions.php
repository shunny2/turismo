<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Permissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command performs the creation of permissions.';

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
     * @return int
     */
    public function handle()
    {
        $this->call('permission:create-permission', [
            'name' => 'admin'
        ]);
        $this->call('permission:create-permission', [
            'name' => 'representative'
        ]);
        $this->call('permission:create-permission', [
            'name' => 'tourist'
        ]);
    }
}
