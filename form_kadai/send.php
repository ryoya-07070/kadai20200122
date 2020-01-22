<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="main">
      <div class="form-item">■ 名前</div>
        <!-- 問４．nameを受け取りechoしましょう -->
        <?php
         echo $_POST['name'];
        ?>

      <div class="form-item">■ 内容</div>
        <!-- 問４．bodyを受け取りechoしましょう -->
        <?php
         echo $_POST['body'];
        ?>

      <div class="form-item">■ 果物を選択</div>
        <!-- 問４．fruits を受け取りechoしましょう -->
        <?php
         echo $_POST['fruits'];
        ?>

      <div class="form-item">■ アプロード画像</div>
        <!-- 問４．upload を受け取りechoしましょう -->
        <?php
         echo $_POST['upload'];
        ?>

  </div>
</body>
</html>