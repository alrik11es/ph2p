<?php
namespace Ph2p\Core;


class Client
{

    public function getIPAddress()
    {
        $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
        socket_connect($sock, "8.8.8.8", 53);
        socket_getsockname($sock, $name); // $name passed by reference
        $localAddr = $name;
        return $localAddr;
    }
}