<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1> Snack-1
    <h4>
      <?php
          $arraybaskets = [
        [
          'team1' => 'Real jango',
          'team2' => 'Virtus potenza',
          'result1' => 22,
          'result2' => 33,
        ],

        [
          'team1' => 'Real ciccio',
          'team2' => 'Virtus forza',
          'result1' => 11,
          'result2' => 44
        ],

        [
          'team1' => 'Real mino',
          'team2' => 'Virtus yes',
          'result1' => 66,
          'result2' => 55
        ],

        [
          'team1' => 'Back street boys',
          'team2' => 'Virtus essenza',
          'result1' => 25,
          'result2' => 21,
        ],

        [
          'team1' => 'One play',
          'team2' => 'Real win',
          'result1' => 13,
          'result2' => 10
        ],

        [
          'team1' => 'Real mais',
          'team2' => 'Virtus goes',
          'result1' => 63,
          'result2' => 45
        ],
      ];
      
    ?>
    </h4>

    <ul>
      <?php
        for($i = 0; $i < count($arraybaskets); $i++){
      ?>
      <li>
          <?php 
            echo $arraybaskets[$i]['team1'] . ' ' . $arraybaskets[$i]['result1'] . ' vs ' . $arraybaskets[$i]['team2'] . ' ' . $arraybaskets[$i]['result2'] . ' | '  ;
          }
          ?>
      </li>

        
  
    </ul>
  </h1>
</body>

</html>