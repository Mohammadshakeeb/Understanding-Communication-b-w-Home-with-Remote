<?php
return [
    'databases' => [
        'db' => [
            'adapter' => 'Mongo',
            'host' => 'mongodb://127.0.0.1:27017',
            'username' => 'root',
            'password' => 'cedcommerce',
            'dbname' => 'home',
        ],
        'db_mongo' => [
            'adapter' => 'Mongo',
            'host' => 'mongodb://127.0.0.1:27017',
            'username' => 'root',
            'password' => 'cedcommerce',
            'dbname' => 'home',
        ],
    ],
    
    'mailer' => [
        'smtp' => [
            'host' => 'smtp.gmail.com',
            'port' => '587',
            'username' => 'your_email',
            'password' => 'your_password',
        ],
        'sender_email' => 'sender_email',
        'sender_name' => 'email_sender_name'
    ],
    'di' => [
        'mailer' => '\App\Core\Components\Mailers\PhpMailer',
        'log' => 'App\Core\Components\Log'
    ],

    'otp_details' => [
        'sender_phone' => 'your_phone',
        'account_number' => 'your_account_number',
        'access_token' => 'your_access_token'
    ],
    'webhook_api_base' => [
        'shopify' => 'shopify/hook/'
    ],
    'webhook_api_base_fba' => [
        'fba' => 'fba/hook/',
        'ali' => 'aliexpress/hook/'
    ],
    'webhooks' => [
        'shopify' => [
            'orders/create' => 'createOrder',
            'orders/updated' => 'updateOrder',
        ]
    ],
    'uninstall_class' => '\App\Amazonimporter\Components\Helper',
    'app_code' => 'onyx',
    'frontend_app_url' => 'your_frontend_app_url',
    'redirect_after_install' => '/show/message',
    'server_ip' => 'server_ip',
    'current_db' => 'db',
    'default_db' => 'db',
    'backend_base_url' => 'http://remote.local.cedcommerce.com/',
    'apiconnector' => [
        'base_url' => 'http://remote.local.cedcommerce.com/',

        'default' => [
            'refresh_token' => 'your_refresh_token'
        ],
        'your_app_name' => [
           'default'=>[
            'sub_app_id' => 'y0ur_aap_id(int)',
            'refresh_token' => 'your_refresh_token',
            'public_key' =>
                'your_public_key'
           ]
        ],
        "mymodulewebapi" => [
            "default" => [
                "sub_app_id" => 1,
                "refresh_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJ1c2VyX2lkIjoiNjI2YmQzMTA5MTBkM2Q0N2Y4MjEwZWI5Iiwicm9sZSI6InJlZnJlc2giLCJleHAiOjE5NjI1MTczNzUsImNoaWxkX2lkIjoiMSIsImFwcF9pZCI6IjEiLCJzdWJfYXBwX2lkIjoiMSIsImlzcyI6Imh0dHBzOlwvXC9hcHBzLmNlZGNvbW1lcmNlLmNvbSIsInRva2VuX2lkIjoiNjI2ZjhiN2ZhMjY3NDAxZDQzNGQwMDcyIn0.b9jjwi05RXBHDKKIw9xqw63Tf8E3SyuiP_YmnZAFOVjg-k4C1hsVuem6S1E6l31QFa0yu60NkroFGwNvAvpia_DcSR8Xbgn0dotzz56acKQ1JENrR5ch1VU9u0H2zSxmWOJvumvi146i3mn9Q6JjIObGh3-wOE2_PgTV_E0Pgt2wTHGWl2h9AEIHJt6V1wiaKNbkb7sqGTNrQhgn6Us6blJzUfFmveaQalkwZZZABG4b_NBLjj4ywOzTBMGZYONMp7sY7GdkcCqsZFoCcySrhf-M3PWtwpPdxt9I2ye-gpB-ThT-zvyEdsCFoMUjs560MX91Q86CJoIVId2bVjG_OA",
                "public_key" => "LS0tLS1CRUdJTiBQVUJMSUMgS0VZLS0tLS0KTUlJQ0lqQU5CZ2txaGtpRzl3MEJBUUVGQUFPQ0FnOEFNSUlDQ2dLQ0FnRUE4SHlSbWRHWnVvYVFrQ2dJL1luQQpraEhqN3RNWjNyaW9qYklsMkZzRGdNU1NyUGp3L0JEbnU0QlNMN0VHdkJpeHRmNzZPckFBQnJvcE93aUl3Y24wCnhaNHRQTXFkdkVGTCt0V2tadmd2T2FHNDFna3RkZ3BkcWEvSytrbDFtdEp1YnRqSzFoY2ZyUW91cklXcjhWUVcKdGFWdy9MNWhWS1AyS3lnc2o1d0VzY3VHSVIrMWVYbmg5QmVncjlHUnViUjRzRElvT2xsbEQ0QWdLZHlQUkFFTgpxTXFGOW81MGgvQlhvMEFySy9yZlYrcGdzaTF0V2N2eVJURHJrbURwZmkvWXdUMFZGYk1KK2FhYVhnYTBJbm5yCkVGdVZvMEJ3WHpFQW9Fb2Z1VkFrL00wMUNRWTNUS00yNk40YmZQYW8xZ2ZDQ3NHMkFnR2lzZU9SK2pnNnJsMUMKNFFnem9Wa25RZXlFS0VPV0MrczZPSnR2OUZmRGtiWjhXQ1pNTWI4T011UUdERU9qZ1hJSE5IYUg4ZzAwWFhZcQowaVQwbFhTUEZaLzQreXo5SXBoNkx5R3hMNzJVZlVxRGN3alhJN29iL29uWEZYK3hnUVJIL3g1TUFSc2hrZTdnCkVIcWpFaGIrNEFxNFYwaVM0WUI1Y1gxT0ZjTFlUbW9nNmZZeDFJSCtVMjZZSTlnOEQrUUpQNm5FMTZCMUhqeFIKSHF1aVdraWZBOUNRc25VU2gvWEJzVTk0UVo5SC9Gd0lXTHgwMUs2SHQ2YUtCMzBJamZzRzRiV2I3NEVVVnU3NQpsWW9LY1lISVpndDdrWHFYZU5mQnROVnBzaEJMT1pBNCtBUlkxU1ZkM1I3RVBpd3M5TzBVOFZCNlZFUzFTTlg5CmRUaE05c0pWYVhrbHdvWUJSd1J0SUUwQ0F3RUFBUT09Ci0tLS0tRU5EIFBVQkxJQyBLRVktLS0tLQo="
            ]
        ],

    ],
    'rabbitmq_url' => 'rabbitmq-url',
    'mail_through_rabbitmq' => false,
    'enable_rabbitmq' => true,
    'app_name' => 'Omni Importer',
    'enable_rabbitmq_internal' => true,
    'app_token' => 'app-token',
    'slave_enabled' => false,
    'under_maintenance' => false,
    'services' => [
        'product_import' => [
            'handler' => '\App\Connector\Components\ImportServiceHelper',
            'code' => 'product_import',
            'title' => 'Product Import',
            'type' => 'importer',
            'charge_type' => 'prepaid',
            'marketplace' => 'global',
            'image' => 'marketplace-logos/amazon.jpg'
        ],
        'product_sync' => [
            'handler' => '\App\Connector\Components\SyncHelper',
            'code' => 'product_sync',
            'title' => 'Product Sync',
            'type' => 'importer',
            'charge_type' => 'prepaid',
            'marketplace' => 'global',
            'image' => 'marketplace-logos/amazon.jpg'
        ]
    ]
];


