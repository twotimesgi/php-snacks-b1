
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
# Snack 1
$matchs = array (
  array("Olimpia Milano",55,"Cantù",60),
  array("Booleaners",100,"Self-taught",60),
  array("Googlers",55,"Amazonians",60),
  array("Metamates",55,"Microsofties",60),
);

foreach ($matchs as $match) {
    echo $match[0] . " - " . $match[2] . " | " . $match[1]."-".$match[3] . "</br>";
};

# Snack 2
if(isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])){
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    if(strlen($name) > 3 && intval($age) && filter_var($mail, FILTER_VALIDATE_EMAIL) ){
        $msg = "Accesso riuscito";
    }else{
        $msg = "Accesso negato";
    }
}else{
    $msg = "Missing parameters";
}
echo $msg;

#Snack 4
    function getArray($n, $min = 0, $max = 10){
        $array = [];
        while(count($array) < $n){
            $rand_n = rand($min,$max);
            if(!in_array($rand_n, $array)){
                array_push($array, $rand_n);
            }
        }
        return $array;
    }
    $arr = getArray(10);
    echo "<ul>";
    foreach ($arr as $number) {
        echo "<li>".$number."</li>";
    };
    echo "</ul>";

#Snack 5
    $text = "Praesent blandit commodo magna eget lobortis. Maecenas rutrum odio quam, vitae vulputate lorem tristique sed. Vivamus lobortis, risus commodo tincidunt venenatis, mauris diam feugiat est, id euismod tellus tortor a leo. Sed lobortis magna a iaculis congue. Sed in enim porta, aliquet felis non, consequat mi. Morbi sit amet justo vulputate, efficitur erat quis, volutpat velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In congue venenatis quam eu accumsan. Praesent eu imperdiet nibh. Phasellus sed diam rhoncus, scelerisque arcu sit amet, bibendum magna. Nam dignissim fringilla erat eget pellentesque. Pellentesque dapibus erat et ipsum faucibus posuere. Donec pellentesque enim sit amet lectus malesuada dapibus. Maecenas feugiat mi et imperdiet egestas. Morbi dapibus, nulla ut consectetur fermentum, metus lorem dictum enim, vitae gravida metus velit nec lectus. Sed accumsan leo nulla.";
    $paragraphs = explode(".", $text);
    foreach ($paragraphs as $p) {
        echo "<p>".$p."</p>";
    };
?>
</body>
</html>