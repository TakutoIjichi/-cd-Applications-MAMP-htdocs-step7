<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>userlogin</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="content">
    <h1 class="title">ユーザー新規画面</h1>
    <form action="register.php" method="POST">
      <input id="pw-text" type="password" name="password" placeholder="パスワード">
      <input id="ad-text" type="email" name="email" placeholder="アドレス">
      <div class="btn-content">
        <button id="new-btn"><a href="">新規登録</a></button>
        <button id="lg-btn"><a href="index.html">戻る</a></button>
      </form>
    </div>
  </div>
</body>
</html>