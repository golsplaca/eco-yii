<?php
    header('Cache-Control: no-cache, must-revalidate'); 
    header('Content-Type: application/json; charset=utf-8');
    function executeCurll($url) {

        foreach($_POST as $key=>$value){
            $postString.=$key.'='.$value.'&';
        }
        rtrim($postString, '&');

        //die("Test: ".$postString);

        //$teste = 'data={"login":"fasd","password":"fadsf"}&';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    $baseUrl = isset($_GET['rest'])? $_GET['rest']:$_POST['rest'];
    echo executeCurll($baseUrl);
?>