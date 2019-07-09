<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 7/9/19
 * Time: 8:44 AM
 */
use Pusher\Pusher;

function sayHello(){
    return "Hello world!";
}

function sendMessage($broadcast,$event,$data){
    $options = array(
        'cluster' => env("PUSHER_APP_CLUSTER"),
        'useTLS' => true
    );
    $pusher = new Pusher(
        env("PUSHER_APP_KEY"),
        env("PUSHER_APP_SECRET"),
        env("PUSHER_APP_ID"),
        $options
    );

    //$data['message'] = 'hello world';
    $pusher->trigger($broadcast,$event, $data);
}