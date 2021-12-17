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
        $posts = [

            '17/12/2020' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 2'
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
                [
                    'title' => 'Post 5',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Giorgio Mazzon',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
        $keys = array_keys($posts); 
?>

<?php 
  for($i = 0; $i < 6; $i++){
      echo "
      <div>
            <h3>Data:$keys</h3>
            <ul>
                <li>Title:</li>
                <li>Autor's name:</li>
                <li>Post Text:</li>
            </ul>
      </div>
      ";
  };
?>






<h1>Snack 4</h1>
<?php 
  $array = [];
  for($i = 0; $i <= 15; $i++){
      $myNewInt = rand(1, 100);
      $array[] = "$myNawInt";
      echo $array;
  };

?>
</body>
</html>