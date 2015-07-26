<?php
/**
 * Created by IntelliJ IDEA.
 * User: etayschur
 * Date: 7/23/15
 * Time: 2:50 PM
 */



require_once 'db/manager.php';
require_once 'MailManager.php';

if (($_POST) || (isset($_POST))) {

    $request = json_decode(file_get_contents("php://input"));

    switch ($request->action) {
        case "submitForm" :
                            $result = DbManager::insertToDb("forms" , $request->data);
                            MailManager::sendMail($request->data);
                            echo json_encode($result);
                            exit;
        case "logOut"     :    if (isset($_COOKIE['gadsarUserCookie'])) {
                                unset($_COOKIE['gadsarUserCookie']);
                                setcookie('gadsarUserCookie', null, -1, '/');

                                 }
                              return true;

        case "login"      :
                             $result = DbManager::login($request->data);
                             MailManager::sendLoginMail($result);
                             if(count($result) > 0){
                                 $cookie =  md5(time());
                                 setcookie('gadsarUserCookie',$cookie,time()+60*60*6, '/');
                             }

                             echo json_encode($result);
                             exit;
        case "deleteForm" : $result = DbManager::deleteForm($request->data->id);
                            echo json_encode($result);
                            exit;


        case "getForms" : $result = DbManager::getForms();
                          echo json_encode($result);
                          exit;

    }
}
?>
