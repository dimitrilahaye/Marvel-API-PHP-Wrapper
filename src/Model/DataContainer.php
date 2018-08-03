<?php

namespace DimitriLahaye\Model;

class DataContainer
{
    /**
     * The requested offset (number of skipped results) of the call.
     * @var int
     */
    protected $_offset;
    
    /**
     * The requested result limit.
     * @var int
     */
    protected $_limit;
    
    /**
     * The total number of resources available given the current filter set.
     * @var int
     */
    protected $_total;
    
    /**
     * The total number of results returned by this call.
     * @var int
     */
    protected $_count;
    
    /**
     * The list of items returned by the call
     * @var Result[]
     */
     protected $_results;

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->_offset;
    }

    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->_offset = $offset;

        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->_limit;
    }

    /**
     * @param int $limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->_limit = $limit;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->_total;
    }

    /**
     * @param int $total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->_total = $total;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->_count;
    }

    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->_count = $count;

        return $this;
    }

    /**
     * @return Result[]
     */
    public function getResults()
    {
        return $this->_results;
    }

    /**
     * @param Result[] $results
     *
     * @return self
     */
    public function setResults(array $results)
    {
        $this->_results = $results;

        return $this;
    }
}