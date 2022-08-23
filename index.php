<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1> Snack-1</h1>
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

   <h1>Snack-2</h1>
   <h4>
    <?php 
      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];

      if(strlen($name) > 3 && strpos($mail, '@') > 0 && strpos($mail, '.') > 3 && is_numeric($age)){
        echo 'Accesso riuscito';
      } else {
        echo 'Accesso negato';
      }
    ?>
   </h4>

   <h1>Snack-3</h1>
   <h4>
      <?php
        $numbers = [];
        for($counter = 0; $counter < 15; $counter++){
          $number = rand(1,100);
          if(!in_array($number, $numbers)){
            $numbers[] = $number;
          }
        }
        var_dump($numbers);
      ?>
   </h4>

   <h1>Snack-4</h1>
   <h4>
      <?php
         $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores omnis nostrum totam excepturi ab iste maxime harum beatae eos. a aliquam, consectetur eaque nesciunt quos iusto enim itaque cum!
         Omnis non tempore esse repudiandae eos, excepturi quia doloribus animi quasi eius itaque dolorum officiis laboriosam optio hic. Reiciendis, quasi quas non ea sequi doloremque. esse aut temporibus repellat dicta.';

         $newparagraph = explode('.', $paragraph);

         for($c = 0; $c < count($newparagraph); $c++){
          var_dump($newparagraph[$c]);
         }
      ?>
   </h4>
  
   <h1>Snack-7</h1>
   <h4>
    <?php 
      $pupils = [
        [
          'name' => 'Christian',
          'surname' => 'DeSica',
          'vote' => [
            'Storia' => 7,
            'Latino' => 5,
            'Italiano' => 6,
            'Matematica' => 4,
          ]
        ],

        [
          'name' => 'Massimo',
          'surname' => 'Boldi',
          'vote' => [
            'Storia' => 4,
            'Latino' => 5,
            'Italiano' => 7,
            'Matematica' => 6.5,
          ]
        ],

        [
          'name' => 'Vins',
          'surname' => 'DeLongo',
          'vote' => [
            'Storia' => 8,
            'Latino' => 4,
            'Italiano' => 6.5,
            'Matematica' => 4.5,
          ]
        ],

        [
          'name' => 'Raoul',
          'surname' => 'Costantini',
          'vote' => [
            'Storia' => 4.5,
            'Latino' => 5.5,
            'Italiano' => 6,
            'Matematica' => 5.5,
          ]
        ],

        [
          'name' => 'Massimo',
          'surname' => 'Ghini',
          'vote' => [
            'Storia' => 7,
            'Latino' => 7.5,
            'Italiano' => 6.5,
            'Matematica' => 8,
          ]
        ],
      ];

      $sum = 0;
      $media = 0;
    ?>
   </h4>
   <ul>
      <?php
        for($index = 0; $index < count($pupils); $index++){
      ?>
      <li>
          <?php 
            echo $pupils[$index]['name'] . ' ' . $pupils[$index]['surname'];
            $sum = array_sum($pupils[$index]['vote']);
            $media = $sum / count($pupils[$index]['vote']);
            $format_media = number_format($media, 2);
            echo ', media voti:' . ' ' . $format_media;
          }
          ?>
      </li>
   </ul>
</body>

</html>