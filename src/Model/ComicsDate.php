<?php

namespace DimitriLahaye\Model;

class ComicsDate
{
    /**
     * A description of the date (e.g. onsale date, FOC date).
     * @var string
     */
    public $type;
    
    /**
     * The date
     * @var Date
     */
    public $date;

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

    /**
     * @return Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param Date $date
     *
     * @return self
     */
    public function setDate(Date $date)
    {
        $this->date = $date;

        return $this;
    }
}