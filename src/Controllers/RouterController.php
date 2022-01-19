<?php

namespace Duoneos\Blendx\Controllers;

use App\Http\Controllers\Controller;
use Duoneos\Blendx\Helpers\BlendxHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

class RouterController extends Controller
{
    public function route(Request $request, $model, $action = 'index', $id = 0) {
        $api = BlendxHelpers::isApiRoute($request->url());
        $modelClass = BlendxHelpers::routeModelToModel($model);
        if($api){
            if(!$modelClass){
                return response()->json(['message' => 'Not Found!'], 404);
            }
            $response = Response::json([
                'model' => $model,
                'action' => $action,
                'id' => $id
            ]);
            return $response;
        }else{
            if(!$modelClass){
                return response('', 404);
            }
            return "HTML";
        }
    }
}
