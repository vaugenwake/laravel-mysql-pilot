<?php

namespace Vaugenwake\MysqlPilot\Concerns;

class GenerateFileName
{
    public function generate(array $config): array
    {
        $dbName = $config['include_db_name'] == true ? env('DB_DATABASE') : '';

        $backupFileName = $dbName . '_' . $config['prefix'] . '_' . date('Y-m-d_Hi') . '_' . $config['suffix'] . '.sql';

        $tempLocation = '/tmp/' . $backupFileName;

        $targetPath = '/';

        if (config('mysqlpilot.namespace_env') == true) {
            $targetPath = '/' . env('APP_ENV') . '/';
        }

        $targetFilePath = $targetPath . $backupFileName;

        return [$tempLocation, $targetFilePath];
    }
}
