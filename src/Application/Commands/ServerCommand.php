<?php
namespace Ph2p\Application\Commands;

use Hoa\Socket\Server;
use Hoa\Socket\Test\Unit\Connection\Connection;
use Ph2p\Core\Pool;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ServerCommand extends Command
{
    protected function configure()
    {
        $this->setName('server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $server = new Server('tcp://127.0.0.1:4242');
        $server->connectAndWait();
        $output->writeln('<info>Server is online</info>');
        while (true) {
            foreach ($server->select() as $node) {
                $line = $server->readLine();

                if (empty($line)) {
                    $server->disconnect();
                    continue;
                }

                echo '< ', $line, "\n";
                $server->writeLine(strtoupper($line));
            }
        }

    }
}