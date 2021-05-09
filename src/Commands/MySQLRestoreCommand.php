<?php

namespace Vaugenwake\MysqlPilot\Commands;

use Illuminate\Console\Command;

class MySQLRestoreCommand extends Command
{
    protected $signature = 'mysql:restore {--file= : Backup file to restore}';

    protected $description = 'Restore a backup from storage into your database';

    public function handle()
    {
        $this->info('Restoring: ' . $this->option('file'));
    }
}
