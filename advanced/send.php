<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css>
</head>
<body>
　<header style="margin-top: -25px; padding-top: 20px;margin-bottom: 50px;">
    <ul class="nav nav-tabs nav-fill">
      <li class="nav-item">
        <a class="nav-link" href="#">ホーム</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">コンテンツ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">お問い合わせ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" >ログアウト</a>
      </li>
    </ul>
  </header>
  <main>
  <div class="container bg-light" style="padding: 40px;">
    <h1> お問い合わせ内容 </h1>
      <div class="form-item">■ 名前</div>
      <!-- nameを受け取りechoしましょう -->
      <?php
        echo $_POST['name'];
      ?>
      
      <div class="form-item">■ 内容</div>
      <!-- bodyを受け取りechoしましょう -->
      <?php
        echo $_POST['body'];
      ?>
      <div class="form-item">■ 果物を選択</div>
      <!-- fruits を受け取りechoしましょう -->
      <?php
        echo $_POST['fruits'];
      ?>
      <!-- upload を受け取りechoしましょう -->
      <div class="form-item">■ アプロード画像</div>
      <?php
        echo $_POST['upload'];
      ?>
      <p style="padding-top: 20px;">
        <a href="index.php"> お問い合わせフォームに戻る </a>
      </p>
  </div>
  <footer class="text-center">
    <span> Copyright © 2019 dreamcareer All Rights Reserved. </span>
  </footer>
</body>
</html>