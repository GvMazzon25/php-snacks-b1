<?php
        $posts = [

            '17/12/2020' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 1'
                ],
            ],
            '20/12/2020' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 3'
                ]
            ],
            '31/12/2020' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 4'
                ],
            ],
        ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    <h1>Snack 3</h1>
    

<?php 
  $arr_key = array_keys($posts);
  var_dump($array_keys);

  for($i = 0; $i < count(); $i++){ ?>
     <h2><?php echo $arr_keys[$i];?></h2>

     <?php 
        $date_posts = $posts[$array_keys[$i]];

        for($j = 0; $j < count($date_posts); $j++){?>
           <ul>
               <li>Title: <?php echo $date_posts[$j]['title'];?></li>
               <li>Author: <?php echo $date_posts[$j]['author'];?></li>
               <li>Text: <?php echo $date_posts[$j]['text'];?></li>
           </ul>

        }      
  };
?>
<h1>Snack 4</h1>
<?php 
  $anumbers = [];
  while (count($numbers)<15){
      $random = rand(1, 50);
      if (!in_array($random, $numbers)){
          $numbers[] = $random
      }
  }

   var_dump($numbers)
?>

<h1>Snack 5</h1>

    <?php 
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt itaque sequi quo sint dicta maxime quaerat, corrupti vitae, saepe mollitia reprehenderit. 
             Soluta consequatur itaque iste voluptatum hic, harum magnam nemo?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit porro eos,
             excepturi aperiam repellat animi commodi sunt alias asperiores vel rem minus dolore fugit quam rerum, earum numquam aut. '
    ?>
    <?php 
      $paragraphs = explode('.', $text);
      var_dump($paragraphs);

      for ($i = 0, $i < count($paragraphs), $i++){?>
        <p><?php echo $paragraphs[$i];?></p>
      }
</body>
</html>