<?php

namespace DimitriLahaye\Model;

class StoriesSummary extends Summary
{
    /**
     * The type of the story (interior or cover).
     * @var string
     */
	protected $_type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->_type = $type;

        return $this;
    }
}