<?php
echo "1) Use array com construtor <br><br>";
class food_truck 
{
    public $food_truck = array();

    public function __construct($comida){

        $this->food_truck = $comida;
    }
}

$comida = array('1'=>'Nachos <br><br>', '2'=>'Burritos <br><br>', '3'=>'Batata Frita <br><br>', '4'=>'Tapioca<br><br>'
        );

$Food = new food_truck ($comida);


foreach($Food->food_truck as $key => $val){
    echo $key." : ". $val;
}
?>
<br><br>
<?php
echo "2) Use matriz com construtor <br><br>";

$food_truck = array(array(0 => "Bebidas",

1 => "Nachos",

2 => "Burritos",

3 => "Batata Frita",

4 => "Tapioca"));

echo " CardΓ‘pio do food_truck <br></br>";
"<br><br>";
echo $food_truck[0][0]."<br>";
echo $food_truck[0][1]."<br>";
echo $food_truck[0][0]."<br>";
echo $food_truck[0][2]."<br>";



?>
<br>
<?php

echo "3)Use array com implΓ­cito<br><br>";
$Produto[4]= "1";
$Produto[3]= "2";
$Produto[2]= "3";
$Produto[1]= "4";

foreach ($Produto as $soma) {
    $soma["3"] = $soma +- 1;
    echo "$soma";
}

?>


<?php
echo "<br> <br>4) Use matriz com implΓ­cito";
echo " <br> <br> ππππ π£πππππ π€ π’π¦π π€πππ¦πππ π π₯ππ£ππ ππππ£π ππ π‘π£π π©πππ π€πππππ πππ  ππ£πππ π€ πππ£ππ£  π‘π π£ πππ¦π€π ππ  πππ£ππππ  <br><br>";


$Dia = array(array("Segunda","TerΓ§a"), 
$Produtos = array("Fechados","Fechados"));

foreach ( $Dia as $Produtos ) {
    
    echo     $Produtos["0"]."/";
    echo     $Produtos["1"]."<br>";
    
}
?>
