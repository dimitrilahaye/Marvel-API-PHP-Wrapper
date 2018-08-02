<?php

namespace DimitriLahaye\Model;

class DataWrapper
{
    /**
     * The HTTP status code of the returned result.
     * @var int
     */
    public $code;
    
    /**
     * A string description of the call status.
     * @var string
     */
    public $status;
    
    /**
     * The copyright notice for the returned result.
     * @var string
     */
    public $copyright;
    
    /**
     * The attribution notice for this result. Please display either this notice or the contents of the attributionHTML field on all screens which contain data from the Marvel Comics API.
     * @var string
     */
    public $attributionText;
    
    /**
     * An HTML representation of the attribution notice for this result. Please display either this notice or the contents of the attributionText field on all screens which contain data from the Marvel Comics API.
     * @var string
     */
    public $attributionHTML;
    
    /**
     * The results returned by the call.
     * @var DataContainer
     */
    public $data;
    
    /**
     * A digest value of the content returned by the call
     * @var string
     */
    public $etag;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param string $copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributionText()
    {
        return $this->attributionText;
    }

    /**
     * @param string $attributionText
     *
     * @return self
     */
    public function setAttributionText($attributionText)
    {
        $this->attributionText = $attributionText;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributionHTML()
    {
        return $this->attributionHTML;
    }

    /**
     * @param string $attributionHTML
     *
     * @return self
     */
    public function setAttributionHTML($attributionHTML)
    {
        $this->attributionHTML = $attributionHTML;

        return $this;
    }

    /**
     * @return DataContainer
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param DataContainer $data
     *
     * @return self
     */
    public function setData(DataContainer $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param string $etag
     *
     * @return self
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;

        return $this;
    }
}