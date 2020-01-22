<!DOCTYPE html>
<html>
<head>
  <title>PHP練習問題</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="practice_stylesheet.css">
</head>
<body>
  <h1>PHP練習問題</h1>
  <br>
  <!-- ここに好きな言葉をechoしてみましょう -->
  
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】おみくじ1
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】おみくじ1</div>
  <div class="box7"><p>
    <?php
    $omikuji = array ("大吉","中吉","小吉","末吉","吉","凶");
    $unsei = array_rand ($omikuji,1);
    echo  "今日の運勢は【".$omikuji[$unsei]."】";
     ?>
  </p></div>
  <br><br>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】おみくじ2
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】おみくじ2</div>
  <div class="box7"><p>
    <?php
    $unsei2 = array_rand ($omikuji,1);
    echo date("Y年n月j日") ."の運勢は【".$omikuji[$unsei2]."】";
  ?>
  </p></div>
  <br><br>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】数字を文字に変換
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】数字を文字に変換</div>

   <form action = "practice.php" method = "post">
     <input type = "text" name = "number" class = "text01" placeholder = "カンマ区切りで数字を入力して変換">
　   <input type = "submit" class = "btn-gradient-3d" value = "変換">
   </form>

  <br>
  <div class="result"><p>
    <!-- ここにPHPの処理を書いて変換結果を出力してみよう -->
    <?php
    $alphabets = range ('a','z');
    
  if (!empty ($_POST['number'])){
    $input_num = explode(',',$_POST['number']);
    foreach ($input_num as $num){
    
     if (is_null($alphabets[$num -1])){
      echo "★";
     }else{
      echo $alphabets[$num -1];
     }
    } 
  }
    ?>

  <br><br>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】文字数を数える 
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】文字数を数える</div>
    <!-- ここにHTMLでフォームを追加 -->

   <form action = "practice.php" method = "post">
     <input type = "text" name = "moji" class = "text01" placeholder = "文字を入力して文字数を数える">
     <input type = "submit" class = "btn-gradient-3d" value = "文字数は？">
   </form>

  <br>
  <div class="result"><p>
    <!-- ここにPHPの処理を書いて変換結果を出力してみよう -->
    <?php
   
    $string = str_replace ("　","",$_POST['moji']);
    $mojisu = mb_strlen ($string);
    echo "入力した文字：". $_POST['moji'] . "★文字数：". $mojisu;
    
    ?>
  </p></div>

</body>
</html>
