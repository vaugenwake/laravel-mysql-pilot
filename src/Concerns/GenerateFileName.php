<?php

namespace Vaugenwake\MysqlPilot\Concerns;

class GenerateFileName
{
    public static function generate(string $timestamp = null): array
    {

        $connection = config('mysqlpilot.connection');

        if ($connection == null) {
            $connection = config('database.default');
        }

        $prefix = config('mysqlpilot.prefix') != '' ? '_' . config('mysqlpilot.prefix') : '';
        $suffix = config('mysqlpilot.suffix') != '' ? '_' . config('mysqlpilot.suffix') : '';

        if ($timestamp == null) {
            $timestamp = date('Y-m-d_Hi');
        }

        $dbName = config('mysqlpilot.include_db_name') == true ? config('database.connections.' . $connection . '.database') : '';

        $backupFileName = $dbName . $prefix . '_' . $timestamp . $suffix . '.sql';

        $tempLocation = '/tmp/' . $backupFileName;

        $targetPath = '/';

        if (config('mysqlpilot.namespace_env') == true) {
            $targetPath = '/' . config('app.env') . '/';
        }

        $targetFilePath = $targetPath . $backupFileName;

        return [$tempLocation, $targetFilePath];
    }
}
