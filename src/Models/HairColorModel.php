<?php

namespace Sample\StarWarsBio\Models;

class HairColorModel extends \Orkester\MVC\MModel
{
    public static array $map = [
        'table' => 'hair_color',
        'attributes' => [
            'idHairColor' => ['key' => 'primary'],
            'value' => ['type' => 'string'],
        ],
        'associations' => [
            'characters' => ['model' => CharacterModel::class, 'type' => 'many', 'key' => 'idHairColor'],
        ]
    ];
}
