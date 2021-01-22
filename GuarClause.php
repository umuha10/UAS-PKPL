<?php
class shopee
{
    function isInactiveAccount($status)
    {
        if($status == 'active'){
            return TRUE;
        }
    }
    function isWrongUsername($status)
    {
        if($status == 'wrong username'){
            return TRUE;
        }
    }
    function isWrongPassword($status){
        if($status == 'wrong password'){
            return TRUE;
        }
    }
    function isWrongOTP($status){
        if($status == 'wrong status'){
            return TRUE;
        }
    }
    function main ($status)
    {
        if ($this->isInactiveAccount($status)==TRUE){
            return 'Your account is inactive';
        }
        if ($this->isWrongUsername($status)==TRUE){
            return 'Wrong username';
        }
        if ($this->isWrongPassword($status)==TRUE){
            return 'Wrong Password';
        }
        if ($this->isWrongOTP($status)==TRUE){
            return 'Wrong OTP';
        }
        return 'Create your account';
    }
}    
?>