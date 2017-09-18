<?php
/**
 * Created by PhpStorm.
 * User: daniesy
 * Date: 18/09/2017
 * Time: 16:11
 */

namespace Daniesy\HackedEmails\Response;


class HackedEmailsResponse
{
    const STATUS_HACKED = "found";
    const STATUS_SAFE = "notfound";
    const STATUS_ERROR = "badsintax";

    private $status;
    private $query;
    private $results;
    private $data;

    /**
     * @param string $dataString
     */
    public function __construct(string $dataString = "")
    {
        $data = json_decode($dataString, true);

        foreach(array_keys(get_object_vars($this)) as $key) {
            if(isset($data[$key])) {
                $this->$key = $data[$key];
            }
        }
    }

    public function isSafe() : bool 
    {
        return $this->status == self::STATUS_SAFE;
    }

    public function isHacked() : bool
    {
        return $this->status == self::STATUS_HACKED;
    }
    
    public function hasError() : bool 
    {
        return $this->status == self::STATUS_ERROR;    
    }

    public function getHackData() : array
    {
        return $this->data;
    }

    /**
     * @return int
     */
    public function getResults() : int
    {
        return $this->results;
    }

}