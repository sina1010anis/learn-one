<?php


namespace App\QueryFilter;


class Active extends FilterClass
{
    public function applyFilter($builder)
    {
        return $builder->where('active' ,request($this->className()));
    }
}
