<?php

namespace Sample\StarWarsBio\Models;

class HairColorModel extends \Orkester\MVC\MModelMaestro
{
    public static array $map = [
        'table' => 'hair_color',
        'attributes' => [
            'idHairColor' => ['key' => 'primary'],
            'value' => ['type' => 'string'],
        ],
        'associations' => [
//            'article' => ['model' => ArticleModel::class, 'type' => 'one', 'key' => 'idArticle'],
        ]
    ];
}
