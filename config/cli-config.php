<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;

$db = [
    'driver' => 'pdo_mysql',
    'user' => 'mulgrew',
    'password' => 'password',
    'dbname' => 'mulgrew',
    'host' => 'localhost'
];

$config = Setup::createAnnotationMetadataConfiguration([realpath('src')], true);
$config->addEntityNamespace('App', 'Mulgrew\\Model');
$em = EntityManager::create($db, $config);

return ConsoleRunner::createHelperSet($em);
