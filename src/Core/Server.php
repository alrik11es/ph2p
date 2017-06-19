<?php
namespace Ph2p\Core;

use Hoa\Socket\Connection\Handler;
use Hoa\Socket\Node;

class Server extends Handler
{
    protected function _run (Node $node)
    {
        $connection = $node->getConnection();
        $line       = $connection->readLine();

        if (empty($line)) {
            $connection->disconnect();
            return;
        }

        echo '< ', $line, "\n";
        $this->send(strtoupper($line));

        return;
    }

    protected function _send ($message, Node $node)
    {
        return $node->getConnection()->writeLine($message);
    }
}