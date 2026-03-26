<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $message = $_POST['message'];

    // আপনার স্ক্রিনশট থেকে নেওয়া সঠিক API Key
    $api_key = "e10d47277bb9b5d47526b66915ec5eb49ddcf0750acd9658f12e477d4f889cb";
    $senderid = "8809617611088"; // এটি Bulksmsbd-এর ডিফল্ট নন-মাস্কিং আইডি
    $url = "https://bulksmsbd.net/api/smsapi";

    $data = [
        "api_key" => $api_key,
        "senderid" => $senderid,
        "number" => $number,
        "message" => $message
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // SSL সমস্যা এড়াতে
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        $res = json_decode($response, true);
        if (isset($res['response_code']) && $res['response_code'] == 202) {
            echo "✅ মেসেজ সফলভাবে পাঠানো হয়েছে!";
        } else {
            echo "❌ সমস্যা হয়েছে: " . $response;
        }
    } else {
        echo "❌ সার্ভারের সাথে যোগাযোগ করা যাচ্ছে না।";
    }
}
?>
