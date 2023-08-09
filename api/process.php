<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $storeName = $_POST["storeName"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];
    $remarks = $_POST["remarks"];
    
    $to = "hidaka.naoto@kosaido.co.jp"; // 送信先のメールアドレス
    $subject = "アンケートフォームの回答";
    $message = "店舗名: $storeName\n住所: $address\n電話番号: $phoneNumber\n備考: $remarks";
    
    // メールを送信
    mail($to, $subject, $message);
    
    echo "アンケートの回答を送信しました。";
}
?>

