<?php

namespace phpmvc\core ;

class controller {
     public function view ($path , $tit) {
         extract ($tit);
         
        require_once ( VIEW . $path . ".php");
    }
}
