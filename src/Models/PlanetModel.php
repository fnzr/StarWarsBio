<?php

namespace Sample\StarWarsBio\Models;

class PlanetModel extends \Orkester\MVC\MModelMaestro
{
    public static array $map = [
        'table' => 'planet',
        'attributes' => [
            'idPlanet' => ['key' => 'primary'],
            'name' => ['type' => 'string'],
            'rotation_period' => ['type' => 'int'],
            'orbital_period' => ['type' => 'int'],
            'diameter' => ['type' => 'int'],
            'gravity' => ['type' => 'string'],
            'surface_water' => ['type' => 'int'],
        ],
        'associations' => [
//            'article' => ['model' => ArticleModel::class, 'type' => 'one', 'key' => 'idArticle'],
        ]
    ];
}
