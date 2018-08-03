<?php

namespace DimitriLahaye\Model;

class TextObject
{
    /**
     * The canonical type of the text object (e.g. solicit text, preview text, etc.).
     * @var string
     */
    protected $_type;
    
    /**
     * The IETF language tag denoting the language the text object is written in.
     * @var string
     */
    protected $_language;
    
    /**
     * The text
     * @var string
     */
    protected $_text;

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
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->_language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->_text = $text;

        return $this;
    }
}