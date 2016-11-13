<?php

namespace PDJC\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController
{
    public function setupBotAction(Request $request, Application $app)
    {
        try {
            $result = $app['telegram']->setWebHook(
                $app['telegram.settings']['webhook']
            );

            if ($result->isOk()) {
                return new JsonResponse(
                    ['result' => $result->getDescription()]
                );
            }
        } catch (\Exception $exception) {
            
        }
    }
}
