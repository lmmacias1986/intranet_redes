<?php

return [
    'plugin'      => [
        'name'        => 'SignOut',
        'description' => 'Cierra la sesión de usuario automáticamente, después de cierto tiempo.',
    ],
    'permissions' => [
        'access' => 'Acceso a las configuraciones',
    ],
    'components'  => [
        'sessionclose' => [
            'name'        => 'Cerrar sesión',
            'description' => 'Cerrar sesión de forma automática después de un determinado tiempo',
            'load_js'     => [
                'title'       => 'Cargar librerías javascript',
                'description' => 'Selecciona esta opción para cargar la librería de SweetAlert'
            ]
        ],
    ],
    'fields'      => [
        'timeout'             => 'Tiempo de inactividad de la sesión',
        'timeout_desc'        => 'Número de minutos en que la sesión se cerrará si se mantiene inactiva',
        'notify'              => 'Mostrar aviso de cierre de sesión',
        'notify_desc'         => 'Si se habilita esta opción, se mostrará un aviso para continuar con la sesión',
        'notify_timeout'      => 'Tiempo en que se mostrará el aviso de cierre de sesión',
        'notify_timeout_desc' => 'Número en segundos en que se mostrará el aviso, pasado este tiempo se cerrará la sesión si el usuario no realizó ninguna acción',
        'message'             => 'Texto a mostrar en el aviso de cierre de sesión',
        'message_desc'        => 'El texto no puede contener HTML. Para mostrar el tiempo restante antes del cierre automático, escriba <code>{timeout}</code>',
        'close_button'        => 'Texto del botón para cerrar la ventana de notificación',
        'ok_button'           => 'Texto del botón para continuar con la sesión'
    ]
];