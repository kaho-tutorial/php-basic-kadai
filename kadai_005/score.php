<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

<body>
  <p>
      <?php
      $score_number1 = '80';
      $score_number2 = '60';
      $score_number3 = '55';
      $score_number4 = '40';
      $score_number5 = '100';
      $score_number6 = '25';
      $score_number7 = '80';
      $score_number8 = '95';
      $score_number9 = '30';
      $score_number10 = '60';
      $total_score = $score_number1 + $score_number2 + $score_number3 + $score_number4 + $score_number5 + $score_number6 + $score_number7 + $score_number8 + $score_number9 + $score_number10;
      echo $total_score / 10;
      ?>
  </p>