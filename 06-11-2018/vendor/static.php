<?php
/**
 *
 * @link
 */


 class Wall {
   public $height;
   public $name;
   public $color;
   static $Wall = 4;
   static $count = 0;


   function __construct () {
     echo "<p>Try Create Wall.</p>";
     if (self::$count == 0) {
       self::$count = 1;
       echo '<p>Create ';
       self::$Wall = rand(0,10000);
       echo self::$Wall . '</p>';
       return true;
     } else {
       echo '<p>NoCraete </p>';
       return false;
     }
   }

   public function __clone () {
     echo "<p>Clone Wall.</p>";
   }

   public function __destruct (){
     echo '<p> рухнула стена</p>';
   }


   function setName ($name) {
     $this->name = $name;
   }
   function getName (){
     return $this->name;
   }
 } // End Class

 echo Wall::$Wall; // :: - правильное обращение
 // echo Wall->$Wall; // ошибка

 $obg = new Wall();
 echo $obg::$Wall;
 $obj = new Wall();
 echo $obj::$Wall;
 $obf = new Wall();
 echo $obf::$Wall;
