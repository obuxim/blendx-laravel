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
        if(BlendxHelpers::isApiRoute($request->url())){
            $response = Response::json([
                'model' => $model,
                'action' => $action,
                'id' => $id
            ]);
            return $response;
        }else{
            return "HTML";
        }
    }
}
