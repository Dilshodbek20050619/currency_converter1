<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'bot/Bot.php';
require 'current.php';
$bot = new Bot();
$current=new Currency();
$update=json_decode(file_get_contents('php://input'));
$text=$update->message->text;
$from_id=$update->message->from->id;
$bot->makeRequest('sendMessage',[
    'chat_id'=>$from_id,
    'text'=>$text,
]);
if ($text=='/start'){

}