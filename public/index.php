<?php

$app = require __DIR__.'/../bootstrap/Application.php';

$app->handle(require __DIR__.'/../bootstrap/Request.php');
