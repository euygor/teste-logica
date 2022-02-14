<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        return [
            'preto' =>  [
                'PP' => 1,
                'M' => 1,
                'G' => 1,
                'GG' => 2
            ],
            'branco' => [
                'PP' => 1,
                'G' => 1
            ],
            'vermelho' => [
                'M' => 1
            ],
            'azul' => [
                'XG' => 3,
                'P' => 1
            ]
        ];
    }
}
