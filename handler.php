<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2017
 * Time: 13:03
 */
	function regHandler($cert, $token, $murl)
    {
        $url = "https://api.telegram.org/bot" . $token . "/setWebhook";
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_SAFE_UPLOAD => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => array('url' => $murl, 'certificate' => '@' . realpath($cert))
        );
        curl_setopt_array($ch, $optArray);

        $result = curl_exec($ch);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        curl_close($ch);
    }

	$token = '417197977:AAEwjr89xwjtzddLaXwgg7CIv4MHGQfUrcA';
	$handlerurl = 'https://uztgbot.herokuapp.com/handler.php'; // ИЗМЕНИТЕ ССЫЛКУ

	regHandler($path, $token, $handlerurl);
?>