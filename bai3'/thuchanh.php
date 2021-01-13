<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // $car = array("volvo", "BMW", "toyota");
    
    // echo $car[0]."<br>";
    // echo $car[1]."<br>";
    // echo $car[2]."<br>";
    // echo count($car);
    // echo "I like ".$car[0].",".$car[1]." and ".$car[2].".";
    $bike = ["hoc", "sinh", "ngoan", "hiền", "lành", 4 , 5, 9.9 ];
    // echo "<pre>";
    // print_r($car);
    // var_dump($bike);
    // echo "</pre>";
    $arrlength = count($bike);
    for($i=0; $i<$arrlength; $i++){
        echo $bike[$i];
        echo "<br>";

    };
    $age = ["Peter"=>"35", "37", "Joe"=>"43"];
     echo "<pre>";
    print_r($age);
    var_dump($age);
    echo "</pre>";
    foreach($age as  $x => $x_value){
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    
    
    ?>
</body>
</html>