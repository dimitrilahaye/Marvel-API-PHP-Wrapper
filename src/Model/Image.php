<?php

namespace DimitriLahaye\Model;

class Image
{
    /**
     * The directory path of to the image.
     * @var string
     */
    public $path;
    
    /**
     * The file extension for the image
     * @var string
     */
    public $extension;

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }
}