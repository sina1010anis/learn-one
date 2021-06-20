<?php


namespace App\Buy;


interface InterfaceTypeClass
{
    public function send($price , $type);
    public function verify($price);
}
