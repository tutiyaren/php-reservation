<?php

use App\Reservation;
require '../app/Reservations.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$pdo = new PDO(
    'mysql:host=mysql;dbname=bookingform',
    'root',
    'password'
);

$sendModel = new Reservation($pdo);
$send = $sendModel->addReservation($name, $email, $phone_number);

if(empty($name) || empty($email) || empty($phone_number)) {
    $errorMessage = "「予約者名」「Email」「電話番号」のどれかが記入されていません";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-予約フォーム</title>
</head>
<body>
    <div>
      <!-- Okな場合 -->
        <?php if(!(isset($errorMessage))): ?>
            <h1>予約完了 ^ ^</h1>
        <? endif; ?>
      <!-- NGな場合 -->
        <?php if(isset($errorMessage)): ?>
            <p><?php echo $errorMessage ?></p>
        <?php endif ?>
      <!-- 共通部分 -->
        <a href="index.php">予約画面へ</a>
    </div>
</body>
</html>
