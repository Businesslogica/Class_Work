<?php
/**
 *
 * @link
 */


class Appartments {

  public $height;
  public $name;
  public $color;

  function __construct () {
    echo "<p>Create Appartments.</p>";
  }

  public function __clone () {
    echo "<p>Clone Appartments.</p>";
  }


  function setName ($name) {
    $this->name = $name;//$this->name=$name
  }
  function getName (){ // Metod predka
    return $this->name;
  }


}

/**
 *
 */
class Wall extends Appartments
{

  function __construct () {
    echo "<p>Create Wall.</p>";
    parent::__construct();
  }

  function getName (){ // Metod naslednika
    return '<p>Novi metod - peregrujeni ' . $this->name .   ' </p>';
//    return ' FIO ' . parent::getName(); // Vizval Metod Predka
  }



}

class Corner extends Appartments
{
  function __construct () {
    echo "<p>Create Corner.</p>";
  }
}



// Fabrika
$globalRoom;
function createApp (){
  GLOBAL $globalRoom;
  if ($globalRoom < 2){
    $globalRoom++;
    return new Wall();
  } else {
    return new Corner ();
  }
}


for ($i = 0; $i < 8; $i++){
  $nextWall [$i] = createApp ();
}

$obj = $nextWall [0];
$obj->setName ('TheKing');
echo $obj->getName ();

$obj = $nextWall [3];
$obj->setName ('TheQeen');
echo $obj->getName ();
