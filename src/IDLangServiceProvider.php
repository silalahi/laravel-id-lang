<?php namespace Silalahi\Laravel;

use Illuminate\Support\ServiceProvider;


class IDLangServiceProvider extends ServiceProvider
{

  /**
   * Publish language resource to resource path
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
        __DIR__.'/resources/lang/id' => resource_path('lang/id'),
    ]);
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

}
