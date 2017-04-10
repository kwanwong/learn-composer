<?php
/**
 * Created by Ken.
 * User: Ken
 * Date: 2017/3/14
 * Time: 22:58
 */

namespace FS;

class Ken
{
    private $name;
    private $value;
    private $in_ca;

    /**
     * @return boolean
     */
    public function isInCa()
    {
        return $this->in_ca;
    }

    /**
     * @param boolean $in_ca
     */
    public function setInCa($in_ca)
    {
        $this->in_ca = $in_ca;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function taxed_value() {
        return $this->value - ($this->value * 0.4);
    }
}