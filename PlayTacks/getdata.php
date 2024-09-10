<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    $ch = curl_init();

    $url = "https://pokeapi.co/api/v2/pokemon/mew";

    curl_setopt($ch,CURLOPT_URL,$url);

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

    $response = curl_exec($ch);

    if (curl_errno($ch)){
        $error = curl_error($ch);
        echo"error al conectarse ala api";
    }
    else {
        curl_close($ch);

        $pokemon_data = json_decode($response,true);

        echo "<h1>".$pokemon_data['name']."</h1>";

        echo '<li><strong> habilidades: </strong>';

        echo '<ul>';
        foreach($pokemon_data['abilities'] as $ability){
           echo '<li>'. $ability['ability']['name']. '</li>';    
        }
        echo '</ul>';
        echo '</li>';
    }

    ?>


    
</body>
</html>