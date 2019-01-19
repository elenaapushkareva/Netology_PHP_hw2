<?php  
// Объявляем исходный массив с животными
$a = array(
    "Europe" => array("Emys orbicularis", "Capreólus capreólus", "Sardina pilchardus"),
    "Africa" => array("Tropicranus albocristatus", "Canis anthus", "Galerella"),
    "Australia" => array("Natator depressus", "Tadorna tadornoides", "Tyto novaehollandiae"),
    "North America" => array("Sylvilagus", "Vulpes macrotis"),
    "Asia" => array("Ocyceros", "Acinonyx jubatus venaticus", "Tamias sibiricus")
);
//Объявляем массив с названиями, состоящими из двух слов
$b = array();
//Наполняем его элементами
foreach($a as $k => $v) {
    $continent = $k; 
    foreach($v as $animal) {
        $c = substr_count($animal, ' ');
        if ($c == 1) {
            array_push($b, $animal);
        }
    }
}


$str = implode(" ", $b);

$abc = explode(" ", $str);
//print_r($abc);

//Объявляем массивы для разделения названия на первое и второе слово
$ab1 = array();
$ab2 = array();

foreach($abc as $k1 => $v1) {
        if (($k1 % 2) == 0) {
            array_push($ab1, $v1); //Для записи первого слова
        }else{
            array_push($ab2, $v1); //Для записи второго слова
    
    }
}
//print_r($ab1);
//print_r($ab2);

//Перемешиваем названия в массивах
shuffle($ab1);
shuffle($ab2);
//print_r($ab1);

?>
<!DOCTYPE> 
<html lang="ru">
    <head>
        <title>
            Жестокое обращение с животными
        </title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>
            Животные и материки
        </h1>
        <h2>
            1. Исходный массив 
        </h2>
        <p>
            <?php print_r($a); 
            ?></p>
        <h2>
            2. Названия животных из двух слов 
        </h2>
        <p>
         <?php foreach ($b as $key => $value) {
            echo "$value <br />";
         } ?></p>
         <h2>3. Фантазийные названия животных</h2>
         <p><?php 
         foreach($ab1 as $k2 => $v2) {
      echo $v2.' '.$ab2[$k2]."<br/ >"; }
      ?>
         </p>


    </body>
</html>