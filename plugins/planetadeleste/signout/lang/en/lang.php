<?php

return [
    'plugin'      => [
        'name'        => 'SignOut',
        'description' => 'Automatically signout authenticated front user after session timeout.',
    ],
    'permissions' => [
        'access' => 'Settings access',
    ],
    'components'  => [
        'sessionclose' => [
            'name'        => 'Close Session',
            'description' => 'Close user session after timeout.',
            'load_js'     => [
                'title'       => 'Load javascript library',
                'description' => 'Check this option to load the SweetAlert library'
            ]
        ],
    ],
    'fields'      => [
        'timeout'      => 'Session lifetime in minutes',
        'timeout_desc' => 'Number in minutes after session will close',
        'notify'       => 'Display session timeout alert',
        'notify_desc'  => 'If switch on this option, an alert window was displayed to inform about close session',
        'notify_timeout'      => 'Alert lifetime in seconds',
        'notify_timeout_desc' => 'Number in seconds after alert will close without action. Before that, session was closed too.',
        'message'             => 'Alert text message',
        'message_desc'        => 'Alert message can not have HTML content. Write <code>{timeout}</code> to see countdown of alert lifetime. Write <code>|</code> to separate message in <b>Title</b> and <b>Description</b> blocks of alert message.',
        'close_button'        => 'Text button to close alert',
        'ok_button'           => 'Text button to continue'
    ]
];