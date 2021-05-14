<?php

namespace Vaugenwake\MysqlPilot\Commands;

use Exception;
use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Vaugenwake\MysqlPilot\Concerns\GenerateFileName;

class MySQLBackupCommand extends Command
{

    protected $signature = 'mysql:backup {--name= : provide a custom name for backup file}';

    protected $description = 'Backup mysql database';

    public function handle()
    {
        $this->info('Starting');

        list($tempLocation, $targetLocation) = GenerateFileName::generate();

        $this->info('Creating backup: <fg=yellow>' . $targetLocation . '</>');

        $this->info('Attempting backup...');
    }

    /**
     * Remove the database credentials from exception messages
     */
    private function sanitizeExceptionMessage(string $message): string
    {
        return str_replace(['-u' . env('DB_USERNAME'), '-p' . env('DB_PASSWORD')], '****', $message);
    }
}
