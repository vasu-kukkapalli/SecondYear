<?php
class Person
{
var $name;
function set_name($data)
{
$this->name=$data;
}
function get_name()
{
return $this->name;
}
}
$ralph=new Person;
$ralph->set_name("srikanth");
echo "<b>the name of your friend is:</b>",$ralph->get_name(),"<br>";
echo "<b>the name of your friend is:</b>",$ralph->name,"<br>";
?>