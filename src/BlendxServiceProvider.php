<?php

namespace Duoneos\Blendx;

use Illuminate\Support\ServiceProvider;

class BlendxServiceProvider extends ServiceProvider {

  function boot() {
    $this->loadRoutesFrom(__DIR__.'/routes.php');
  }

}
