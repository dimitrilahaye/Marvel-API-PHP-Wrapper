<?php

namespace DimitriLahaye\Model;

class DataContainer
{
    /**
     * The requested offset (number of skipped results) of the call.
     * @var int
     */
    public $offset;
    
    /**
     * The requested result limit.
     * @var int
     */
    public $limit;
    
    /**
     * The total number of resources available given the current filter set.
     * @var int
     */
    public $total;
    
    /**
     * The total number of results returned by this call.
     * @var int
     */
    public $count;
    
    /**
     * The list of items returned by the call
     * @var Result[]
     */
     public $results;

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return Result[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Result[] $results
     *
     * @return self
     */
    public function setResults(array $results)
    {
        $this->results = $results;

        return $this;
    }
}