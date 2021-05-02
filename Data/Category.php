<?php
class Category
{
    private  $name;
    private  $expensive;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        if(Trim($name) != ""){
            $this->name = $name; 
            return $this;
        } 
    }

    /**
     * Get the value of expensive
     */ 
    public function getExpensive()
    {
        return $this->expensive;
    }

    /**
     * Set the value of expensive
     *
     * @return  self
     */ 
    public function setExpensive($expensive)
    {
        $this->expensive = $expensive;

        return $this;
    }
}