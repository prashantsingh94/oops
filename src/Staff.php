<?php
namespace CODEBASE;
use CODEBASE\Users\Person;
class Staff {

    protected $members = [];
    
    public function __construct($members = []){
    $this->members = $members;
    }
    
    
    public function add(Person $person){
       $this->members[] = $person;
    }
    
    public function members(){
        return $this->members;
    }
    
    }