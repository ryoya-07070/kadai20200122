<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
<body>
  <div class="main">
    <!-- 問１. このformタグに適切な属性を書きましょう -->
    <form action = "send.php" method = "POST">
      
      <section>
        <div class="form-item">名前を入力</div>
        <!-- 問2. ここにテキストボックスを追加しましょう -->
        <input type = "text" name = "name" >
      </section>
      <section>
        <div class="form-item">内容を入力</div>
        <!-- 問2. ここにテキストエリアを追加しましょう -->
        <textarea name = "body" cols = "50" lows = "5"></textarea>
      </section>
      <section>
        <div class="form-item">果物</div>
        <!-- 問2. ここにセレクトボックスを追加しましょう -->
        <select name = "fruits">
         <option value = "">未選択</option>
         <option value = "みかん">みかん</option>
         <option value = "りんご">りんご</option>
         <option value = "バナナ">バナナ</option>
        </select>

      </section>
      <section>
      <div class="form-item">画像を選択</div>
        <!-- 問3. ここにアップロードボタンを追加しましょう -->
        <input type = "file" name = "upload" value = "画像をアップロード">

      </section>
        <!-- 問1. ここに送信ボタンを追加しましょう-->
        <input type = "submit" value = "送信">
    </form>
  </div>
</body>
</html>
