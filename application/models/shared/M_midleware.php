<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_midleware extends CI_Model 
{
    public function __construct(){
        parent::__construct();
    }

    public function connection($url,$param){
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_URL, $url);
        // $result = curl_exec($ch);
        // curl_close($ch);
        // return $result;
        // $obj = json_decode($result);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $param,
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function getDataApi($url,$param){
        $con = $this->connection($url, $param);
        if($con == false) {
            return false;
        }
        return json_decode($con) ;
    }

    public function getDataApiJson($url, $param){
        $con = $this->getDataApi($url, $param);
        $arr = [];
        if($con == false) {
            return false;
        }
        foreach($con as $cn){
            
            array_push($arr, $cn);
        }

        return json_encode($con);
    }


    

}    