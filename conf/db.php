<?php
return [
    'db' => [
        'star_wars' => [
            'db' => 'mysql',
            'driver' => 'pdo_mysql',
            'host' => '172.17.0.1:33065',
            'dbname' => 'star_wars',
            'user' => 'root',
            'password' => 'secret',
            'formatDate' => '%d/%m/%Y',
            'formatDatePHP' => 'd/m/Y',
            'formatDateWhere' => '%Y/%m/%d',
            'formatTime' => '%H:%i',
            'formatTimePHP' => 'H:i',
            'formatTimeWhere' => '%H:%i',
            'charset' => 'utf8',
            'collate' => 'utf8_bin',
            'sequence' => [
                'table' => 'Sequence',
                'name' => 'Name',
                'value' => 'Value'
            ],
            'configurationClass' => 'Doctrine\DBAL\Configuration',
        ],
    ],
];
