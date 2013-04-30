<?php

/**
 * Конфигурация проекта на базе системы управления сайтами Energine
 *
 * @copyright 2013 Energine
 */
return array(

    // название проекта
    'project' => 'Platform 2.11.2.dev',

    // путь к директории setup текущего используемого ядра
    'setup_dir' => ($energine_release = '/home/pavka/projects/energine-2.11.2') . '/setup',

    // список подключенных модулей ядра в конкретном проекте
    // ключи массива - названия модулей, значения - абсолютные пути к месторасположению
    'modules' => array(
        'share'     => $energine_release . '/core/modules/share',
        'user'      => $energine_release . '/core/modules/user',
        'apps'      => $energine_release . '/core/modules/apps',
        'forms'     => $energine_release . '/core/modules/forms',
        'seo'       => $energine_release . '/core/modules/seo',
        'calendar'  => $energine_release . '/core/modules/calendar'
    ),

    // настройки подключения к mysql
    'database' => array(
        'host' => 'localhost',
        'port' => '3306',
        'db' => 'nrgn2112',
        'username' => 'root',
        'password' => 'qwerqaz123'
    ),

    // настройки сайта
    'site' => array(
        // имя домена
        'domain' => 'local.dev',
        // корень проекта
        'root' => '/~pavka/nrgn2112/',
        // отладочный режим: 1 - включено, 0 - выключено
        'debug' => 1,
        // делать ли замеры времени рендеринга страниц и выводить их в header X-Timer
        'useTimer' => 1,
        // выводить для отладки сразу в XML
        'asXML' => 0,
    ),

    // настройки документа
    'document' => array(
        // основная точка входа в xslt преобразователь
        'transformer' => 'main.xslt',
        // насткойка кеширования xslt (при использовании XSLTCache)
        'xslcache' => 0,
    ),

    // перечень дополнительнх полей с превьюшками в виде отдельной вкладки в файловом менеджере
    'thumbnails' => array(
        'auxmiddle' => array(
            'width' => 190,
            'height' => 132,
        ),
        'middle' => array(
            'width' => 184,
            'height' => 138,
        ),
        'anchormiddle' => array(
            'width' => 190,
            'height' => 192,
        ),
        'anchorxsmall' => array(
            'width' => 48,
            'height' => 48,
        ),
        'small' => array(
            'width' => 140,
            'height' => 107,
        ),
        'xsmall' => array(
            'width' => 75,
            'height' => 56,
        ),
        'xxsmall' => array(
            'width' => 60,
            'height' => 45,
        ),
        'big' => array(
            'width' => 650,
            'height' => 367,
        ),
    ),

    // дополнительные внешние системы авторизации
    'auth' => array(
        // VK.COM
/*        'vk' => array(
            'appID' => 'VK APP ID',
            'secretKey' => 'VK SECRET'
        ),*/
        // FACEBOOK.COM
        'facebook' => array(
            'appID' => 'FACEBOOK APP ID',
            'secretKey' => 'FACEBOOK SECRET'
        ),
    ),

    // натройка сессий
    'session' => array(
        'timeout' => 6000,
        'lifespan' => 108000,
    ),

    // настройка почтовых уведомлений
    'mail' => array(
        // адрес отправителя почтовой корреспонденции
        'from' => 'noreply@energine.org',
        // адрес менеджера
        'manager' => 'demo@energine.org',
        // адрес для сообщений обратной связи
        'feedback' => 'demo@energine.org'
    ),

    // настройки google
    'google' => array(
        'verify' => '',
        'analytics' => ''
    ),

    // настройки recaptcha
    'recaptcha' => array(
        'public' => '6LfkCeASAAAAALl-av9HM_RG1AU-tcta3teX7Z2u',
        'private' => '6LfkCeASAAAAABPo4F3GoXULR2w5EgHjjd3RDjXk'
    ),

    // настройки файловых репозитариев
    'repositories' => array(
        // маппинг типов репозитариев (share_uploads.upl_mime_type) с реализациями интерфейса IFileRepository
        'mapping' => array(
            'repo/local' => 'FileRepositoryLocal',
            'repo/ftp' => 'FileRepositoryFTP',
            'repo/ftpro' => 'FileRepositoryFTPRO',
            'repo/ro' => 'FileRepositoryRO',
        ),
        // конфигурация для FTP репозитариев
        'ftp' => array(
            // конфигурация FTP доступа для репозитария с share_uploads.upl_path uploads/ftp
            'uploads/ftp' => array(
                'media' => array(
                    'server' => '10.0.1.10',
                    'port' => 21,
                    'username' => 'username',
                    'password' => 'password'
                ),
                'alts' => array(
                    'server' => '10.0.1.10',
                    'port' => 21,
                    'username' => 'username',
                    'password' => 'password',
                )
            ),
            // конфигурация FTP доступа для репозитария с share_uploads.upl_path uploads/ftpro
            'uploads/ftpro' => array(
                'media' => array(
                    'server' => '10.0.1.10',
                    'port' => 21,
                    'username' => 'username',
                    'password' => 'password'
                ),
                'alts' => array(
                    'server' => '10.0.1.10',
                    'port' => 21,
                    'username' => 'username',
                    'password' => 'password',
                )
            )
        ),
    ),
);

