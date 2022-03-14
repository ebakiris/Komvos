<?php
namespace App\Providers;
use App\EachUniDeps; // write model name here 
use Illuminate\Support\ServiceProvider;

class DropDownListDeps extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('arrayname', EachUniDeps::all());
        });
    }
 
}
