<?php
abstract class Sound
{
  abstract  public function getNoice();
    public $name;
    public $sex;
    public $age;
}
class Dog extends Sound
{
    public function getNoice()
    {
       echo "Bou Bou"; // TODO: Implement getNoice() method.
    }
    public $name='Spaik';
    public $age=4;
}
class Frog extends Sound
{
    public function getNoice()
    {
    echo  "Kvak Kvak";   // TODO: Implement getNoice() method.
    }


}
class Cat extends Sound
{
    public function getNoice()
    {
        echo "Mac Maaac";// TODO: Implement getNoice() method.
    }
}
class Kitten extends Cat
{
    public $sex = 'female';

}
class Tomcat extends Cat
{
    public $sex = 'male';
}

$kotka=new Cat();
$kotka->name='Tomka';
$kotka->age='4';
$kotka->sex='female';

$kotarak=new Tomcat();
$kotarak->name='Hulk';
$kotarak->age='8';
$kotarak->sex='male';


$sbor=array();
$sbor[] = $kotka;
$sbor[] = $kotarak;

$srednaVyzrast =0;
$count = 0;
foreach ($sbor as $elem){
   $srednaVyzrast += $elem->age;
   $count++;
}
echo $srednaVyzrast/$count;
?>



