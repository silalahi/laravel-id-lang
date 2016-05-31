<?php namespace Silalahi\Laravel;

use Illuminate\Support\ServiceProvider;


class IDLangServiceProvider extends ServiceProvider
{

  public function boot()
  {
    $this->publishes([
        __DIR__.'/resource/lang/id' => resource_path('resource/lang/id'),
    ]);
  }

}
