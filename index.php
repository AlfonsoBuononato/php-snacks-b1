<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!--  PHP Snack 1:
    Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60 -->

    <?php 
    $matches = [
        [
            "squadre_casa" => "napoli",
            "punti_1" => 60, 
            "squadre_fuoricasa" => "caserta", 
            "punti_2" => 50
        ],
        [
            "squadre_casa" => "avellino",
            "punti_1" => 49, 
            "squadre_fuoricasa" => "benevento", 
            "punti_2" => 62
        ],
        [
            "squadre_casa" => "casoria",
            "punti_1" => 72, 
            "squadre_fuoricasa" => "afragola", 
            "punti_2" => 83
        ]
    ];
    ?>

    <ul>
        <?php for($i = 0; $i < count($matches); $i++){ ?>
            <li><?php echo $matches[$i]["squadre_casa"] . " - " . $matches[$i]["squadre_fuoricasa"] . " | " . $matches[$i]["punti_1"] . " - " . $matches[$i]["punti_2"] ?></li>
        <?php } ?>
    </ul>
</body>
</html>