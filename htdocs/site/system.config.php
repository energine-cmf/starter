<?php
return array(
    'project' => 'Platform 2.6',
    'database' => array(
        'master' => array(
            'dsn' => 'host=localhost;port=3306;dbname=energine-2.6',
            'username' => 'root',
            'password' => 'qwerqaz123'
        )
    ),
    'site' => array(
        'domain' => 'energine-2.6.dev',
        'debug' => 1,
        'asXML' => 0,
        'compress' => 1,
        'root' => '/'
    ),
    'cache' => array(
        'enable' => 0,
        'host' => '127.0.0.1',
        'port' => '11211'
    ),
    'document' => array(
        'transformer' => 'main.xslt',
        'xslcache' => 0,
        'xslprofile' => 0
    ),
    'session' => array(
        'timeout' => 6000,
        'lifespan' => 108000,
    ),
    'mail' => array(
        'from' => 'noreply@stb.ua',
        'manager' => 'd.pavka@gmail.com',
        'feedback' => 'd.pavka@gmail.com,zablotsky.a@stb.ua'
    ),
    'thumbnails' => array(
        'middle' => array(
            'resize_rule' => 'append',
            'width' => 298,
            'height' => 224,
            'logo' => '/srv/media/origin/logo.png',
            'gag' => 'images/no_photo_m.gif'
        ),
        'small' => array(
            'resize_rule' => 'append',
            'width' => 90,
            'height' => 68,
            'logo' => '/srv/media/origin/logo.png',
            'gag' => 'images/no_photo_s.gif'
        ),
        'xxsmall' => array(
            'resize_rule' => 'append',
            'width' => 50,
            'height' => 50,
            'logo' => '/srv/media/origin/logo.png',
            'gag' => 'images/no_photo_xs.gif'
        ),
        'middle cut' => array(
            'resize_rule' => 'crop',
            'width' => 298,
            'height' => 140,
            'logo' => '/srv/media/origin/logo_50.png',
            'gag' => 'images/no_photo_mc.gif'
        ),
    ),
    'sphinx' => array(
        'ql_host' => 'localhost',
        'ql_port' => 3307
    ),
    'video' => array(
        'ffmpeg' => '/usr/bin/ffmpeg'
    ),
    'google' => array(
        'verify' => '',
        'analytics' => ''
    )
);

