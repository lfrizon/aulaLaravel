<?php

namespace App\Http\Controllers;


use App\Endereco;
use App\Http\Controllers\Controller;

class EnderecosController extends Controller
{
    /**
     * Show the addrres for the given id.
     *

     */
    public function show($id)
    {
        $enderecos = Endereco::where('cd_endereco', '=', $id)->take(1)->get();

foreach ($enderecos as $endereco)
{
    var_dump($endereco->en_logradouro);
}
  
    }
}