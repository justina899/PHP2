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
//-------------
echo "Strings-5 <br>";
$string = "An American in Paris";
echo preg_replace( "/a/i", "*", $string) . "<br>";
//-------------
echo "Strings-6 <br>";
$letters ="a";
echo "sakinyje (An American in Paris) a raidziu: " . preg_match_all('/a/i', $string) . "<br>"; 
//-------------
echo "Strings-7 <br>";
$string1 = "Breakfast at Tiffany's";
$string2 = "2001: A Space Odyssey";
$string3 = "It's a Wonderful Life”.";
echo $string . " -> " . preg_replace( '#[aeiouy\s]+#i', '', $string) . "<br>";
echo $string1 . " -> " . preg_replace( '#[aeiouy\s]+#i', '', $string1) . "<br>";
echo $string2 . " -> " . preg_replace( '#[aeiouy\s]+#i', '', $string2) . "<br>";
echo $string3 . " -> " . preg_replace( '#[aeiouy\s]+#i', '', $string3) . "<br>";
//-------------
echo "Strings-8 <br>";
$str =  'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
echo $str . " -> Epizodas: " . $int . "<br>";
//-------------
echo "Strings-9 <br>";
$str1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo $str1 . "<br>";
echo "words: " . str_word_count($str1) . "<br>";
$words1 = explode(" ", $str1);
$shortWordsCount = 0;
for($i = 0; $i < count($words1); $i++){
    if (strlen($words1[$i]) <= 5){
        $shortWordsCount++;
    }
}
echo "short words: " . $shortWordsCount . "<br>";

$str2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
echo $str2 . "<br>";
echo "words: " . str_word_count($str2) . "<br>";
$words2 = explode(" ", $str2);
$shortWordsCount1 = 0;
for($x = 0; $x < count($words2); $x++){
    if (strlen($words2[$x]) <= 5){
        $shortWordsCount1++;
    }
}
echo "short words: " . $shortWordsCount1 . "<br>";
//-------------
echo "Arrays-1 <br>";
$random_number_array = range(0, 29);
for ($i = 0; $i < count($random_number_array); $i++){
    $random_number_array[$i] = rand(5, 25);
    echo $random_number_array[$i] . " ";
}
echo "<br>";
//-------------
echo "Arrays-2 <br>";
echo "A) el su reiksme daugiau nei 10: ";
$kiekDaugiau10 = 0;
for ($i = 0; $i < count($random_number_array); $i++){
    if($random_number_array[$i] > 10){
        $kiekDaugiau10++; 
    }
}
echo $kiekDaugiau10 . "<br>";
echo "B) didziausia reiksme: ";
$didziausia = 0;
for ($i = 0; $i < count($random_number_array); $i++){
    if($random_number_array[$i] > $didziausia){
        $didziausia =  $random_number_array[$i];
    }
}
echo $didziausia . "<br>";
echo "C) visu reiksmiu suma: ";
$visuReiksmiuSuma = 0;
for ($i = 0; $i < count($random_number_array); $i++){
    $visuReiksmiuSuma +=  $random_number_array[$i];
}
echo $visuReiksmiuSuma . "<br>";
echo "D) naujas masyvas: ";
$new_array = range(0, 25);
for ($i = 0; $i < count($new_array); $i++){
    $new_array [$i] =  $random_number_array[$i] - $i ;
    echo $new_array [$i] . " ";
}
echo "<br>";
echo "E) papildyti masyva 10 el: <<<" . count($random_number_array);
//$result = array_pad($input, 5, 0)
for ($i = 30; $i < 41; $i++){
    $biggerArray = array_pad($random_number_array, $i, rand(5, 25));
}
for ($i = 0; $i < count($biggerArray); $i++){
    echo $biggerArray[$i] . " ";
}
echo "masyvo ilgis: " . count($biggerArray) . "<br>";
?>
</body>
</html>