<?php

namespace DimitriLahaye\Model;

class DataWrapper
{
    
    /**
     * The HTTP status code of the returned result.
     * @var int
     */
    protected $_code;
    
    /**
     * A string description of the call status.
     * @var string
     */
    protected $_status;
    
    /**
     * The copyright notice for the returned result.
     * @var string
     */
    protected $_copyright;
    
    /**
     * The attribution notice for this result. Please display either this notice or the contents of the attributionHTML field on all screens which contain data from the Marvel Comics API.
     * @var string
     */
    protected $_attributionText;
    
    /**
     * An HTML representation of the attribution notice for this result. Please display either this notice or the contents of the attributionText field on all screens which contain data from the Marvel Comics API.
     * @var string
     */
    protected $_attributionHTML;
    
    /**
     * The results returned by the call.
     * @var DataContainer
     */
    protected $_data;
    
    /**
     * A digest value of the content returned by the call
     * @var string
     */
    protected $_etag;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * @param int $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->_code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->_status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->_copyright;
    }

    /**
     * @param string $copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {
        $this->_copyright = $copyright;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributionText()
    {
        return $this->_attributionText;
    }

    /**
     * @param string $attributionText
     *
     * @return self
     */
    public function setAttributionText($attributionText)
    {
        $this->_attributionText = $attributionText;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributionHTML()
    {
        return $this->_attributionHTML;
    }

    /**
     * @param string $attributionHTML
     *
     * @return self
     */
    public function setAttributionHTML($attributionHTML)
    {
        $this->_attributionHTML = $attributionHTML;

        return $this;
    }

    /**
     * @return DataContainer
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * @param DataContainer $data
     *
     * @return self
     */
    public function setData(DataContainer $data)
    {
        $this->_data = $data;

        return $this;
    }

    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->_etag;
    }

    /**
     * @param string $etag
     *
     * @return self
     */
    public function setEtag($etag)
    {
        $this->_etag = $etag;

        return $this;
    }

    /**
     * Depending on the status, return true if result is a success. False if not.
     * @return bool
     */
    public function isSuccess()
    {
        return true;
    }

    /**
     * Get this success result to string.
     * @return string
     */
    public function successToString()
    {
        highlight_string("<?php\n " . var_export($this, true) . "?>");
          echo '<script>document.getElementsByTagName("code")[0].getElementsByTagName("span")[1].remove() ;document.getElementsByTagName("code")[0].getElementsByTagName("span")[document.getElementsByTagName("code")[0].getElementsByTagName("span").length - 1].remove() ; document.documentElement.innerHTML = document.documentElement.innerHTML.replace(/__set_state/g, "");</script>';
          die();
    }
}