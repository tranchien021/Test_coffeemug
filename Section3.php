<?php
class Person
{
    public $name = 'Chien';
    public $age = 23;

    public function introduce()
    {
        echo "Hi, my name is [ " . $this->name . " ] and i am [ " . $this->age . " ] year old" ."</br>";
    }
}

class Student extends Person {
    public $major; 

    public function introduce(){
        Parent::introduce();
        echo 'Override instroduce';
    }



}
$Chien = new Person();
echo $Chien->introduce();

echo "<hr>";
$students = new Student();
echo $students->introduce();
?>