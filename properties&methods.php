<?php 
// Define a class
class User {
  // Properties (attributes)
  public $name;
  // Methods (functions)
  public function sayHello() {
    echo "{$this->name} says Hello";
  }
}

// Instantiate a user object from the user class

$user1 = new User();

$user1->name = 'Steve';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();
echo '<br>';

// create new user
$user2 = new User();
$user2->name = 'Brad';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();