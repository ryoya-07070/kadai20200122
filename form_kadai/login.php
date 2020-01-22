<?php 
    // 問１０．ログインフォームの値を取得しよう
    echo "ユーザID:". $_POST['id']."</br>";
    echo "パスワード:". $_POST['password']."</br>";

    // 問１１．フォームに値が入力されていない場合「フォームに値を入力してください」と表示しよう
    if (empty ($_POST['id']) || empty ($_POST['password'])){
      echo "ユーザIDとパスワードを入力してください";
    }

    // 問１２．ファイルからパスワードを取得しよう
    
    // 問１３．フォームと json のパスワードを比較して一致したらログインできるようにしよう
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- 問６．Bootstrap のスタイルシートパスを href に記述-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  <div class="main">
    <div class="container">
    <!-- 問５．form の acrion属性 と method 属性の追加-->
    <form action = "login.php" method = "POST"> 
        <div class="form-group">
            <label>ユーザID</label>
            <!-- 問５．ユーザIDフォームを追加 -->
            <input type = "text" class = "form-control" name = "id" placeholder = "" required>
            <!-- 問７．Bootstrap のデザインを適用しよう -->
            <!-- 問８．プレースホルダをつけよう -->
            <!-- 問９．必須バリデーションをつけよう -->
        </div>
        <div class="form-group">
            <label>パスワード</label>
            <!-- 問５．パスワードフォームを追加 -->
            <input type = "password" class = "form-control" name = "password" required>
            
        </div>
       <!-- 問５．ログインボタンを追加 -->
       <input type = "submit" value = "ログイン" class = "btn btn-primary">
    </form>
    </div>
  </div>
</body>
</html>
