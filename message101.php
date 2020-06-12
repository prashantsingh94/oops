<?php

use CODEBASE\Users\Person;
use CODEBASE\Staff;
use CODEBASE\Business; 

$prashant = new Person("Prashant Singh");

$staff = new Staff([$prashant]);

$CodeClouds = new Business($staff);

$CodeClouds->hire(new Person('Rahul Kumar Singh'));
$CodeClouds->hire(new Person('Rejjak Ali'));
$CodeClouds->hire(new Person('Puja Singh'));

var_dump($CodeClouds->getStaffMembers());
