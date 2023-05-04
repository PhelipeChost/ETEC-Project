<?php
if (!array_key_exists('HTTPS', $_SERVER))
{
    $httpHost = $_SERVER['HTTP_HOST'];
    $requestUri = $_SERVER['REQUEST_URI'];
    header("Location: http://{$httpHost}{$requestUri}", true, 302);
    exit;
}
