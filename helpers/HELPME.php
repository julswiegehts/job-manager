<?php

class HELPME
{

    /**
     * Stores the given text to logs/CURRENT_DATE.txt
     *
     * @param $text
     */
    public static function addToLog($text)
    {
        $time = date("Y-m-d H:i:s");
        $date = date("Y-m-d");
        $text = "$time - $text \n";
        $logFile = dirname(__FILE__) . "/../logs/$date.txt";
        $currentText = file_get_contents($logFile);
        $currentText = $currentText ? $currentText : "";
        file_put_contents($logFile, $currentText . $text);
    }

}