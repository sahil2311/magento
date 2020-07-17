<?php
return [
    'backend' => [
        'frontName' => 'admin_gs6nhg'
    ],
    'crypt' => [
        'key' => '069df6c636ebcb95ef41b3a857c6e3a5'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'magento.cmuhca9gy2bv.ap-south-1.rds.amazonaws.com',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => 'abc12345',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'acd_'
            ],
            'page_cache' => [
                'id_prefix' => 'acd_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'magento.sahilbansal.in'
    ],
    'install' => [
        'date' => 'Fri, 17 Jul 2020 17:25:05 +0000'
    ]
];
