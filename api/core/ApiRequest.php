<?php
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 06/06/2018 14:39                */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

namespace BeerTender\Api\Core;

use BeerTender\Enum\Method;

class ApiRequest {

    private $_request;
    private $_method = Method::GET;
    private $_content_type = "application/json";

    /**
     * ApiRequest constructor.
     * @param array $incomingRequest
     */
    public function __construct($incomingRequest) {
        $this->_request = $incomingRequest;
        $this->_method = $this->get_request_method();
    }

    private function get_request_method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return string
     */
    public function getContentType() {
        return $this->_content_type;
    }

    /**
     * @return string
     */
    public function getMethod() {
        return $this->_method;
    }



}