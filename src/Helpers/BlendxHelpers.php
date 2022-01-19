<?php

namespace Duoneos\Blendx\Helpers;

class BlendxHelpers {
    public static function isApiRoute($route){
        $exploded = explode('/',$route);
        return $exploded[3] == "api" ? true : false;
    }
}
