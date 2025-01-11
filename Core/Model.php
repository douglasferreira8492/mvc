<?php
namespace Core;

class Model
{
    private $values = [];

    public function __call($name,$args)
    {

        $method = substr($name,0,3);
        $attr   = substr($name,3,strlen($name));

        switch ($method) {
            case 'get':
                return $this->values[0][$attr];
                break;
            
            case 'set':
                $this->values[$attr] = $args[0];
                break;
        }
    }

    public function setData($data)
    {
        foreach ($data as $key => $value) {
            $this->{"set".$key}($value);
        }
    }

}

?>