<?php

namespace Sample\StarWarsBio\Models;

class ClassificationModel extends \Orkester\MVC\MModel
{
    public static array $map = [
        'table' => 'classification',
        'attributes' => [
            'idClassification' => ['key' => 'primary'],
            'value' => ['type' => 'string'],
        ],
        'associations' => [
//            'article' => ['model' => ArticleModel::class, 'type' => 'one', 'key' => 'idArticle'],
        ]
    ];
}
