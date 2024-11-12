<?php
class Currency
{
    const CURRENCY_API_URL = "https://cbu.uz/uz/arkhiv-kursov-valyut/json/";
    public function __construct(){
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, self::CURRENCY_API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output=curl_exec($ch);
        curl_close($ch);
        $decode=json_decode($output);
        echo $decode[0]->Ccy;

    }
}





//https://api.currencyconverter.com/v1/