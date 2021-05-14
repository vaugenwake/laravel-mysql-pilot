<?php

return [

    /**
     * MySQL Pilot config options
     */

    /**
     * Storage disk to be used for storing backups of your database.
     * S3 by default but can be any disk defined in filesystem.php in your laravel app.
     */
    'disk' => env('APP_ENV') === 'local' ? 'local' : 's3',

    /**
     * Set the connection name is the 'default' connection is
     * not the intended backup source.
     */
    'connection' => null,

    /**
     * How long should we keep backups for before we delete them,
     * 30 days by default
     */
    'retention_period' => 30,

    /**
     * When enabled will namespace backups by enviroment.
     * i.e. APP_ENV=prod backups will be stored as /prod/2021-01-01_0100.sql
     */
    'namespace_env' => true,

    /**
     * Add a prefix to the backup filename
     * i.e. [prefix]_2020_01_01_0000.sql
     */
    'prefix' => '',

    /**
     * Add a prefix to the backup filename
     * i.e. 2020_01_01_0000_[suffix].sql
     */
    'suffix' => '',

    /**
     * Include the database name in the backup file name
     * i.e. [db_name]_2020_01_01_0000.sql
     */
    'include_db_name' => true,

];
