<?php

/**
 * Application's routes.
 */

$app->get('/setup', 'PDJC\Controller\AdminController::setupBotAction');
$app->post('/action', 'PDJC\Controller\BotController::webhookAction');
