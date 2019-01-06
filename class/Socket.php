<?php

class Socket
{
    private $socket;
    private $errorNumber;
    private $errorString;

    public function open($hostname, $port)
    {
        if(empty($hostname)) {
            echo 'Hostname couldn\' be empty';
        }
        if(empty($port) && !is_int($port)) {
            echo 'Invalid port';
        }
        else {
            $this->setSocket(fsockopen($hostname, $port, $errorNumber, $errorString, 30));
        }
    }

    public function disconnect()
    {
        fclose($this->socket);
    }

    // GETTERS
    public function getSocket()
    {
        return $this->socket;
    }

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
    public function setSocket($content)
    {
        $this->socket = $content;
    }
}