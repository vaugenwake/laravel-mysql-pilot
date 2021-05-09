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

        list($tempLocation, $targetLocation) = (new GenerateFileName)->generate(config('mysqlpilot'));

        $this->info('Creating backup: <fg=yellow>' . $targetLocation . '</>');

        $this->info('Attempting backup...');

        $process = new Process(['mysqldump -h ' . env('DB_HOST') . ' -u ' . env('DB_USERNAME') . ' -p ' . env('DB_PASSWORD') . ' ' . env('DB_DATABASE') . ' -r ' . $tempLocation]);
        $process->run();

        try {
            if ($process->isSuccessful()) {
                $this->info('Mysql dump performed...');
            } else {
                if ($process->getExitCode() == 127) {
                    $this->info('<fg=red>Mysql Dump is not installed</>');
                }

                throw new ProcessFailedException($process);
            }

            @unlink($tempLocation);
        } catch (Exception $e) {
            $this->info($this->sanitize_exception_message($e->getMessage()));
        }
    }

    /**
     * Remove the database credentials from exception messages
     */
    private function sanitize_exception_message(string $message): string
    {
        return str_replace(['-u' . env('DB_USERNAME'), '-p' . env('DB_PASSWORD')], '****', $message);
    }
}
