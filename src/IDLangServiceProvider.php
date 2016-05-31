<?php namespace Silalahi\Laravel;

use Illuminate\Support\ServiceProvider;


class IDLangServiceProvider extends ServiceProvider
{

  public function boot()
  {
    $this->publishes([
        __DIR__.'/resources/lang/id' => resource_path('resources/lang/id'),
    ]);
  }

  public function register()
  {
    //
  }

}
