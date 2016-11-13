<?php

namespace PDJC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class BotController
{
    public function webhookAction(Request $request, Application $app)
    {
        try {
            $result = $app['telegram']->handle();

            if (true === $result) {
                return new JsonResponse(['status' => 'The eagle has landed!']);
            } else {
                return new JsonResponse(['status' => 'Houston, we have a problem.'], 500);
            }
        } catch (\Exception $exception) {
            
        }
    }
}
