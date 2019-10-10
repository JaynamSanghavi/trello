<?php
class Session{

    /**
     * 
     * Its use to check if session is goinf on , if not thenstart the session 
     * 
     */

    public static  function  startSession(){
        if (!Session::isSessionStart()){
            session_start();
        }
    }

    /**
     * 
     * It return true if session is on , else false
     * 
     */
    public static function isSessionStart(){
        if (isset($_SESSION['login'])){
            return true;
        }
        return false;
        
    }
}
?>