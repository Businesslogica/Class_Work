<!DOCTYPE html>
<html
<body>

<?php

class Volume //создаем новый класс
{
    public $Transport = "";//добавим переменную класса public нашему классу Volume для хранения имени пользователя
    public $Marka = "RENO";
    public $Tyagach;
    public $NumberTS;
    public $Driver;
    public $Perevozchic;
    public function test() {
        echo 'br> test function';
        }
    public function vyborTS() {
        $invoice = $this->$Marka;
        return $invoice;
    }
}

$Volume  = new Volume();// а сейчас создаем объект с помощью new
$Volume2 = new Volume();//создадим еще один объект того же класса.Переменные не зависят друг от друга.
$Volume3 = new Volume();
$Volume4 = new Volume();
$Volume5 = new Volume();
$Volume6 = new Volume();
$Volume7 = new Volume();
$Volume8 = new Volume();
$Volume9 = new Volume();

$Volume->Transport= "37500";//скрипт,объявляет класс Transport и переменную класса, создаем объект этого класса, а затем задает значение переменной класса и выводим его на экран://
$Volume2->Transport= "24150";
$Volume3->Transport= "20060";
$Volume4->Transport= "18260";
$Volume5->Transport= "15260";
$Volume6->Transport= "10000";
$Volume7->Transport= "9200";
$Volume8->Transport= "8150";
$Volume9->Transport= "5750";


echo $Volume->Transport  ."<br>";
echo $Volume2->Transport ."<br>";
echo $Volume3->Transport ."<br>";
echo $Volume4->Transport ."<br>";
echo $Volume5->Transport ."<br>";
echo $Volume6->Transport ."<br>";
echo $Volume7->Transport ."<br>";
echo $Volume8->Transport ."<br>";
echo $Volume9->Transport ."<br>";

 echo $Volume ->vyborTS(AUTO);
  ?>

</body>
</html>
