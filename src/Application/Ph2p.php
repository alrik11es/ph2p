<?php
namespace Ph2p\Application;

use Ph2p\Application\Commands\HashCommand;
use Ph2p\Application\Commands\NodeCommand;
use Ph2p\Application\Commands\ServerCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Ph2p extends Application
{
    const NAME = 'PH2P';
    const VERSION = '1.0';

    public function __construct()
    {
        parent::__construct(static::NAME, static::VERSION);
    }

    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
        $this->add(new NodeCommand());
        $this->add(new HashCommand());
        $this->add(new ServerCommand());

        parent::run($input, $output);
    }
}