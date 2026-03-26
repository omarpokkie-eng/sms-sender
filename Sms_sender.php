<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    // মনে রাখবেন: এই এপিআই-তে সাধারণত মেসেজ কাস্টমাইজ করা যায় না, এটি শুধু ওটিপি পাঠায়।
    
    $url = "https://ossetliteopi.banglalink.net/opi/ul/user/otp-login/request";

    // এপিআই-এর প্রয়োজনীয় ডেটা (এটি এপিআই প্রোটোকল অনুযায়ী হতে হবে)
    $data = array(
        "mobile_number" => $number
    );

    $payload = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        echo "সার্ভার রেসপন্স: " . $response;
    } else {
        echo "কানেকশন ফেইলড।";
    }
}
?>
