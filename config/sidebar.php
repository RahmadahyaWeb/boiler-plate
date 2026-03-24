<?php

return [

    [
        'label' => 'Dashboard',
        'icon' => 'home',
        'route' => 'dashboard',
        'permission' => 'dashboard.view',
    ],

    [
        'label' => 'Access Control',
        'icon' => 'shield',
        'children' => [

            [
                'label' => 'Roles & Permissions',
                'icon' => 'lock-closed',
                'route' => 'access-control.roles.index',
                'permission' => 'roles.view',
            ],

        ],
    ],

    [
        'label' => 'User Management',
        'icon' => 'users',
        'children' => [

            [
                'label' => 'Users',
                'icon' => 'users',
                'route' => 'users.index',
                'permission' => 'users.view',
            ],

            // [
            //     'label' => 'User Devices',
            //     'icon' => 'device-phone-mobile',
            //     'route' => 'users.devices.index',
            //     'permission' => 'user_devices.view',
            // ],

        ],
    ],

];
