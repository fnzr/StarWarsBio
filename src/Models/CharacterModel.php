<?php

namespace Sample\StarWarsBio\Models;

class CharacterModel extends \Orkester\MVC\MModelMaestro
{
    public static array $map = [
        'table' => '`character`',
        'attributes' => [
            'idCharacter' => ['key' => 'primary'],
            'name' => ['type' => 'string'],
            'height' => ['type' => 'string'],
            'mass' => ['type' => 'string'],
        ],
        'associations' => [
            'homeworld' => ['model' => PlanetModel::class, 'type' => 'one', 'key' => 'idPlanet'],
            'hairColor' => ['model' => HairColorModel::class, 'type' => 'one', 'key' => 'idHairColor'],
            'eyeColor' => ['model' => EyeColorModel::class, 'type' => 'one', 'key' => 'idEyeColor']
        ]
    ];
}
