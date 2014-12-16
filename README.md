ph2p
====

Experimental "thing" for PHP application clouds

##The idea
In the PHP would be useful to have a protocol or a library that allows the dev to create a distributed cloud. This is a big task but we can do it.

The next example is just an idea "not implemented yet"
```php
$server = new \ph2p\Server();
$server->setConfig(['cloud'=>'cloud_id']);
$server->run();
``` 

```php
$cloud = new \ph2p\Client();
$cloud->connect($ip, 'cloud_id'); // This will connect to the Server in order to access the info
$cloud->store($key, $value [,$secret]);// The $secret value is like a password that makes your $key unique and editable only by whom has this $secret pass
$cloud->get($key [,$secret]);
$cloud->search($word);
$cloud->remove($key[,$secret]);
$cloud->edit($key, $value [,$secret]);
```
