<?php

class nomoz_vaqti {

    const API_URL = 'http://api.aladhan.com/v1/timings/{date}';

    public $namoz_vaqti;
    public function __construct() {
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, self::API_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output=curl_exec($ch);
        curl_close($ch);
        $this->namoz_vaqti=json_decode($output);

    }

    public function get_namoz_vaqti() {
        $separated_data=[];
        $namoz_vaqti=$this->namoz_vaqti;
        foreach($namoz_vaqti as $get_namoz_vaqti) {
            $separated_data[$get_namoz_vaqti['name']]=$get_namoz_vaqti["params['Fajr']"];

        }
    }
}
