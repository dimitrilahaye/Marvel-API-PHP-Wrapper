<?php

namespace DimitriLahaye\Model;

class Result
{
    /**
     * The unique ID of the creator resource.
     * @var int
     */
    protected $_id;
    
    /**
     * The date the resource was most recently modified.
     * @var string
     */
    protected $_modified;
    
    /**
     * The canonical URL identifier for this resource.
     * @var string
     */
    protected $_resourceURI;

    /**
     * The representative image for this creator.
     * @var Image
     */
    protected $_thumbnail;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getModified()
    {
        return $this->_modified;
    }

    /**
     * @param string $modified
     *
     * @return self
     */
    public function setModified(string $modified)
    {
        $this->_modified = $modified;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceURI()
    {
        return $this->_resourceURI;
    }

    /**
     * @param string $resourceURI
     *
     * @return self
     */
    public function setResourceURI($resourceURI)
    {
        $this->_resourceURI = $resourceURI;

        return $this;
    }

    /**
     * @return Image
     */
    public function getThumbnail()
    {
        return $this->_thumbnail;
    }

    /**
     * @param Image $thumbnail
     *
     * @return self
     */
    public function setThumbnail(Image $thumbnail = null)
    {
        $this->_thumbnail = $thumbnail;

        return $this;
    }
}