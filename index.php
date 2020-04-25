<?php
const VALID_MESS = "Valid Phone number";
const INVALID_MESS = "Invalid Phone number";

function checkPhoneNumber($phoneNumber){
    $regExp = "/^[(]\d{2}[)]-[(][0-9]{10}[)]$/";
    if(preg_match($regExp,$phoneNumber)){
        return VALID_MESS;
    }
    else
        return INVALID_MESS;
}

echo checkPhoneNumber('(84)-(0978489648)')."<br>";
echo checkPhoneNumber('(a8)-(22222222)')."<br>";
echo checkPhoneNumber('(84)-(0988076222)')."<br>";
echo checkPhoneNumber('(84)-(0987fds65)')."<br>";


