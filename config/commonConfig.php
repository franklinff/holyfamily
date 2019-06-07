<?php

return [
    /*
    |
    | List number of records per page while pagination
    |
     */

    'list_num_of_records_per_page' => 25,

    /*
    |
    | Descriptions of routes
    |
     */

    'routes' => [
        'delete' => [
            'guard_name' => 'Delete',
            //'description' => 'Deletes the'
        ],
        'index' => [
            'guard_name' => 'List of',
         //   'description' => 'Lists the'
        ],
        'create' => [
            'guard_name' => 'Add',
           // 'description' => 'Adds the'
        ],
        'store' => [
            'guard_name' => 'Stores',
         //   'description' => 'Stores the'
        ],
        'show' => [
            'guard_name' => 'Shows',
           // 'description' => 'Shows the'
        ],
        'edit' => [
            'guard_name' => 'Edit',
         //   'description' => 'Edits the'
        ],
        'update' => [
            'guard_name' => 'Update',
           // 'description' => 'Updates the'
        ],
        'destroy' => [
            'guard_name' => 'Delete',
            //'description' => 'Deletes the'
        ]
    ],
    'dashboard_routes' => [
        'names' => [
            'index',
            'create'
        ]
    ],
    'route_prefixes_not_req' => [
        'names' => [
            'debugbar',
            'user',
            'role',
            'home',
            'login',
            'loginUser',
            'registerUser'
        ],

    ],


    'admin_rights_default' => [
        'debugbar',
        'user',
        'role',
        'home',
    ],


];
