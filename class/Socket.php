<?php

class Socket
{
    private $socket;
    private $errorNumber;
    private $errorString;

    public function connect($hostname, $port, $timeout)
    {
        // TODO: test if param are available
    }

    public function disconnect()
    {
        fclose($this->socket);
    }

    // GETTERS

    /**
     * @return int
     */
    public function getErrorNumber()
    {
        return $this->errorNumber;
    }

    /**
     * @return string
     */
    public function getErrorString()
    {
        return $this->errorString;
    }

    //SETTERS
    /**
     * @param int $errorNumber
     * @return bool
     */
    public function setErrorNumber($errorNumber)
    {
        if (!empty($errorNumber) && is_int($errorNumber)) {
            $this->errorNumber = $errorNumber;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $errorString
     * @return bool
     */
    public function setErrorString($errorString)
    {
        if (!empty($errorString) && is_string($errorString)) {
            $this->errorString = $errorString;
            return true;
        } else {
            return false;
        }
    }
}