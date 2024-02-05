<?php
namespace App\Helpers;

class Reader{
    public static function readCSV(string $filename){

        $rows = [];
        $fileStream = fopen($filename, 'r');

        if ($fileStream === false) return false;

        while(($row = fgetcsv($fileStream)) !== false){
            array_push($rows, $row);
        }

        fclose($fileStream);

        return $rows;
    }
}