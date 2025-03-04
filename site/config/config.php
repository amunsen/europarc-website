<?php
return [
    'debug'     => true,
    'languages' => true,
    'hooks'     => [
        'file.create:after' => function ($file) {
            if ($file->isResizable()) {
                $file->resize(2000);
            }
        },
    ],
    'thumbs'    => [
        'srcsets' => [
            'default' => [
                '300w'  => ['width' => 900],
                '600w'  => ['width' => 1200],
                '900w'  => ['width' => 1800],
                '1200w' => ['width' => 2400],
                '1800w' => ['width' => 3600],
            ],
            'avif'    => [
                '300w'  => ['width' => 300, 'format' => 'avif'],
                '600w'  => ['width' => 600, 'format' => 'avif'],
                '900w'  => ['width' => 900, 'format' => 'avif'],
                '1200w' => ['width' => 1200, 'format' => 'avif'],
                '1800w' => ['width' => 1800, 'format' => 'avif'],
            ],
            'webp'    => [
                '300w'  => ['width' => 300, 'format' => 'webp'],
                '600w'  => ['width' => 600, 'format' => 'webp'],
                '900w'  => ['width' => 900, 'format' => 'webp'],
                '1200w' => ['width' => 1200, 'format' => 'webp'],
                '1800w' => ['width' => 1800, 'format' => 'webp'],
            ],
        ],
    ],
];
