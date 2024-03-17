<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-予約フォーム</title>
</head>
<body>

    <div>
        <form action="complete.php" method="post">
            <p>予約者名: <input type="text" name="name" placeholder="予約者名"></p>
            <p>Email: <input type="email" name="email" placeholder="Email"></p>
            <p>電話番号: <input type="tel" name="phone_number" placeholder="電話番号"></p>
            <button type="submit">送信</button>
        </form>
    </div>
  
</body>
</html>
