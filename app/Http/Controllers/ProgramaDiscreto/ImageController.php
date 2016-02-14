<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 13/02/16
 * Time: 23:34
 */

namespace App\Http\Controllers\ProgramaDiscreto;


use App\Http\Controllers\Controller;

class ImageController extends Controller
{

    public function show($resolution, $file) {
        $res = explode('x',$resolution);
//        dd(storage_path('app/img/').$file);
        $img = \Image::make(storage_path('app/img/').$file)
            ->fit($res[0], $res[1]);
//            ->resize(700, 300);

        return $img->response('jpg');
    }
}