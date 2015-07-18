<?php

class DbManager {

	protected $pdo;

	public function __construct() {
		
	}

	private static function connectToDb() {

    /* EC2 */

        $dbpass = 'Avishaynimni88';
        $dbhost = '127.0.0.1';
        $dbname = 'GadsarGolani';
        $dbuser = 'etay';
        /* LOCAL */
		//$dbpass = 'Kulanu$namut09';
		//$dbhost = 'localhost';
		//$dbname = 'MyBlog';
		//$dbuser = 'root';
		$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass ,  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $pdo;
	}


    /* Generic Section */

	public static function insertToDb($tableName, $data) {
		// Convert The Data from Object to Key - Value Array
		$dataArray = (array) $data;
		// Get Last Item Key
		$last_key = end(array_keys($dataArray));
		$sql = array();
		$cols = "(";
		$values = "(";
		foreach ($dataArray AS $k => $v) {
			$cols.= $k;
			$values.= ':' . $k;
			if ($k == $last_key) {
				
			} else {
				$cols.=",";
				$values.=",";
			}
		}
		$cols.=")";
		$values.= ")";

		$query = "INSERT INTO " . $tableName . " " . $cols . " VALUES " . $values;
		$conn = self::connectToDb();
		$q = $conn->prepare($query);
		$q->execute($dataArray);
		return array('id' => $conn->lastInsertId(), 'creation_date' => date("Y-m-d H:i:s", time()));
	}

    private static function deleteFromDb($table , $whereCol , $whereVal){
        $conn = self::connectToDb();
        if($whereCol == null){
            $sql = "DELETE FROM ".$table;
            $q = $conn->query($sql);
            return $q;
        }else{
            $sql = "DELETE FROM ".$table." WHERE ".$whereCol."=".$whereVal;
            $q = $conn->query($sql);
            return $q;
        }


    }

    /* End Of Generic Section */

}

?>