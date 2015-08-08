<?php
/**
 * Created by PhpStorm.
 * User: etay
 * Date: 8/8/15
 * Time: 12:55 PM
 */

// output headers so that the file is downloaded rather than displayed


class ExportManager{
    private static $csvHeaders = array(
           "userId" => 'ת.ז.',
               "userFullName" => 'שם + שם משפחה',
    );

    public static  function exportCsv(){

        $output = fopen('php://output', 'w');
        $headers = array();

        // output the column headings
        foreach(ExportManager::$csvHeaders as $key => $value){
            array_push($headers , $key);
        }

        fputcsv($output, $headers);
        return $output;
        fclose($output);
    }
}