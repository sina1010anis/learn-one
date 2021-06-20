<?php


namespace App\Request;


use App\Buy\InterfaceTypeClass;
use Illuminate\Http\Request;

class TestRequest implements InterfaceRequest
{

    public function validate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        return $this;
    }

    public function save(Request $request)
    {
        $arr = ['name' => $request->name , 'email' => $request->email];
        return $arr;
    }
}
