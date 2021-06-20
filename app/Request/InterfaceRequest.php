<?php


namespace App\Request;


use Illuminate\Http\Request;

interface InterfaceRequest
{
    public function validate(Request $request);
    public function save(Request $request);
}
