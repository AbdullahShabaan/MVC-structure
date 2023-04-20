<?php

namespace phpmvc\core ;

class helper {
    
    static public function redirect ($path) {
        header ("location:http://mvc3.test/" . $path);
        
    }
    
    
}