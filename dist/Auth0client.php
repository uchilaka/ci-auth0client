<?php
namespace Uchilaka\CodeIgniter;

class Auth0client {
    
    protected $CI;
    
    public function __construct() {
        $this->CI =& get_instance();
    }
    
}

