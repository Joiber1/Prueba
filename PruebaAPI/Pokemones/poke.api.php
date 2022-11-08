<?php
$pokemon = '12';

$api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($api);
curl_close($api);

$json = json_decode($response,TRUE);

echo "Nombre de pokemon:".$json['name'];
echo "<br>";
echo "vida del pokemon:".$json['height'];
echo "<br>";


$json = json_decode($response,);


echo 'Habilidades:';
foreach($json->abilities as $k => $v) { 
    echo "<br>";
    echo $v->ability->name.'<br>';
}

echo 'Tipo:';
echo $json->types[0]->type->name;

echo '<h2>Fotos</h2>';
echo '<img src="'.$json->sprites->back_default.'" width="200">';
echo '<img src="'.$json->sprites->front_default.'" width="200">';
?>
