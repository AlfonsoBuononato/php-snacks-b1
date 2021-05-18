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

   <!--  <?php 
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
    </ul> -->





<!--     PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<!--     <?php 
    $nome = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if( strlen($nome) > 3 && strpos($email, "@") && strpos($email, ".") && is_nan($age) === false ){
        echo "accesso riuscito";
    }else{
        echo "accesso negato";
    }
    ?> -->

<!--     PHP Snack 3 Bonus (solo come bonus e solo se completati i due precedenti)
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

    <?php 
    $numeri = [];

    
    while(count($numeri) <= 15){
        $random_number = rand(1, 16);
        if(!in_array($random_number, $numeri)) {
            $numeri[] = $random_number;
        };
    }

    var_dump($numeri);
    ?>

    <?php for($i = 0; $i < count($numeri); $i++){ ?>
        <span><?php echo $numeri[$i] ?></span>
    <?php } ?>
</body>
</html>