<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'root' => env('APP_ENV') != 'prod' ? env('APP_ENV') : null,
            'visibility' => 'public',
        ],

        's3-backup' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET_BACKUP'),
            'root' => env('APP_ENV'),
        ],

        's3-assets' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET_APP'),
            'visibility' => 'public',
            // We have to declare the url otherwise voyager gets confused
            'url' => 'https://' . env('AWS_BUCKET_APP') . '.s3.amazonaws.com/'
        ],

        's3-images' => [
            'driver' => 's3',
            'key' => env('AWS_IMAGES_ACCESS_KEY_ID'),
            'secret' => env('AWS_IMAGES_SECRET_ACCESS_KEY'),
            'region' => env('AWS_IMAGES_DEFAULT_REGION'),
            'bucket' => env('AWS_IMAGES_BUCKET_APP'),
            'visibility' => 'public',
            // We have to declare the url otherwise voyager gets confused
            'url' => 'https://images.kanka.io/'
        ],

        's3-marketplace' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET_MARKETPLACE'),
            'visibility' => 'public',
            // We have to declare the url otherwise voyager gets confused
            'url' => 'https://' . env('AWS_BUCKET_APP') . '.s3.amazonaws.com/'
        ]

    ],

];
