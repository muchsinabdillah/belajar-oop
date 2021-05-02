<?php
class Student
{
    public $id;
    public $name;
    public $value;
    public $sample;

    public function setSample($sample){
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString()
    {
        return "Student  id:This->id, name $this->name, value : $this->value";
    } 
    public function __invoke(...$arguments)
    {   
        $join = join (",",$arguments);
        echo "Invoke Student with arguments $join". PHP_EOL;
    }
}