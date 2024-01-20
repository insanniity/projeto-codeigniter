<?php 


function Encrypt($value){
    if(empty($value)){
        return null;
    }

    try{
        $encription =  \Config\Services::encrypter();
        return bin2hex($encription->encrypt($value));

    }catch(Exception $e){
        return null;
    }

}


function Decrypt($value){
    if(empty($value)){
        return null;
    }

    try{
        $encription =  \Config\Services::encrypter();
        return $encription->decrypt(hex2bin($value));

    }catch(Exception $e){
        return null;
    }

}