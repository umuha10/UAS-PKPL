<?php
class shopee
{
    function isActiveAccount($status)
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
    function main ($statusActiveAccount, $statusUsername, $statusPassword, $statusOTP)
    {
        if ($this->isActiveAccount($statusActiveAccount)==TRUE){
            if ($this->isWrongUsername($statusUsername)==TRUE){
                return 'wrong username';
            }else{
                if($this->isWrongPassword($statusPassword)==TRUE){
                    return 'wrong password';
                }else{
                    if ($this->isWrongOTP($statusOTP)==TRUE){
                        return 'wrong OTP';
                    }else{
                        return 'Please input valid username and password';
                    }
                }
            }
        }else{
            return 'your account is unactive. Please create your account';
        }
    }
}    
?>