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
            'contato'
         ]);
        
    }


    public function index() {
        $teste1 = 'fsaffs';
        $teste2 = 'nova string';
        $teste3 = 'terceira string';
        return view('site.teste', compact('teste1', 'teste2', 'teste3'));
    }
    
    public function categoria($id) {
        return "categoria pelo controller: {$id}";
    }
    
    public function contato() {
        return 'site de contato';
    }
}
