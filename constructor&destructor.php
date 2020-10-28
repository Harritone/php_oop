<?php
class User {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function sayHello() {
    return $this->name . ' Says Hello';
  }
  // Called when no other references to a certain object
  // Used for cleanup, closing connections, etc
  public function __destruct() {
    echo 'destructor ran...';
  }
}

$user1 = new User('Brad', '30');
echo $user1->name;
