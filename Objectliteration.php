<?php

class Data implements IteratorAggregate
{
    var  $first = "First";
    public  $second = "Second";
    private  $third = "Third";
    protected  $forth = "Forth";
    /** */
    //public function getIterator()
    //{
    //    $array = [
    //        "first" => $this->first,
    //        "second" => $this->second,
    //        "third" => $this->third,
    //        "forth" => $this->forth
    //    ];
    //    return  new ArrayIterator($array);
    //}
    // menggunakana Genrator yield
    public function getIterator(){
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;
    }

}

$data = new Data();

foreach($data as $property => $value){
    echo "$property : $value". PHP_EOL;
}