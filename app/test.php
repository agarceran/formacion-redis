<?php
/**
 * Created by JetBrains PhpStorm.
 * User: adria
 * Date: 28/08/12
 * Time: 11:07
 * To change this template use File | Settings | File Templates.
 */
require '../vendor/autoload.php';

include 'CarritoCompra.php';


// since we connect to default setting localhost
// and 6379 port there is no need for extra
// configuration. If not then you can specify the
// scheme, host and port to connect as an array
// to the constructor.

try {
    //$redis = new Predis\Client();

    $redis = new Predis\Client($single_server);
    $redis->connect();

    echo "Successfully connected to Redis";

    $redis->set("hello_world", "Hi from php!");
    $value = $redis->get("hello_world");
    var_dump($value);

    $redis->set("I 2 love Php!", "Also Redis now!");
    $value = $redis->get("I 2 love Php!");
    var_dump($value);

    echo ($redis->exists("Santa Claus")) ? "true" : "false";
}
catch (Exception $e) {
    echo "Couldn't connected to Redis";
    echo $e->getMessage();
}
