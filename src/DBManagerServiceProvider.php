<?php

namespace Won\DBManager;

use Illuminate\Support\ServiceProvider;
use Won\DBManager\Console\Commands\Backup;
use Won\DBManager\Console\Commands\Restore;

class DBManagerServiceProvider extends ServiceProvider
{
    protected $commands = [
        Backup::class,
        Restore::class
    ];



    public function boot()
    {
        //

    }



    public function register()
    {
        $this->commands($this->commands);
    }
}
