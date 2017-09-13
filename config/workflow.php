<?php

return [
    'straight'   => [
        'type'          => 'state_machine', // or 'state_machine'
        'marking_store' => [
            'type'      => 'multiple_state',
            'arguments' => ['workflowState']
        ],
        'supports'      => ['App\Denuncia'],
        'places'        => ['recibida', 'revisada', 'denegada', 'aprobada', 'auditado'],
        'transitions'   => [
            'revisar' => [
                'from' => 'recibida',
                'to'   => 'revisada'
            ],
            'aprobar' => [
                'from' => 'revisada',
                'to'   => 'aprobada'
            ],
            'denegar' => [
                'from' => 'revisada',
                'to'   => 'denegada'
            ],
            'rescatar' => [
                'from' => 'denegada',
                'to'   => 'recibida'
            ]
        ],
    ]
];
