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
    <h1> お問い合わせ </h1>
    <!-- この下にformタグを書いていきましょう -->
    <form action="send.php" method="post" style="margin: 20px;">
      <div class="form-group">
      <section>
        <label class="form-item">メールアドレスを入力</label>
        <!-- ここにテキストボックスを追加 -->
        <input type="email" class="form-control" name="name"/>
      </section>
      <!-- ここにセレクトボックスを追加 -->
      <section>
        <label class="form-item">お問い合わせ種類</label>
        <select class="form-control" name="fruits">
            <option value="未選択">未選択</option>
            <option value="りんご">サービスについて</option>
            <option value="みかん">ドリームキャリアについて</option>
            <option value="バナナ">その他</option>
        </select>
      </section>
      <section>
        <label class="form-item">お問い合わせ内容を入力</label>
        <!-- ここにテキストエリアを追加 -->
        <textarea class="form-control" name="body"></textarea>
      </section>
      <section>
          <div class="form-group">
              <label for="exampleFormControlFile1">画像をアップロード</label>
              <input type="file" name="upload" class="form-control-file" id="exampleFormControlFile1">
          </div>
      </section>
        <input type="submit" class="btn btn-primary" style="margin-top: 30px;" value="送信">
      </div>
    </form>
  </div>
  </main>
  <footer class="text-center">
    <span> Copyright © 2019 dreamcareer All Rights Reserved. </span>
  </footer>
</body>
</html>
