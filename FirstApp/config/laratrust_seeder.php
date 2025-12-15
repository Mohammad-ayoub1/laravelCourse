<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
            'categories'=>'c,r,u,d',
            'products'=>'c,r,u,d',
            'orders'=>'r,u',

        ],
        'customer' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'categories'=>'r',
            'products'=>'r',
            'orders'=>'r,u,c',
        ],
        'vindor' => [
            'profile' => 'r,u',
        ],
        /*'role_name' => [
            'module_1_name' => 'c,r,u,d',
        ],*/
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
