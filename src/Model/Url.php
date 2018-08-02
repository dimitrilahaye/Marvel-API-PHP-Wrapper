<?php

namespace DimitriLahaye\Model;

class Url
{
    /**
     * A text identifier for the URL.
     * @var string
     */
    public $type;
    
    /**
     * A full URL (including scheme, domain, and path)
     * @var string
     */
    public $url;

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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}