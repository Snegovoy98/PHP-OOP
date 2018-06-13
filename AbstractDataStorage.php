<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 13.06.18
 * Time: 20:41
 */

abstract class AbstractDataStorage
{
    abstract public function create($key,$item);

    abstract public function delete($key);
    public function get($key)
    {
        return $key;

    }



}