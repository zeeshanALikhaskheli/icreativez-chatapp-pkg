<?php

return [
    // Add your chat configuration here
    'user_model' => \App\Models\User::class,
    'message_model' => \iCreativez\ChatApp\Models\Message::class,
    'routes' => [
        'prefix' => 'chat',
        'middleware' => ['web', 'auth'],
    ],
];