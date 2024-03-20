<?php
use App\Reservation;
require '../app/Reservations.php';

$pdo = new PDO(
    'mysql:host=mysql;dbname=bookingform',
    'root',
    'password'
);

$displayModel = new Reservation($pdo);
$display = $displayModel->getReservations();

// 予約の変更処理
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $reservation_id = $_POST['bookings_id'];
    $updated_at = $_POST['updated_at'];
    $displayModel->updateReservation($reservation_id, $updated_at);
}

// 予約の削除処理
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $reservation_id = $_POST['bookings_id'];
    $displayModel->deleteReservation($reservation_id);
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
        <h1>予約履歴</h1>
        <!-- データがあれば表示 -->
        <?php if(!empty($display)): ?>
        <?php foreach($display as $date): ?>
            <div><?php echo $date['name'] ?></div>
            <div><?php echo $date['email'] ?></div>
            <div><?php echo $date['phone_number'] ?></div>
            <form action="" method="post">
                <input type="text" name="updated_at" value="<?php echo $date['updated_at'] ?>">
                <input type="hidden" name="bookings_id" value="<?php echo $date['id'] ?>">
                <button type="submit" name="update">変更</button>  
            </form>
            <form action="" method="post">
                <input type="hidden" name="bookings_id" value="<?php echo $date['id'] ?>">
                <button type="submit" name="delete">削除</button>     
            </form>
            <div>----------------------------------------</div>
        <? endforeach; ?>
        <?php endif; ?>
        <!-- データが無い場合 -->
        <?php if(empty($display)): ?>
            <p>送信履歴無し</p>
        <?php endif; ?>
        <!-- 共通 -->
        <a href="index.php">戻る</a>
    </div>

</body>
</html>