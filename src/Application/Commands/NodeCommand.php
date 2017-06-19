<?php
namespace Ph2p\Application\Commands;

use Ph2p\Core\Pool;
use Ph2p\Core\Server;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NodeCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('nodes')
//            ->addArgument('list', InputArgument::REQUIRED, 'The type of items to process')
            ->addOption('declare', null, InputOption::VALUE_NONE)
        ;
    }

    public function addNode(InputInterface $input, OutputInterface $output)
    {
        $server = Server::getInstance();
        $server->pool->addNode(md5(time()));
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if($input->getOption('declare')){
            $this->addNode($input, $output);
        }

        $server = Server::getInstance();

        if($server->pool->nodes) {
            $table = new Table($output);
            $table
                ->setHeaders(array('Host', 'Hash'))
                ->setRows($server->pool->nodes);
            $table->render();
        } else {
            $output->writeln('<info>No nodes inside my node_list</info>');
        }

//        $output->writeln('<info>I am going to do something very useful</info>');
    }
}