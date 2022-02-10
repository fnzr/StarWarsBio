<?php

use Sample\StarWarsBio\Models\CharacterModel;
use Sample\StarWarsBio\Models\HairColorModel;
use Sample\StarWarsBio\Models\PlanetModel;
use Sample\StarWarsBio\Models\SpeciesModel;

$models = [
    'hairColors' => HairColorModel::class,
    'characters' => CharacterModel::class,
    'planets' => PlanetModel::class,
        'species' => SpeciesModel::class
];

return [
    'models' => $models,
    'allowBatchUpdate' => false,
    'singular' => [
        'character' => 'characters',
        'hairColor' => 'hairColors',
        'planet' => 'planets'
    ]
];
