<?php

class Hash {
    
    /*
     * @params string $algo The algorithm (md5,sha1, sha256, etc)
     * @params string $data The data to encode
     * @params string $salt The salt (This should be the same throughout the system probabily) 
     * @return string The hashed/salted data
     */
    
    public static function create($algo, $data, $salt){
        $context = hash_init($algo, HASH_HMAC, $salt);
        hash_update($context, $data);
        
        return hash_final($context);
    }
}
