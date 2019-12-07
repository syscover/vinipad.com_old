<?php

return [
    'products' => [
        [
            'product_id'        => 'prod_CjBiJbTUwgN9kz',
            'plan_id'           => 'plan_CjBkICNthmiagU',
            'currency'          => 'usd',
            'amount'            => '1990',
            'labelAmount'       => '19,90 US$',
            'labelRecurrent'    => 'stripe.monthly',
            'features'      => [
                'stripe.feature_01',       // App Vinipad Carta Digital
                'stripe.feature_02',       // Actualizaciones de la aplicación
                'stripe.feature_03',       // Soporte técnico
                'stripe.feature_04',       // Acceso panel Vinipad
            ]
        ],
        [
            'product_id'        => 'prod_CmbcXp1R5IAj16',
            'currency'          => 'usd',
            'amount'            => '15000',
            'labelAmount'       => '150,00 US$',
            'features'      => [
                'stripe.feature_06',       // Instalación Vinipad Carta Digital
                'stripe.feature_05',       // Personalización Vinipad Carta Digital
            ]
        ]
    ]
];