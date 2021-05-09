<?php

namespace Vaugenwake\MysqlPilot\Commands;

use Illuminate\Console\Command;

class MySQLListCommand extends Command
{
    protected $signature = 'mysql:list';

    protected $description = 'List all stored backups';

    public function handle()
    {
        $this->info('No backups created yet!');
    }
}
