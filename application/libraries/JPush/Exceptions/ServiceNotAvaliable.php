<?php
namespace JPush\Exceptions;

class ServiceNotAvaliable extends JPushException {

    protected  $code;
    private $headers;

    function __construct($response){
        $this->http_code = $response['http_code'];
        $this->headers = $response['headers'];
        $this->message = $response['body'];
    }

    function __toString() {
        return "\n" . __CLASS__ . " -- [{$this->code}]: {$this->message} \n";
    }

    public function getHttpCode() {
        return $this->http_code;
    }
    public function getHeaders() {
        return $this->headers;
    }
}
