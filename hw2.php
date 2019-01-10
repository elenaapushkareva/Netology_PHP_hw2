<?php  
$animals = array(
    "Africa" => array("Giraffa camelopardalis", "Loxodonta"),
    "Antarctica" => array("Mesonychoteuthis hamiltoni"),
    "Australia" => array("Macropus","Threskiornis spinicollis"),
    "Eurasia" => array("Pteromys volans", "Bison bonasus", "Apodemus agrarius"),
    "North America" => array("Martes americana", "Bison bison"),
    "South America" => array("Eunectes murinus")
);
/*function mySearch($arr){
    foreach($arr as $key => $val){
        foreach($val as $v){
            if(preg_match("/\s+/", $v)){
                echo $key." ".$v."\n";
                
            }
        }
    }
}



print_r($animals);
mySearch($animals); */

$an2 = array();

foreach($animals as $key => $val){
        foreach($val as $v){
            if(preg_match("/\s+/", $v)){
                /*echo $key." ".$v."\n";*/
                $an2[] = $v;
            }
        }
    }

print_r($an2);

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Текущее значение переменной \$a: $v.\n";
}

$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($animals as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

$continents = [
    'Africa' => [
        'African elephant',
        'Hippo',
        'Giraffe',
        'Crocodile',
        'Spotted hyena',
        'Zebra',
        'Chimpanzee',
        'Python',
        'Scorpio',
        'Canna',
    ],
    'Eurasia' => [
        'Tapir',
        'Snow leopard',
        'Varan',
        'Big panda',
        'Capercaillie',
        'Pheasant',
        'Mantis',
        'Brown bear',
        'Sable',
        'Wolf'
    ]
];
 
$name_two_words = [];
foreach($continents as $continent => $animals){
    foreach($animals as $animal){
        $all_animals= [];
        $anim = explode(' ', $animal);
        $all_animals[]=$anim;
     
        foreach($all_animals as $k){
            if(count($k) === 2){
                $comma_separated = implode(",", $k);
                $str = str_replace(',', ' ', $comma_separated);
                $name_two_words[]=$str;
            }
        }
    }
}
 
echo '<pre>';
var_dump($name_two_words);
echo '<pre>';
 
foreach($name_two_words as $name){
    $parts = explode(' ', $name);
    $first[] = $parts[0];
    $second[] = $parts[1];
}
/*
echo '<pre>';
var_dump($first);
var_dump($second);
echo '<pre>';
*/
$random_first_word = [];
 
while (count($random_first_word) < count($name_two_words)){
   $proverka = $first[rand(0, count($name_two_words)-1)];
    if (!in_array($proverka, $random_first_word)) {
        array_push($random_first_word, $proverka);
    }
}
 
//var_dump($random_first_word);
 
$random_second_word = [];
 
while (count($random_second_word) < count($name_two_words)){
    $proverka = $second[rand(0, count($name_two_words)-1)];
    if (!in_array($proverka, $random_second_word)) {
        array_push($random_second_word, $proverka);
    }
}
 
//var_dump($random_second_word );
 
$final_result = [];
 
for($i = 0; $i < count($name_two_words); $i++){
    $final_result[]= $random_first_word[$i] . ' ' . $random_second_word[$i];  
}
 
var_dump($final_result);
?>