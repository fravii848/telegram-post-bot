<?php

/**
 * Application's settings.
 */

use PDJC\Provider\TelegramServiceProvider;
use Symfony\Component\HttpFoundation\JsonResponse;

$app->register(
    new TelegramServiceProvider(),
    $app['telegram.settings']
);

$app->error(function (\Exception $exception, $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    if ($code != 200) {
        return new JsonResponse([
            'error' => 'A wild error appeared!',
            'code' => $code,
            'message' => $exception->getMessage()
        ]);
    }
});

return $app;
