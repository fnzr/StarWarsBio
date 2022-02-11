<?php

namespace Sample\StarWarsBio\Models;

use Orkester\Exception\EValidationException;

class PlanetModel extends \Orkester\MVC\MModel
{
    public static array $map = [
        'table' => 'planet',
        'attributes' => [
            'idPlanet' => ['key' => 'primary'],
            'name' => ['type' => 'string', 'validator' => PlanetModel::class . '::validateName'],
            'rotation_period' => ['type' => 'int'],
            'orbital_period' => ['type' => 'int'],
            'diameter' => ['type' => 'int'],
            'gravity' => ['type' => 'string'],
            'surface_water' => ['type' => 'int'],
        ],
        'associations' => [
        ]
    ];

    public static function validateName(&$value)
    {
        $errors = [];
        if (str_starts_with('0', $value)) {
            $errors[] = 'name_starts_zero';
        }
        if (strlen($value) < 3) {
            $errors[] = 'length_less_three';
        }
        throw new EValidationException(['name' => $errors]);
    }
}
