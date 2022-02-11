<?php

namespace Sample\StarWarsBio\Models;

class EyeColorModel extends \Orkester\MVC\MModel
{
    public static array $map = [
        'table' => 'eye_color',
        'attributes' => [
            'idEyeColor' => ['key' => 'primary'],
            'value' => ['type' => 'string'],
        ],
        'associations' => [
            'characters' => ['model' => CharacterModel::class, 'type' => 'many', 'key' => 'idEyeColor'],
        ]
    ];
}
