<?php

    define('BASE_DIR', dirname(_FILE_, 2));
    define('VIEWS', BASE_DIR . '/App/View');

    $_ENV['db']['host'] = "localhost:3307";
    $_ENV['db']['user'] = "root";
    $_ENV['db']['pass'] = "etecjau";
    $_ENV['db']['database'] = "biblioteca";
