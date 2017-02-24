<?php
/**
 * Created by PhpStorm.
 * User: 54926
 * Date: 2017/2/24
 * Time: 23:14
 */

function work($in){
    $out = '';
    error_reporting(E_ALL);
    set_time_limit(10);
    $port = 9813;
    $ip = "127.0.0.1";
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    socket_connect($socket, $ip, $port);
    socket_write($socket, $in, strlen($in));
    socket_recv($socket, $out,1024, 0);
    return $out;
}
?>