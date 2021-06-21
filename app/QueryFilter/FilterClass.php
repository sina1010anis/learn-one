<?php


namespace App\QueryFilter;


use Illuminate\Support\Str;

abstract class FilterClass
{
    public function handle($request , \Closure $next)
    {
        if (! \request()->has($this->className())){
            return $next($request);
        }
        $builder = $next($request);
        return $this->applyFilter($builder);
    }
    public abstract function applyFilter($builder);
    public function className()
    {
        return Str::snake(class_basename($this));
    }
}
