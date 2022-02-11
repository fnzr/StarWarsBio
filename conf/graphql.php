<?php

use Sample\StarWarsBio\Models\CharacterModel;
use Sample\StarWarsBio\Models\HairColorModel;
use Sample\StarWarsBio\Models\PlanetModel;
use Sample\StarWarsBio\Models\SpeciesModel;
use Sample\StarWarsBio\Service\AuthService;

return [
    'models' => [
        'hairColors' => HairColorModel::class,
        'characters' => CharacterModel::class,
        'planets' => PlanetModel::class,
        'species' => SpeciesModel::class
    ],
    'singular' => [
        'character' => 'characters',
        'hairColor' => 'hairColors',
        'planet' => 'planets'
    ],
    'allowBatchUpdate' => false,
    'includeId' => true,
    'services' => [
        'login' => AuthService::class . '::login'
    ],
    'serviceResolver' => function ($name) {
        if (preg_match('/([A-Za-z0-9]+)_([A-Za-z0-9]+)/', $name, $matches)) {
            $serviceClass = "Sample\StarWarsBio\Service\\$matches[1]Service";
            if (method_exists($serviceClass, $matches[2])) {
                return "$serviceClass::$matches[2]";
            }
        }
        return null;
    }
];
