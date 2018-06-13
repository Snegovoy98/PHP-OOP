<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 13.06.18
 * Time: 20:43
 */
require __DIR__ . '/AbstractDataStorage.php';
class InMemoryDataStorage extends AbstractDataStorage implements DataStorageInterface
{
    private $storage = [];
    public function create($key,$item)
    {
    $this->storage[$key]=$item;
    }

    public function delete($key)
    {
        if (isset($this->storage[$key])){
            unset($this->storage[$key]);
        }
    }
    public function get($key)
    {
        if(isset($this->storage[$key]))
        {
            return $this->storage[$key];
        }
        return null;
    }

}