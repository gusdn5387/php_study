<?php
class Person{
  private $name;
  public function sayHi(){
    print("Hi, I'm {$this->name}.");
  }
  public function setName($_name){
    $this->ifEmptyDie($_name);
    $this->name = $_name;
  }
  public function getName(){
    return $this->name;
  }
  private function ifEmptyDie($value){
    if(empty($value)){
      die('I need name');
    }
  }
}
$member = new Person();
$member->setName('member');
$member->sayHi();
print($member->getName());
?>