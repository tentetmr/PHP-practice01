<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/campphp/style.css">
  <title>Document</title>
</head>
<body>
  <div class="omikuji">
    おみくじを引く =>（F5）
  </div>
</body>
</html>

<?php
  // echo "PHPの勉強をしています<br>";
  // echo (5+7)."<br>";
  // echo "5+7<br>";

  // $apple = "りんご";
  // $num = 10 + 10;

  // echo $apple."<br>";
  // echo $num."<br>";

  // $a = 1;
  // $b =2;

  // if($a == 1){
  //   echo "1が表示されました".$a."<br>";
  // }
  // if($b == 2){
  //   echo "2が表示されました".$b."<br>";
  // }

  // echo mt_rand(1,6)."<br>";
  
  

  $omikujiNum = mt_rand(1,4);
  if($omikujiNum ==1){
    echo '<img src="/campphp/img/daikichi.png" alt="">';
  } else if($omikujiNum == 2){
    echo '<img src="/campphp/img/kichi.png" alt="">';
  } else if($omikujiNum == 3){
    echo '<img src="/campphp/img/kyou.png" alt="">';
  } else {
    echo '<img src="/campphp/img/daikyou.png" alt="">';
  }

?>

