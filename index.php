<meta charset="utf-8">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

class Apple
{
  public $apple_tree = 10;
  public $fruit;


  public function push()
  {
    return array_fill(1, 10, 'apple_tree');
  }

  public function getSum()
  {

    return $this->apple_tree * rand(40, 50);
  }
}

class Pear
{
  public $pear_tree = 15;
  public $fruit;
  public function push()
  {
    return array_fill(1, 15, 'pear_tree');
  }
  public function getSum()
  {
    $rand = rand(0, 20);
    if ($rand == 0) {
      return $this->pear_tree = 0;
    } else {
      return $this->pear_tree * $rand;;
    }
  }
}

$apple = new Apple;
$apples = $apple->push();


print_r($apples);
print_r('<br>');
$pear = new Pear;
$pears = $pear->push();
print_r($pears);
print_r('<br>');
echo 'всего собрано яблок: ' . $apple->getSum() . '<br>';
echo 'всего собрано груш: ' . $pear->getSum() . '<br>';
echo 'всего собрано плодов: ' . $apple->getSum() + $pear->getSum();
