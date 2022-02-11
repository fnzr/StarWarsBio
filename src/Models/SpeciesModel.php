<?php

namespace Sample\StarWarsBio\Models;

class SpeciesModel extends \Orkester\MVC\MModel
{
    public static array $map = [
        'table' => 'species',
        'attributes' => [
            'idSpecies' => ['key' => 'primary'],
            'name' => ['type' => 'string'],
            'average_height' => ['type' => 'string'],
        ],
        'associations' => [
            'homeworld' => ['model' => PlanetModel::class, 'type' => 'one', 'key' => 'idPlanet'],
            'classification' => ['model' => ClassificationModel::class, 'type' => 'one', 'key' => 'idClassification'],
            'hairColors' => ['model' => HairColorModel::class, 'type' => 'associative', 'table' => 'species_hair_color']
        ]
    ];
}
