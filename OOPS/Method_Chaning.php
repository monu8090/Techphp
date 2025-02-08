<?php
class Test{
    var $name;
    var $age;
    var $salary;

    public function setName($name){
        $this->name = $name;
        return $this;
    }
    public function setAge($age){
        $this->age = $age;
        return $this;
    }

    public function setsalary($salary){
        $this->salary = $salary;
        return $this;
    }

    public function get(){
        return "My name is $this->name , age $this->age and salary $this->salary";
    }
}
$t = new Test;
echo $t->setName('Diby')
->setAge(20)
->setsalary(10000)
->get();
?>