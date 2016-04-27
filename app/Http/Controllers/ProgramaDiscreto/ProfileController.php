<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 14/02/16
 * Time: 00:27
 */

namespace App\Http\Controllers\ProgramaDiscreto;


use App\Http\Controllers\Controller;
use App\Repositories\ModeloRepository;

class ProfileController extends Controller
{

    public function show($modelo) {
        return view('programa-discreto.view-profile')
            ->with([
                'data' => (new ModeloRepository)->findModelo($modelo),
            ]);
    }
    public function home() {
        return view('programa-discreto.view-home')
            ->with([
                'data' => (new ModeloRepository)->allModelos(),
            ]);
    }
}