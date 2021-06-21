<?php


namespace App\QueryFilter;


class Sort extends FilterClass
{
    public function applyFilter($builder)
    {
        return $builder->orderBy('name' , request($this->className()));
    }
}
