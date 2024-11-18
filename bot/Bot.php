<?php

class Bot{
    const API_URL = 'https://api.telegram.org/bot';
    private $token='7901547662:AAF8OQy17IMT6S3NNU0xqS7i02ibUL45frQ';

    public function makeRequest($method,$data=[]){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, self::API_URL . $this->token . '/' . $method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        var_dump($response);
    }
}
$bot = new Bot();
$bot->makeRequest('sendMessage', [
    'chat_id' => 5016959211,
    'text'=>'Hello from Bot!'
]);
$bot->makeRequest('sendVideo', [
    'chat_id' => 5016959211,
    'video'=>'https://www.w3schools.com/html/mov_bbb.mp4'

]);
$bot->makeRequest('sendImg', [
    'chat_id' => 5016959211,
    'photo'=>'https://talimuchun.uz/wp-content/uploads/2024/10/21-oktabr-til-bayrami-haqida-rasmlar-bayroq.png'

]);
