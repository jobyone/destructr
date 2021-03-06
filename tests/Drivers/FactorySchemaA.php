<?php
/* Destructr | https://github.com/jobyone/destructr | MIT License */
declare (strict_types = 1);
namespace Destructr\Drivers;

use Destructr\Factory;

class FactorySchemaA extends Factory
{
    public $schema = [
        'dso.id' => [
            'name' => 'dso_id', //column name to be used
            'type' => 'VARCHAR(16)', //column type
            'index' => 'BTREE', //whether/how to index
            'unique' => true, //whether column should be unique
            'primary' => true, //whether column should be the primary key
        ],
        'test.a' => [
            'name' => 'test_a',
            'type' => 'VARCHAR(100)',
            'index' => 'BTREE',
        ]
        ,
        'test.b' => [
            'name' => 'test_b',
            'type' => 'VARCHAR(100)',
            'index' => 'BTREE',
        ],
    ];
}
