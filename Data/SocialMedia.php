<?php

class SocialMedia{
    public $name;
}
class Facebook extends SocialMedia{
    public function login($username, $password){
        return true;
    }
}
class FakeFacebook extends Facebook{
    public function login($username, $password){
        return true;
    }
}