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
        case "getForms" : $result = DbManager::getForms();
                          echo json_encode($result);
                          exit;
    }
}
?>
