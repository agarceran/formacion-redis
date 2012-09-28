<?php
/**
 * Created by JetBrains PhpStorm.
 * User: adria
 * Date: 28/08/12
 * Time: 16:47
 * To change this template use File | Settings | File Templates.
 */
class RedisConnect
{
    public static $single_server = array(
        'host'     => '127.0.0.1',
        'port'     => 6379,
        'database' => 15
    );

    public static $multiple_servers = array(
        array(
            'host'     => '127.0.0.1',
            'port'     => 6379,
            'database' => 15,
            'alias'    => 'first',
            ),
            array(
            'host'     => '127.0.0.1',
            'port'     => 6380,
            'database' => 15,
            'alias'    => 'second',
        ),
    );

    public function getMultipleServers()
    {
        return $this->multiple_servers;
    }

    public function getSingleServer()
    {
        return $this->single_server;
    }
}
