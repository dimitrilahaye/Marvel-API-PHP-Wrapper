<?php

namespace DimitriLahaye\Model;

class Image
{
    /**
     * The directory path of to the image.
     * @var string
     */
    protected $_path;
    
    /**
     * The file extension for the image
     * @var string
     */
    protected $_extension;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->_path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->_path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->_extension;
    }

    /**
     * @param string $extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        $this->_extension = $extension;

        return $this;
    }
}