<?php  
class CSRFProtect{
    public function csrf(){
        session_start();
        $csrf_random = bin2hex(random_bytes(20));
        $_SESSION['CSRF_TOKEN'] = $csrf_random;
        return $csrf_random;
    }
    public function jsonWebToken($secret_key/*, $header, $payload*/){
        $header = array(
            'type' => 'api',
            'algo' => 'sha256'
        );
        $payload = array(
            'username' => 'tortong91',
            'password' => '1234',
            'time'     => time()+200
        );
        $header_encode = base64_encode(json_encode($header));
        $payload_encode = base64_encode(json_encode($payload));
        $signature = hash_hmac('sha256' , $header_encode.''.$payload_encode , $secret_key);
        $_SESSION['TOKEN'] = base64_encode($signature.'.'.$header_encode.'.'.$payload_encode);
        return base64_encode($signature.'.'.$header_encode.'.'.$payload_encode);

    }
    public function jsonDecode($secret_key,$token/*, $header, $payload*/){
        $token_d = base64_decode($token);
        list($signature,$header, $payload) = explode('.',$token_d);
        $signature1 = hash_hmac('sha256' , $header.''.$payload , $secret_key);
        if(hash_equals($signature1, $signature)){
            $payload = base64_decode(json_decode($payload));
            return json_encode($payload);
        }else{
            return false;
        }
    }
}
