<?php 
namespace phpmvc\model ;
use phpmvc\core\model ; 

class user extends model {
    
    public function users () {
        global $conn ;
        $stmt = $conn->prepare ("select * from bonus ") ;
        $stmt->execute () ;
        $row = $stmt->fetchAll () ;
//        echo "<pre>";
//        print_r ($row) ;
//        echo "</pre>";
        return $row ;
    }
    
    public function getuser ($name , $pass) {
        global $conn ;
        $stmt = $conn->prepare ("select * from users where  user_ar_name = ? and password =?") ;
        $stmt->execute (array ($name , $pass)) ;
        $row = $stmt->fetch() ;
        $count = $stmt->rowCount () ;
        return $count ;
        
    }
    
      public function setuser ($name , $pass) {
        global $conn ;
        $stmt = $conn->prepare ("insert into user (name , pass) values (:namee , :passs)") ;
        $stmt->execute (array ("namee" => $name , "passs" => $pass)) ;
        $conut = $stmt->rowCount() ;
        return $conut ;
        
    }
    
    
    public function get () {
        
        global $conn ;
        $stmt = $conn->prepare ("select * from bonus ") ;
        $stmt->execute () ;
        $row = $stmt->fetchAll () ;
       
        return $row ;
    }
    
    
    public function set () {
        global $conn ;
        
        $stmt = $conn->prepare ("select * from bonus ") ;
        $stmt->execute () ;
        $row = $stmt->fetchAll () ;
        
        return $row ;
    }
}