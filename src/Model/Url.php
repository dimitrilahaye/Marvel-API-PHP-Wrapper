<?php

namespace DimitriLahaye\Model;

class Url
{
    /**
     * A text identifier for the URL.
     * @var string
     */
    protected $_type;
    
    /**
     * A full URL (including scheme, domain, and path)
     * @var string
     */
    protected $_url;

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

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->_url = $url;

        return $this;
    }
}