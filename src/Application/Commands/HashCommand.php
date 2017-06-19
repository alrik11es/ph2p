<?php
namespace Ph2p\Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HashCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('hash')
//            ->addArgument('list', InputArgument::REQUIRED, 'The type of items to process')
//            ->addOption('list', null, InputOption::VALUE_NONE)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $table = new Table($output);
        $table
            ->setHeaders(array('Hash', 'Node'))
            ->setRows(array(
                array('99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'),
                array('9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'),
                array('960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'),
                array('80-902734-1-6', 'And Then There Were None', 'Agatha Christie'),
            ))
        ;
        $table->render();

        $output->writeln('<info>I am going to do something very useful</info>');
    }
}