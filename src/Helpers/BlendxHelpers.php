<?php

namespace Duoneos\Blendx\Helpers;

use stdClass;

class BlendxHelpers {
    public static function isApiRoute($route){
        $exploded = explode('/',$route);
        return $exploded[3] == "api" ? true : false;
    }

    public static function routeModelToModel($model){
        $modelName = str_replace(' ', '', ucfirst(str_replace('_', ' ', $model)));
        $model_class =   "App\\Models\\".$modelName;
        if(class_exists($model_class)){
            return app($model_class);
        }else{
            return false;
        }
    }
}
