<?php

    /**
     * Configuration for the "HTTP Very Basic Auth"-middleware
     */
    return [
        // Username
        'user'              => 'admin_test',

        // Password
        'password'          => 'test_ha_kanpeki',

        // Environments where the middleware is active
        'envs'              => [
            'local',
            'dev',
            'development',
            'staging',
            'production',
            'testing'
        ],

        // Message to display if the user "opts out"/clicks "cancel"
        'error_message'     => 'You have to supply your credentials to access this resource.'
    ];
