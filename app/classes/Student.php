<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;

class Student extends Teacher implements ExampleOne, \App\classes\ExampleTwo
{
    use Category;

    protected $country  = 'Bangladesh';
    public static $area = 'Dhaka';

    public function __construct()
    {
//        $this->name = 'Riaj';
//        $this->city = 'Saver';
    }

    public function manage()
    {
        echo self::$area;

//        echo "Institute name is $this->name and city is $this->city and country is $this->country";
    }

    public function one()
    {
        echo 'Hello one';
    }

    public function two()
    {
        echo 'Hello two';
    }

    public function three()
    {
        echo 'Hello three';
    }

    public function ten()
    {
        echo 'Hello ten';
    }

    public function ten1()
    {
        echo 'Hello ten1';
    }

    public function test()
    {
        echo 'Hello test';
    }
    public static function demo()
    {
        echo 'Hello demo';
    }
}