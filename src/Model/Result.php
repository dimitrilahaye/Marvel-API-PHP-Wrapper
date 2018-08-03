<?php

namespace DimitriLahaye\Model;

class Result
{
    /**
     * The unique ID of the creator resource.
     * @var int
     */
    public $id;
    
    /**
     * The date the resource was most recently modified.
     * @var string
     */
    public $modified;
    
    /**
     * The canonical URL identifier for this resource.
     * @var string
     */
    public $resourceURI;

    /**
     * The representative image for this creator.
     * @var Image
     */
    public $thumbnail;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     *
     * @return self
     */
    public function setModified(string $modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceURI()
    {
        return $this->resourceURI;
    }

    /**
     * @param string $resourceURI
     *
     * @return self
     */
    public function setResourceURI($resourceURI)
    {
        $this->resourceURI = $resourceURI;

        return $this;
    }

    /**
     * @return Image
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param Image $thumbnail
     *
     * @return self
     */
    public function setThumbnail(Image $thumbnail = null)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }
}