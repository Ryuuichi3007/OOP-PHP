<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>
<body>
  <?php
  
  class Animal{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
  
    // Methods
    function set_name($name){
      $this->name = $name;
    }
    function get_name(){
      return $this->name;
    }
    function set_color($color){
      $this->color = $color;
    }
    function get_color(){
      return $this->color;
    }
    function set_color($cold_blooded){
      $this->blood = $cold_blooded;
    }
    function get_color(){
      return $this->blood;
    }
  }
  
  $sheep = new Fruit();
  $sheep->set_name('Shaun');
  $sheep->set_color('2');
  $sheep->set_blood('No');
  echo "Name: " . $sheep->get_name();
  echo "<br>";
  echo "Color: " . $sheep->get_color();
  echo "<br>";
  echo "Cold_Blooded: " . $sheep->get_name();
  echo "<br>";

  ?>
</body>
</html>