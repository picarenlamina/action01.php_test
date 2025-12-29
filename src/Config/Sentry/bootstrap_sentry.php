<?php

require_once __DIR__ . '/../../../vendor/autoload.php';


Sentry\init([
    //'dsn' => 'TU_DSN_AQUI',
    'dsn' => 'https://403d48a83a97b26acd9d9834c1ce360f@o4510617478889472.ingest.de.sentry.io/4510617742409808',
    'traces_sample_rate' => 1.0, // activa performance
]);
