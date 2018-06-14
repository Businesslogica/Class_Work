<?php
/**
 *
 * @link
 */


abstract class Administrator {
  abstract function JI ();// job instruction
  function OI (){
    echo ' / OI - official instruction / ';
  }
}

/**
 *
 */
class Worker extends Administrator
{
  function JI (){
    echo '<p>JI - Smile.</p> ';
    echo "<p>JI -be Kind.</p>";
  }
}

/**
 *
 */
class Portie extends Administrator
{
  function JI (){//
    echo '<p>JI - helpful.</p> ';
    echo "<p>bring suitcases.</p>";
    echo "<p>get tips.</p>";
  }
}


/**
 *
 */
class BOSS extends Administrator
{
  function JI (){
    echo '<p>JI - Personnel Management.</p> ';
  }
  function OI (){
    echo ' <p> OI - Be gracious.</p> ';
  }

}


$Sabrina = new Worker ();
$Sabrina->JI();
$Sabrina->OI();

echo '<hr />';

$Hulio = new Portie ();
$Hulio->JI();
$Hulio->OI();


echo '<hr />';

$b = new BOSS ();
$b->JI();
$b->OI();
