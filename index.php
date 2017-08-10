<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2017
 * Time: 12:12
 */

function sendMessage($chat_id, $message)
    {
        file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
    }

	$access_token = '417197977:AAEwjr89xwjtzddLaXwgg7CIv4MHGQfUrcA';
	$api = 'https://api.telegram.org/bot' . $access_token;


	$output = json_decode(file_get_contents('php://input'), TRUE);
	$chat_id = $output['message']['chat']['id'];
	$first_name = $output['message']['chat']['first_name'];
	$message = $output['message']['text'];

	$preload_text = $first_name . ', Men sizning xabaringizni oldim!';
	sendMessage($chat_id, $preload_text);
?>