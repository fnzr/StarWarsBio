<?php

namespace Sample\StarWarsBio\Models;

use Orkester\Exception\EValidationException;

class CharacterModel extends \Orkester\MVC\MModel
{
    public static array $map = [
        'table' => '`character`',
        'attributes' => [
            'idCharacter' => ['key' => 'primary'],
            'name' => ['type' => 'string', 'nullable' => false],
            'height' => ['type' => 'int'],
            'mass' => ['type' => 'string', 'validator' => CharacterModel::class . "::validateMass" ],
        ],
        'associations' => [
            'homeworld' => ['model' => PlanetModel::class, 'type' => 'one', 'key' => 'idPlanet'],
            'hairColor' => ['model' => HairColorModel::class, 'type' => 'one', 'key' => 'idHairColor'],
            'eyeColor' => ['model' => EyeColorModel::class, 'type' => 'one', 'key' => 'idEyeColor']
        ]
    ];

    public static function validateMass(&$value)
    {
        if ($value < 0) {
            throw new EValidationException(['mass' => 'less_than_zero']);
        }
    }
}
