<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $message = $_POST['message'];

    // আপনার এপিআই ডিটেইলস
    $api_key = "e10d47277bb9b5d547526b66915ec5eb49ddcf0750acd9658f12e477d4f889cb";
    $senderid = "8809617611020"; // আপনার এপিআই প্রোভাইডারের দেওয়া সেন্ডার আইডি (এটি পরিবর্তন হতে পারে)

    // এপিআই ইউআরএল (সাধারণত বিডিবাল্ক বা সিমিলার এপিআই ফরম্যাট)
    $url = "http://bulksmsbd.net/api/smsapi";
    
    $data = [
        "api_key" => $api_key,
        "senderid" => $senderid,
        "number" => $number,
        "message" => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    curl_close($ch);

    // রেসপন্স চেক করা
    if ($response) {
        echo "<script>alert('SMS Sent Successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Failed to send SMS!'); window.location.href='index.php';</script>";
    }
}
?>
