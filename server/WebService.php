<?php
/**
 * Created by IntelliJ IDEA.
 * User: etayschur
 * Date: 7/23/15
 * Time: 2:50 PM
 */



require_once 'db/manager.php';


if (($_POST) || (isset($_POST))) {

    $request = json_decode(file_get_contents("php://input"));

    switch ($request->action) {
        case "submitForm" :
                            $result = DbManager::insertToDb("forms" , $request->data);
                            echo json_encode($result);
                            exit;
        case "login"      :


                             $result = DbManager::login($request->data);
                             var_dump($result); exit;
                             if(count($result) > 0){
                               //  $cookie =  md5(time());
                                 setcookie('user',  'fuad', time()+3600); // notice time() function
                                 setcookie('pass',  'fuad', time()+3600); // you cant use absolute value here
                                 setcookie("gadsarUserCookie", "fuad", time()+3600*6);  /* expire in 1 hour */
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
