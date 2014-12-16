ph2p
====

Experimental "thing" for PHP application clouds

##The idea
In the PHP would be useful to have a protocol or a library that allows the dev to create a distributed cloud. This is a big task but we can do it.

The next example is just an idea "not implemented yet"
```php
$cloud = new \ph2p\Client('cloud_id');
$cloud->connect(); // This will try to find some peers to connect to
$cloud->store($key, $value [,$secret]);// The $secret value is like a password that makes your $key unique and editable only by whom has this $secret pass
$cloud->get($key [,$secret]);
$cloud->search($word);
$cloud->remove($key[,$secret]);
$cloud->edit($key, $value [,$secret]);
```
