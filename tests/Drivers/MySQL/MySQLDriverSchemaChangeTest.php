<?php
/* Destructr | https://github.com/jobyone/destructr | MIT License */
declare (strict_types = 1);
namespace Destructr\Drivers\MySQL;

use Destructr\Drivers\AbstractSQLDriverSchemaChangeTest;
use Destructr\Drivers\MySQLDriver;

class MySQLDriverSchemaChangeTest extends AbstractSQLDriverSchemaChangeTest
{
    const DRIVER_CLASS = MySQLDriver::class;
    const DRIVER_DSN = 'mysql:host=127.0.0.1;dbname=test';
    const DRIVER_USERNAME = 'root';
    const DRIVER_PASSWORD = null;
    const DRIVER_OPTIONS = null;
}
