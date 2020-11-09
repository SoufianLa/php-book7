<?php
#registry

class Registry
{
    private $registry = [];
    
    public function get($key)
    {
        if(isset($this->registry[$key]))
            return $registry[$key];
        return null;
    }

    public function set($key, $value, $gracefull=false)
    {
        if(isset($this->registry[$key]))
        {
            if($gracefull)
                 return;
            throw new \RuntimeException('Registry key '.$key. ' already exists'); 
        }
        $this->registry[$key] = $value;
    }
    public function remove($key)
    {
        if(isset($this->registry[$key]))
           unset($this->registry[$key]);
    }
    public function __desctruct()
    {
        $keys = array_keys($this->registry);
        array_walk($keys, [$this, 'remove'])
    }
}