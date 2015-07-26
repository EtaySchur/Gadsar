<?php
/**
 * Created by IntelliJ IDEA.
 * User: etayschur
 * Date: 7/26/15
 * Time: 11:58 AM
 */

require_once 'mandrill/src/Mandrill.php';

class MailManager {
    private static $manDrillManager;


    public static function sendMail($data){
        self::$manDrillManager = new Mandrill('yGJdSfBLhMNKqj6fPDFpog');
        $userName = $data->userFullName;

        $userUnit = $data->unit;

        if($userUnit == null){
            $userUnit = "";
        }

        $message = new stdClass();
        $message->html = "New Form Have Been Submitted ".$userName." - ".$userUnit;
        $message->text = "text body";
        $message->subject = "New Form Alert";
        $message->from_email = "gadsar@dev.com";
        $message->from_name  = "Gadsar Server";
        $message->to = array(array("email" => "etayschur@gmail.com"));
        $message->track_opens = true;
        $response = self::$manDrillManager->messages->send($message);
    }

    public static function sendLoginMail ($data){
        if(count($data) > 0 ){
            $userName = ($data[0]['userName']);
            self::$manDrillManager = new Mandrill('yGJdSfBLhMNKqj6fPDFpog');

            if($userName === null){
                $userName = "";
            }

            $message = new stdClass();
            $message->html = " Logged In ".$userName." To The System";
            $message->text = "text body";
            $message->subject = "Login Alert";
            $message->from_email = "gadsar@dev.com";
            $message->from_name  = "Gadsar Server";
            $message->to = array(array("email" => "etayschur@gmail.com"));
            $message->track_opens = true;
            $response = self::$manDrillManager->messages->send($message);
        }
    }


    function MailManager() {

    }
}




