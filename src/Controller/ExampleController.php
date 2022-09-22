<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;

final class ExampleController implements ControllerInterface
{
    public function __invoke(ServerRequestInterface $request): Response
    {
        return Response::plaintext("Hello Sir!\n");
    }
}