<?php

namespace Stc\ScraperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ScrapeStatus
 */
class ScrapeStatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content_type;

    /**
     * @var integer
     */
    private $http_code;

    /**
     * @var integer
     */
    private $header_size;

    /**
     * @var integer
     */
    private $request_size;

    /**
     * @var string
     */
    private $filetime;

    /**
     * @var string
     */
    private $ssl_verify_result;

    /**
     * @var integer
     */
    private $redirect_count;

    /**
     * @var float
     */
    private $total_time;

    /**
     * @var string
     */
    private $namelookup_time;

    /**
     * @var float
     */
    private $connect_time;

    /**
     * @var float
     */
    private $pretransfer_time;

    /**
     * @var integer
     */
    private $size_upload;

    /**
     * @var integer
     */
    private $size_download;

    /**
     * @var string
     */
    private $speed_download;

    /**
     * @var string
     */
    private $speed_upload;

    /**
     * @var integer
     */
    private $download_content_length;

    /**
     * @var integer
     */
    private $upload_content_length;

    /**
     * @var string
     */
    private $starttransfer_time;

    /**
     * @var string
     */
    private $redirect_time;

    /**
     * @var string
     */
    private $certinfo;

    /**
     * @var string
     */
    private $primary_ip;

    /**
     * @var integer
     */
    private $primary_port;

    /**
     * @var string
     */
    private $local_ip;

    /**
     * @var integer
     */
    private $local_port;

    /**
     * @var string
     */
    private $redirect_url;

    /**
     * @var \DateTime
     */
    private $created_at;

    /**
     * @var \DateTime
     */
    private $updated_at;

    /**
     * @var \Stc\ScraperBundle\Entity\ScrapeContent
     */
    private $scrapecontent;

    /**
     * @var \Stc\ScraperBundle\Entity\Website
     */
    private $website;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content_type
     *
     * @param string $contentType
     * @return ScrapeStatus
     */
    public function setContentType($contentType)
    {
        $this->content_type = $contentType;
    
        return $this;
    }

    /**
     * Get content_type
     *
     * @return string 
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Set http_code
     *
     * @param integer $httpCode
     * @return ScrapeStatus
     */
    public function setHttpCode($httpCode)
    {
        $this->http_code = $httpCode;
    
        return $this;
    }

    /**
     * Get http_code
     *
     * @return integer 
     */
    public function getHttpCode()
    {
        return $this->http_code;
    }

    /**
     * Set header_size
     *
     * @param integer $headerSize
     * @return ScrapeStatus
     */
    public function setHeaderSize($headerSize)
    {
        $this->header_size = $headerSize;
    
        return $this;
    }

    /**
     * Get header_size
     *
     * @return integer 
     */
    public function getHeaderSize()
    {
        return $this->header_size;
    }

    /**
     * Set request_size
     *
     * @param integer $requestSize
     * @return ScrapeStatus
     */
    public function setRequestSize($requestSize)
    {
        $this->request_size = $requestSize;
    
        return $this;
    }

    /**
     * Get request_size
     *
     * @return integer 
     */
    public function getRequestSize()
    {
        return $this->request_size;
    }

    /**
     * Set filetime
     *
     * @param string $filetime
     * @return ScrapeStatus
     */
    public function setFiletime($filetime)
    {
        $this->filetime = $filetime;
    
        return $this;
    }

    /**
     * Get filetime
     *
     * @return string 
     */
    public function getFiletime()
    {
        return $this->filetime;
    }

    /**
     * Set ssl_verify_result
     *
     * @param string $sslVerifyResult
     * @return ScrapeStatus
     */
    public function setSslVerifyResult($sslVerifyResult)
    {
        $this->ssl_verify_result = $sslVerifyResult;
    
        return $this;
    }

    /**
     * Get ssl_verify_result
     *
     * @return string 
     */
    public function getSslVerifyResult()
    {
        return $this->ssl_verify_result;
    }

    /**
     * Set redirect_count
     *
     * @param integer $redirectCount
     * @return ScrapeStatus
     */
    public function setRedirectCount($redirectCount)
    {
        $this->redirect_count = $redirectCount;
    
        return $this;
    }

    /**
     * Get redirect_count
     *
     * @return integer 
     */
    public function getRedirectCount()
    {
        return $this->redirect_count;
    }

    /**
     * Set total_time
     *
     * @param float $totalTime
     * @return ScrapeStatus
     */
    public function setTotalTime($totalTime)
    {
        $this->total_time = $totalTime;
    
        return $this;
    }

    /**
     * Get total_time
     *
     * @return float 
     */
    public function getTotalTime()
    {
        return $this->total_time;
    }

    /**
     * Set namelookup_time
     *
     * @param string $namelookupTime
     * @return ScrapeStatus
     */
    public function setNamelookupTime($namelookupTime)
    {
        $this->namelookup_time = $namelookupTime;
    
        return $this;
    }

    /**
     * Get namelookup_time
     *
     * @return string 
     */
    public function getNamelookupTime()
    {
        return $this->namelookup_time;
    }

    /**
     * Set connect_time
     *
     * @param float $connectTime
     * @return ScrapeStatus
     */
    public function setConnectTime($connectTime)
    {
        $this->connect_time = $connectTime;
    
        return $this;
    }

    /**
     * Get connect_time
     *
     * @return float 
     */
    public function getConnectTime()
    {
        return $this->connect_time;
    }

    /**
     * Set pretransfer_time
     *
     * @param float $pretransferTime
     * @return ScrapeStatus
     */
    public function setPretransferTime($pretransferTime)
    {
        $this->pretransfer_time = $pretransferTime;
    
        return $this;
    }

    /**
     * Get pretransfer_time
     *
     * @return float 
     */
    public function getPretransferTime()
    {
        return $this->pretransfer_time;
    }

    /**
     * Set size_upload
     *
     * @param integer $sizeUpload
     * @return ScrapeStatus
     */
    public function setSizeUpload($sizeUpload)
    {
        $this->size_upload = $sizeUpload;
    
        return $this;
    }

    /**
     * Get size_upload
     *
     * @return integer 
     */
    public function getSizeUpload()
    {
        return $this->size_upload;
    }

    /**
     * Set size_download
     *
     * @param integer $sizeDownload
     * @return ScrapeStatus
     */
    public function setSizeDownload($sizeDownload)
    {
        $this->size_download = $sizeDownload;
    
        return $this;
    }

    /**
     * Get size_download
     *
     * @return integer 
     */
    public function getSizeDownload()
    {
        return $this->size_download;
    }

    /**
     * Set speed_download
     *
     * @param string $speedDownload
     * @return ScrapeStatus
     */
    public function setSpeedDownload($speedDownload)
    {
        $this->speed_download = $speedDownload;
    
        return $this;
    }

    /**
     * Get speed_download
     *
     * @return string 
     */
    public function getSpeedDownload()
    {
        return $this->speed_download;
    }

    /**
     * Set speed_upload
     *
     * @param string $speedUpload
     * @return ScrapeStatus
     */
    public function setSpeedUpload($speedUpload)
    {
        $this->speed_upload = $speedUpload;
    
        return $this;
    }

    /**
     * Get speed_upload
     *
     * @return string 
     */
    public function getSpeedUpload()
    {
        return $this->speed_upload;
    }

    /**
     * Set download_content_length
     *
     * @param integer $downloadContentLength
     * @return ScrapeStatus
     */
    public function setDownloadContentLength($downloadContentLength)
    {
        $this->download_content_length = $downloadContentLength;
    
        return $this;
    }

    /**
     * Get download_content_length
     *
     * @return integer 
     */
    public function getDownloadContentLength()
    {
        return $this->download_content_length;
    }

    /**
     * Set upload_content_length
     *
     * @param integer $uploadContentLength
     * @return ScrapeStatus
     */
    public function setUploadContentLength($uploadContentLength)
    {
        $this->upload_content_length = $uploadContentLength;
    
        return $this;
    }

    /**
     * Get upload_content_length
     *
     * @return integer 
     */
    public function getUploadContentLength()
    {
        return $this->upload_content_length;
    }

    /**
     * Set starttransfer_time
     *
     * @param string $starttransferTime
     * @return ScrapeStatus
     */
    public function setStarttransferTime($starttransferTime)
    {
        $this->starttransfer_time = $starttransferTime;
    
        return $this;
    }

    /**
     * Get starttransfer_time
     *
     * @return string 
     */
    public function getStarttransferTime()
    {
        return $this->starttransfer_time;
    }

    /**
     * Set redirect_time
     *
     * @param string $redirectTime
     * @return ScrapeStatus
     */
    public function setRedirectTime($redirectTime)
    {
        $this->redirect_time = $redirectTime;
    
        return $this;
    }

    /**
     * Get redirect_time
     *
     * @return string 
     */
    public function getRedirectTime()
    {
        return $this->redirect_time;
    }

    /**
     * Set certinfo
     *
     * @param string $certinfo
     * @return ScrapeStatus
     */
    public function setCertinfo($certinfo)
    {
        $this->certinfo = $certinfo;
    
        return $this;
    }

    /**
     * Get certinfo
     *
     * @return string 
     */
    public function getCertinfo()
    {
        return $this->certinfo;
    }

    /**
     * Set primary_ip
     *
     * @param string $primaryIp
     * @return ScrapeStatus
     */
    public function setPrimaryIp($primaryIp)
    {
        $this->primary_ip = $primaryIp;
    
        return $this;
    }

    /**
     * Get primary_ip
     *
     * @return string 
     */
    public function getPrimaryIp()
    {
        return $this->primary_ip;
    }

    /**
     * Set primary_port
     *
     * @param integer $primaryPort
     * @return ScrapeStatus
     */
    public function setPrimaryPort($primaryPort)
    {
        $this->primary_port = $primaryPort;
    
        return $this;
    }

    /**
     * Get primary_port
     *
     * @return integer 
     */
    public function getPrimaryPort()
    {
        return $this->primary_port;
    }

    /**
     * Set local_ip
     *
     * @param string $localIp
     * @return ScrapeStatus
     */
    public function setLocalIp($localIp)
    {
        $this->local_ip = $localIp;
    
        return $this;
    }

    /**
     * Get local_ip
     *
     * @return string 
     */
    public function getLocalIp()
    {
        return $this->local_ip;
    }

    /**
     * Set local_port
     *
     * @param integer $localPort
     * @return ScrapeStatus
     */
    public function setLocalPort($localPort)
    {
        $this->local_port = $localPort;
    
        return $this;
    }

    /**
     * Get local_port
     *
     * @return integer 
     */
    public function getLocalPort()
    {
        return $this->local_port;
    }

    /**
     * Set redirect_url
     *
     * @param string $redirectUrl
     * @return ScrapeStatus
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirect_url = $redirectUrl;
    
        return $this;
    }

    /**
     * Get redirect_url
     *
     * @return string 
     */
    public function getRedirectUrl()
    {
        return $this->redirect_url;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return ScrapeStatus
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return ScrapeStatus
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set scrapecontent
     *
     * @param \Stc\ScraperBundle\Entity\ScrapeContent $scrapecontent
     * @return ScrapeStatus
     */
    public function setScrapecontent(\Stc\ScraperBundle\Entity\ScrapeContent $scrapecontent = null)
    {
        $this->scrapecontent = $scrapecontent;
    
        return $this;
    }

    /**
     * Get scrapecontent
     *
     * @return \Stc\ScraperBundle\Entity\ScrapeContent 
     */
    public function getScrapecontent()
    {
        return $this->scrapecontent;
    }

    /**
     * Set website
     *
     * @param \Stc\ScraperBundle\Entity\Website $website
     * @return ScrapeStatus
     */
    public function setWebsite(\Stc\ScraperBundle\Entity\Website $website = null)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return \Stc\ScraperBundle\Entity\Website 
     */
    public function getWebsite()
    {
        return $this->website;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
    }

    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
    }
}