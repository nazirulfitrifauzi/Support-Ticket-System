<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
            'tickets' => 'c,r,u,d',
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'projects' => 'c,r,u,d',
            'tickets' => 'r,u,d',
        ],
        'staff' => [
            'tickets' => 'r,u',
        ],
        'client' => [
            'tickets' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
