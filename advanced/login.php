<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css>
</head>
<body style="background-color: #e9ebee;">
　<header class="bg-primary text-white" style="margin-top: -25px; padding-top: 20px;margin-bottom: 50px;">
    <div class="container">
      <div class="row">
        <h2>
            dreamcareer
        </h2>
        <button style="margin-left: 10px;" type="submit" class="btn btn-success btn-sm">新しいアカウントを作成</button>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
    <div class="card text-center">
     <div class="card-body" style="margin-left: 100px;margin-right: 100px;">
        <h5 class="card-title">dreamcareer にログイン</h5>
        <form method="post" action="">
            <div class="form-group">
                <input type="text" name="id" class="form-control" required placeholder="ユーザIDを入力してください">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="パスワード">
            </div>
            <p>
              <span class="text-danger">
                <?php
                    if(empty($_POST['id']) || empty($_POST['password'])) {
                        echo "ユーザIDとパスワードを入力してください。";
                    } else {
                        $jsonContents = file_get_contents('./password.json');
                        $json = json_decode($jsonContents);   

                        for ($i=0; $i < count($json->user); $i++) {
                            if ($_POST['id'] == $json->user[$i]->id) {
                                if ($_POST['password'] == $json->user[$i]->password) {
                                    header('Location: ./index.php');
                                    exit();    
                                }
                            }
                        } 
                        echo "ユーザIDまたは、パスワードが間違っています。もう一度入力し直してください。";
                    }
                ?>
              </span>
            </p>
            <button type="submit" class="btn btn-primary btn-lg btn-block">ログイン</button>
        </form>
        <div><a href="#"> アカウントを忘れた場合 </a></div>
        <div>
            <span> または </span>
        </div>
        <button type="submit" class="btn btn-success btn-sm">新しいアカウントを作成</button>
     </div>
    </div>
    </div>
  </main>
  <footer class="text-center">
    <span> Copyright © 2019 dreamcareer All Rights Reserved. </span>
  </footer>

  
</body>
</html>

