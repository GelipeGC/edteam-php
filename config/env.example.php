<?php

define('DATABASE', [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'my-database',
    'username'  => 'my-user',
    'password'  => 'my-password',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

define('ED_MAIL', [
    'Host' => 'smtp.mailtrap.io',
    'SMTPAuth' => true,
    'Username' => 'd11e2862aebda9',
    'Password' => 'db569340b004a0',
    'SMTPSecure' => 'tls',
    'Port' => 25,
    'AddressFrom' => 'felipe.lightcone@gmail.com',
    'NameFrom' => 'ED Styles',
    'AddressInbox' => 'felipe.lightcone@gmail.com',
    'NameInbox' => 'Felipe Guzman'
]);