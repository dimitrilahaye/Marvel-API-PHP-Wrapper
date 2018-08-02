<?php

namespace DimitriLahaye\Model;

class TextObject
{
    /**
     * The canonical type of the text object (e.g. solicit text, preview text, etc.).
     * @var string
     */
    public $type;
    
    /**
     * The IETF language tag denoting the language the text object is written in.
     * @var string
     */
    public $language;
    
    /**
     * The text
     * @var string
     */
    public $text;

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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}