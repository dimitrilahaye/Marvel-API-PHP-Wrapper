<?php

namespace DimitriLahaye\Model;

class StoriesSummary extends Summary
{
    /**
     * The type of the story (interior or cover).
     * @var string
     */
	public $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}