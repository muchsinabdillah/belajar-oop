<?php

namespace Data;
require_once __DIR__ . "Animal.php";

interface AnimalShelter
{
    function adopt($name): Animal;
}
 