<?php
use OpiloClient\Configs\Account;
use OpiloClient\Configs\ConnectionConfig;
use OpiloClient\V2\HttpClient;
use OpiloClient\Request\OutgoingSMS;

require_once (__DIR__ . '/webservice-bin.phar');

$config = new ConnectionConfig('http://bpanel.opilo.com');
$account = new Account('YOUR_WEBSERVICE_USERNAME', 'YOUR_WEBSERVICE_PASSWORD');
$client = new HttpClient($config, $account);
$message = new OutgoingSMS('3000****', '0912*******', 'Hello World!');
$responses = $client->sendSMS($message);

echo ("Hello World SMS sent!\n");