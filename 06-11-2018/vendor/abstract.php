<?php
/**
 *
 * @link
 */

/**
 *
 */
abstract class PinkFloyd
{
  public $l;
  public $name;
  public $color;
  static $side = 4;
  static $count = 0;

  function setName ($name) {
    $this->name = $name;
  }
  function getName (){
    return $this->name;
  }

  abstract function content();

  function wow(){
    echo 'wow';
  }

}


 final class Wall extends PinkFloyd {

   function __construct () {
     echo "<p>Try Create Wall.</p>";
   }

   public function __destruct (){
     echo '<p> рухнула стена</p>';
   }

   function content(){
     echo '<p> Расцветка радует</p>';
   }
   function wow(){
     parent::wow();
   }

 } // End Class

 echo Wall::$side; // :: - правильное обращение
 // echo Wall->$side; // ошибка

// $obg = new PinkFloyd();
// echo $obg::$side;



/*

class NeoWall extends Wall
{
}
 */
