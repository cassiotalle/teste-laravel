<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    public function __construct(){
        //$this->middleware('auth')->only(['contato']);

        $this->middleware('auth')->except([
            'index',
            'contato',
            'comandos'
         ]);

    }


    public function index() {
        $var1 = 123;
        $teste1 = 'fsaffs';
        $teste2 = 'nova string';
        $teste3 = 'terceira string';
        return view('site.teste', compact('teste1', 'teste2', 'teste3'));
    }

    public function categoria($id) {
        return "categoria pelo controller: {$id}";
    }

    public function contato() {
        $title = 'Página de contato';
        $var1 = "Valor da string";
        $alert = '<script> alert("aletar"); </script>';
        return view('site.contato', ['var1' => $var1, 'title' => $title, 'alert' => $alert]);
    }

    public function comandos()
    {
      $var1 = 123;
      $array1= array('Jan', 'Fev', 'Mar', 'Abr');
      $array2 = [];
      return view('site.comandos', compact('var1', 'array1', 'array2'));
    }
}
