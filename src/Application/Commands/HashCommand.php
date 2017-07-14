<?php
namespace Ph2p\Application\Commands;

use Pleo\Merkle\FixedSizeTree;
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
//        $table = new Table($output);
//        $table
//            ->setHeaders(array('Hash', 'Node'))
//            ->setRows(array(
//                array('99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'),
//                array('9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'),
//                array('960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'),
//                array('80-902734-1-6', 'And Then There Were None', 'Agatha Christie'),
//            ))
//        ;
//        $table->render();

        // basically the same thing bitcoin merkle tree hashing does
        $hasher = function ($data) {
            return hash('sha256', hash('sha256', $data, true), true);
        };

        $finished = function ($hash) {
            echo implode('', unpack('H*', $hash)) . "\n";
        };

        $tree = new FixedSizeTree(16, $hasher, $finished);

        $tree->set(0, 'Science');
        $tree->set(1, 'is');
        $tree->set(2, 'made');
        $tree->set(3, 'up');
        $tree->set(4, 'of');
        $tree->set(5, 'so');
        $tree->set(6, 'many');
        $tree->set(7, 'things');
        $tree->set(8, 'that');
        $tree->set(9, 'appear');
        $tree->set(10, 'obvious');
        $tree->set(11, 'after');
        $tree->set(12, 'they');
        $tree->set(13, 'are');
        $tree->set(14, 'explained');
        $result = $tree->set(15, '.');

        print_r($result);


        #   [ BLOCK 1 ]             [ BLOCK 2 ]             [ BLOCK 3 ]
        #   [ tree hash, data ]     [ tree hash, data ]     [ tree hash, data ]


//        $output->writeln('<info>I am going to do something very useful</info>');
    }
}