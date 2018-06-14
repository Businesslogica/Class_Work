<?php
/**
 *
 * @link
 */


 class Wall { //объявляем класс объекта
   public $height;// объявлем переменные объекта
   public $name;
   public $color;

   function __construct () {//Создаем стены Аппартаментов
     echo "<p>Create Wall.</p>";
   }

   public function __clone () {  // создаем функцию клонирования стен
     echo "<p>Clone Wall.</p>";
   }


   function setName ($name) { //даем имя стенам,и указываем на него
     $this->name = $name;
   }
   function getName (){//запрашиваем имя стен и возвращаем результат
     return $this->name;
   }
 } // End Class


  class Corner { // создаем еще один класс комнаты,углы.
    public $height;
    public $name;
    public $color;

    function __construct () {
      echo "<p>Create Corner.</p>";
    }

    public function __clone () {
      echo "<p>Clone Corner.</p>";
    }


    function setName ($name) {
      $this->name = $name;
    }
    function getName (){
      return $this->name;
    }
  } // End Class



 $MyWall = new Wall ();
 $Appartment = clone $MyWall;



// Fabrika стен
$globalRoom;
function createWall (){
  GLOBAL $globalRoom;
  if ($globalRoom < 8){
    $globalRoom++;
    return new Wall();
  } else {
    return new Corner ();
  }
}


for ($i = 0; $i < 8; $i++){
  $nextWall [$i] = createWall ();
}
