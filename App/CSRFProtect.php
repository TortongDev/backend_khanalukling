<?php  
class CSRFProtect{
    public function csrf(){
        
        $csrf_random = bin2hex(random_bytes(20));
        $_SESSION['CSRF_TOKEN'] = $csrf_random;
        return $csrf_random;
    }
}