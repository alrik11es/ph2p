<?php
namespace Ph2p\Core;

class Pool{

    public $nodes = [];

    public function __construct()
    {
        $storage = new Storage();
        $this->nodes = unserialize($storage->get('nodes'));
    }

    public function addNode($hash)
    {
//        if(!in_array($hash, $this->nodes)) {
//        $node = new Node();
//        $node->ip = gethostbyname(gethostname());
//        $node->hash = $hash;
        $client = new Client();
        $this->nodes[] = [$client->getIPAddress(), $hash];
        $storage = new Storage();
        $storage->put('nodes', serialize($this->nodes));
//        }
    }

    public function broadcast($data)
    {
        foreach($this->nodes as $node){
            $node['host'];
        }
    }

}
