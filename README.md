PH2P
====

[![Join the chat at https://gitter.im/alrik11es/ph2p](https://badges.gitter.im/alrik11es/ph2p.svg)](https://gitter.im/alrik11es/ph2p?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Experimental "thing" for PHP application clouds (Right now just for fun).

## The idea
In the PHP world would be useful to have a protocol or a library that allows the dev to create a distributed cloud. This is a big task but we can do it.

The next example is just an idea "not implemented yet"
```php
$server = new \ph2p\Server();
$server->setConfig(['cloud'=>'cloud_id']);
$server->run();
``` 

```php
$cloud = new \ph2p\Client();
$cloud->connect($client_ip, 'cloud_id'); // This will connect to the Server in order to access the info
$cloud->store($key, $value [,$secret]);// The $secret value is like a password that makes your $key unique and editable only by whom has this $secret pass
$cloud->get($key [,$secret]);
$cloud->search($word);
$cloud->remove($key[,$secret]);
```

## First steps
A terminal gui will be created to manage the different parts of the system. In the background of this gui will be a server runing that will be in charge of distributing all computation/data to the network. 

## References

[An Efficient Nearest Neighbor Algorithm for P2P
 Settings](http://www.cs.umd.edu/~hjs/pubs/dgo05.pdf) by Egemen Tanin, Deepa Nayar, Hanan Samet 