<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Toastr Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration file allows you to customize the behavior and appearance
    | of Toastr notifications.
    |
     */

    'options' => [

        /*
        |--------------------------------------------------------------------------
        | Default Notification Duration
        |--------------------------------------------------------------------------
        |
        | The default duration (in milliseconds) for how long a notification will
        | be displayed on the screen before it automatically disappears.
        |
         */

        'duration' => 3000,

        /*
        |--------------------------------------------------------------------------
        | Show/Hide Animation Duration
        |--------------------------------------------------------------------------
        |
        | The duration (in milliseconds) for the show and hide animations of the
        | notification.
        |
         */

        'animationDuration' => 400,

        /*
        |--------------------------------------------------------------------------
        | Progress Bar
        |--------------------------------------------------------------------------
        |
        | Enable or disable the progress bar that indicates the remaining time
        | for auto-closing notifications.
        |
         */

        'progressBar' => true,

        /*
        |--------------------------------------------------------------------------
        | Auto-Close Notifications
        |--------------------------------------------------------------------------
        |
        | Enable or disable auto-closing of notifications after the specified
        | duration.
        |
         */

        'autoClose' => true,

        /*
        |--------------------------------------------------------------------------
        | Close Button
        |--------------------------------------------------------------------------
        |
        | Enable or disable the close button on notifications.
        |
         */

        'closeButton' => true,

        /*
        |--------------------------------------------------------------------------
        | Close Button Icon
        |--------------------------------------------------------------------------
        |
        | Customize the icon for the close button (if enabled).
        |
         */

        'closeButtonIcon' => 'ebook-toast-close-icon',

        /*
        |--------------------------------------------------------------------------
        | Notification Position Class
        |--------------------------------------------------------------------------
        |
        | Set the position class for notifications (toast-top-right, toast-top-center, toast-top-left,
        | toast-bottom-right, toast-bottom-center, toast-bottom-left).
        |
         */

        'positionClass' => 'ebook-toast-top-right',

        /*
        |--------------------------------------------------------------------------
        | Show Notification Icons
        |--------------------------------------------------------------------------
        |
        | Enable or disable the display of icons in notifications.
        |
         */

        'showIcon' => true,

        /*
        |--------------------------------------------------------------------------
        | Prevent Duplicates
        |--------------------------------------------------------------------------
        |
        | Enable or disable duplicating the toasts
        |
         */

        'preventDuplicates' => true,

        /*
        |--------------------------------------------------------------------------
        | Icon Classes
        |--------------------------------------------------------------------------
        |
        | Define custom icon classes for different notification types.
        |
         */

        'icons' => [
            'info' => 'ebook-toast-info-icon',
            'warning' => 'ebook-toast-warning-icon',
            'success' => 'ebook-toast-success-icon',
            'error' => 'ebook-toast-error-icon',
        ],

        /*
        |--------------------------------------------------------------------------
        | Notification Color Classes
        |--------------------------------------------------------------------------
        |
        | Define custom color classes for different notification types.
        |
         */

        'colorsClasses' => [
            'info' => 'ebook-toast-info',
            'warning' => 'ebook-toast-warning',
            'success' => 'ebook-toast-success',
            'error' => 'ebook-toast-error',
        ],
    ],

];