<?php

use Sample\StarWarsBio\Models\HairColorModel;

$models = [
    'hairColors' => HairColorModel::class
];

return [
    'models' => $models,
    'allowBatchUpdate' => false,
    'singular' => [
        'article' => 'articles'
    ]
];
