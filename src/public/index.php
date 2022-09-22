<?php

declare(strict_types=1);

use App\Controller\ExampleController;

require __DIR__ . '/../../vendor/autoload.php';

$app = new \FrameworkX\App();

$app->get('/example', new ExampleController());

$app->run();